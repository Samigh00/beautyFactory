<?php
include('../controller/productController.php');
$productController=new productController();

$id_product=$_POST["id_product"];
$productController->deleteProduct($id_product,$productController->conn);
header('Location: ../view/productsList.php');
?>