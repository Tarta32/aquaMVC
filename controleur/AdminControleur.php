<?php

namespace controleur;

use modele\AdminModele;
use Conf;
use modele\AproposModele;
use modele\DepartementModele;
use modele\ImageModele;

class AdminControleur extends BaseControleur
{

    function onload()
    {

        header('Location: ' . Conf::dashboard);
    }



    function dashboard($nomDepartement)
    {

        if (isset($_POST["departement"]) && $_POST["departement"]) {
            //$nomDepartement = $_POST["departement"];
            header("Location: " . Conf::dashboard . "/" . $_POST["departement"]);
        }

        if (isset($_SESSION['admin'])) {

            $departement = AdminModele::findAllFromDepartement();

            if (isset($nomDepartement)) {

                $selectDepartement = AdminModele::findDepartementByNom($nomDepartement);

                $image = AdminModele::findImageDepartementNom($nomDepartement);

                $parametres = compact('departement', 'selectDepartement', 'image');

                $this->afficherVue($parametres, 'dashboard');
            } else {
                $parametres = compact('departement');

                $this->afficherVue($parametres, 'dashboard');
            }
        } else {

            header('Location: ' . Conf::connexion);
        }
    }

    function message()
    {

        if (isset($_SESSION['admin'])) {
            $messages = AdminModele::findAllMessage();

            $parametres = compact('messages');

            $this->afficherVue($parametres,'messages');
        }
    }



    function dashboardAccueil()
    {

        if (isset($_SESSION['admin'])) {
            $requeteImage = AdminModele::findImageByIdNull();
            $accueil = AdminModele::accueilInfo();



            $parametre = compact('requeteImage', "accueil");

            $this->afficherVue($parametre, 'dashboardAccueil');
        } else {

            header('Location: ' . Conf::connexion);
        }
    }

    function dashboardApropos(){
        if(isset($_SESSION['admin'])){
            
            $presentation = AproposModele::apropos();

            $parametres = compact('presentation');

            $this->afficherVue($parametres,"dashboardApropos");
        }
    }

    function connexion()
    {

        if (!isset($_SESSION['admin'])) {

            $mdperror = false;

            if (isset($_POST['valider'])) {

                $utilisateur = AdminModele::connexion(htmlentities($_POST['login']));

                if (password_verify(htmlentities($_POST['password']), $utilisateur['password'])) {

                    $_SESSION['admin'] = $_POST['login'];
                    header('Location: ' . Conf::dashboard);
                } else {

                    $mdperror = true;
                }
            }

            $parametres = compact('mdperror');

            $this->afficherVue($parametres, 'connexion');
        } else {

            header("Location: " . Conf::dashboard);
        }
    }

    function deconnexion()
    {

        session_destroy();

        header('Location: ' . Conf::index);
    }

    function supprimer($parametre)
    {

        if (isset($_SESSION['admin'])) {

            $id = explode('-', $parametre);

            $image = ImageModele::findById($id[0]);

            $monImage = './assets/image/' . $image['nom_image'];
            unlink($monImage);

            AdminModele::deletImageById($id[0]);

            $imageCount = AdminModele::countImageJoinDepartement($id[1]);

            if ($imageCount[0][0] == 0) {
                AdminModele::updateVisite0($id[1]);
            }

            $departement = DepartementModele::findById($id[1]);


            header("Location: ".Conf::index."admin/dashboard/" . $departement['departement_nom']);
        } else {
            header('Location: ' . Conf::index);
        }
    }
    function supprimerAccueil($parametre)
    {

        if (isset($_SESSION['admin'])) {
            $parametre = str_replace("/departement=", "/", $_GET['chemin']);

            $parametre = explode('/', $parametre);

            $image = ImageModele::findById($parametre[2]);

            AdminModele::deletImageById($parametre[2]);

            $monImage = './assets/image/' . $image['nom_image'];
            unlink($monImage);

            header("Location: " . Conf::dashboardAccueil);
        } else {
            header('Location: ' . Conf::index);
        }
    }

    function insert()
    {

        $chiffre = 0;

        if (isset($_POST['valider2'])) {


            $countfiles = count($_FILES['selectImage']['name']);
            for ($i = 0; $i < $countfiles; $i++) {

                $filename = $_FILES['selectImage']['name'][$i];

                $file_extension = pathinfo($filename, PATHINFO_EXTENSION);

                $file_extension = strtolower($file_extension);

                $slug = explode('-', $_POST['departement_slug']);

                for ($j = 0; count($slug) < $j; $j++) {

                    $slug .= $slug[$j];
                }

                $slug = implode('', $slug);

                $filename = $slug . time() . $chiffre . '.' . $file_extension;

                $chiffre++;

                // Valid image extension
                $valid_extension = array("png", "jpeg", "jpg");

                if (in_array($file_extension, $valid_extension)) {

                    // Upload file
                    if (move_uploaded_file(
                        $_FILES['selectImage']['tmp_name'][$i],
                        './assets/image/' . $filename
                    )) {

                        // Execute query
                        AdminModele::insertImage($filename, $_POST['departement']);


                        $_SESSION['message_success'] = "Telechargement réussi";

                        AdminModele::updateVisite($_POST['departement_slug']);



                        $departement = AdminModele::findDepartementByNom($_POST['departement_slug']);

                        header("Location: " . Conf::dashboard . "/" . $departement['departement_nom']);
                    } else {
                        $_SESSION['message_error'] = "Aucun fichier telechargé";
                        header('Location: ' . Conf::dashboard);
                    }
                } else {
                    $_SESSION['message_error'] = "Aucun fichier telechargé";
                    header('Location: ' . Conf::dashboard);
                }
            }
        } else if (isset($_POST['validerAccueil'])) {

            $countfiles = count($_FILES['selectImage']['name']);
            for ($i = 0; $i < $countfiles; $i++) {



                $filename = $_FILES['selectImage']['name'][$i];

                $file_extension = pathinfo($filename, PATHINFO_EXTENSION);

                $file_extension = strtolower($file_extension);


                $filename = "accueil" . time() . $chiffre . '.' . $file_extension;

                $chiffre++;
                $valid_extension = array("png", "jpeg", "jpg");

                if (in_array($file_extension, $valid_extension)) {

                    // Upload file
                    if (move_uploaded_file(
                        $_FILES['selectImage']['tmp_name'][$i],
                        './assets/image/' . $filename
                    )) {
                        $_SESSION['message_success'] = "Telechargement réussi";
                        // Execute query
                        AdminModele::insertImageDepartementNull($filename);

                        header("Location: " . Conf::dashboardAccueil);
                    } else {
                        $_SESSION['message_error'] = "Aucun fichier telechargé";
                        header('Location: ' . Conf::dashboardAccueil);
                    }
                } else {
                    $_SESSION['message_error'] = "Erreur d'extension de fichier";
                    header('Location: ' . Conf::dashboardAccueil);
                }
            }
        } 
        
    }

