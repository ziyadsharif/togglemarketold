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
<div class="container-fluid alpha omega">
    <?php
        require("menucatalogue.php");
    ?>    

    <div class="clearfix"></div>
    <div class="header-fixed-spacer"></div>
    <div class="col-md-11 mx-auto page-container">
        <div class="breadcrumbs">
            <ul>
                <li><a href="#"><?php echo $product["Category"]?></a></li>
                <li><a href="#"><?php echo $product["SubCategory"]?></a></li>
            </ul>
        </div>

        <div class="prod-detail-container">
            <div class="col-md-6">
                <div class="thumbs-grid">
                    <ul>
                        <!--<li><img src="<?php echo base_url(); ?>build/images/bigCup.png"></li>
                        <li><img src="<?php echo base_url(); ?>build/images/bigCup2.png"></li>
                        <li><img src="<?php echo base_url(); ?>build/images/bigCup3.png"></li>
                        <li><img src="<?php echo base_url(); ?>build/images/bigCup.png"></li>-->
                        <?php
                            $baseURL = base_url("/");
                            $i = 0;
                            if (count($product["Images"]) > 0) {
                                foreach ($product["Images"] as $image) {
                                    echo '<li><img src="' . $baseURL . "productImages/" . $image["ImageName"] . '" /></li>';
                                }
                            } else {
                                echo '<img src="' . $baseURL . "items/placeholder.png" . '" class="img-fluid mySlides" style="margin:0 auto" />';
                            }
                        ?>
                    </ul>
                </div>
                <div class="main-img">
                    <img src='<?php echo base_url(); ?>productImages/<?php echo $product["Images"][0]["ImageName"]?>'>
                </div>
            </div>
            <div class="col-md-5">
                <div class="prod-details">
                    <h2><?php echo $product["Name"]; ?></h2>
                    <h3 class="bluetxt"><?php echo $product["BrandName"]; ?></h3>
                    <p>
                    <?php echo $product["Description"]; ?>
                    </p>
                    <div class="colors">
                        <h3>Colors</h3>
                        <ul>
                            <!--<li style="background-color: #F8B4B4;" value="build/images/bigCup3.png"></li>
                            <li style="background-color: #9DA2C9;" value="build/images/bigCup2.png"></li>
                            <li style="background-color: #A7CBA4;" value="build/images/bigCup.png"></li>-->
                            <?php
                                foreach ($product["ProductDetails"] as $prodDetails) {
                                    if ($prodDetails["Key"] == "Color") {
                                        $color = trim($prodDetails["Value"]);
                                        echo '<li style="background-color:' . $color . '"></li>';
                                    }
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="qty">
                        <h3>Quantity</h3>
                        <div class="number">
                            <span class="minus">-</span>
                            <input type="text" value="1"/>
                            <span class="plus">+</span>
                        </div>
                    </div>
                    <div class="cta-holder">
                        <input type="button" value="Add to Project" class="cta-common cart">
                        <input type="button" value="Add to Wishlist" class="cta-common wishlist">
                    </div>
                </div>
            </div>
        </div>

        <!--<div class="pd-addset-container">
            <p>This item is part of the <span>Linen Trolley Set</span></p>
            <div class="pd-addset-items">
                <div class="pd-addset-item">
                    <img src="<?php echo base_url(); ?>build/images/bigCup3.png">
                    <p>Navy Canvas Linen Trolley (40 Liters)</p>
                    <div class="qty">
                        <div class="number">
                            <span class="minus">-</span>
                            <input type="number" value="1"/>
                            <span class="plus">+</span>
                        </div>
                    </div>
                </div>
                <div class="pd-addset-item">
                    <img src="<?php echo base_url(); ?>build/images/bigCup3.png">
                    <p>Navy Canvas Linen Trolley (40 Liters)</p>
                    <div class="qty">
                        <div class="number">
                            <span class="minus">-</span>
                            <input type="number" value="1"/>
                            <span class="plus">+</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pd-addset-controls">
                <h3>Quantity</h3>
                <div class="qty">
                    <div class="number">
                        <span class="minus">-</span>
                        <input type="number" value="1"/>
                        <span class="plus">+</span>
                    </div>
                </div>
                <input type="button" value="Add set to Project" class="cta-common cart">
            </div>
        </div>-->

        <div class="accordion-container">
            <div class="accordion">
                <div class="tabs">
                <div class="tab">
                    <input type="checkbox" id="chck1">
                    <label class="tab-label" for="chck1">Product Description</label>
                    <div class="tab-content">
                    <p>
                        <?php echo $product["Description"]; ?>
                    </p>
                    </div>
                </div>
                <div class="tab">
                    <input type="checkbox" id="chck2">
                    <label class="tab-label" for="chck2">Dimensions</label>
                    <div class="tab-content">
                        <?php
                            foreach ($product["ProductDetails"] as $prodDetails) {
                                if ($prodDetails["Key"] == "Height" || $prodDetails["Key"] == "Diameter" || $prodDetails["Key"] == "Depth" || $prodDetails["Key"] == "Width" || $prodDetails["Key"] == "Weight") {
                                    echo '<div class="product__property_row product__property_bowl-1-diameter">
                                            <span class="product-details-heading">' . $prodDetails["Key"] . ':</span>
                                            <span class="product-details">' . $prodDetails["Value"] . '</span>
                                            </div>';
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="tab">
                    <input type="checkbox" id="chck3">
                    <label class="tab-label" for="chck3">Materials</label>
                    <div class="tab-content">
                        <?php
                            foreach ($product["ProductDetails"] as $prodDetails) {
                                if ($prodDetails["Key"] == "Material") {
                                    echo '<p>' . $prodDetails["Value"] . '</p>';
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="prod-carousel-container">
        <!--<div class="product-carousel">
            <div class="general-row">
                <div class="col-md-12">
                    <div class="collection-container collection-row product-detail-component">
                        <h3>Complete the look</h3>
                        <a href="#">+ Add collection to BOQ</a>
                        <div class="prod-list">
                            <div class="owl-carousel owl-theme collection-carousel">
                                <div class="prod-single item">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>build/images/catalogImg1.png">
                                        <p class="bold">RIO by Steelite</p>
                                        <p>Red Cup</p>
                                    </a>
                                </div>
                                <div class="prod-single item">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>build/images/catalogImg2.png">
                                        <p class="bold">RIO by Steelite</p>
                                        <p>Blue bowl</p>
                                    </a>
                                </div>
                                <div class="prod-single item">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>build/images/catalogImg1.png">
                                        <p class="bold">RIO by Steelite</p>
                                        <p>Red Cup</p>
                                    </a>
                                </div>
                                <div class="prod-single item">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>build/images/catalogImg4.png">
                                        <p class="bold">RIO by Steelite</p>
                                        <p>Blue Mug</p>
                                    </a>
                                </div>
                                <div class="prod-single item">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>build/images/catalogImg1.png">
                                        <p class="bold">RIO by Steelite</p>
                                        <p>Small Red Plate</p>
                                    </a>
                                </div>
                                <div class="prod-single item">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>build/images/catalogImg2.png">
                                        <p class="bold">RIO by Steelite</p>
                                        <p>Blue Bowl</p>
                                    </a>
                                </div>
                                <div class="prod-single item">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>build/images/catalogImg2.png">
                                        <p class="bold">RIO by Steelite</p>
                                        <p>Blue Bowl</p>
                                    </a>
                                </div>
                                <div class="prod-single item">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>build/images/catalogImg2.png">
                                        <p class="bold">RIO by Steelite</p>
                                        <p>Blue Bowl</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

        <div class="product-carousel">
            <div class="general-row">
                <div class="col-md-12">
                    <div class="collection-container collection-row product-detail-component">
                        <h3>Similar products</h3>
                        <div class="prod-list">
                            <div id="similar-products" class="owl-carousel owl-theme collection-carousel">
                                <!--<div class="prod-single item">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>build/images/catalogImg1.png">
                                        <p class="bold">RIO by Steelite</p>
                                        <p>Red Cup</p>
                                    </a>
                                </div>
                                <div class="prod-single item">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>build/images/catalogImg2.png">
                                        <p class="bold">RIO by Steelite</p>
                                        <p>Blue bowl</p>
                                    </a>
                                </div>
                                <div class="prod-single item">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>build/images/catalogImg1.png">
                                        <p class="bold">RIO by Steelite</p>
                                        <p>Red Cup</p>
                                    </a>
                                </div>
                                <div class="prod-single item">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>build/images/catalogImg4.png">
                                        <p class="bold">RIO by Steelite</p>
                                        <p>Blue Mug</p>
                                    </a>
                                </div>
                                <div class="prod-single item">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>build/images/catalogImg1.png">
                                        <p class="bold">RIO by Steelite</p>
                                        <p>Small Red Plate</p>
                                    </a>
                                </div>
                                <div class="prod-single item">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>build/images/catalogImg2.png">
                                        <p class="bold">RIO by Steelite</p>
                                        <p>Blue Bowl</p>
                                    </a>
                                </div>
                                <div class="prod-single item">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>build/images/catalogImg2.png">
                                        <p class="bold">RIO by Steelite</p>
                                        <p>Blue Bowl</p>
                                    </a>
                                </div>
                                <div class="prod-single item">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>build/images/catalogImg2.png">
                                        <p class="bold">RIO by Steelite</p>
                                        <p>Blue Bowl</p>
                                    </a>
                                </div>-->
                            </div>
                        </div>
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

</body>
<script src="<?php echo base_url(); ?>build/js/togglemarket.min.js"></script>
<script src="<?php echo base_url(); ?>build/js/components/counter.js"></script>
<script src="<?php echo base_url(); ?>build/js/components/selectProdThumb.js"></script>
<script src="<?php echo base_url(); ?>build/js/vendors/owl.carousel.min.js"></script>

<script type="text/javascript">
    var baseURL2 = "<?php echo base_url(); ?>";
    var baseURL3 = "<?php echo base_url("index.php/ServicesController/ServiceCall/"); ?>";
    $(document).ready(function () {
        GetSimilarProducts();

        $(document).on("click", "#addToCart", function() {
            $.ajax({
              type: 'POST',
              dataType: "json",
              url: baseURL3 + 'addToWishlist',
              data: {
                projectId: "1",
                productId: "1"
              },
              success: function(response) {
                
              },
            });
        });
    });

    function GetSimilarProducts() {
        $.ajax({
              type: 'POST',
              dataType: "json",
              url: baseURL3 + 'getsimilarproducts',
              data: {
                categoryId: '<?php echo $product["CategoryID"]; ?>',
                searchText: '<?php echo $product["Name"]; ?>'
              },
              success: function(response) {
                document.getElementById("similar-products").innerHTML = "";
                $.each(response.data, function(i, item) {
                    if (item.product.Images.length != 0) {
                        var rows = "<div class='prod-single item'><a href='"+baseURL2+"index.php/home/productdetails?productid="+item.product.ProductId+"'><img src='"+baseURL2+"productImages/" + item.product.Images[0]['ImageName'] + "'><p class='bold'>" + item.product.BrandName + "</p><p>" + item.product.Name + "</p></a></div>";
                        $('#similar-products').append(rows);
                    }
                });
              },
              error: function (response) {
                console.log(response);
              }
            });
            return false;
    }

    function AddToWishlist() {
        $.ajax({
              type: 'POST',
              dataType: "json",
              url: baseURL3 + 'addToWishlist',
              data: {
                projectId: "1",
                productId: "1"
              },
              success: function(response) {
                
              },
            });
            return false;
    }

    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }

    function removeParam(key, sourceURL) {
        var rtn = sourceURL.split("?")[0],
        param,
        params_arr = [],
        queryString = (sourceURL.indexOf("?") !== -1) ? sourceURL.split("?")[1] : "";
        if (queryString !== "") {
        params_arr = queryString.split("&");
        for (var i = params_arr.length - 1; i >= 0; i -= 1) {
            param = params_arr[i].split("=")[0];
            if (param === key) {
            params_arr.splice(i, 1);
            }
        }
        if (params_arr.length > 0) {
            rtn = rtn + "?" + params_arr.join("&");
        }
        }
        return rtn;
    }

    function getUrlParameters(parameterKey){
        var url = new URL(window.location.href);
        var parameterValue = url.searchParams.get(parameterKey);
        return parameterValue;
    }
</script>
</html>