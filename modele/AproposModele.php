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

   static function updateApropos($titre,$contenu){
    $connexion = new PDOperso();
    $requete = $connexion->prepare('UPDATE apropos SET titre_perso = ?, contenu_perso = ?');
    $requete->execute([$titre,$contenu]);
   }

}