    function update()
    {
        if (isset($_SESSION['admin'])) {

            if (isset($_POST['updateAccueil']) || isset($_POST['updatePresentation'])) {

                AdminModele::updateTitreContenu($_POST['titre'], $_POST['contenu']);
                $_SESSION['message_success'] = "Modifications enregistrées";

                if (isset($_POST['updateAccueil'])) {
                    header('Location: ' . Conf::dashboardAccueil);
                } else {
                    header('Location: ' . Conf::dashboardApropos);
                }


            } else if (isset($_POST['updateVideo'])){

                $video = AdminModele::findVideo();
                unlink("./assets/videoAccueil/" . $video['media']);
                


        
                $filename = $_FILES['selectVideo']['name'];

                $file_extension = pathinfo($filename, PATHINFO_EXTENSION);

                $file_extension = strtolower($file_extension);


                $filename = "accueilVideo" . time() . '.' . $file_extension;

                $valid_extension = array("mp4", "m4v", "mov","qt","avi","flv","mpeg","mkv");

                if (in_array($file_extension, $valid_extension)) {

                    // Upload file
                    if (move_uploaded_file(
                        $_FILES['selectVideo']['tmp_name'],
                        './assets/videoAccueil/' . $filename
                    )) {
                        $_SESSION['message_success'] = "Telechargement réussi";
                        // Execute query
                        AdminModele::updateVideo($filename);

                        header("Location: " . Conf::dashboardAccueil);
                    } else {
                        $_SESSION['message_error'] = "Aucun fichier telechargé";
                        header('Location: ' . Conf::dashboardAccueil);
                    }
                } else {
                    $_SESSION['message_error'] = "Erreur d'extension de fichier";
                    header('Location: ' . Conf::dashboardAccueil);
                }
            } elseif (isset($_POST['updateImagePresentation'])){


                $image = AdminModele::findImageAccueil();
                unlink("./assets/image/imageAccueil" . $image['media']);
                
                $filename = $_FILES['selectImagePresentation']['name'];

                $file_extension = pathinfo($filename, PATHINFO_EXTENSION);

                $file_extension = strtolower($file_extension);


                $filename = "accueilImagePresentation" . time() . '.' . $file_extension;

                $valid_extension = array("png", "jpeg", "jpg");

                if (in_array($file_extension, $valid_extension)) {

                    // Upload file
                    if (move_uploaded_file(
                        $_FILES['selectImagePresentation']['tmp_name'],
                        './assets/image/imageAccueil' . $filename
                    )) {
                        $_SESSION['message_success'] = "Telechargement réussi";
                        // Execute query
                        AdminModele::updateImageAccueil($filename);

                        header("Location: " . Conf::dashboardAccueil);
                    } else {
                        $_SESSION['message_error'] = "Aucun fichier telechargé";
                        header('Location: ' . Conf::dashboardAccueil);
                    }
                } else {
                    $_SESSION['message_error'] = "Erreur d'extension de fichier";
                    header('Location: ' . Conf::dashboardAccueil);
                }
            } elseif (isset($_POST['updateImageEquipement'])){


                $imagePerso = AdminModele::findImagePerso();
                unlink("./assets/image/imageAccueil" . $imagePerso['media']);
                
                $filename = $_FILES['selectImageEquipement']['name'];

                $file_extension = pathinfo($filename, PATHINFO_EXTENSION);

                $file_extension = strtolower($file_extension);


                $filename = "ImageEquipement" . time() . '.' . $file_extension;

                $valid_extension = array("png", "jpeg", "jpg");

                if (in_array($file_extension, $valid_extension)) {

                    // Upload file
                    if (move_uploaded_file(
                        $_FILES['selectImageEquipement']['tmp_name'],
                        './assets/image/imageAccueil' . $filename
                    )) {
                        $_SESSION['message_success'] = "Telechargement réussi";
                        // Execute query
                        AdminModele::updateImageAccueil($filename);

                        header("Location: " . Conf::dashboardAccueil);
                    } else {
                        $_SESSION['message_error'] = "Aucun fichier telechargé";
                        header('Location: ' . Conf::dashboardAccueil);
                    }
                } else {
                    $_SESSION['message_error'] = "Erreur d'extension de fichier";
                    header('Location: ' . Conf::dashboardAccueil);
                }
            }

            if(isset($_POST['updateApropos'])){
                AproposModele::updateApropos($_POST['titre_perso'],$_POST['contenu_perso']);
                $_SESSION['message_success'] = "Modifications enregistrées";
                header('Location: ' . Conf::dashboardApropos);
            }
        }
    }
}
