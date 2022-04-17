<?php
include('../controller/productController.php');
include ('../model/Product.php');

$productController=new productController();

if (isset($_POST["id_product"]))
{
    $id_product = $_POST['id_product'];
}

$product_name=$_POST['product_name'];
$product_price=$_POST['product_price'];
$qty=$_POST['qty'];


$product=new product($product_name,$product_price,$qty);
$product->setIdProduct($id_product);


$productController->updateProduct($product,$productController->conn);
header('Location: ../view/productsList.php');

?>


