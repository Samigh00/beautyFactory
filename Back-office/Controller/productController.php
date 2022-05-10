<?php

class productController
{
    public $conn;
    public $conn1;
    function __construct()
    {
        include ('../config/connexion.php');

        $conf= new Connexion();
        $this->conn=$conf->cnx;

    }
    function __construct1(){
        include ('../config/connexion1.php');
        $conf1= new Connexion1();
        $this->conn1=$conf1->cnx;
    }
    function AddProduct($product,$con)
    {
        $product_name=$product->getProductName();
        $catg=$product->getCatg();
        $product_price = $product->getProductPrice();
        $qty=$product->getQty();
        $sql = "INSERT INTO product (Product_name ,product_price,qty,nom_catg) 
        VALUES ('$product_name','$product_price','$qty','$catg')";
        $con->exec($sql);
    }
    function deleteProduct($id_product,$con)
    {
       	$sql = "DELETE
	        FROM product 
			WHERE (id_product='$id_product')";
	$con->exec($sql);

    }

    function updateProduct($product,$con)
    {
        $id_product=$product->getIdProduct();
        $product_name=$product->getProductName();
        $product_price = $product->getProductPrice();
        $catg=$product->getCatg();
        $qty=$product->getQty();

        $sql = "UPDATE product SET product_name= '$product_name',product_price= '$product_price', qty= '$qty',nom_catg='$catg' WHERE (id_product= $id_product)";
        $con->exec($sql);
    }
    function showProduct($con)
    {
        $sql = "SELECT * FROM product";
        $reponse = $con->query($sql);
        return $reponse;
    }
    function getProductById($id_product,$con)
    {
        $sql = "SELECT * FROM product WHERE id_product = '$id_product'";
        $reponse = $con->query($sql);
        return $reponse;
    }

}
