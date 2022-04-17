<?php
include('../controller/productController.php');
include ('../model/Product.php');

$productController =new productController();

$product_name=$_POST['Product_name'];
$product_price=$_POST['product_price'];
$qty=$_POST['qty'];

$product=new product($product_name,$product_price,$qty);

$productController->AddProduct($product,$productController->conn);
if($productController->conn)
    ?>
    <script type="text/javascript">
        alert('ADDED SUCCESSFULLY !');
    </script>
    <?php
    header('Location: ../view/productsList.php');


?>





