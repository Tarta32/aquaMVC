<?php

namespace modele;

use PDOperso;

class AdminModele
{

    static function connexion($login)
    {

        $connexion = new PDOperso();

        $requete = $connexion->prepare('SELECT * FROM admin WHERE login = ?');
        $requete->execute([$login]);

        return $requete->fetch();
    }

    static function findAllFromDepartement()
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare('SELECT * from departement');

        $requete->execute();

        return $requete->fetchAll();
    }

    static function findDepartementByNom($departement_nom)
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare('SELECT * from departement WHERE departement_nom = ?');

        $requete->execute(
            [
                $departement_nom
            ]
        );

        return $requete->fetch();
    }

    static function findImageDepartementNom($departement_nom)
    {

        $connexion = new PDOperso();

        $query = "SELECT departement_nom, nom_image, image.id as image_id, id_departement FROM image JOIN departement ON departement.id = image.id_departement WHERE departement_nom = ?";
        $requete = $connexion->prepare($query);

        $requete->execute([$departement_nom]);

        return $requete->fetchAll();
    }

    static function findImageByIdNull()
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare("SELECT *  FROM image WHERE id_departement IS NULL");
        $requete->execute();
        return $requete->fetchAll();
    }

    static function accueilInfo()
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare("SELECT *  FROM accueil ");
        $requete->execute();
        return $requete->fetchAll();
    }

    static function deletImageById($id)
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare("DELETE FROM image WHERE id = ?");
        $requete->execute([$id]);
    }

    static function countImageJoinDepartement($id)
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare("SELECT count(*) FROM departement JOIN image ON departement.id = image.id_departement WHERE departement.id = ?");
        $requete->execute([$id]);
        return $requete->fetch();
    }

    static function insertImage($filename, $departement)
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare("INSERT INTO image (nom_image,id_departement) VALUES (?,?) ");
        $requete->execute([$filename, $departement]);
    }

    static function updateVisite($slug)
    {
        $connexion = new PDOperso();

        $requete = $connexion->prepare("UPDATE departement SET visite = ? WHERE departement_slug = ?");

        $requete->execute(['1', $slug]);
    }
    static function updateVisite0($id)
    {
        $connexion = new PDOperso();

        $requete = $connexion->prepare("UPDATE departement SET visite = ? WHERE id = ?");

        $requete->execute(['0', $id]);
    }

    static function insertImageDepartementNull($filename)
    {

        $connexion = new PDOperso();
        $requete = $connexion->prepare("INSERT INTO image (nom_image,id_departement) VALUES (?,NULL) ");

        $requete->execute([$filename]);
    }

    static function updateTitreContenu($titre, $contenu)
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare("UPDATE accueil SET titre = ?, contenu = ?");
        $requete->execute([$titre, $contenu]);
    }

    static function updateEquipement($titre, $contenu)
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare("UPDATE apropos SET titre_perso = ?, contenu_perso = ?");
        $requete->execute([$titre, $contenu]);
    }

    static function findAllMessage()
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare('SELECT * FROM message');
        $requete->execute();
        return $requete->fetchAll();
    }

    static function findVideo()
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare('SELECT media FROM accueil');
        $requete->execute();
        return $requete->fetch();
    }

    static function updateVideo($media)
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare('UPDATE accueil SET media = ?');
        $requete->execute([$media]);
    }

    static function updateImageAccueil($media)
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare('UPDATE apropos SET image_accueil = ?');
        $requete->execute([$media]);
    }

    static function updateImagePerso($media)
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare('UPDATE apropos SET image_perso = ?');
        $requete->execute([$media]);
    }
}
