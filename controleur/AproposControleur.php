<?php 

namespace controleur;

use modele\AccueilModele;
use modele\EquipementModele;

class AproposControleur extends BaseControleur{

    public function onload() {

        $accueil = AccueilModele::findAll();
        
        $equipement = EquipementModele::findAll();

        $parametres = compact('accueil','equipement');


        $this->afficherVue($parametres,'apropos');

    }

}

?>