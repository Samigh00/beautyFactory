<?php
include('../model/Product.php');
include('../controller/productController.php');
$productController = new productController();
$response = $productController->showProduct($productController->conn);
?>
<?php include 'headerFront.php' ?>

    <div id="main">
    <div class="hr-invisible-small"></div>
    <section class="fullwidth-background">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <h4> Our Shop </h4>
                <h6><a href="index.html">Home</a> / Shop</h6>
            </div>
        </div>
    </section>
    <div class="hr-invisible-very-small"></div>
    <div class="clear"></div>
    <h2 class="border-title aligncenter"> Our Beauty Care Products </h2>
    <div class="hr-invisible-small"></div>
    <div class="container">
    <section id="secondary" class="secondary-left-sidebar transparent-bg">
        <aside class="widget searchwidget">
            <h3 class="border-title"> Product <span>Search</span></h3>
            <form method="post" action="#" name="searchform" class="subscribe-frm">

            </form>
        </aside>
        <div class="clear"></div>
        <div class="hr-invisible-small"></div>
        <aside class="widget widget_categories">
            <h3 class="border-title"> Product <span>Category</span></h3>
            <ul>
                <li>
                    <div class="dt-sc-toggle-frame">
                        <h5 class="dt-sc-toggle">
                            <a href="#"> Hair Care </a>
                        </h5>
                        <div class="dt-sc-toggle-content">
                            <p>
                                <a title="" href="#"> Texture </a>
                                <a title="" href="#"> Latest Products </a>
                                <a title="" href="#"> Offer Products </a>
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dt-sc-toggle-frame">
                        <h5 class="dt-sc-toggle">
                            <a href="#"> Hair Color </a>
                        </h5>
                        <div class="dt-sc-toggle-content">
                            <p>
                                <a title="" href="#"> Texture </a>
                                <a title="" href="#"> Latest Products </a>
                                <a title="" href="#"> Offer Products </a>
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dt-sc-toggle-frame">
                        <h5 class="dt-sc-toggle">
                            <a href="#"> Styling </a>
                        </h5>
                        <div class="dt-sc-toggle-content">
                            <p>
                                <a title="" href="#"> Texture </a>
                                <a title="" href="#"> Latest Products </a>
                                <a title="" href="#"> Offer Products </a>
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <a title="" href="#"> Texture </a>
                </li>
                <li>
                    <a title="" href="#"> Latest Products </a>
                </li>
                <li>
                    <a title="" href="#"> Offer Products </a>
                </li>
            </ul>
        </aside>
        <div class="clear"></div>
        <div class="hr-invisible-small"></div>
        <aside class="widget widget_price_filter">
            <h3 class="border-title"> Price <span>Filter</span></h3>
            <form action="#" method="get">
                <div class="price_slider_wrapper">
                    <div id="priceslider" class="price_slider"></div>
                    <div class="price_slider_amount">
                        <div class="price_label">
                            Price: <span class="from" id="priceslider-from">$75.00 </span> &mdash; <span class="to"
                                                                                                         id="priceslider-to">$300.00</span>
                        </div>
                    </div>
                </div>
            </form>
        </aside>
        <div class="clear"></div>
        <div class="hr-invisible-small"></div>
        <aside class="widget widget_special-offer">
            <h3 class="border-title"> Special <span>Offers</span></h3>
            <div class="dt-sc-entry-thumb">
                <a href="#"><img src="../assets/images/special-off-img.jpg" alt="" title=""></a>
            </div>
        </aside>
    </section>

    <section id="primary" class="page-with-sidebar with-left-sidebar">

        <form method="post" action="../core/sendMail.php">
            <p>
                <input type="email" name="email" id="email" placeholder="Enter Mail" required>

            </p>
        <?php  while ($product = $response->fetch()) { ?>
    <div class="column dt-sc-one-third first">

            <div class="product-border">
                <div class="product-thumb">
                    <a href="shop-cart.html">
                        <img src="../assets/images/product/product-img1.png" alt="" title="">
                    </a>
                </div>


                <div class="product-details">
                    <div class="dt-sc-price"><?php echo $product["Product_name"]; ?> </div>

                    <div class="dt-sc-price"><?php echo $product["product_price"]; ?> </div>
                    <div class="dt-sc-price"><?php echo $product["qty"]; ?> </div>
                    <div class="hr-invisible-very-very-small"></div>
                    <button class="dt-sc-button btn-eff3" data-text="Add to Cart" >
                        <span>Add to Cart</span>
                    </button>
                </div>

            </div>

        <div class="clear"></div>

    </div>
<?php } ?>
  </form>
    <div class="clear"></div>
    <div class="hr-invisible-small"></div>
    <div class="pagination">
        <ul>
            <li class="current_now"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
        </ul>
        <div class="next-post"><a href="#"><span class="fa fa-long-arrow-right"></span> </a></div>
    </div>
    <div class="hr-invisible-medium"></div>
    <div class="hr-invisible-very-very-small"></div>
    </section>
    </div>
    </div>
    <?php include 'footerFront.php' ?>