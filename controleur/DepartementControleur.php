<?php 

namespace controleur;

use Conf;
use modele\DepartementModele;
use modele\EpingleDepartementModele;
use modele\EpingleModele;

class DepartementControleur extends BaseControleur{

    public function visite($parametre) {

        $epingles = EpingleModele::FindEpingleByIdJoinEpingleDepartement($parametre);

        $departement = DepartementModele::findDepartementById($parametre);
        
        $images = DepartementModele::findImageByDepartementId($parametre);

        $parametres = compact('departement', 'images','epingles');

        $this->afficherVue($parametres, 'departement');
    }

    public function onload(){
        $departementVisite = DepartementModele::FindDepartementVisite();

        $parametres = compact('departementVisite');

        $this->afficherVue($parametres, 'departementAccueil');
    }

}



?>