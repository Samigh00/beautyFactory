<?php
include('../controller/categorieController.php');
include ('../model/categorie.php');
if (isset($_POST ['submit'])) {
    $name = $_POST['Category_name'];

    if (empty($name)) {
        header("location: ../view/AddCatg.php?product=empty");
        exit();
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        header("location: ../view/AddCatg.php?product=char");
        exit();
    } else

        $catgorieController = new categorieController();


    if (isset($_POST["id_categ"])) {
        $id_categ = $_POST['id_categ'];
    }

    $Category_name = $_POST['Category_name'];



    $catgorie = new categorie($Category_name);
    $catgorie->setIdCatg($id_categ);


    $catgorieController->updateCategorie($catgorie, $catgorieController->conn);
    header('Location: ../view/catgsList.php');
}
?>


