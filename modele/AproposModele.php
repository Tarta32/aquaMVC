<?php

namespace modele;

use PDOperso;

class AproposModele extends BaseModele
{
   static function apropos(){
       $connexion = new PDOperso();
       $requete = $connexion->prepare('SELECT * FROM accueil JOIN apropos');
       $requete->execute();
       return $requete->fetchAll();       
   }

}
