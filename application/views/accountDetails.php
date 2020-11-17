<!doctype html>
<html lang="en">

<?php
require("header.php");
require("menucatalogue.php");
?>

<body>
    <div class="container-fluid alpha omega blue-bg">
        <!-- <div class="search-wrapper">
            <div class="catalog-search-container mx-auto">
                <div class="catalog-search">
                    <div class="toggle-switch-holder">
                        <label class="toggle">
                            <input class="toggle-checkbox" type="checkbox">
                            <div class="toggle-switch"></div>
                        </label>
                    </div>
                    <div class="search">
                        <input type="text" placeholder="Search" id="searchField">
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
                            <select id="selectbox1" class="select">
                                <option value="JW Marriot Harageisa">JW Marriot Harageisa</option>
                                <option value="Kempinski Amman">Kempinski Amman</option>
                                <option value="Fairmont Harare">Fairmont Harare</option>
                                <option value="Hilton Abu Dhabi">Hilton Abu Dhabi</option>
                                <option value="Add Project">+ Add Project</option>
                            </select>
                        </div>
                        <div class="cart-icon">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>assets/images/cartIcon.png">
                            </a>
                        </div>
                        <div class="profile-avi trigger">
                            <img src="<?php echo base_url(); ?>assets/images/avi.png">
                            <span class="ncount hideifempty">3</span>
                            <div class="dropdown">
                                <ul>
                                    <li>David Hume</li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="<?php echo base_url("index.php/buyerdashboard/buyerdashboard"); ?>">Dashboard</a></li>
                                    <li><a href="#">Messages <span class="hideifempty">3</span></a></li>
                                    <li><a href="#">Projects</a></li>
                                    <li><a href="#">Quotations</a></li>
                                    <li><a href="<?php echo base_url("index.php/authenticate/logout"); ?>">Log out</a></li>
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
                            <ul>
                                <li><a href="#">Teapot</a></li>
                                <li><a href="#">Teacup</a></li>
                                <li><a href="#">Teaspoon</a></li>
                                <li><a href="#">Tea candles</a></li>
                                <li><a href="#">Teak Board</a></li>
                            </ul>
                            <h3>Did you mean?</h3>
                            <ul>
                                <li><a href="#">Saucer</a></li>
                                <li><a href="#">Infuser</a></li>
                                <li><a href="#">Sugar Jar</a></li>
                                <li><a href="#">Strainers</a></li>
                            </ul>
                        </div>
                        <div class="image-results-col">
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
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="clearfix"></div>
        <div class="col-md-11 mx-auto page-container push-from-top account-container">
            <div class="col-md-12">
                <h2>My Account</h2>
            </div>
            <div class="sidebar-nav">
                <ul>
                    <li class="account"><a href="#">Account Details</a></li>
                    <li class="assetRegister"><a href="#">Asset Register</a></li>
                    <li class="security"><a href="<?php echo base_url("index.php/authenticate/accountsecurity"); ?>">Security</a></li>
                    <li class="verification"><a href="<?php echo base_url("index.php/authenticate/accountverification"); ?>">Verification</a></li>
                    <li class="settings"><a href="<?php echo base_url("index.php/authenticate/accountsettings"); ?>">Account Settings</a></li>
                </ul>
            </div>
            <div class="form-view">
                <!-- Account details view -->
                <div class="form-container">
                    <h2>Account Details</h2>
                    <div class="form-segment general-form">
                        <h3>Personal information</h3>
                        <div class="left-col">
                            <p>
                                Changing your email and
                                mobile number will require
                                identity confirmation.
                            </p>
                            <p>
                                If you no longer have
                                access to these lines
                                please contact us here
                                for technical assistance.
                            </p>
                        </div>
                        <div class="right-col">
                            <div class="formRow half">
                                <label>First name</label>
                                <input type="text" class="form-control dropdown_font" id="InputFullNameAccountDetails" Name="InputFullNameAccountDetails" required="required">
                            </div>
                            <div class="formRow half">
                                <label>Last name</label>
                                <input type="text" class="form-control dropdown_font" id="InputLastNameAccountDetails" Name="InputLastNameAccountDetails" required="required">
                            </div>
                            <div class="formRow full">
                                <label>Nationality</label>
                                <select class="form-control dropdown_font" id="InputCountryAccountDetails" Name="InputCountryAccountDetails" required="required">
                                    <option selected="selected">Select The Nationality</option>
                                </select>
                            </div>
                            <div class="formRow bit">
                                <label>Date of Birth</label>
                                <input type="text" class="form-control dropdown_font" id="InputDobAccountDetails" Name="InputDobAccountDetails" required="required">
                            </div>
                            <div class="formRow full">
                                <input type="button" class="cta-common" value="Save Changes" onclick="SaveAccountDetails()">
                            </div>
                        </div>
                    </div>

                    <div class="form-segment general-form">
                        <h3>Contact information</h3>
                        <div class="left-col">
                            <p>
                                Changing your email and
                                mobile number will require
                                identity confirmation.
                            </p>
                            <p>
                                If you no longer have
                                access to these lines
                                please contact us here
                                for technical assistance.
                            </p>
                        </div>
                        <div class="right-col">
                            <div class="formRow full">
                                <label>Email address</label>
                                <input type="text" class="form-control dropdown_font" id="InputEmailAddress" Name="InputEmailAddress" required="required">
                                <label class="msg">We'll never share your email with anyone else.</label>
                            </div>
                            <div class="formRow twobits">
                                <label>Ext.</label>
                                <select>
                                    <option>+971</option>
                                    <option>+972</option>
                                    <option>+973</option>
                                    <option>+921</option>
                                </select>
                            </div>
                            <div class="formRow bit">
                                <label>Mobile number</label>
                                <input type="text" class="form-control dropdown_font" id="InputMobileNumber" Name="InputMobileNumber" required="required">
                            </div>
                            <div class="formRow full">
                                <input type="button" class="cta-common" value="Save Changes" onclick="SaveContactInformation()">
                            </div>
                        </div>
                    </div>

                    <div class="form-segment general-form">
                        <h3>Company Details</h3>
                        <div class="left-col">
                            <p>
                                Changing your email and
                                mobile number will require
                                identity confirmation.
                            </p>
                            <p>
                                If you no longer have
                                access to these lines
                                please contact us here
                                for technical assistance.
                            </p>
                        </div>
                        <div class="right-col">
                            <div class="formRow half">
                                <?php
                                if (isset($_SESSION['CompanyName']))
                                    $CompnayName = $_SESSION['CompanyName'] ?>
                                <label>Company name</label>
                                <!--  <input type="text" value="<?php $CompnayName ?>"> -->
                                <input type="text" class="form-control dropdown_font" id="InputCompanyName" Name="InputCompanyName" required="required">
                            </div>
                            <div class="formRow half">
                                <label>Jurisdiction</label>
                                <select class="form-control dropdown_font" id="InputCompanyBranchType" Name="InputCompanyBranchType" required="required">
                                    <option selected="selected">Jurisdiction</option>
                                </select>
                            </div>
                            <div class="formRow full">
                                <label>Address</label>
                                <input type="text" class="form-control dropdown_font" id="InputCompanyAddress" Name="InputCompanyAddress" required="required">
                            </div>
                            <div class="formRow half">
                                <label>Country</label>
                                <select class="form-control dropdown_font" id="InputCompanyCountry" Name="InputCompanyCountry" required="required">
                                    <option selected="selected">Select The Country</option>
                                </select>
                            </div>
                            <div class="formRow half">
                                <label>City</label>
                                <select class="form-control dropdown_font" id="InputCompanyCity" Name="InputCompanyCity" required="required">
                                    <option value="" disabled selected selected="selected">Select The City</option>
                                </select>
                            </div>
                            <div class="formRow full">
                                <label>Your designation within the company</label>
                                <input type="text" class="form-control dropdown_font" id="InputYourDesignation" Name="InputYourDesignation" required="required">
                            </div>
                            <div class="formRow full">
                                <input type="button" class="cta-common" value="Save Changes" onclick="SaveCompanyDetails()">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- xxxx Account details view xxxx -->
            </div>
        </div>
    </div>

    <div class="foo-wrapper inner container-fluid alpha omega">
        <div class="foo col-md-11 mx-auto">
            <div class="col-md-4 logo">
                <div class="logo">
                    <img src="<?php echo base_url(); ?>assets/images/LOGOTRANS-1@2x.png" alt="Toggle market logo">
                </div>
            </div>
            <div class="col-md-4 follow">

            </div>
            <div class="col-md-4 copyright">
                2020 Toggle Market. All rights reserved.
            </div>
        </div>
    </div>

    <div class="loader" id="loaderdiv">
        <div class="gifHolder">
            <img src="<?php echo base_url("assets/images/loader.gif"); ?>">
        </div>
    </div>

    <script>
        var baseURL = "<?php echo base_url("index.php/ContactUs/"); ?>";
        var baseapiURL = "<?php echo base_url("index.php/ServicesController/ServiceCall/"); ?>";

        $(document).ready(function() {

            $.ajax({
                type: 'GET',
                url: baseapiURL + 'getCountriesAPI',
                contentType: "application/json",
                success: function(response) {
                    if (response) {
                        var jsonObj = JSON.parse(response);
                        var mySelect = $('#InputCountryAccountDetails');
                        var companydetailsCountries = $('#InputCompanyCountry');
                        $.each(jsonObj.countryList, function(val, text) {
                            text = jsonObj.countryList[val].countryName
                            mySelect.append(
                                $('<option></option>').val(jsonObj.countryList[val].id).html(text)
                            );
                            companydetailsCountries.append(
                                $('<option></option>').val(jsonObj.countryList[val].id).html(text)
                            );
                        });
                    } else {
                        showFailureDialogue("The service is temporarily unavailable, countries are not uploaded properly")
                        return;
                    }
                }

            });
        });

        $("#InputCompanyCountry").change(function() {
            var qstrings = {
                selectedCountryId: $(this).val()
            };
            $.ajax({
                type: "POST",
                url: baseapiURL + "getCititesAPI",
                contentType: "application/json",
                data: JSON.stringify(qstrings),

                success: function(response) {
                    if (response) {
                        var jsonObj = JSON.parse(response);
                        var mySelect = $('#InputCompanyCity');
                        mySelect.empty();
                        $.each(jsonObj.citiesList, function(val, text) {
                            text = jsonObj.citiesList[val]
                            mySelect.append(
                                $('<option></option>').val(text).html(text)
                            );
                        });

                    } else {
                        showFailureDialogue("The service is temporarily unavailable, cities are not uploaded properly")
                        return;
                    }
                }

            });
        });

        $.ajax({
            type: 'GET',
            url: baseapiURL + 'getTypesAPI',
            contentType: "application/json",
            success: function(response) {
                if (response) {
                    var jsonObj = JSON.parse(response);
                    var mySelect = $('#InputCompanyBranchType');
                    $.each(jsonObj.getTypeData, function(val, text) {
                        text = jsonObj.getTypeData[val].name
                        mySelect.append(
                            $('<option></option>').val(jsonObj.getTypeData[val]._id).html(text)
                        );
                    });

                } else {
                    showFailureDialogue("The service is temporarily unavailable, jurisdiction is not uploaded properly")
                    return;
                }
            }

        });

        $(document).ajaxStart(function() {
            $("#loaderdiv").css("display", "flex");
        });

        $(document).ajaxComplete(function() {
            $("#loaderdiv").css("display", "none");
        });

        function SaveAccountDetails() {

            validate = accountdetailsValidation("");
            if (!validate)
                return;

            var FirstName = $("#InputFullNameAccountDetails").val();
            var LastName = $("#InputLastNameAccountDetails").val();
            var DOB = $("#InputDobAccountDetails").val();
            var Nationality = $("#InputCountryAccountDetails option:selected").text();

            var qstrings = {
                FirstNameAccountDetails: FirstName,
                LastNameAccountDetails: LastName,
                DOBAccountDetails: DOB,
                NationalityAccountDetails: Nationality,
            };

            $.ajax({
                type: 'POST',
                url: baseapiURL + 'saveaccountdetailsAPI',
                data: JSON.stringify(qstrings),
                contentType: "application/json",
                success: function(response) {
                    if (response == 200) {
                        //var jsonObj = JSON.parse(response);
                        console.log(response);
                        showSucessDialogue("Updates are saved successfully")
                    } else {
                        showFailureDialogue("The service is temporarily unavailable, please try again")
                        return;
                    }
                }

            });
        }

        function SaveContactInformation() {

            validate = contactinfoValidation("");
            if (!validate)
                return;

            var Email = $("#InputEmailAddress").val();
            var MobileNumber = $("#InputMobileNumber").val();

            var qstrings = {
                EmailAccountDetails: Email,
                MobileNumberAccountDetails: MobileNumber,
            };

            $.ajax({
                type: 'POST',
                url: baseapiURL + 'savecontactinformationaccountdetailsAPI',
                data: JSON.stringify(qstrings),
                contentType: "application/json",
                success: function(response) {
                    if (response == 200) {
                        //var jsonObj = JSON.parse(response);
                        showSucessDialogue("Updates are saved successfully")
                    } else {
                        showFailureDialogue("The service is temporarily unavailable, please try again")
                        return;
                    }
                }

            });
        }

        function SaveCompanyDetails() {
            validate = companydetailsValidation("");
            if (!validate)
                return;

            var qstrings = {
                CompanyName: $("#InputCompanyName").val(),
                CompanyAddress: $("#InputCompanyAddress").val(),
                CompanyCity: $("#InputCompanyCity option:selected").text(),
                CompanyCountry: $("#InputCompanyCountry option:selected").text(),
                CompanyBranchTypeId: $("#InputCompanyBranchType option:selected").val(),
                Designation: $("#InputYourDesignation").val(),

            };

            $.ajax({
                type: 'GET',
                url: baseapiURL + 'getcompanydetails',
                data: JSON.stringify(qstrings),
                contentType: "application/json",
                success: function(response) {
                    if (response == 200) {
                        $.ajax({
                            type: 'POST',
                            url: baseapiURL + 'savecompanyinfoaccountdetailsAPI',
                            data: JSON.stringify(qstrings),
                            contentType: "application/json",
                            success: function(response) {
                                if (response == 200) {
                                    showSucessDialogue("Updates are saved successfully")
                                } else {
                                    showFailureDialogue("The service is temporarily unavailable, please try again")
                                    return;
                                }
                            }

                        });
                    } else {
                        showFailureDialogue("The service is temporarily unavailable, please try again")
                        return;
                    }
                }

            });

        }

        function accountdetailsValidation(mymessage) {

            fullnameerrorMessage = "Please Enter The Full Name";
            lastnameerrorMessage = "Please Enter The Last Name";
            nationalityerrorMessage = "Please Select The Nationality";
            doberrorMessage = "Please Select The Date OF Birth";

            var FullName = document.getElementsByName('InputFullNameAccountDetails')[0].value
            var LastName = document.getElementsByName('InputLastNameAccountDetails')[0].value;
            var dob = document.getElementsByName('InputDobAccountDetails')[0].value;
            var Nationality = $("#InputCountryAccountDetails option:selected").text();

            if (FullName == "" || FullName == 0) {
                showFailureDialogue(fullnameerrorMessage);
            } else if (LastName == "" || LastName == 0) {
                showFailureDialogue(lastnameerrorMessage);
            } else if (dob == "" || dob == 0) {
                showFailureDialogue(doberrorMessage);
            } else if (Nationality == "Select The Nationality" || Nationality == 0) {
                showFailureDialogue(nationalityerrorMessage);
            } else {
                return true;
            }
        }

        function contactinfoValidation(mymessage) {

            emailerrorMessage = "Please Enter The Email";
            mobileerrorMessage = "Please Enter The Mobile Number";

            var Email = document.getElementsByName('InputEmailAddress')[0].value
            var MobileNumber = document.getElementsByName('InputMobileNumber')[0].value;

            if (Email == "" || Email == 0) {
                showFailureDialogue(emailerrorMessage);
            } else if (MobileNumber == "" || MobileNumber == 0) {
                showFailureDialogue(mobileerrorMessage);
            } else {
                return true;
            }
        }

        function companydetailsValidation(mymessage) {

            companynameerrorMessage = "Please Enter The Company Name";
            companyaddresserrorMessage = "Please Enter The Company Address";
            cityerrorMessage = "Please Select The City";
            countryerrorMessage = "Please Select The Country";
            typeerrorMessage = "Please Select The Jurisdiction";
            designationerrorMessage = "Please Enter The Designation";

            var CompanyName = document.getElementsByName('InputCompanyName')[0].value
            var CompanyAddress = document.getElementsByName('InputCompanyAddress')[0].value;
            var City = document.getElementsByName('InputCompanyCity')[0].value;
            var Country = document.getElementsByName('InputCompanyCountry')[0].value
            var Type = $("#InputCompanyBranchType option:selected").text();
            var yourDesignation = document.getElementsByName('InputYourDesignation')[0].value

            if (CompanyName == "" || CompanyName == 0) {
                showFailureDialogue(companynameerrorMessage);
            } else if (Type == "Jurisdiction" || Type == 0) {
                showFailureDialogue(typeerrorMessage);
            } else if (CompanyAddress == "" || CompanyAddress == 0) {
                showFailureDialogue(companyaddresserrorMessage);
            } else if (Country == "Select The Country" || Country == 0) {
                showFailureDialogue(countryerrorMessage);
            } else if (City == "Select The City" || City == 0) {
                showFailureDialogue(cityerrorMessage);
            } else if (yourDesignation == "" || yourDesignation == 0) {
                showFailureDialogue(designationerrorMessage);
            } else {
                return true;
            }
        }

        function showFailureDialogue(mymessage) {

            if (!alertify.errorAlert) {
                alertify.dialog('errorAlert', function factory() {
                    return {
                        build: function() {
                            var errorHeader = '<span class="fa fa-times-circle fa-2x" ' +
                                'style="vertical-align:middle;color:#e10000;">' +
                                '</span> Error';
                            this.setHeader(errorHeader);
                        }
                    };
                }, true, 'alert');
            }
            alertify
                .errorAlert(mymessage);
        }

        function showSucessDialogue(mymessage) {

            if (!alertify.successAlert) {
                alertify.dialog('successAlert', function factory() {
                    return {
                        build: function() {
                            var errorHeader = '<span class="fa fa-check-circle fa-2x" ' +
                                'style="vertical-align:middle;color:#3C763D;">' +
                                '</span> Success';
                            this.setHeader(errorHeader);
                        }
                    };
                }, true, 'alert');
            }
            alertify
                .successAlert(mymessage);
        }
    </script>

</body>

</html>