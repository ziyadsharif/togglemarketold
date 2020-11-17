<!doctype html>
<html lang="en">
<!--<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Togglemarket</title>
<link href="<?php echo base_url(); ?>build/css/main.css" rel="stylesheet">
</head>-->
<?php
require("header.php");
?>

<body>
<div class="container-fluid alpha omega blue-bg">
    
    <?php
        require("menucatalogue.php");
    ?>

    <div class="clearfix"></div>
    <div class="col-md-11 mx-auto page-container push-from-top">
        <div class="general-row">
            <div class="col-md-8">
                <div class="collection-container">
                    <h3>Simplicity by Steelite™</h3>
                    <div class="featured-img">
                        <img src="<?php echo base_url(); ?>build/images/catalogFeaturedImg.jpg">
                    </div>
                    <div id="steelite-new-products" class="prod-list">
                        <!--<div class="prod-single">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>build/images/catalogImg1.png">
                                <p class="bold">RIO by Steelite</p>
                                <p>Red Cup</p>
                            </a>
                        </div>
                        <div class="prod-single">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>build/images/catalogImg2.png">
                                <p class="bold">RIO by Steelite</p>
                                <p>Blue bowl</p>
                            </a>
                        </div>
                        <div class="prod-single">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>build/images/catalogImg1.png">
                                <p class="bold">RIO by Steelite</p>
                                <p>Red Cup</p>
                            </a>
                        </div>
                        <div class="prod-single">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>build/images/catalogImg4.png">
                                <p class="bold">RIO by Steelite</p>
                                <p>Blue Mug</p>
                            </a>
                        </div>
                        <div class="prod-single">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>build/images/catalogImg1.png">
                                <p class="bold">RIO by Steelite</p>
                                <p>Small Red Plate</p>
                            </a>
                        </div>
                        <div class="prod-single">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>build/images/catalogImg2.png">
                                <p class="bold">RIO by Steelite</p>
                                <p>Blue Bowl</p>
                            </a>
                        </div>-->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="shop-container">
                    <h3>Shop by Category</h3>
                    <div class="items-list">
                        <div class="item-single tableit">
                            <div class="cellit">
                                <img src="<?php echo base_url(); ?>build/images/chair.png">
                                <p>Banqueting</p>
                            </div>
                        </div>
                        <div class="item-single tableit">
                            <div class="cellit">
                                <img src="<?php echo base_url(); ?>build/images/housekeeping.png">
                                <p>Housekeeping</p>
                            </div>
                        </div>
                        <div class="item-single tableit">
                            <div class="cellit">
                                <img src="<?php echo base_url(); ?>build/images/towels.png">
                                <p>Linen</p>
                            </div>
                        </div>
                        <div class="item-single tableit">
                            <div class="cellit">
                                <img src="<?php echo base_url(); ?>build/images/frontOffice.png">
                                <p>Front office</p>
                            </div>
                        </div>
                        <div class="item-single tableit">
                            <div class="cellit">
                                <img src="<?php echo base_url(); ?>build/images/plates.png">
                                <p>F&B</p>
                            </div>
                        </div>
                        <div class="item-single tableit">
                            <div class="cellit">
                                <img src="<?php echo base_url(); ?>build/images/plates.png">
                                <p>Cookware</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--<div class="supplier-col general-row">
            <div class="col-md-4">
                <div class="boxed-single">
                    <h3>Gentelle™ Linen</h3>
                    <p>100% cotton with the highest thread counts</p>
                    <img src="<?php echo base_url(); ?>build/images/supplier-box1.jpg">
                    <a href="#">See more</a>
                    <span>(Preferred Supplier for JW Marriot)</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="boxed-single">
                    <h3>Gentelle™ Linen</h3>
                    <p>100% cotton with the highest thread counts</p>
                    <img src="<?php echo base_url(); ?>build/images/supplier-box1.jpg">
                    <a href="#">See more</a>
                    <span>(Preferred Supplier for JW Marriot)</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="boxed-single">
                    <h3>Gentelle™ Linen</h3>
                    <p>100% cotton with the highest thread counts</p>
                    <img src="<?php echo base_url(); ?>build/images/supplier-box1.jpg">
                    <a href="#">See more</a>
                    <span>(Preferred Supplier for JW Marriot)</span>
                </div>
            </div>
        </div>-->

        <div class="general-row">
            <div class="col-md-12">
                <div class="collection-container collection-row">
                    <h3>Terramesa Collection by Steelite™</h3>
                    <div id="steelite-cups" class="prod-list">

                    </div>
                </div>
            </div>
        </div>

        <div class="supplier-col general-row">
            <div class="col-md-8">
                <div class="boxed-single">
                    <h3>Rubbermaid Commercial™</h3>
                    <p>The most viewed products from Rubbermaid</p>
                    <div class="clearfix"></div>
                    <div class="ct results-col">
                        <div id="products-grid" class="prod-results listing">

                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <a href="#">See more from Rubbermaid Commercial</a>
                    <!--<span>(Preferred Supplier for JW Marriot)</span>-->
                </div>
            </div>
            <div class="col-md-4">
                <div class="boxed-single long">
                    <h3>Gentelle™ Linen</h3>
                    <p>100% cotton with the highest thread counts</p>
                    <img src="<?php echo base_url(); ?>build/images/hospitalitySolutions.jpg">
                    <a href="#">See more</a>
                    <span>(Preferred Supplier for JW Marriot)</span>
                </div>
            </div>
        </div>

        <div class="general-row">
            <div class="col-md-12">
                <div class="collection-container collection-row">
                    <h3>Products you may like</h3>
                    <div id="products-liked" class="prod-list">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="foo-wrapper container-fluid alpha omega">
    <div class="foo col-md-11 mx-auto">
        <div class="col-md-4 logo">
            <div class="logo">
                <img src="<?php echo base_url(); ?>build/images/LOGOTRANS-1@2x.png" alt="Toggle market logo">
            </div>
        </div>
        <div class="col-md-4 follow">
            
        </div>
        <div class="col-md-4 copyright">
            2020 Toggle Market. All rights reserved.
        </div>
    </div>
