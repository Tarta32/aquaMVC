<?php

namespace modele;

use PDOperso;

class DepartementModele extends BaseModele
{

    static function findDepartementById($id)
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare('SELECT * FROM departement WHERE id = ?');
        $requete->execute([$id]);
        return $requete->fetch();
    }

    static function findImageByDepartementId($id)
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare('SELECT * FROM image WHERE id_departement = ?');
        $requete->execute([$id]);
        return $requete->fetchAll();
    }

    static function FindDepartementVisite(){
        $connexion = new PDOperso();
        $requete = $connexion->prepare("SELECT * FROM departement WHERE visite = 1 ");
        $requete->execute();
        return $requete->fetchAll();
    }
}
