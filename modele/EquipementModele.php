<?php

namespace modele;

use PDOperso;

class EquipementModele extends BaseModele
{
    static function deletEquipementById($id)
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare('DELETE FROM equipement WHERE id = ?');
        $requete->execute([$id]);
    }

    static function updateImage($media, $id)
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare('UPDATE accueil SET image = ? WHERE id = ?');
        $requete->execute([$media, $id]);
    }

    static function updateEquipement($titre, $contenu,$id)
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare("UPDATE equipement SET nom = ?, description = ? WHERE id = ?");
        $requete->execute([$titre, $contenu, $id]);
    }

    static function insertEquipement($nom,$description,$image){
        $connexion = new PDOperso();
        $requete = $connexion->prepare("INSERT INTO equipement(nom,description,image) VALUES(?,?,?)");
        $requete->execute([$nom,$description,$image]);
    }

}
