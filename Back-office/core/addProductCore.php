<?php
include('../controller/productController.php');
include('../model/Product.php');
$productController = new productController();
if (isset($_POST ['submit'])) {
    $name = $_POST['Product_name'];
    $qty = $_POST['qty'];
    $price = $_POST['product_price'];

    if (empty($name) || empty($qty) || empty($price)) {
        header("location: ../view/AddProduct.php?product=empty");
        exit();
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        header("location: ../view/AddProduct.php?product=char");
        exit();
    } elseif (!preg_match("/^[0-9]*$/", $price)) {
        header("location: ../view/AddProduct.php?product=price");
        exit();
    } elseif (!preg_match("/^[0-9]*$/",$qty)) {
        header("location: ../view/AddProduct.php?product=qty");
        exit();
    }else

    $product_name = $_POST['Product_name'];
    $catg = $_POST['nom_catg'];
    $product_price = $_POST['product_price'];
    $qty = $_POST['qty'];

    $product = new product($product_name, $product_price, $qty,$catg);
    $productController->AddProduct($product, $productController->conn);
    header('Location: ../view/productsList.php');
}


?>





