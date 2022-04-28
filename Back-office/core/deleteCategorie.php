<?php
include('../controller/categorieController.php');
$catgorieController=new categorieController();

$Category_name=$_POST["id_categ"];
$catgorieController->deleteCategorie($Category_name,$catgorieController->conn);
header('Location: ../view/catgsList.php');
?>