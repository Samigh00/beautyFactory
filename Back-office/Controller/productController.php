<?php

class productController
{
    public $conn;
    function __construct()
    {
        include ('../config/connexion.php');
        $conf= new Connexion();
        $this->conn=$conf->cnx;
    }
    function AddProduct($product,$con)
    {
        $product_name=$product->getProductName();
        $product_price = $product->getProductPrice();
        $qty=$product->getQty();
        $sql = "INSERT INTO product (Product_name ,product_price,qty) 
        VALUES ('$product_name','$product_price','$qty')";
        echo $sql;
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
        $qty=$product->getQty();

        $sql = "UPDATE product SET product_name= '$product_name',product_price= '$product_price', qty= '$qty' WHERE (id_product= $id_product)";
        echo $sql;
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
