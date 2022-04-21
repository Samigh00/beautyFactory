<?php

include('../controller/productController.php');
include ('../model/Product.php');
$productController=new productController();

$response = $productController->getProductById($_POST['id_product'], $productController->conn);

while ($productU = $response->fetch()) {
    $product=new product($productU['Product_name'],$productU['product_price'],$productU['qty']);
    $product->setIdProduct($productU['id_product']);
}

?>

<?php include 'header.php' ?>

<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">About Product</h4>
                </div>
                <div class="box-body">
                    <form action="../core/updateProduct.php" method="post" class="forms-sample"
                          enctype="multipart/form-data" name="AddProduct">
                        <input type="hidden" name="id_product" value="<?php echo $product->getIdProduct() ?>">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="fw-700 fs-16 form-label">Product Name</label>
                                        <input type="text" value="<?php echo $product->getProductName() ?>"name="Product_name" class="form-control"
                                               placeholder="Product Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="fw-700 fs-16 form-label">Price</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-money"></i></div>
                                            <input type="text" value="<?php echo $product->getProductPrice() ?>" name="product_price" class="form-control"
                                                   placeholder="270">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="fw-700 fs-16 form-label">Quantity </label>
                                        <input type="text" value="<?php echo $product->getQty() ?>" name="qty" class="form-control" placeholder="Quantity">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-actions mt-10">
                            <button type="submit" name="submit" class="btn btn-primary" onclick="Verif()"><i
                                        class="fa fa-check"></i> Save
                            </button>
                            <button type="button" class="btn btn-danger">Cancel</button>
                        </div>
                        <div class="form-actions mt-10">
                            <?php /*
                            $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            if (strpos($fullUrl, "product=empty") == true) {
                                echo "<p class='text-danger'>Vous n'avez pas rempli tous les champs !</p>";
                                exit();
                            } elseif (strpos($fullUrl, "product=char") == true) {
                                echo "<p class='text-danger'>le nom ne peut contenir que des caractères!</p>";
                                exit();
                            }elseif (strpos($fullUrl, "product=price") == true) {
                                echo "<p class='text-danger'>prix ne peut contenir que des chiffres!</p>";
                                exit();
                            }elseif (strpos($fullUrl, "product=qty") == true) {
                                echo "<p class='text-danger'>la quantité ne peut contenir que des chiffres!</p>";
                                exit();
                            }*/
                            ?>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

</section>
<?php include 'footer.php' ?>
