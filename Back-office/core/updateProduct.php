<?php
include('../controller/productController.php');
include ('../model/Product.php');

$productController=new productController();
/*if (isset($_POST ['submit'])) {
    $name = $_POST['Product_name'];
    $qty = $_POST['qty'];
    $price = $_POST['product_price'];

    if (empty($name) || empty($qty) || empty($price)) {
        header("location: ../view/edit_product.php?product=empty");
        exit();
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        header("location: ../view/edit_product.php?product=char");
        exit();
    } elseif (!preg_match("/^[0-9]*$/", $price)) {
        header("location: ../view/edit_product.php?product=price");
        exit();
    } elseif (!preg_match("/^[0-9]*$/", $qty)) {
        header("location: ../view/edit_product.php?product=qty");
        exit();
    } else*/

        if (isset($_POST["id_product"])) {
            $id_product = $_POST['id_product'];
        }
        $product_name = $_POST['Product_name'];
        $product_price = $_POST['product_price'];
        $qty = $_POST['qty'];
        $product = new product($product_name, $product_price, $qty);
        $product->setIdProduct($id_product);
        $productController->updateProduct($product, $productController->conn);
    header('Location: ../view/productsList.php');


?>


