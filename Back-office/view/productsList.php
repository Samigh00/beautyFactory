<?php
include ('../controller/productController.php');
$productController = new productController();
$response = $productController->showProduct($productController->conn);

?>
<?php include 'header.php'?>
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Products</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">e-Commerce</li>
								<li class="breadcrumb-item active" aria-current="page">Products</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>   

		<!-- Main content -->
		<section class="content">

		  <div class="row fx-element-overlay">
              <?php
              while($product = $response->fetch())
              {
              ?>
			  <div class="col-12 col-lg-6 col-xl-4">
				  <div class="box">
					<div class="fx-card-item">
						<div class="fx-card-avatar fx-overlay-1"> <img src="../assets/images/product/product-1.png" alt="user" class="bbsr-0 bber-0">
							<div class="fx-overlay scrl-up">						
								<ul class="fx-info">
									<li><a class="btn btn-outline image-popup-vertical-fit" href="../assets/images/product/product-1.png"><i class="mdi mdi-magnify"></i></a></li>
									<li><a class="btn btn-outline" href="javascript:void(0);"><i class="mdi mdi-delete"></i></a></li>
									<li><a class="btn btn-outline" href="javascript:void(0);"><i class="mdi mdi-settings"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="fx-card-content text-start">							
							<div class="product-text">
								<h2 class="pro-price text-blue"><?php echo $product["product_price"]; ?></h2>
								<h4 class="box-title mb-0"  ><?php echo $product["Product_name"]; ?></h4>
                                <h4 class="box-title mb-0"  ><?php echo $product["qty"]; ?></h4>
                                <form action="../core/deleteProduct.php" method="POST">
                                <button type="submit" name="id_product" value="<?php echo $product['id_product'];?>" class="btn btn-primary"> <i class="fa fa-check"></i> delete</button>
                                </form>
                                <form action="edit_product.php" method="POST" enctype="multipart/form-data">
                                    <button type="submit" name="id_product" value="<?php echo $product['id_product'];?>" class="btn btn-primary"> <i class="fa fa-check"></i> update</button>
                                </form>
							</div>
						</div>
					</div>
				  </div>
				  <!-- /.box -->				  
			  </div>
                  <?php
              }
              $response->closeCursor();
              ?>
		  </div>

		</section>
<?php include 'footer.php'?>