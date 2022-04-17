<?php include 'header.php'?>

		<section class="content">
			<div class="row">
			  <div class="col-12">
				<div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">About Product</h4>
					</div>
				  <div class="box-body">
					<form action="../core/addProductCore.php" method="post" class="forms-sample" enctype="multipart/form-data" name="AddProduct">
						<div class="form-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label class="fw-700 fs-16 form-label">Product Name</label>
									  <input type="text" name="Product_name" class="form-control" placeholder="Product Name">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="fw-700 fs-16 form-label">Price</label>
										<div class="input-group">
											<div class="input-group-addon"><i class="ti-money"></i></div>
											<input type="text" name="product_price" class="form-control" placeholder="270">
										</div>
									</div>
								</div>
							</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="fw-700 fs-16 form-label">Quantity </label>
                                        <input type="text" name="qty" class="form-control" placeholder="Quantity">
                                    </div>
                                </div>
                            </div>

						</div>
						<div class="form-actions mt-10">
							<button type="submit" class="btn btn-primary" onclick="Verif()"> <i class="fa fa-check"></i> Save</button>
							<button type="button" class="btn btn-danger">Cancel</button>
						</div>
					</form>
				  </div>
				</div>
			  </div>		  
		  </div>

		</section>
<?php include 'footer.php'?>
