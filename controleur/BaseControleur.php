<?php

namespace controleur;

class BaseControleur
{


    function afficherVue($parametres = [], $vue)
    {
        // $listeArticle = $parametres['listeArticle'];
        extract($parametres);

        // je recupere la classe dans laquelle je me trouve, je decoupe la chaine en ne recuperant que les caractere entre 11 (debut) et -10 (fin) et je le met en minuscule
        $dossier = strtolower(substr(get_class($this), 11, -10));

        include("vue/$vue.php");
    }
}
