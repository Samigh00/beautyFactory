<?php
include('../controller/categorieController.php');
include('../model/categorie.php');
$catgorieController = new categorieController();

if (isset($_POST ['submit'])) {
    $name = $_POST['Category_name'];
    if (empty($name)) {
        header("location: ../view/AddCatg.php?product=empty");
        exit();
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        header("location: ../view/AddCatg.php?product=char");
    }else

        $categorie_name = $_POST['Category_name'];
    $categorie = new categorie($categorie_name);
    $catgorieController->AddCategorie($categorie, $catgorieController->conn);
    header('Location: ../view/catgsList.php');
}


?>





