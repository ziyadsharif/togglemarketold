<div class="search-wrapper">
    <div class="catalog-search-container mx-auto">
        <div class="catalog-search">
            <div class="toggle-switch-holder">
                <label class="toggle">
                    <input class="toggle-checkbox" type="checkbox">
                    <div class="toggle-switch"></div>
                </label>
            </div>
            <div class="search">
                <form action="<?php echo base_url(); ?>index.php/home/productsearch" method="get" autocomplete="off">
                    <input type="text" name="search" placeholder="Search" id="searchField">
                </form>
                <div class="browseSwitch" id="catBrowser">
                    Browse categories
                    <div class="nav-icon3">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="controls-holder">
                <div class="project-select">
                    <h5>Working on project:</h5>
                    <select id="ddlProjects" name="ddlProjects">
                        <!-- <option value="JW Marriot Harageisa">JW Marriot Harageisa</option>
                            <option value="Kempinski Amman">Kempinski Amman</option>
                            <option value="Fairmont Harare">Fairmont Harare</option>
                            <option value="Hilton Abu Dhabi">Hilton Abu Dhabi</option>
                            <option value="Add Project">+ Add Project</option> -->
                    </select>
                </div>
                <div class="cart-icon">
                    <a href="#">
                        <img src="<?php echo base_url(); ?>assets/images/cartIcon.png">
                    </a>
                </div>
                <div class="profile-avi trigger">
                    <img src="<?php echo base_url(); ?>assets/images/avi.png">
                    <span class="ncount hideifempty">0</span>
                    <div class="dropdown">
                        <ul>
                            <li>David Hume</li>
                            <li><a href="<?php echo base_url("index.php/authenticate/accountdetails/"); ?>">My Account</a></li>
                            <li><a href="<?php echo base_url("index.php/Buyerdashboard/buyerdashboard"); ?>">Dashboard</a></li>
                            <li><a href="#">Messages <span class="hideifempty">0</span></a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Quotations</a></li>
                            <li><a href="<?php echo base_url("index.php/ServicesController/ServiceCall/Logout");?>">Log out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="catsearch-results-container">
        <div class="col-md-11 mx-auto page-container">
            <div class="results-container">
                <div class="menu-single">
                    <h3>Guestroom Accessories</h3>
                    <ul>
                        <li><a href="#">Leather Items</a></li>
                        <li><a href="#">Bathroom Accessories</a></li>
                        <li><a href="#">Wardrobe Supplies</a></li>
                    </ul>
                </div>
                <div class="menu-single">
                    <h3>Guestroom Electronics</h3>
                    <ul>
                        <li><a href="#">Kettle Irons</a></li>
                        <li><a href="#">Hairdryers</a></li>
                        <li><a href="#">Scales</a></li>
                        <li><a href="#">Alarms</a></li>
                        <li><a href="#">Clocks</a></li>
                        <li><a href="#">Safes</a></li>
                        <li><a href="#">Minibars</a></li>
                        <li><a href="#">Televisions</a></li>
                        <li><a href="#">Coffee Machines</a></li>
                    </ul>
                </div>
                <div class="menu-single">
                    <h3>Linen</h3>
                    <ul>
                        <li><a href="#">Bed Linen</a></li>
                        <li><a href="#">Bedding</a></li>
                        <li><a href="#">Towels</a></li>
                        <li><a href="#">Baby Linen</a></li>
                    </ul>
                </div>
                <div class="menu-single">
                    <h3>Housekeeping</h3>
                    <ul>
                        <li><a href="#">Cleaning Supplies</a></li>
                        <li><a href="#">Machines</a></li>
                        <li><a href="#">Trolleys</a></li>
                        <li><a href="#">Laundry</a></li>
                        <li><a href="#">Baby Items</a></li>
                    </ul>
                </div>
                <div class="menu-single">
                    <h3>Front Office</h3>
                    <ul>
                        <li><a href="#">Leather Items</a></li>
                        <li><a href="#">Signage</a></li>
                        <li><a href="#">Safes</a></li>
                        <li><a href="#">Trolleys</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>
                <div class="menu-single">
                    <h3>Food & Beverage</h3>
                    <ul>
                        <li><a href="#">Chinaware</a></li>
                        <li><a href="#">Glassware</a></li>
                        <li><a href="#">Flatware</a></li>
                        <li><a href="#">Holloware</a></li>
                        <li><a href="#">Buffetware</a></li>
                        <li><a href="#">Restaurant Equipment</a></li>
                        <li><a href="#">Bar Supplies</a></li>
                        <li><a href="#">Tableware</a></li>
                    </ul>
                </div>
                <div class="menu-single">
                    <h3>Banqueting</h3>
                    <ul>
                        <li><a href="#">Cookware</a></li>
                        <li><a href="#">Food containers</a></li>
                        <li><a href="#">Utensils</a></li>
                        <li><a href="#">Shelving Units</a></li>
                    </ul>
                </div>
                <div class="menu-single">
                    <h3>Stewarding</h3>
                    <ul>
                        <li><a href="#">Cookware</a></li>
                        <li><a href="#">Food containers</a></li>
                        <li><a href="#">Utensils</a></li>
                        <li><a href="#">Shelving Units</a></li>
                    </ul>
                </div>
            </div>
            <div class="searchResults-container">
                <div class="list-results-col">
                    <ul id="search-result">
                        <!--<li><a href="#">Teapot</a></li>
                        <li><a href="#">Teacup</a></li>
                        <li><a href="#">Teaspoon</a></li>
                        <li><a href="#">Tea candles</a></li>
                        <li><a href="#">Teak Board</a></li>-->
                    </ul>
                    <!--<h3>Did you mean?</h3>
                    <ul>
                        <li><a href="#">Saucer</a></li>
                        <li><a href="#">Infuser</a></li>
                        <li><a href="#">Sugar Jar</a></li>
                        <li><a href="#">Strainers</a></li>
                    </ul>-->
                </div>
                <!--<div class="image-results-col">
                    <div class="prod-single">
                        <a href="#">
                            <img src="<?php echo base_url(); ?>assets/images/catalogImg2.png">
                            <p class="prodBy">Antoinette by Steelite</p>
                            <p>Embossed Porcelain</p>
                            <p>Teacup</p>
                        </a>
                    </div>
                    <div class="prod-single">
                        <a href="#">
                            <img src="<?php echo base_url(); ?>assets/images/catalogImg2.png">
                            <p class="prodBy">Antoinette by Steelite</p>
                            <p>Embossed Porcelain</p>
                            <p>Teacup</p>
                        </a>
                    </div>
                    <div class="prod-single">
                        <a href="#">
                            <img src="<?php echo base_url(); ?>assets/images/catalogImg2.png">
                            <p class="prodBy">Antoinette by Steelite</p>
                            <p>Embossed Porcelain</p>
                            <p>Teacup</p>
                        </a>
                    </div>
                    <div class="prod-single">
                        <a href="#">
                            <img src="<?php echo base_url(); ?>assets/images/catalogImg2.png">
                            <p class="prodBy">Antoinette by Steelite</p>
                            <p>Embossed Porcelain</p>
                            <p>Teacup</p>
                        </a>
                    </div>
                    <div class="prod-single">
                        <a href="#">
                            <img src="<?php echo base_url(); ?>assets/images/catalogImg2.png">
                            <p class="prodBy">Antoinette by Steelite</p>
                            <p>Embossed Porcelain</p>
                            <p>Teacup</p>
                        </a>
                    </div>
                    <div class="prod-single">
                        <a href="#">
                            <img src="<?php echo base_url(); ?>assets/images/catalogImg2.png">
                            <p class="prodBy">Antoinette by Steelite</p>
                            <p>Embossed Porcelain</p>
                            <p>Teacup</p>
                        </a>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</div>

