<?php 

namespace controleur;

use Conf;
use modele\AccueilModele;

class AccueilControleur extends BaseControleur{

    public function onload() {

        $departement = AccueilModele::findAllFromDepartement();
        $accueil = AccueilModele::presentation();
        $images = AccueilModele::imageAccueil();

        $parametres = compact('departement', 'accueil', 'images');

        $this->afficherVue($parametres,'accueil');

    }

}



?>