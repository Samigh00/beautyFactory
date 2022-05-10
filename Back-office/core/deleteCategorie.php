<?php
include('../controller/categorieController.php');
$catgorieController=new categorieController();

$Category_name=$_POST["id_categ"];
$catgorieController->deleteCategorie($Category_name,$catgorieController->conn1);
header('Location: ../view/catgsList.php');
?>