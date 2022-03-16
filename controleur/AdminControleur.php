<?php

namespace controleur;

use modele\AdminModele;
use Conf;
use modele\AccueilModele;
use modele\AproposModele;
use modele\DepartementModele;
use modele\EquipementModele;
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

            $this->afficherVue($parametres, 'messages');
        } else {
            header('Location: ' . Conf::connexion);
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

    function dashboardApropos()
    {

        if (isset($_SESSION['admin'])) {

            $accueil = AccueilModele::findAll();

            $equipement = EquipementModele::findAll();

            $parametres = compact('accueil', 'equipement');

            $this->afficherVue($parametres, "dashboardApropos");
        } else {

            header('Location: ' . Conf::connexion);
        }
    }

    function connexion()
    {

        if (!isset($_SESSION['admin'])) {

            $mdperror = false;

            if (isset($_POST['valider'])) {

                $utilisateur = AdminModele::connexion($_POST['login']);
                if ($utilisateur != FALSE) {
                    if (password_verify($_POST['password'], $utilisateur['password'])) {

                        $_SESSION['admin'] = $_POST['login'];
                        header('Location: ' . Conf::dashboard);
                    }
                } else {

                    $mdperror = true;
                    $_SESSION['error'] = 'Mauvais login/password';
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


            header("Location: " . Conf::index . "admin/dashboard/" . $departement['departement_nom']);
        } else {
            header('Location: ' . Conf::index);
        }
    }

    function supprimerEquipement($id)
    {
        if (isset($_SESSION['admin'])) {
            $image = EquipementModele::findById($id);

            unlink('./assets/image/imageAccueil/' . $image['image']);

            EquipementModele::deletEquipementById($id);

            header('Location: ' . Conf::dashboardApropos);
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
        } else if (isset($_POST["ajouterEquipement"])) {


            $filename = $_FILES['selectImageEquipement']['name'];

            $file_extension = pathinfo($filename, PATHINFO_EXTENSION);

            $file_extension = strtolower($file_extension);

            $filename = "equipement" . time() . '.' . $file_extension;

            $valid_extension = array("png", "jpeg", "jpg");

            if (in_array($file_extension, $valid_extension)) {


                // Upload file
                if (move_uploaded_file(
                    $_FILES['selectImageEquipement']['tmp_name'],
                    './assets/image/imageAccueil/' . $filename
                )) {
                    $_SESSION['message_success'] = "Telechargement réussi";
                    // Execute query
                    EquipementModele::insertEquipement($_POST['titre'], $_POST['contenu'], $filename);

                    header("Location: " . Conf::dashboardApropos);
                } else {
                    $_SESSION['message_error'] = "Aucun fichier telechargé";
                    header('Location: ' . Conf::dashboardApropos);
                }
            } else {
                $_SESSION['message_error'] = "Erreur d'extension de fichier";
                header('Location: ' . Conf::dashboardApropos);
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
            } else if (isset($_POST['updateEquipement'])) {

                EquipementModele::updateEquipement($_POST['titre_equipement'], $_POST['contenu_equipement'], $_POST['id_equipement']);
                $_SESSION['message_success'] = "Modifications enregistrées";

                header('Location: ' . Conf::dashboardApropos);
            } else if (isset($_POST['updateVideo'])) {
                

                $videoLink = explode("=",$_POST['selectVideo']);
                
                AdminModele::updateVideo($videoLink[1]);

            } else if (isset($_POST['updateImagePresentation'])) {


                $image = AccueilModele::findAll();

                unlink("./assets/image/imageAccueil/" . $image[0]['image']);

                $filename = $_FILES['selectImagePresentation']['name'];

                $file_extension = pathinfo($filename, PATHINFO_EXTENSION);

                $file_extension = strtolower($file_extension);


                $filename = "accueilImagePresentation" . time() . '.' . $file_extension;

                $valid_extension = array("png", "jpeg", "jpg");

                if (in_array($file_extension, $valid_extension)) {

                    // Upload file
                    if (move_uploaded_file(
                        $_FILES['selectImagePresentation']['tmp_name'],
                        './assets/image/imageAccueil/' . $filename
                    )) {
                        $_SESSION['message_success'] = "Telechargement réussi";
                        // Execute query
                        AccueilModele::updateImage($filename);

                        header("Location: " . Conf::dashboardApropos);
                    } else {
                        $_SESSION['message_error'] = "Aucun fichier telechargé";
                        header("Location: " . Conf::dashboardApropos);
                    }
                } else {
                    $_SESSION['message_error'] = "Erreur d'extension de fichier";
                    header("Location: " . Conf::dashboardApropos);
                }
            } elseif (isset($_POST['updateImageEquipement'])) {


                $imagePerso = AproposModele::findAll();
                unlink("./assets/image/imageAccueil/" . $imagePerso[0]['image_perso']);

                $filename = $_FILES['selectImageEquipement']['name'];

                $file_extension = pathinfo($filename, PATHINFO_EXTENSION);

                $file_extension = strtolower($file_extension);


                $filename = "ImageEquipement" . time() . '.' . $file_extension;

                $valid_extension = array("png", "jpeg", "jpg");

                if (in_array($file_extension, $valid_extension)) {

                    // Upload file
                    if (move_uploaded_file(
                        $_FILES['selectImageEquipement']['tmp_name'],
                        './assets/image/imageAccueil/' . $filename
                    )) {
                        $_SESSION['message_success'] = "Telechargement réussi";
                        // Execute query
                        EquipementModele::updateImage($filename, $_POST['id_equipement']);

                        header("Location: " . Conf::dashboardApropos);
                    } else {
                        $_SESSION['message_error'] = "Aucun fichier telechargé";
                        header("Location: " . Conf::dashboardApropos);
                    }
                } else {
                    $_SESSION['message_error'] = "Erreur d'extension de fichier";
                    header("Location: " . Conf::dashboardApropos);
                }
            }
        }
    }
}