</div>

<div class="loader" id="loaderdiv" style="display:none">
        <div class="gifHolder">
            <img src="<?php echo base_url("assets/images/loader.gif"); ?>">
        </div>
    </div>

</body>
<script src="<?php echo base_url(); ?>build/js/togglemarket.min.js"></script>
<script src="<?php echo base_url(); ?>build/js/vendors/owl.carousel.min.js"></script>
<script type="text/javascript">
    var baseURL2 = "<?php echo base_url(); ?>";
    var baseURL3 = "<?php echo base_url("index.php/ServicesController/ServiceCall/"); ?>";

    $(document).ready(function (){
        GetProducts("Simplicity", 6, 1, "steelite-new-products");
        GetProducts("Terramesa", 8, 1, "steelite-cups");
        GetProducts("Taste", 8, 1, "products-liked");
        GetGridProducts("Slim Jim", 8, 1, "products-grid");
    });

    $(document).ajaxStart(function() {
            $("#loaderdiv").css("display", "flex");
        });

        $(document).ajaxComplete(function() {
            $("#loaderdiv").css("display", "none");
        });

    function GetProducts(search, limit, pageNum, divId) {
        $.ajax({
              type: 'POST',
              dataType: "json",
              url: baseURL3 + 'getproducts',
              data: {
                search: search,
                pageLimit: limit,
                pageNum: pageNum
              },
              success: function(response) {
                document.getElementById(divId).innerHTML = "";
                $.each(response.data, function(i, item) {
                    if (item.product.Images.length != 0) {
                        var rows = "<div class='prod-single'><a href='"+baseURL2+"index.php/home/productdetails?productid="+item.product.ProductId+"'><img src='" + baseURL2 + "productImages/" + item.product.Images[0]['ImageName'] + "'><p class='bold'>"+item.product.BrandName+"</p><p>"+item.product.Name+"</p></a></div>";
                        $('#'+divId).append(rows);
                    }
                });
              },
              error: function (response) {
                console.log(response);
              }
            });
            return false;
    }

    function GetGridProducts(search, limit, pageNum, divId) {
        $.ajax({
              type: 'POST',
              dataType: "json",
              url: baseURL3 + 'getproducts',
              data: {
                search: search,
                pageLimit: limit,
                pageNum: pageNum
              },
              success: function(response) {
                document.getElementById(divId).innerHTML = "";
                $.each(response.data, function(i, item) {
                    if (item.product.Images.length != 0) {
                        var rows = "<div class='item'><div class='img'><img src='" + baseURL2 + "productImages/" + item.product.Images[0]['ImageName'] + "'></div><div class='info'><a href='#'>"+item.product.BrandName+"</a><p>"+item.product.Name+"</p></div></div>";
                        $('#'+divId).append(rows);
                    }
                });
              },
              error: function (response) {
                console.log(response);
              }
            });
            return false;
    }
</script>
</html>