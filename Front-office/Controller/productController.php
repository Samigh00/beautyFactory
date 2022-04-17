<?php
include_once '../model/Product.php';
include "../config/Connexion.php";
class productController
{
    public $conn;
    function __construct()
    {
        include_once ('../config/connexion.php');
        $conf= new Connexion();
        $this->conn=$conf->cnx;
    }

    function showProduct($con)
    {
        $sql = "SELECT * FROM product";
        $reponse = $con->query($sql);
        return $reponse;
    }

}
