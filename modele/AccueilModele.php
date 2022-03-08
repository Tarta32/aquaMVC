<?php

namespace modele;

use PDOperso;

class AccueilModele
{
    static function findAllFromDepartement()
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare('SELECT * from departement');

        $requete->execute();

        return $requete->fetchAll();
    }

    static function presentation()
    {

        $connexion = new PDOperso();

        $requete = $connexion->prepare('SELECT * FROM accueil');
        $requete->execute();

        return $requete->fetch();
    }

    static function imageAccueil() {

        $connexion = new PDOperso();

        $requete = $connexion->prepare('SELECT * from image WHERE id_departement IS NULL');
        $requete->execute();
        return $requete->fetchAll();
    }


}
