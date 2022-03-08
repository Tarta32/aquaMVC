<?php

namespace modele;

use PDOperso;

class BaseModele
{

    public static function  deleteById($id)
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare('DELETE FROM ' . self::getNomTable() . '  WHERE id = ?');


        return
            $requete->execute([$id]);
    }

    public static function findById($id){

        $connexion = new PDOperso();
        $requete = $connexion->prepare('SELECT * FROM '. self::getNomTable().' WHERE id = ?');
        $requete->execute([$id]);

        return $requete->fetch();
    }

    public static function  findAll()
    {
        $connexion = new PDOperso();
        $requete = $connexion->prepare('SELECT * FROM '.self::getNomTable());
        $requete->execute();

        return
            $requete->fetchAll();
    }

    public static function getNomTable()
    {
        return strtolower(preg_replace('/([A-Z])/' ,'_$0',lcfirst(substr(get_called_class(), 7, -6))));
    }
}

