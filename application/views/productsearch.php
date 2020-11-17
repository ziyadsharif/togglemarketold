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

<body class="ps-view">
<div class="container-fluid alpha omega">
    
    <?php
        require("menucatalogue.php");
    ?>

    <div class="clearfix"></div>
    <div class="mx-auto search-filter">
        <div class="filter-col">
            <div class="ps-inner">
                <div class="ps-filter-ico">
                    <img src="<?php echo base_url(); ?>build/images/filterIcon.png">
                    <h4>Filter By:</h4>
                </div>
                <div class="accordion ps-filter" id="ps-filter">
                    <div class="tabs">
                        <div class="tab">
                            <input type="checkbox" id="ps-category">
                            <label class="tab-label" for="ps-category">Category</label>
                            <label class="sub-label" for="ps-category">All</label>
                            <div class="tab-content autoSelectInputs">
                                <ul>
                                    <li><input type="radio" name="ps-cat" value="Guestroom Accessories"><label for="ps-category">Guestroom Accessories</label></li>
                                    <li><input type="radio" name="ps-cat" value="Guestroom Electronics"><label for="ps-category">Guestroom Electronics</label></li>
                                    <li><input type="radio" name="ps-cat" value="Linen"><label for="ps-category">Linen</label></li>
                                    <li><input type="radio" name="ps-cat" value="Housekeeping"><label for="ps-category">Housekeeping</label></li>
                                    <li><input type="radio" name="ps-cat" value="Front office"><label for="ps-category">Front office</label></li>
                                    <li><input type="radio" name="ps-cat" value="Food & Beverages"><label for="ps-category">Food & Beverages</label></li>
                                    <li><input type="radio" name="ps-cat" value="Banqueting"><label for="ps-category">Banqueting</label></li>
                                    <li><input type="radio" name="ps-cat" value="Stewarding"><label for="ps-category">Stewarding</label></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab">
                            <input type="checkbox" id="ps-color">
                            <label class="tab-label" for="ps-color">Color</label>
                            <label class="sub-label" for="ps-color">All</label>
                            <div class="tab-content autoSelectInputs">
                            <ul class="ps-colorSelect" id="psColor">
                                <li value="#000000"><input type="radio" name="ps-color" value="Black"><label for="ps-color"><span class="ps-color"></span>Black</label></li>
                                <li value="#B3BFBF"><input type="radio" name="ps-color" value="Silver"><label for="ps-color"><span class="ps-color"></span>Sliver</label></li>
                                <li value="#D09A6E"><input type="radio" name="ps-color" value="Bronze"><label for="ps-color"><span class="ps-color"></span>Bronze</label></li>
                                <li value="#ffffff"><input type="radio" name="ps-color" value="White"><label for="ps-color"><span class="ps-color"></span>White</label></li>
                                <li value="#445172"><input type="radio" name="ps-color" value="Navy Blue"><label for="ps-color"><span class="ps-color"></span>Navy Blue</label></li>
                            </ul>
                            </div>
                        </div>
                        <div class="tab">
                            <input type="checkbox" id="ps-material">
                            <label class="tab-label" for="ps-material">Materials</label>
                            <label class="sub-label" for="ps-material">All</label>
                            <div class="tab-content autoSelectInputs">
                                <ul>
                                    <li><input type="checkbox" value="Cleaning Supplies"><label>Cleaning Supplies</label></li>
                                    <li><input type="checkbox" value="Machines"><label>Machines</label></li>
                                    <li><input type="checkbox" value="Trolleys"><label>Trolleys</label></li>
                                    <li><input type="checkbox" value="Laundry Supplies"><label>Laundry Supplies</label></li>
                                    <li><input type="checkbox" value="Baby Items"><label>Baby Items</label></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab">
                            <input type="checkbox" id="ps-size">
                            <label class="tab-label" for="ps-size">Size</label>
                            <label class="sub-label" for="ps-size">All</label>
                            <div class="tab-content autoSelectInputs">
                                <ul>
                                    <li><input type="radio" name="ps-size" value="Large"><label for="ps-size">Large</label></li>
                                    <li><input type="radio" name="ps-size" value="Medium"><label for="ps-size">Medium</label></li>
                                    <li><input type="radio" name="ps-size" value="Small"><label for="ps-size">Small</label></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="ps-dimentions general-form">
                    <div class="input-row">
                        <label>Width</label>
                        <div class="inputs">
                            <input type="text" placeholder="cm">
                            <span class="ps-seprator">-</span>
                            <input type="text" placeholder="cm">
                        </div>
                    </div>
                    <div class="input-row">
                        <label>Height</label>
                        <div class="inputs">
                            <input type="text" placeholder="cm">
                            <span class="ps-seprator">-</span>
                            <input type="text" placeholder="cm">
                        </div>
                    </div>
                    <div class="input-row">
                        <label>Depth</label>
                        <div class="inputs">
                            <input type="text" placeholder="cm">
                            <span class="ps-seprator">-</span>
                            <input type="text" placeholder="cm">
                        </div>
                    </div>
                </div>
                <div class="ps-submit">
                    <input type="submit" class="cta-common" value="Search">
                </div>-->
            </div>
        </div>

        <div class="results-col">
            <div class="blue-bg">
                <!--<div class="sortby">
                    <label>Sort by:</label>
                    <select class="select">
                        <option>Project Relevance</option>
                        <option>Project Relevance</option>
                        <option>Project Relevance</option>
                        <option>Project Relevance</option>
                        <option>Project Relevance</option>
                    </select>
                </div>-->
                <div class="clearfix"></div>
                <div class="heading-info">
                    <div class="approved-ico">
                        <img src="<?php echo base_url(); ?>build/images/approvedIcon.png">
                    </div>
                    <div class="headings-set">
                        <h3>Steelite Popular Collection</h3>
                        <a href="<?php echo base_url(); ?>index.php/home/productsearch?search=steelite">Show all from Steelite</a>
                    </div>
                </div>

                <div id="approved-products" class="prod-results prod-results-carousel  owl-carousel owl-theme">
                    <!--<div class="item">
                        <div class="star-ico">
                            <img src="<?php echo base_url(); ?>build/images/approvedIcon.png">
                        </div>
                        <a href="#">
                            <div class="img">
                                <img src="<?php echo base_url(); ?>build/images/verifiedProd1.png">
                            </div>
                        </a>
                        <div class="info">
                            <a href="#">Ascolia</a>
                            <p>
                                10 Compartment <br>Cleaning Trolley
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="star-ico">
                            <img src="<?php echo base_url(); ?>build/images/approvedIcon.png">
                        </div>
                        <div class="img">
                            <img src="<?php echo base_url(); ?>build/images/verifiedProd1.png">
                        </div>
                        <div class="info">
                            <a href="#">Ascolia</a>
                            <p>
                                10 Compartment <br>Cleaning Trolley
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="star-ico">
                            <img src="<?php echo base_url(); ?>build/images/approvedIcon.png">
                        </div>
                        <div class="img">
                            <img src="<?php echo base_url(); ?>build/images/verifiedProd2.png">
                        </div>
                        <div class="info">
                            <a href="#">Ascolia</a>
                            <p>
                                10 Compartment <br>Cleaning Trolley
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="star-ico">
                            <img src="<?php echo base_url(); ?>build/images/approvedIcon.png">
                        </div>
                        <div class="img">
                            <img src="<?php echo base_url(); ?>build/images/verifiedProd3.png">
                        </div>
                        <div class="info">
                            <a href="#">Ascolia</a>
                            <p>
                                10 Compartment <br>Cleaning Trolley
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="star-ico">
                            <img src="<?php echo base_url(); ?>build/images/approvedIcon.png">
                        </div>
                        <div class="img">
                            <img src="<?php echo base_url(); ?>build/images/verifiedProd4.png">
                        </div>
                        <div class="info">
                            <a href="#">Ascolia</a>
                            <p>
                                10 Compartment <br>Cleaning Trolley
                            </p>
                        </div>
                    </div>-->
                </div>
            </div>
            <div class="clearfix"></div>

            <div id="catalogue-products" class="prod-results listing">

            </div>
            <div class="pagination-container">
                <div id="page-identity" class="pagination">
                    <div class="pg-prev-ctrls disabled">
                        <a href="#" onclick="return false;" id="backward"><<</a>
                        <a href="#" onclick="return false;" id="pg-prev">Previous</a>
                    </div>
                    <!--<ul>
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul>-->
                    <div class="pg-next-ctrls">
                        <a href="#" id="pg-next">Next</a>
                        <a href="#" id="forward">>></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="foo-wrapper container-fluid alpha omega">
    <div class="foo col-md-11 mx-auto">
        <div class="col-md-4 logo alpha">
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
    $(document).ready(function () {
        LoadData();
        GetApprovedProducts();
        /*function delay(callback, ms) {
            var timer = 0;
            return function() {
                var context = this, args = arguments;
                clearTimeout(timer);
                timer = setTimeout(function () {
                callback.apply(context, args);
                }, ms || 0);
            };
        }

        $('#searchField').keyup(delay(function (e) {
            $('#search-result').html('');
            var searchField = $("#searchField").val();
            if ($(this).val().length >= 3) {
                    $("#search-result").show();
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: baseURL3 + 'suggestiveSearch',
                        data: { searchField: searchField },
                        success: function (response) {
                            $('#search-result').html('');

                            var keywords = [];
                            $.each(response.data, function(i, item) {
                                keywords.push(item.highlight.Name[0]);
                            });

                            let dup = [...new Set(keywords)];

                            $.each(dup, function(i, item) {
                                var rows = "<li><a href='?search="+item+"'>"+item+"</a></li>";
                                $('#search-result').append(rows);
                            });
                        },
                        error: function (response) {
                        }
                });
            }
                
            return false;
        }, 500));*/
    });

    $(document).ajaxStart(function() {
            $("#loaderdiv").css("display", "flex");
        });

        $(document).ajaxComplete(function() {
            $("#loaderdiv").css("display", "none");
        });

    function LoadData() {
        $.ajax({
              type: 'POST',
              dataType: "json",
              url: baseURL3 + 'getproducts',
              data: {
                pageNum: 1,
                pageUrl: getUrlParameters("page"),
                search: getUrlParameters("search")
              },
              success: function(response) {
                var rowdata = "";
                document.getElementById("catalogue-products").innerHTML = "";
                $.each(response.data, function(i, item) {
                    if (item.product.Images.length != 0) {
                        var rows = "<a href='"+baseURL2+"index.php/home/productdetails?productid="+item.product.ProductId+"'><div class='item'><div class='img'><img src='" + baseURL2 + "productImages/" + item.product.Images[0]['ImageName'] + "'></div><div class='info'><a href='#'>" + item.product.BrandName + "</a><p>" + item.product.Name + "</p></div></div></a>";
                        $('#catalogue-products').append(rows);
                        rowdata += rows;
                    }
                });
                LoadPagination(response.pagination.totalCount, response.pagination.pageLimit, 1, getUrlParameters("page"));
              },
            });
            return false;
    }

    function GetApprovedProducts() {
        $.ajax({
              type: 'POST',
              dataType: "json",
              url: baseURL3 + 'getproducts',
              data: {
                pageNum: 1,
                search: "Terramesa Mocha",
                pageLimit: 4,
              },
              success: function(response) {
                var rowdata = "";
                document.getElementById("approved-products").innerHTML = "";
                $.each(response.data, function(i, item) {
                    if (item.product.Images.length != 0) {
                        var rows = "<a href='"+baseURL2+"index.php/home/productdetails?productid="+item.product.ProductId+"'><div class='item' style='margin-right:18px'><div class='star-ico'><img src='<?php echo base_url(); ?>build/images/approvedIcon.png'></div><div class='img'><img src='" + baseURL2 + "productImages/" + item.product.Images[0]['ImageName'] + "'></div><div class='info'><a href='#'>" + item.product.BrandName + "</a><p>" + item.product.Name + "</p></div></div></a>";
                        $('#approved-products').append(rows);
                    }
                });
              },
            });
            return false;
    }

    function LoadPagination(productsNum, pagelimit, pageNum, pageUrl) {
        $.ajax({
              type: 'POST',
              dataType: "json",
              url: baseURL3 + 'generatePagination',
              data: {
                productsNum: productsNum,
                pagelimit: pagelimit,
                pageNum: pageNum,
                pageUrl: pageUrl
              },
              success: function(response) {
                document.getElementById("page-identity").innerHTML = "";
                $('#page-identity').append(response);
              },
            });
            return false;
        }

        $(document).ready(function() {
          $(document).on("click", ".next-page", function() {
            var pageNo = $(this).attr("data-pageno");

            var intPageNo = parseInt(pageNo);
            intPageNo = intPageNo + 1;
            var urlParams = new URLSearchParams(window.location.search);

            filteredUrl = removeParam("page", window.location.href);
            if (filteredUrl.includes("?")) {
              window.history.pushState("", "productsearch", "" + filteredUrl + "&page=" + intPageNo);
            } else {
              window.history.pushState("", "productsearch", "" + filteredUrl + "?page=" + intPageNo);
            }
            $.ajax({
              type: 'POST',
              dataType: "json",
              url: baseURL3 + 'getproducts',
              data: {
                pageNum: intPageNo,
                search: getUrlParameters("search")
              },
              success: function(response) {
                
                document.getElementById("catalogue-products").innerHTML = "";
                document.getElementById("page-identity").innerHTML = "";
                $.each(response.data, function(i, item) {
                    if (item.product.Images.length != 0) {
                        var rows = "<a href='"+baseURL2+"index.php/home/productdetails?productid="+item.product.ProductId+"'><div class='item'><div class='img'><img src='" + baseURL2 + "productImages/" + item.product.Images[0]['ImageName'] + "'></div><div class='info'><a href='#'>" + item.product.BrandName + "</a><p>" + item.product.Name + "</p></div></div></a>";
                        $('#catalogue-products').append(rows);
                    }
                });
                LoadPagination(response.pagination.totalCount, response.pagination.pageLimit, intPageNo, getUrlParameters("page"));
                topFunction();
              },
            });
          });
        });

        $(document).ready(function() {
          $(document).on("click", ".previous-page", function() {
            var pageNo = $(this).attr("data-pageno");
            var intPageNo = parseInt(pageNo);
            intPageNo = intPageNo - 1;

            var urlParams = new URLSearchParams(window.location.search);

            filteredUrl = removeParam("page", window.location.href);
            if (filteredUrl.includes("?")) {
              window.history.pushState("", "productsearch", "" + filteredUrl + "&page=" + intPageNo);
            } else {
              window.history.pushState("", "productsearch", "" + filteredUrl + "?page=" + intPageNo);
            }
            $.ajax({
              type: 'POST',
              dataType: "json",
              url: baseURL3 + 'getproducts',
              data: {
                pageNum: intPageNo,
                search: getUrlParameters("search")
              },
              success: function(response) {
                
                document.getElementById("catalogue-products").innerHTML = "";
                document.getElementById("page-identity").innerHTML = "";
                $.each(response.data, function(i, item) {
                    if (item.product.Images.length != 0) {
                        var rows = "<a href='"+baseURL2+"index.php/home/productdetails?productid="+item.product.ProductId+"'><div class='item'><div class='img'><img src='" + baseURL2 + "productImages/" + item.product.Images[0]['ImageName'] + "'></div><div class='info'><a href='#'>" + item.product.BrandName + "</a><p>" + item.product.Name + "</p></div></div></a>";
                        $('#catalogue-products').append(rows);
                    }
                });
                LoadPagination(response.pagination.totalCount, response.pagination.pageLimit, intPageNo, getUrlParameters("page"));
                topFunction();
              },
            });
          });
        });

        $(document).ready(function() {
          $(document).on("click", ".forward", function() {
            var pageNo = $(this).attr("data-pageno");

            var urlParams = new URLSearchParams(window.location.search);

            filteredUrl = removeParam("page", window.location.href);
            if (filteredUrl.includes("?")) {
              window.history.pushState("", "productsearch", "" + filteredUrl + "&page=" + pageNo);
            } else {
              window.history.pushState("", "productsearch", "" + filteredUrl + "?page=" + pageNo);
            }
            $.ajax({
              type: 'POST',
              dataType: "json",
              url: baseURL3 + 'getproducts',
              data: {
                pageNum: pageNo,
                search: getUrlParameters("search")
              },
              success: function(response) {
                
                document.getElementById("catalogue-products").innerHTML = "";
                document.getElementById("page-identity").innerHTML = "";
                $.each(response.data, function(i, item) {
                    if (item.product.Images.length != 0) {
                        var rows = "<a href='"+baseURL2+"index.php/home/productdetails?productid="+item.product.ProductId+"'><div class='item'><div class='img'><img src='" + baseURL2 + "productImages/" + item.product.Images[0]['ImageName'] + "'></div><div class='info'><a href='#'>" + item.product.BrandName + "</a><p>" + item.product.Name + "</p></div></div></a>";
                        $('#catalogue-products').append(rows);
                    }
                });
                LoadPagination(response.pagination.totalCount, response.pagination.pageLimit, pageNo, getUrlParameters("page"));
                topFunction();
              },
            });
          });
        });

        $(document).ready(function() {
          $(document).on("click", ".backward", function() {
            var pageNo = $(this).attr("data-pageno");
            //var intPageNo = parseInt(pageNo);
            //intPageNo = intPageNo - 1;

            var urlParams = new URLSearchParams(window.location.search);

            filteredUrl = removeParam("page", window.location.href);
            if (filteredUrl.includes("?")) {
              window.history.pushState("", "productsearch", "" + filteredUrl + "&page=" + pageNo);
            } else {
              window.history.pushState("", "productsearch", "" + filteredUrl + "?page=" + pageNo);
            }
            $.ajax({
              type: 'POST',
              dataType: "json",
              url: baseURL3 + 'getproducts',
              data: {
                pageNum: pageNo,
                search: getUrlParameters("search")
              },
              success: function(response) {
                
                document.getElementById("catalogue-products").innerHTML = "";
                document.getElementById("page-identity").innerHTML = "";
                $.each(response.data, function(i, item) {
                    if (item.product.Images.length != 0) {
                        var rows = "<a href='"+baseURL2+"index.php/home/productdetails?productid="+item.product.ProductId+"'><div class='item'><div class='img'><img src='" + baseURL2 + "productImages/" + item.product.Images[0]['ImageName'] + "'></div><div class='info'><a href='#'>" + item.product.BrandName + "</a><p>" + item.product.Name + "</p></div></div></a>";
                        $('#catalogue-products').append(rows);
                    }
                });
                LoadPagination(response.pagination.totalCount, response.pagination.pageLimit, pageNo, getUrlParameters("page"));
                topFunction();
              },
            });
          });
        });

        $(document).ready(function() {
          $(document).on("click", ".page-item", function() {
            var pageNo = $(this).attr("data-pageno");
            var urlParams = new URLSearchParams(window.location.search);

            filteredUrl = removeParam("page", window.location.href);
            if (filteredUrl.includes("?")) {
              window.history.pushState("", "productsearch", "" + filteredUrl + "&page=" + pageNo);
            } else {
              window.history.pushState("", "productsearch", "" + filteredUrl + "?page=" + pageNo);
            }
            $.ajax({
              type: 'POST',
              dataType: "json",
              url: baseURL3 + 'getproducts',
              data: {
                pageNum: pageNo,
                search: getUrlParameters("search")
              },
              success: function(response) {
                
                document.getElementById("catalogue-products").innerHTML = "";
                document.getElementById("page-identity").innerHTML = "";
                $.each(response.data, function(i, item) {
                    if (item.product.Images.length != 0) {
                        var rows = "<a href='"+baseURL2+"index.php/home/productdetails?productid="+item.product.ProductId+"'><div class='item'><div class='img'><img src='" + baseURL2 + "productImages/" + item.product.Images[0]['ImageName'] + "'></div><div class='info'><a href='#'>" + item.product.BrandName + "</a><p>" + item.product.Name + "</p></div></div></a>";
                        $('#catalogue-products').append(rows);
                    }
                });
                LoadPagination(response.pagination.totalCount, response.pagination.pageLimit, pageNo, getUrlParameters("page"));
                topFunction();
              },
            });
          });
        });

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