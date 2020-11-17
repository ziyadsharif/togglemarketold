<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Togglemarket</title>
    <!--  <link rel="stylesheet" href="?php echo base_url(); ?>assets/css/style.css"> -->
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
            <div class="content-area" id="signup">
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
                            </div>
                            <div class="formRow full">
                                <input type="text" id="InputCompanyAddress" Name="InputCompanyAddress" placeholder="Address">
                            </div>
                            <div class="formRow half">
                                <select class="form-control dropdown_font" id="InputCompanyCountry" Name="InputCompanyCountry" required="required">
                                    <option value="" disabled selected selected="selected">Select The Country</option>
                                </select>
                            </div>
                            <div class="formRow half">
                                <select class="form-control dropdown_font" id="InputCompanyCity" Name="InputCompanyCity" required="required">
                                    <option value="" disabled selected selected="selected">Select The City</option>
                                </select>
                            </div>
                            <div class="formRow full">
                                <input type="text" id="InputYourDesignation" Name="InputYourDesignation" required="required" placeholder="Your designation within the company">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-ctas">
                                <a href="<?php echo base_url("index.php/authenticate/signin"); ?>">Login instead</a>
                                <input type="button" class="cta-common" id="signupbtn" value="Next Step" onclick="showcontactdetailsView();"></button>
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


        <div class="popup-container">
            <div class="content-area" id="contactdetails" style="display:none">
                <div class="signup-modal">
                    <div class="logo">
                        <img src="<?php echo base_url(); ?>assets/images/toggleHospitality.png" alt="Toggle market logo">
                    </div>
                    <div class="form-container">
                        <div class="form-heading">
                            Step 2. <span>Contact Details</span>
                        </div>
                        <div class="general-form">
                            <div class="formRow half">
                                <input type="text" id="InputFirstName" Name="InputFirstName" required="required" placeholder="First name">
                            </div>
                            <div class="formRow half">
                                <input type="text" id="InputLastName" Name="InputLastName" required="required" placeholder="Last name">
                            </div>
                            <div class="formRow full">
                                <input type="email" id="InputEmailAddress" Name="InputEmailAddress" required="required" placeholder="Email address">
                                <label class="msg">We'll never share your email with anyone else.</label>
                            </div>
                            <div class="formRow twobits">
                                <label>Ext.</label>
                                <select id="InputExtension" Name="InputExtension" required="required">
                                    <option>+971</option>
                                    <option>+972</option>
                                    <option>+973</option>
                                    <option>+921</option>
                                </select>
                            </div>
                            <div class="formRow bit">
                                <label>Mobile number</label>
                                <input type="text" id="InputMobileNumber" required="required" Name="InputMobileNumber">
                            </div>
                            <div class="formRow half">
                                <input type="password" id="InputPassword" required="required" Name="InputPassword" placeholder="Password">
                            </div>
                            <div class="formRow half">
                                <input type="password" id="InputConfirmPassword" required="required" Name="InputConfirmPassword" placeholder="Confirm">
                            </div>
                            <div style="color:red" class="error_signup" id="error_signup">
                                Passwords mis-match. Please Try again.
                            </div>
                            <div class="clearfix">
                                <label class="msg">Use 8 or more characters with a mix of letters & numbers</label>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-ctas">
                                <a href="#" onclick="showsignupView()">Go back</a>
                                <input type="button" value="Next Step" onclick="showaddprojectView();" class="cta-common">
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


        <div class="popup-container">
            <div class="content-area" id="addproject" style="display:none">
                <div class="signup-modal addProject">
                    <div class="logo">
                        <img src="<?php echo base_url(); ?>assets/images/toggleHospitality.png" alt="Toggle market logo">
                    </div>
                    <div class="form-container full">
                        <div class="form-heading">
                            Step 3. <span>Add Project</span>
                        </div>
                        <div class="general-form">
                            <div class="formRow half">
                                <input type="text" id="InputProjectName" required="required" Name="InputProjectName" placeholder="Project name">
                            </div>
                            <div class="formRow half">
                                <input type="text" id="InputClientName" required="required" Name="InputClientName" placeholder="Client's name">
                            </div>
                            <div class="formRow half">
                                <input type="text" id="InputCityAddProject" required="required" Name="InputCityAddProject" placeholder="City">
                            </div>
                            <div class="formRow half">
                                <input type="text" id="InputCountryAddProject" required="required" Name="InputCountryAddProject" placeholder="Country">
                            </div>
                            <div class="formRow half">
                                <textarea id="InputDescription" required="required" Name="InputDescription" placeholder="Description">Describe your project</textarea>
                            </div>
                            <div class="formRow half">
                                <div class="tgm_fileupload">
                                    <div class="box js">
                                        <div class="box__input">
                                            <input type="file" name="files[]" id="file" class="box__file" />
                                            <label for="file">
                                                <span class="box__dragndrop"> Drop files here or</span><br>
                                                <span class="selectCta">Select files</span>
                                            </label>
                                            <button type="submit" class="box__button">Upload</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="formRow half">
                                <h4>Looking for</h4>
                                <ul class="radioContainer">
                                    <li><input type="checkbox" checked> Furniture supplies</li>
                                    <li><input type="checkbox"> Furniture supplies</li>
                                </ul>
                            </div>

                            <div class="formRow half">
                                <h4>Star Rating</h4>
                                <fieldset class="rating" id="InputRating">
                                    <input type="radio" id="star5" name="rating" onClick="setRating(5);" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" id="star4" name="rating" onClick="setRating(4);" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input type="radio" id="star3" name="rating" onClick="setRating(3);" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" id="star2" name="rating" onClick="setRating(2);" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" id="star1" name="rating" onClick="setRating(1);" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </fieldset>
                            </div>
                            <div class="clearfix"></div>
                            <div class="areas-fields">
                                <h3>Add Areas (optional)</h3>
                                <div class="area-row">
                                    <div class="area-input">
                                        <input type="text" placeholder="Area 1">
                                    </div>
                                    <div class="area-input">
                                        <input type="text" placeholder="Budget">
                                    </div>
                                    <div class="area-input">
                                        <select>
                                            <option>Area Types</option>
                                            <option>Area Types</option>
                                            <option>Area Types</option>
                                            <option>Area Types</option>
                                            <option>Area Types</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="formRow full"></div>

                            <div class="clearfix"></div>
                            <div class="form-ctas">
                                <a href="#">Go back</a>
                                <input type="button" value="Add project & complete" class="cta-common">
                            </div>
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

            var errorsignup = document.getElementById("error_signup");
            error_signup.style.display = "none";
        });

        $(document).ajaxStart(function() {
            $("#loaderdiv").css("display", "flex");
        });

        $(document).ajaxComplete(function() {
            $("#loaderdiv").css("display", "none");
        });


        function showcontactdetailsView() {

            validate = accountdetailsValidation("");
            if (!validate)
                return;

            var qstrings = {
                CompanyName: $("#InputCompanyName").val(),
                CompanyAddress: $("#InputCompanyAddress").val(),
                CompanyCity: $("#InputCompanyCity").val(),
                CompanyCountry: $("#InputCompanyCountry option:selected").text(),
                CompanyBranchType: $("#InputCompanyBranchType option:selected").text(),
                Designation: $("#InputYourDesignation").val(),
            };

            $.ajax({
                type: "POST",
                url: baseapiURL + "GetUserDataCompanyDetails",
                contentType: "application/json",
                data: JSON.stringify(qstrings),

                success: function(response) {
                    if (response) {

                    } else {
                        showFailureDialogue("The service is temporarily unavailable");
                        return;
                    }
                }

            });

            var signupView = document.getElementById("signup");
            signupView.style.display = "none";
            $("#contactdetails").fadeIn("slow");

        }


        function CreateUser() {
            debugger;
            validate = contactdetailsValidation("");
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
                FirstName: $("#InputFirstName").val(),
                LastName: $("#InputLastName").val(),
                Email: $("#InputEmailAddress").val(),
                Extension: $("#InputExtension").val(),
                MobileNumber: $("#InputMobileNumber").val(),
                Password: $("#InputPassword").val(),
                ConfirmPassword: $("#InputConfirmPassword").val(),
            };

            $.ajax({
                type: 'POST',
                url: baseapiURL + 'createuserAPI',
                data: JSON.stringify(qstrings),
                success: function(response) {
                    if (response == 200) {
                        showSucessDialogue("Thanks for registering with us. We will notify you shortly for account activation!")
                    } else {
                        showFailureDialogue("The registration is not successful, please try again")
                        return;
                    }
                },
                contentType: "application/json",
                dataType: 'json',
            });
        }

        function showaddprojectView() {

            validate = contactdetailsValidation("");
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

            var contactView = document.getElementById("contactdetails");
            contactView.style.display = "none";
            $("#addproject").fadeIn("slow");

        }

        function showsignupView() {
            var contactdetailsView = document.getElementById("contactdetails");
            contactdetailsView.style.display = "none";
            $("#signup").fadeIn("slow");
        }

        var inputRating;

        function setRating(rating) {
            inputRating = rating;
        }

        function add_user() {

            validate = accountdetailsValidation("");
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
                url: baseapiURL + 'gotoaddproject',
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

        function accountdetailsValidation(mymessage) {

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

        function contactdetailsValidation(mymessage) {

            firstnameerrorMessage = "Please Enter The First Name";
            lastnameerrorMessage = "Please Enter The Last Name";
            emailaddresserrorMessage = "Please Enter The Email Address";
            extensionerrorMessage = "Please Select The Extension";
            mobilenumbererrorMessage = "Please Enter The Mobile Number";
            passworderrorMessage = "Please Enter The Password";
            confirmpassworderrorMessage = "Please Enter The Confirm Password";

            var FirstName = document.getElementsByName('InputFirstName')[0].value
            var LastName = document.getElementsByName('InputLastName')[0].value;
            var EmailAddress = document.getElementsByName('InputEmailAddress')[0].value;
            var Extension = $('#InputExtension option:selected').text();
            var MobileNumber = document.getElementsByName("InputMobileNumber")[0].value
            var Password = document.getElementsByName('InputPassword')[0].value
            var ConfirmPassword = document.getElementsByName('InputConfirmPassword')[0].value

            if (FirstName == "" || FirstName == 0) {
                showFailureDialogue(firstnameerrorMessage);
            } else if (LastName == "" || LastName == 0) {
                showFailureDialogue(lastnameerrorMessage);
            } else if (EmailAddress == "" || EmailAddress == 0) {
                showFailureDialogue(emailaddresserrorMessage);
            } else if (Extension == "Select The Extension" || Extension == 0) {
                showFailureDialogue(extensionerrorMessage);
            } else if (MobileNumber == "" || MobileNumber == 0) {
                showFailureDialogue(mobilenumbererrorMessage);
            } else if (Password == "" || Password == 0) {
                showFailureDialogue(passworderrorMessage);
            } else if (ConfirmPassword == "" || ConfirmPassword == 0) {
                showFailureDialogue(confirmpassworderrorMessage);
            } else {
                return true;
            }
        }

        function addprojectValidation(mymessage) {

            projectnameerrorMessage = "Please Enter The Project Name";
            clientnameerrorMessage = "Please Enter The Client Name";
            countryerrorMessage = "Please Select The Country";
            cityerrorMessage = "Please Select The City";
            descriptionererrorMessage = "Please Enter The Description";
            imageserrorMessage = "Please Upload The Images";

            var ProjectName = document.getElementsByName('InputProjectName')[0].value
            var ClientName = document.getElementsByName('InputClientName')[0].value;
            var Country = document.getElementsByName('InputCountryAddProject')[0].value;
            var City = $('#InputCityAddProject option:selected').text();
            var Description = document.getElementsByName("InputDescription")[0].value
            var Images = document.getElementsByName('file')[0].value

            if (ProjectName == "" || ProjectName == 0) {
                showFailureDialogue(projectnameerrorMessage);
            } else if (ClientName == "" || ClientName == 0) {
                showFailureDialogue(clientnameerrorMessage);
            } else if (Country == "" || Country == 0) {
                showFailureDialogue(countryerrorMessage);
            } else if (City == "Select The Extension" || City == 0) {
                showFailureDialogue(cityerrorMessage);
            } else if (Description == "" || Description == 0) {
                showFailureDialogue(descriptionererrorMessage);
            } else if (Images == "" || Images == 0) {
                showFailureDialogue(imageserrorMessage);
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