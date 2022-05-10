<?php

include('../controller/productController.php');
include('../controller/categorieController.php');
include ('../model/Product.php');
$productController=new productController();

$response = $productController->getProductById($_POST['id_product'], $productController->conn);

$categorieController = new categorieController();
$response1 = $categorieController->showCategorie($categorieController->conn1);

while ($productU = $response->fetch()) {
    $product=new product($productU['Product_name'],$productU['product_price'],$productU['qty'],$productU['nom_catg']);
    $product->setIdProduct($productU['id_product']);
}

?>

<?php include 'header.php'?>
    <div class="content-wrapper">
    <div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title">Edit</h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">e-Commerce</li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>

            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">About Product</h4>
                            </div>
                            <div class="box-body">
                                <form  method="post" action="../core/updateProduct.php">
                                    <input type="hidden" name="id_product" value="<?php echo $product->getIdProduct() ?>">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fw-700 fs-16 form-label"></label>
                                                    <input type="text" name="product_name" value="<?php echo $product->getProductName() ?>" class="form-control" placeholder="Product Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fw-700 fs-16 form-label">Categorie</label>
                                                    <select name="nom_catg">
                                                        <?php
                                                        while($catg =$response1->fetch()){
                                                            ?>
                                                            <option name="nom_catg"> <?php echo$catg['nom_catg']?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fw-700 fs-16 form-label">Price</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="ti-money"></i></div>
                                                        <input type="text" value="<?php echo $product->getProductPrice()?>" name="product_price" class="form-control" placeholder="270">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fw-700 fs-16 form-label">Quantity </label>
                                                    <input type="text" name="qty" value="<?php echo $product->getQty() ?>" class="form-control" placeholder="Quantity">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row">

                                            <div class="col-md-4">
                                                <h4 class="box-title mt-20">Upload Image</h4>
                                                <div class="product-img text-start">
                                                    <img src="../images/product/product-9.png" alt="">
                                                    <div class="input-group my-3">
                                                        <label class="input-group-text btn-primary" for="inputGroupFile01">Upload Anonther Image</label>
                                                        <input type="file" class="form-control" id="inputGroupFile01">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions mt-10">
                                        <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Save</button>
                                        <button type="button" class="btn btn-danger">Cancel</button>
                                    </div>
                                    <div class="form-actions mt-10">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </section>


<?php include 'footer.php'?>