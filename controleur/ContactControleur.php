<?php

namespace controleur;

use Conf;
use modele\ContactModele;

class ContactControleur extends BaseControleur
{

    public function onload()
    {


        $message = NULL;

        if (isset($_POST['valider'])) {

            // filtre anti-bot
            if ($_POST['remarque'] != "") {
                die();
            }

            // si le champs "phone" est NULL
            if ($_POST['phone'] == "" || $_POST['phone'] == NULL) {
                $message = ContactModele::InsertMessage($_POST['nom'], $_POST['prenom'], $_POST['email'], NULL, $_POST['message']);

                mail("test@gmail.com", $_POST['nom'] . " " . $_POST['prenom'], $_POST['message'], "From: " . $_POST['email']);

                header("Location :" . Conf::contact);
            } // si le champs "phone" est rempli
            else {
                $message = ContactModele::InsertMessage($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['phone'], $_POST['message']);

                mail("test@gmail.com", $_POST['nom'] . " " . $_POST['prenom'] . " - Tel :" . $_POST['phone'], $_POST['message'], "From: " . $_POST['email']);

                header("Location :" . Conf::contact);
            }
        }

        $parametres = compact('message');

        $this->afficherVue($parametres, 'contact');
    }
}