<!-- <div class="loader" id="loaderdiv">
    <div class="gifHolder">
        <img src="<?php echo base_url("assets/images/loader.gif"); ?>">
    </div>
</div> -->

<script type="text/javascript">
    var baseURL = "<?php echo base_url("index.php/ContactUs/"); ?>";
    var baseapiURL = "<?php echo base_url("index.php/ServicesController/ServiceCall/"); ?>";
    $(document).ready(function() {


        var jsonObj;
        $.ajax({
            type: 'GET',
            url: baseapiURL + 'getprojectsAPI',
            contentType: "application/json",
            success: function(response) {
                if (response) {
                    jsonObj = JSON.parse(response);
                    var hasprojects = jsonObj.getBuyer.length > 0 ? true : false;
                    var mySelect = $('#ddlProjects');
                    $.each(jsonObj.getBuyer, function(val, text) {
                        text = jsonObj.getBuyer[val].projectName
                        mySelect.append(
                            $('<option></option>').val(jsonObj.getBuyer[val]._id).html(text)
                        );
                    });
                    //tgmSelect($("#ddlProjects"));
                } else {
                    showFailureDialogue("The service is temporarily unavailable, countries are not uploaded properly")
                    return;
                }
            }

        });
        $("#ddlProjects").change(function() {
            var qstrings = {
                ProjectId: $(this).val(),
            };
            $.ajax({
                type: 'POST',
                url: baseapiURL + 'saveprojectid',
                data: JSON.stringify(qstrings),
                contentType: "application/json",
                dataType: 'json',
                /* success: function() {
                    window.location = "<?php echo base_url() ?>index.php/authenticate/resetpassword";
                } */
            });

        });

        function delay(callback, ms) {
            var timer = 0;
            return function() {
                var context = this,
                    args = arguments;
                clearTimeout(timer);
                timer = setTimeout(function() {
                    callback.apply(context, args);
                }, ms || 0);
            };
        }

        $('#searchField').keyup(delay(function(e) {
            $('#search-result').html('');
            var searchField = $("#searchField").val();
            if ($(this).val().length >= 3) {
                $("#search-result").show();
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: baseURL3 + 'suggestiveSearch',
                    data: {
                        searchField: searchField
                    },
                    success: function(response) {
                        $('#search-result').html('');

                        var keywords = [];
                        $.each(response.data, function(i, item) {
                            keywords.push(item.highlight.Name[0]);
                        });

                        let dup = [...new Set(keywords)];

                        $.each(dup, function(i, item) {
                            var rows = "<li><a href='<?php echo base_url(); ?>index.php/home/productsearch?search=" + item + "'>" + item + "</a></li>";
                            $('#search-result').append(rows);
                        });
                    },
                    error: function(response) {}
                });
            }

            return false;
        }, 500));
    });

    function logout() {
        
        $.ajax({
                type: 'POST',
                url: baseapiURL + 'Logout',
                contentType: "application/json",
                dataType: 'json',
            });

        
    }

    $(document).ajaxStart(function() {
        $("#loaderdiv").css("display", "flex");
    });

    $(document).ajaxComplete(function() {
        $("#loaderdiv").css("display", "none");
    });
</script>