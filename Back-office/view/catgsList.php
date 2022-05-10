<?php
include('../controller/categorieController.php');
$categrieController = new categorieController();
$response = $categrieController->showCategorie($categrieController->conn1);
?>

<?php include 'header.php' ?>
    <div class="content-wrapper">
    <div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title">Orders</h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">e-Commerce</li>
                            <li class="breadcrumb-item active" aria-current="page">Orders</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>

    <!-- Main content -->
    <section class="content">
    <div class="row">
<?php
while ($categ = $response->fetch()) {
    ?>
    <div class="col-auto">
        <div class="box">
            <div class="box-body">
                <div class="table-responsive">
                    <table id="productorder" class="table table-hover no-wrap product-order" data-page-size="10">
                        <thead>
                        <tr>
                            <th>Category</th>
                            <th></th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?php echo $categ["nom_catg"]; ?></td>
                            <td>
                                <form action="../core/deleteCategorie.php" method="POST">
                                    <button type="submit" name="id_categ" value="<?php echo $categ['id_categ'];?>" class="btn btn-primary"> <i class="fa fa-check"></i> delete</button>
                                </form>
                            </td>
                            <td>
                                <form action="edit_catg.php" method="POST" enctype="multipart/form-data">
                                    <button type="submit" name="id_categ" value="<?php echo $categ['id_categ'];?>" class="btn btn-primary"> <i class="fa fa-check"></i> update</button>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    </div>

    </section>
    <!-- /.content -->
    </div>
    </div>
    <?php include 'footer.php' ?>