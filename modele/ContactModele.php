<?php

namespace modele;

use PDOperso;

class ContactModele extends BaseModele
{
   
    static function InsertMessage($nom,$prenom,$mail,$phone,$contenu) {
        $connexion = new PDOperso();
        $requete = $connexion->prepare('INSERT INTO message (nom,prenom,mail,phone,contenu) VALUES(?,?,?,?,?)');
        $requete->execute([$nom,$prenom,$mail,$phone,$contenu]);
    }

}