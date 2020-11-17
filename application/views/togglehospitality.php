<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Togglemarket</title>
    <link href=<?php echo base_url('assets/css/main.css'); ?> rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <div class="container-fluid alpha omega">
        <div class="nav-wrap-main">
            <div class="col-md-11 mx-auto">
                <div class="logo">
                    <img src=<?php echo base_url('assets/images/toggleHospitality.png'); ?> alt="Toggle market logo">
                </div>
                <div class="right-panel">
                    <div class="tabs">
                        <ul>
                            <li><a href="<?php echo base_url("index.php/authenticate/buyerdashboard"); ?>" id="feat_cta">Features</a></li>
                            <li><a href="#" id="prod_cta">Products</a></li>
                            <li><a href="<?php echo base_url_togglemarket(); ?>">About</a></li>
                            <li><a href="<?php echo base_url("index.php/contactus/contact"); ?>">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="control-bar">
                        <ul>
                            <li><a href="<?php echo base_url("index.php/authenticate/signup"); ?>">Sign up</a></li>
                        </ul>
                    </div>
                    <div class="tabs">
                        <ul>
                            <li><a href="<?php echo base_url("index.php/authenticate/login"); ?>">Sign In</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-wrap">
            <div class="banner-container">
                <div class="img-container">
                    <img src=<?php echo base_url('assets/images/Hospitalityreal-bottombit.png'); ?> />
                </div>
                <div class="content-container">
                    <div class="content-holder">
                        <div class="content-inner">
                            <h2>Hospitality Procurement Redefined</h2>
                            <p>
                                Digitising procurement processes to increase efficiency. <br>We
                                do the heavy lifting so you don’t have to.
                            </p>
                            <a href="<?php echo base_url("index.php/authenticate/signup"); ?>" class="cta-common">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-11 mx-auto" id="features">
            <div class="slider-container">
                <div class="slide featured">
                    <div class="content-panel">
                        <div class="content-holder">
                            <div class="content-inner">
                                <div class="text-placeholder">
                                    <h4>Features</h4>
                                    <h2>From furniture to operating supplies</h2>
                                    <p>
                                        Get a glimpse into the future<br> of hospitality purchasing.
                                    </p>
                                </div>
                                <div class="image-placeholder">
                                    <img src=<?php echo base_url('assets/images/Utensilsforhomepageshadow.png'); ?>>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slideit-panel">
                        <div class="trigger-holder">
                            <img src=<?php echo base_url('assets/images/arrowRight@2x.png'); ?>>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-11 mx-auto hideit">
            <div class="slider-container">
                <div class="slide featured">
                    <div class="featured-carousel owl-carousel owl-theme">
                        <div class="item">
                            <div class="content-panel full">
                                <div class="content-holder">
                                    <div class="content-inner">
                                        <div class="text-placeholder">
                                            <h2>From furniture to operating supplies</h2>
                                            <p>
                                                Get a glimpse into the future<br> of hospitality purchasing.
                                            </p>
                                        </div>
                                        <div class="image-placeholder">
                                            <img src=<?php echo base_url('assets/images/Utensilsforhomepageshadow.png'); ?>>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel single item -->
                        <div class="item">
                            <div class="content-panel full">
                                <div class="content-holder">
                                    <div class="content-inner">
                                        <div class="text-placeholder">
                                            <h2>From furniture to operating supplies</h2>
                                            <p>
                                                Get a glimpse into the future<br> of hospitality purchasing.
                                            </p>
                                        </div>
                                        <div class="image-placeholder">
                                            <img src=<?php echo base_url('assets/images/Utensilsforhomepageshadow.png'); ?>>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel single item -->
                    </div>
                </div>
            </div>
        </div>

        <div class="rolling-icons-widget">
            <div class="col-md-11 mx-auto">
                <div class="txt-placeholder">
                    <h2>Why choose Toggle Market?</h2>
                    <p>
                        Shop stress-free at thousands of stores, with no late fees &
                        no surprises. Welcome to a new way to pay over time.
                    </p>
                </div>
                <div class="rolling-icons-holder">
                    <div class="rolling-icon">
                        <div class="content-holder">
                            <div class="initial-view tableit">
                                <div class="init-view-holder cellit">
                                    <div class="icon tableit">
                                        <div class="img-holder cellit">
                                            <img src=<?php echo base_url('assets/images/EYEblue-1@2x.png'); ?>>
                                        </div>
                                    </div>
                                    <div class="title">
                                        Visibility
                                    </div>
                                </div>
                            </div>
                            <div class="scrolled-view tableit">
                                <div class="init-view-holder cellit">
                                    <p>
                                        State of the art project management tools that drive automation to the procurement experience.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rolling-icon">
                        <div class="content-holder">
                            <div class="initial-view tableit">
                                <div class="init-view-holder cellit">
                                    <div class="icon tableit">
                                        <div class="img-holder cellit">
                                            <img src=<?php echo base_url('assets/images/open-umbrella-outlineblue@2x.png'); ?>>
                                        </div>
                                    </div>
                                    <div class="title">
                                        Cover
                                    </div>
                                </div>
                            </div>
                            <div class="scrolled-view tableit">
                                <div class="init-view-holder cellit">
                                    <p>
                                        Discover a worldwide network of products from brands that specialise in hospitality projects.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rolling-icon">
                        <div class="content-holder">
                            <div class="initial-view tableit">
                                <div class="init-view-holder cellit">
                                    <div class="icon tableit">
                                        <div class="img-holder cellit">
                                            <img src=<?php echo base_url('assets/images/networkblue@2x.png'); ?>>
                                        </div>
                                    </div>
                                    <div class="title">
                                        Control
                                    </div>
                                </div>
                            </div>
                            <div class="scrolled-view tableit">
                                <div class="init-view-holder cellit">
                                    <p>
                                        Gain control over the purchasing process. Uninterrupted connection between you and the brands.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rolling-icon">
                        <div class="content-holder">
                            <div class="initial-view tableit">
                                <div class="init-view-holder cellit">
                                    <div class="icon tableit">
                                        <div class="img-holder cellit">
                                            <img src=<?php echo base_url('assets/images/likeblue@2x.png'); ?>>
                                        </div>
                                    </div>
                                    <div class="title">
                                        Simplicity
                                    </div>
                                </div>
                            </div>
                            <div class="scrolled-view tableit">
                                <div class="init-view-holder cellit">
                                    <p>
                                        A user experience built to drive innovation and simplicity for both buyers and sellers.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="products-carousel" id="products">
            <div class="col-md-11 mx-auto">
                <div class="heading-holder">
                    <h2>Products</h2>
                    <p>
                        Find hospitality grade furniture and operating
                        supplies from our global supplier catalogue
                    </p>
                </div>

                <div class="carousel-container">
                    <div class="prods-carousel owl-carousel owl-theme">
                        <div class="item">
                            <div class="tableit">
                                <div class="cellit">
                                    <img src=<?php echo base_url('assets/images/Image7.png'); ?>>
                                </div>
                            </div>
                            <div class="img_title">Housekeeping</div>
                        </div>
                        <div class="item">
                            <div class="tableit">
                                <div class="cellit">
                                    <img src=<?php echo base_url('assets/images/Image8@2x.png'); ?>>
                                </div>
                            </div>
                            <div class="img_title">Guestroom Electronics</div>
                        </div>
                        <div class="item">
                            <div class="tableit">
                                <div class="cellit">
                                    <img src=<?php echo base_url('assets/images/Image10@2x.png'); ?>>
                                </div>
                            </div>
                            <div class="img_title">Tableware</div>
                        </div>
                        <div class="item">
                            <div class="tableit">
                                <div class="cellit">
                                    <img src=<?php echo base_url('assets/images/Image9@2x.png'); ?>>
                                </div>
                            </div>
                            <div class="img_title">Front Office</div>
                        </div>
                        <div class="item">
                            <div class="tableit">
                                <div class="cellit">
                                    <img src=<?php echo base_url('assets/images/guestroom.png'); ?>>
                                </div>
                            </div>
                            <div class="img_title">Bedding</div>
                        </div>
                        <div class="item">
                            <div class="tableit">
                                <div class="cellit">
                                    <img src=<?php echo base_url('assets/images/kitchen.png'); ?>>
                                </div>
                            </div>
                            <div class="img_title">Kitchen Equipment</div>
                        </div>
                        <div class="item">
                            <div class="tableit">
                                <div class="cellit">
                                    <img src=<?php echo base_url('assets/images/outdoor.png'); ?>>
                                </div>
                            </div>
                            <div class="img_title">Outdoor Furniture</div>
                        </div>
                        <div class="item">
                            <div class="tableit">
                                <div class="cellit">
                                    <img src=<?php echo base_url('assets/images/signage.png'); ?>>
                                </div>
                            </div>
                            <div class="img_title">Signage</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-9 mx-auto just_logos">
            <!--  <div class="logosHolder">
                <img src=?php echo base_url('assets/images/Image5.png'); ?>>
            </div> -->
            <a href="#" class="cta-common">Join our supplier network</a>
        </div>
    </div>

    <div class="foo-wrapper container-fluid alpha omega">
        <div class="foo col-md-11 mx-auto">
            <div class="col-md-4 logo alpha">
                <div class="logo">
                    <img src=<?php echo base_url('assets/images/toggleHospitality.png'); ?> alt="Toggle market logo">
                </div>
            </div>
            <div class="col-md-4 follow">

            </div>
            <div class="col-md-4 copyright">
                2020 Toggle Hospitality. All rights reserved.
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/js/togglemarket.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendors/owl.carousel.min.js"></script>
</body>


</html>