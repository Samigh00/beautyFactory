<?php

class categorieController
{

    public $conn1;
    function __construct()
    {
        include ('../config/connexion1.php');
        $conf1= new Connexion1();
        $this->conn1=$conf1->cnx;
    }

    function AddCategorie($categorie,$con)
    {
        $catg_name=$categorie->getNomCatg();
        $sql = "INSERT INTO categorie (nom_catg) 
        VALUES ('$catg_name')";
        $con->exec($sql);
    }
    function deleteCategorie($id_categ,$con)
    {
        $sql = "DELETE
	        FROM categorie 
			WHERE (id_categ='$id_categ')";
        $con->exec($sql);

    }

    function updateCategorie($categorie,$con)
    {
        $categorie_name=$categorie->getNomCatg();
        $id_categorie=$categorie->getIdCatg();
        var_dump($id_categorie);
        $sql = "UPDATE categorie SET nom_catg= '$categorie_name' WHERE (id_categ= $id_categorie)";
        $con->exec($sql);
    }
    function showCategorie($con1)
    {
        $sql = "SELECT * FROM categorie";
        $reponse = $con1->query($sql);
        return $reponse;
    }
    function getCategorieByName($id_categ,$con)
    {
        $sql = "SELECT * FROM categorie WHERE id_categ = '$id_categ'";
        $reponse = $con->query($sql);
        return $reponse;
    }
}
