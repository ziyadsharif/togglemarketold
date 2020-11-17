<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Togglemarket</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link href=<?php echo base_url('assets/css/main.css'); ?> rel="stylesheet">
    <script src=<?php echo base_url('assets/js/togglemarket.min.js'); ?>> </script>
    <script src=<?php echo base_url('assets/js/vendors/owl.carousel.min.js'); ?>></script>

    <!-- include the script -->
    <script src="<?php echo base_url(); ?>assets/alertifyjs/alertify.min.js"></script>
    <!-- include the style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/alertifyjs/alertify.min.css" />
    <!-- include a theme -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/alertifyjs/themes/default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="container-fluid alpha omega">
        <div class="banner-wrap">
            <div class="banner-container">
                <div class="img-container">
                    <img src="<?php echo base_url(); ?>assets/images/Hospitalityreal-bottombit.png" />
                </div>
                <div class="content-container">
                    <div class="content-holder">
                        <div class="content-inner">
                            <h2>Hospitality Procurement Redefined</h2>
                            <p>
                                Digitising procurement processes to increase efficiency. <br>We
                                do the heavy lifting so you don’t have to.
                            </p>
                            <a href="#" class="cta-common">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popup-wrapper">
        <div class="popup-container">
            <div class="content-area">
                <div class="signup-modal">
                    <div class="logo">
                        <img src="<?php echo base_url(); ?>assets/images/toggleHospitality.png" alt="Toggle market logo">
                    </div>
                    <div class="form-container">
                        <div class="form-heading">
                            Step 1. <span>Account Details</span>
                        </div>
                        <div class="general-form">
                            <div class="formRow half">
                                <input type="text" id="InputCompanyName" required="required" Name="InputCompanyName" placeholder="Company Name">
                            </div>
                            <div class="formRow half">
                                <select class="form-control dropdown_font" id="InputCompanyBranchType" Name="InputCompanyBranchType" required="required">
                                    <option selected="selected">Jurisdiction</option>
                                </select>
                                <!-- <select>
                                    <option>Jurisdiction</option>
                                    <option>Jurisdiction</option>
                                    <option>Jurisdiction</option>
                                    <option>Jurisdiction</option>
                                    <option>Jurisdiction</option>
                                    <option>Jurisdiction</option>
                                </select> -->
                            </div>
                            <div class="formRow full">
                                <input type="text" id="InputCompanyAddress" Name="InputCompanyAddress" placeholder="Address">
                            </div>
                            <div class="formRow half">
                                <select class="form-control dropdown_font" id="InputCompanyCountry" Name="InputCompanyCountry" required="required">
                                    <option selected="selected">Select The Country</option>
                                </select>
                                <!--  <select>
                                    <option>Country</option>
                                    <option>Pakistan</option>
                                    <option>UAE</option>
                                    <option>Japan</option>
                                    <option>Malaysia</option>
                                    <option>Australia</option>
                                </select> -->
                            </div>
                            <div class="formRow half">
                                <select class="form-control dropdown_font" id="InputCompanyCity" Name="InputCompanyCity" required="required">
                                    <option selected="selected">Select The City</option>
                                </select>
                            </div>
                            <div class="formRow full">
                                <input type="text" id="InputYourDesignation" Name="InputYourDesignation" required="required" placeholder="Your designation within the company">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-ctas">
                                <a href="#">Login instead</a>
                                <input type="button" class="cta-common" id="signupbtn" value="Next Step" onclick="add_user();"></button>
                                <!--  <input type="button" value="Next Step" class="cta-common"> -->
                            </div>
                        </div>
                    </div>

                    <div class="timeline-container">
                        <div class="img"><img src="<?php echo base_url(); ?>assets/images/Image9@2x.png"></div>
                        <p>
                            From trolleys to teapots; Toggle Market
                            is a one stop shop for all hotel goods.
                        </p>
                        <div class="timeline">
                            <!-- Space left for timeline representation -->
                        </div>
                    </div>
                </div>
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
                        var mySelect = $('#InputCompanyCountry');
                        $.each(jsonObj.countryList, function(val, text) {
                            text = jsonObj.countryList[val].countryName
                            mySelect.append(
                                $('<option></option>').val(jsonObj.countryList[val].id).html(text)
                            );
                        });
                    } else {
                        showFailureDialogue("The service is temporarily unavailable, countries are not uploaded properly")
                        return;
                    }
                }

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


        });
        $(document).ajaxStart(function() {
            $("#loaderdiv").css("display", "block");
        });

        $(document).ajaxComplete(function() {
            $("#loaderdiv").css("display", "none");
        });

        function add_user() {

            validate = validation("");
            if (!validate)
                return;


            var Password = $("#InputPassword").val();
            var PasswordC = $("#InputConfirmPassword").val();

            if (Password != PasswordC) {
                $("#error_signup").fadeIn();
                document.getElementById("signupbtn").value = "Sign up";
                document.getElementById("signupbtn").disabled = false;
                return false;
            }
            $("#error_signup").fadeOut();

            var SelectedCountry = $("#InputCompanyCountry option:selected").text();
            var SelectedTypeId = $("#InputCompanyBranchType option:selected").val();

            var qstrings = {
                CompanyName: $("#InputCompanyName").val(),
                CompanyAddress: $("#InputCompanyAddress").val(),
                CompanyCity: $("#InputCompanyCity").val(),
                CompanyCountry: SelectedCountry,
                CompanyBranchType: SelectedTypeId,
                Designation: $("#InputYourDesignation").val(),

            };

            $.ajax({
                type: 'GET',
                url: baseapiURL + 'gotocontactDetails',
                data: JSON.stringify(qstrings),

                success: function(response) {
                    if (response.Success = 1) {
                        showSucessDialogue("Thanks for registering with us. We will notify you shortly for account activation!")
                    } else {
                        showFailureDialogue("The registration is not successful, please try again")
                        return;
                    }
                },
                contentType: "application/json",
                dataType: 'json'
            });
        }

        function validation(mymessage) {

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
            } else if (CompanyAddress == "" || CompanyAddress == 0) {
                showFailureDialogue(companyaddresserrorMessage);
            } else if (City == "Select The City" || City == 0) {
                showFailureDialogue(cityerrorMessage);
            } else if (Country == "Select The Country" || Country == 0) {
                showFailureDialogue(countryerrorMessage);
            } else if (Type == "Jurisdiction" || Type == 0) {
                showFailureDialogue(typeerrorMessage);
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

<script src=<?php echo base_url('assets/js/components/fileupload.js'); ?>></script>

</html>