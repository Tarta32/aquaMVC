<?php

namespace modele;

use PDOperso;

class EpingleModele extends BaseModele
{   
    static function FindEpingleByIdJoinEpingleDepartement($id){

        $connexion = new PDOperso();
        $requete = $connexion->prepare('SELECT * FROM epingle JOIN departement_epingle ON id = id_epingle WHERE id_departement = ?');
        $requete->execute([$id]);
        return $requete->fetchAll();
    }
}
