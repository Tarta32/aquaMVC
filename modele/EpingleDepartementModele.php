<?php

namespace modele;

use PDOperso;

class EpingleDepartementModele extends BaseModele
{
    static function findByIdJoinDepartement($id)
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare("SELECT * FROM `departement_epingle`
        JOIN epingle on epingle.id = departement_epingle.id_epingle
        WHERE id_departement = ? ");
        $requete->execute([$id]);
        return $requete->fetchAll();
    }

    static function insertIntoDepartementEpingleById($departementId, $epingleId){
        $connexion = new PDOperso();
        $requete = $connexion->prepare('INSERT INTO departement_epingle (id_departement, id_epingle) VALUES (?, ?)');
        $requete->execute([$departementId, $epingleId]);
    }

    static function finByIdDepartement($id){
        $connexion = new PDOperso();
        $requete = $connexion->prepare("SELECT * FROM departement_epingle WHERE id_departement = ?");
        $requete->execute([$id]);
        return $requete->fetchAll();
    }

    static function delet($id){
        $connexion = new PDOperso();
        $requete = $connexion->prepare('DELETE FROM departement_epingle WHERE id_departement = ?');
        $requete->execute([$id]);
    }
    
}