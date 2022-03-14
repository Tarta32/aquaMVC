<?php 

namespace controleur;

use Conf;
use modele\AccueilModele;
use modele\AporposModele;
use modele\AproposModele;

class AproposControleur extends BaseControleur{

    public function onload() {

        $presentation = AproposModele::apropos();


        $parametres = compact('presentation');

        $this->afficherVue($parametres,'apropos');

    }

}



?>