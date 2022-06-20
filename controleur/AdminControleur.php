<?php

namespace controleur;

use modele\AdminModele;
use Conf;
use modele\AccueilModele;
use modele\DepartementModele;
use modele\EpingleDepartementModele;
use modele\EpingleModele;
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

        $departement = DepartementModele::findByNom($nomDepartement);

        if ($departement != NULL) {
            $epingle_departement = EpingleDepartementModele::finByIdDepartement($departement['id']);
        }


        $listeIdEpingleDepartement = [];


        if (isset($_POST["departement"]) && $_POST["departement"]) {
            //$nomDepartement = $_POST["departement"];
            header("Location: " . Conf::dashboard . "/" . $_POST["departement"]);
        }

        if (isset($_SESSION['admin'])) {

            $token = uniqid(rand(), true);
            $_SESSION['token'] = $token;
            $_SESSION['data_token'] = time();



            $departement = AdminModele::findAllFromDepartement();

            if (isset($nomDepartement)) {

                foreach ($epingle_departement as $epingleDepartement) {
                    array_push($listeIdEpingleDepartement, $epingleDepartement['id_epingle']);
                }

                $epingles = EpingleModele::findAll();

                $selectDepartement = AdminModele::findDepartementByNom($nomDepartement);

                $image = AdminModele::findImageDepartementNom($nomDepartement);

                $parametres = compact('departement', 'selectDepartement', 'image', 'epingles', 'listeIdEpingleDepartement');

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

            $token = uniqid(rand(), true);
            $_SESSION['token'] = $token;
            $_SESSION['data_token'] = time();


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

            $token = uniqid(rand(), true);
            $_SESSION['token'] = $token;
            $_SESSION['data_token'] = time();


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

            $token = uniqid(rand(), true);
            $_SESSION['token'] = $token;
            $_SESSION['data_token'] = time();


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
                    } else {
                        $_SESSION['error'] = 'Mauvais login/password';
                    }
                } else {

                    $_SESSION['error'] = 'Mauvais login/password';
                    $mdperror = true;
                }
            } elseif (isset($_POST['retour'])) {

                header("Location: " . Conf::index);
            } elseif (isset($_POST['oublie'])) {

                header("Location: " . Conf::mdpOublie);
            }

            $parametres = compact('mdperror');

            $this->afficherVue($parametres, 'connexion');
        } else {

            header("Location: " . Conf::dashboard);
        }
    }

    function mdpOublie()
    {

        if (!isset($_SESSION['admin'])) {

            if (isset($_POST['valider'])) {
                $utilisateur = AdminModele::resetmail($_POST['email']);

                if ($utilisateur) {

                    $code = rand(1000, 9999);

                    AdminModele::updateToken($code);

                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['time'] = time();


                    $message = 'Votre code de reinitialisation est : ' . $code;

                    mail($utilisateur['email'], 'Reset password', $message);

                    header("Location: " . Conf::token);
                } else {
                    $_SESSION['message'] = "E-mail non reconnu";
                }
            } else if (isset($_POST['retour'])) {
                header("Location: " . Conf::connexion);
            }
        } else {
            header("Location: " . Conf::dashboard);
        }

        $this->afficherVue([], 'mdpOublie');
    }

    function entrezToken()
    {


        $utilisateur = AdminModele::admin();

        if ($_SESSION['email'] == $utilisateur[0]['email']) {

            if (isset($_POST['valider'])) {

                if (($utilisateur[0]['token'] == $_POST['token']) && ($utilisateur[0]['token'] != NULL)) {

                    if ($_SESSION['time'] + 300 > time()) {

                        header("Location: " . Conf::resetPassword);

                        $_SESSION['tokenPassword'] = $utilisateur[0]['token'];
                        $_SESSION['time'] = time();
                    }
                }
            } else if (isset($_POST['retour'])) {
                header("Location: " . Conf::connexion);
            }
            $this->afficherVue([], 'entrezToken');
        } else {
            header("Location: " . Conf::connexion);
        }
    }


    function resetPassword()
    {
        $utilisateur = AdminModele::admin();

        if ($_SESSION['tokenPassword'] = $utilisateur[0]['token']) {
            if (isset($_POST['valider']) && ($_POST['password'] == $_POST['confirmPassword'])) {


                AdminModele::updatePassword(password_hash($_POST['password'], PASSWORD_BCRYPT));

                AdminModele::updateToken(NULL);

                $_SESSION['message'] = "Mot de passe modifier !";

                header("Location: " . Conf::connexion);
            }

            $this->afficherVue([], 'resetPassword');
        } else {

            header("Location: " . Conf::connexion);
        }
    }

    function modifierAdmin()
    {
        if (isset($_SESSION['admin'])) {
            $utilisateur = AdminModele::admin();
            if (isset($_POST['valider'])) {
                if (($_SESSION['token'] == $_POST['token']) && $_SESSION['data_token'] + 300 > time()) {
                    if (password_verify($_POST['oldPassword'], $utilisateur[0]['password'])) {
                        if ($_POST['password'] != NULL) {
                            if ($_POST['password'] == $_POST['confirmPassword']) {
                                if ($_POST['oldPassword'] == $_POST['password']) {
                                    $_SESSION['message'] = "Le nouveau mot de passe ne peut pas etre identique a l'ancien";
                                } else {
                                    AdminModele::updatePassword(password_hash($_POST['password'], PASSWORD_BCRYPT));
                                    header("Location: " . Conf::dashboard);
                                    $_SESSION['message'] = "Mot de passe modifié";
                                }
                            } else {
                                $_SESSION['message'] = "Entrez 2 mots de passe indentiques";
                            }
                        } else {
                            $_SESSION['message'] = "Veuillez remplir les champs concernés";
                        }
                    } else {
                        $_SESSION['message'] = "Erreur mot de passe";
                    }
                }
            } elseif (isset($_POST['retour'])) {
                header("Location: " . Conf::dashboard);
            }
        }

        $token = uniqid(rand(), true);
        $_SESSION['token'] = $token;
        $_SESSION['data_token'] = time();

        $parametres = compact('utilisateur');
        $this->afficherVue($parametres, 'modifierAdmin');
    }

    function deconnexion()
    {

        session_destroy();

        header('Location: ' . Conf::index);
    }

    function supprimer($parametre)
    {

        if (isset($_SESSION['admin'])) {
            if (isset($_POST['supprimer']) && (($_SESSION['token'] == $_POST['token']) && $_SESSION['data_token'] + 300 > time())) {

                $id = explode('-', $parametre);
                $image = ImageModele::findById($id[0]);

                $monImage = './assets/image/' . $image['nom_image'];
                unlink($monImage);

                AdminModele::deletImageById($id[0]);

                $imageCount = AdminModele::countImageJoinDepartement($id[1]);
                // je cherche l'index "count(*)" dans l'array créé par $imageCount
                if ($imageCount["count(*)"] == 0) {
                    AdminModele::updateVisite0($id[1]);
                }

                $departement = DepartementModele::findById($id[1]);


                header("Location: " . Conf::index . "admin/dashboard/" . $departement['departement_slug']);
            }
        } else {
            header('Location: ' . Conf::index);
        }
        $token = uniqid(rand(), true);
        $_SESSION['token'] = $token;
        $_SESSION['data_token'] = time();
    }

    function supprimerEquipement($id)
    {
        if (isset($_SESSION['admin'])) {
            if (isset($_POST['supprimer']) && (($_SESSION['token'] == $_POST['token']) && $_SESSION['data_token'] + 300 > time())) {

                $image = EquipementModele::findById($id);

                unlink('./assets/image/imageAccueil/' . $image['image']);

                EquipementModele::deletEquipementById($id);

                header('Location: ' . Conf::dashboardApropos);
            } else {
                header('Location: ' . Conf::index);
            }
            $token = uniqid(rand(), true);
            $_SESSION['token'] = $token;
            $_SESSION['data_token'] = time();
        }
    }

    function supprimerAccueil($parametre)
    {

        if (isset($_SESSION['admin'])) {

            if (isset($_POST['supprimer']) && (($_SESSION['token'] == $_POST['token']) && $_SESSION['data_token'] + 300 > time())) {

                $parametre = str_replace("/departement=", "/", $_GET['chemin']);

                $parametre = explode('/', $parametre);

                $image = ImageModele::findById($parametre[2]);

                AdminModele::deletImageById($parametre[2]);

                $monImage = './assets/image/' . $image['nom_image'];
                unlink($monImage);

                header("Location: " . Conf::dashboardAccueil);
            }
        } else {
            header('Location: ' . Conf::index);
        }

        $token = uniqid(rand(), true);
        $_SESSION['token'] = $token;
        $_SESSION['data_token'] = time();
    }

    function supprimerMessage()
    {
        if (isset($_SESSION['admin'])) {
            if (isset($_POST['supprimerMessages'])) {

                if (($_SESSION['token'] == $_POST['token']) && $_SESSION['data_token'] + 300 > time()) {


                    foreach ($_POST['deletSelect'] as $delet) {

                        AdminModele::SupprimerMessageById($delet);
                    }

                    header("Location: " . Conf::message);
                }
            }
        }
        $token = uniqid(rand(), true);
        $_SESSION['token'] = $token;
        $_SESSION['data_token'] = time();
    }

    function insert()
    {

        $chiffre = 0;
        if (isset($_SESSION['admin'])) {


            if (isset($_POST['valider2']) && (($_SESSION['token'] == $_POST['token']) && $_SESSION['data_token'] + 300 > time())) {

                if ($_POST['oldText'] != $_POST['descriptionDepartement']) {
                    $_SESSION['message_success'] = "Description modifiée avec succés";
                    DepartementModele::updateDescriptionById($_POST['descriptionDepartement'], $_POST['departement']);
                }
                EpingleDepartementModele::delet($_POST['departement']);

                if ($_POST['epingle'] != NULL) {
                    foreach ($_POST['epingle'] as $epingle) {
                        EpingleDepartementModele::insertIntoDepartementEpingleById($_POST['departement'], $epingle);
                    }
                }

                $departement = AdminModele::findDepartementByNom($_POST['departement_slug']);

                $countfiles = count($_FILES['selectImage']['name']);


                if (isset($_FILES['selectImage'])) {
                    for ($i = 0; $i < $countfiles; $i++) {

                        $filename = $_FILES['selectImage']['name'][$i];

                        $file_extension = pathinfo($filename, PATHINFO_EXTENSION);

                        $file_extension = strtolower($file_extension);

                        $slug = str_replace('-', '', $_POST['departement_slug']);

                        $filename = $slug . time() . $chiffre . '.' . $file_extension;

                        $chiffre++;

                        $valid_extension = array("png", "jpeg", "jpg");

                        if (in_array($file_extension, $valid_extension)) {

                            if (move_uploaded_file(
                                $_FILES['selectImage']['tmp_name'][$i],
                                './assets/image/' . $filename
                            )) {
                                AdminModele::insertImage($filename, $_POST['departement']);

                                $_SESSION['message_success'] .= " Telechargement réussi";

                                AdminModele::updateVisite($_POST['departement_slug']);

                                $departement = AdminModele::findDepartementByNom($_POST['departement_slug']);

                                header("Location: " . Conf::dashboard . "/" . $departement['departement_slug']);
                            } else {
                                $_SESSION['message_error'] = "Aucun fichier telechargé";
                                header("Location: " . Conf::dashboard . "/" . $departement['departement_slug']);
                            }
                        } else {
                            $_SESSION['message_error'] = "Extension de l'image non conforme";
                            header("Location: " . Conf::dashboard . "/" . $departement['departement_slug']);
                        }
                    }
                } else {

                    header("Location: " . Conf::dashboard . "/" . $departement['departement_slug']);
                }
            } else if (isset($_POST['validerAccueil']) && (($_SESSION['token'] == $_POST['token']) && $_SESSION['data_token'] + 300 > time())) {

                $countfiles = count($_FILES['selectImage']['name']);
                for ($i = 0; $i < $countfiles; $i++) {

                    $filename = $_FILES['selectImage']['name'][$i];

                    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);

                    $file_extension = strtolower($file_extension);

                    $filename = "accueil" . time() . $chiffre . '.' . $file_extension;

                    $chiffre++;

                    $valid_extension = array("png", "jpeg", "jpg");

                    if (in_array($file_extension, $valid_extension)) {

                        if (move_uploaded_file(
                            $_FILES['selectImage']['tmp_name'][$i],
                            './assets/image/' . $filename
                        )) {
                            $_SESSION['message_success'] = "Telechargement réussi";

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
            } else if (isset($_POST["ajouterEquipement"]) && (($_SESSION['token'] == $_POST['token']) && $_SESSION['data_token'] + 300 > time())) {

                $filename = $_FILES['selectImageEquipement']['name'];

                $file_extension = pathinfo($filename, PATHINFO_EXTENSION);

                $file_extension = strtolower($file_extension);

                $filename = "equipement" . time() . '.' . $file_extension;

                $valid_extension = array("png", "jpeg", "jpg");

                if (in_array($file_extension, $valid_extension)) {

                    if (move_uploaded_file(
                        $_FILES['selectImageEquipement']['tmp_name'],
                        './assets/image/imageAccueil/' . $filename
                    )) {
                        $_SESSION['message_success'] = "Telechargement réussi";

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
            $token = uniqid(rand(), true);
            $_SESSION['token'] = $token;
            $_SESSION['data_token'] = time();
        }
    }

    function update()
    {
        if (isset($_SESSION['admin'])) {

            if ((isset($_POST['updateAccueil']) && ($_SESSION['token'] == $_POST['token'])) || (isset($_POST['updatePresentation']) && (($_SESSION['token'] == $_POST['token']) && $_SESSION['data_token'] + 300 > time()))) {

                AdminModele::updateTitreContenu($_POST['titre'], $_POST['contenu']);

                $_SESSION['message_success'] = "Titre et contenu modifié avec succés";

                if (isset($_POST['updateAccueil'])) {
                    header('Location: ' . Conf::dashboardAccueil);
                } else {
                    header('Location: ' . Conf::dashboardApropos);
                }
            } else if (isset($_POST['updateEquipement']) && (($_SESSION['token'] == $_POST['token']) && $_SESSION['data_token'] + 300 > time())) {

                EquipementModele::updateEquipement($_POST['titre_equipement'], $_POST['contenu_equipement'], $_POST['id_equipement']);
                $_SESSION['message_success'] = "Titre et contenu de l'équipement modifié avec succés";

                header('Location: ' . Conf::dashboardApropos);
            } else if (isset($_POST['updateVideo']) && (($_SESSION['token'] == $_POST['token']) && $_SESSION['data_token'] + 300 > time())) {

                $videoLink = explode("=", $_POST['selectVideo']);
                if ($videoLink[0] == 'https://www.youtube.com/watch?v' || $videoLink[0] == 'www.youtube.com/watch?v' || $videoLink[0] == 'youtube.com/watch?v') {
                    AdminModele::updateVideo($videoLink[1]);
                    $_SESSION['message_success'] = "Vidéo modifiée avec succés";

                    header("Location: " . Conf::dashboardAccueil);
                } else {
                    $_SESSION['message_error'] = "Veuillez fournir un lien YouTube valide";
                    header("Location: " . Conf::dashboardAccueil);
                }
            } else if (isset($_POST['updateImagePresentation']) && (($_SESSION['token'] == $_POST['token']) && $_SESSION['data_token'] + 300 > time())) {

                $image = AccueilModele::findAll();

                unlink("./assets/image/imageAccueil/" . $image[0]['image']);

                $filename = $_FILES['selectImagePresentation']['name'];

                $file_extension = pathinfo($filename, PATHINFO_EXTENSION);

                $file_extension = strtolower($file_extension);

                $filename = "accueilImagePresentation" . time() . '.' . $file_extension;

                $valid_extension = array("png", "jpeg", "jpg");

                if (in_array($file_extension, $valid_extension)) {

                    if (move_uploaded_file(
                        $_FILES['selectImagePresentation']['tmp_name'],
                        './assets/image/imageAccueil/' . $filename
                    )) {
                        $_SESSION['message_success'] = "Image présentation modifiée avec succés";

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
            } else if (isset($_POST['updateImageEquipement']) && (($_SESSION['token'] == $_POST['token']) && $_SESSION['data_token'] + 300 > time())) {

                $imagePerso = EquipementModele::findById($_POST['id_equipement']);

                unlink("./assets/image/imageAccueil/" . $imagePerso['image']);

                $filename = $_FILES['selectImageEquipement']['name'];

                $file_extension = pathinfo($filename, PATHINFO_EXTENSION);

                $file_extension = strtolower($file_extension);


                $filename = "ImageEquipement" . time() . '.' . $file_extension;

                $valid_extension = array("png", "jpeg", "jpg");

                if (in_array($file_extension, $valid_extension)) {

                    if (move_uploaded_file(
                        $_FILES['selectImageEquipement']['tmp_name'],
                        './assets/image/imageAccueil/' . $filename
                    )) {
                        $_SESSION['message_success'] = "Image equipement modifiée avec succés";

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
            $token = uniqid(rand(), true);
            $_SESSION['token'] = $token;
            $_SESSION['data_token'] = time();
        }
    }
}
