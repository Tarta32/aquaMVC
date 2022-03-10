<?php 

namespace controleur;

use Conf;
use modele\DepartementModele;

class DepartementControleur extends BaseControleur{

    public function visite($parametre) {
        $departement = DepartementModele::findDepartementById($parametre);
        $images = DepartementModele::findImageByDepartementId($parametre);

        $parametres = compact('departement', 'images');

        $this->afficherVue($parametres, 'departement');
    }

    public function onload(){
        $departementVisite = DepartementModele::FindDepartementVisite();

        $parametres = compact('departementVisite');

        $this->afficherVue($parametres, 'departementAccueil');
    }

}



?>