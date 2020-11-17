<!doctype html>
<html lang="en">
    
<?php
require("header.php");
require("menucatalogue.php");
?>

<body>
    <div class="container-fluid alpha omega blue-bg">
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
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Messages <span class="hideifempty">3</span></a></li>
                                    <li><a href="#">Projects</a></li>
                                    <li><a href="#">Quotations</a></li>
                                    <li><a href="#">Log out</a></li>
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
        </div>
        <div class="clearfix"></div>
        <div class="col-md-11 mx-auto page-container push-from-top account-container">
            <div class="col-md-12">
                <h2>My Account</h2>
            </div>
            <div class="sidebar-nav">
                <ul>
                    <li class="account"><a href="<?php echo base_url("index.php/authenticate/accountdetails"); ?>">Account Details</a></li>
                    <li class="assetRegister"><a href="#">Asset Register</a></li>
                    <li class="security"><a href="<?php echo base_url("index.php/authenticate/accountsecurity"); ?>">Security</a></li>
                    <li class="verification"><a href="<?php echo base_url("index.php/authenticate/accountverification"); ?>">Verification</a></li>
                    <li class="settings"><a href="<?php echo base_url("index.php/authenticate/accountsettings"); ?>">Account Settings</a></li>
                </ul>
            </div>
            <div class="form-view">
                <!-- Security view -->
                <div class="form-container">
                    <h2>Security</h2>
                    <div class="form-segment general-form">
                        <h3>Change Password</h3>
                        <div class="left-col">
                            <p>
                                Changing your email and
                                mobile number will require
                                identity confirmation.
                            </p>
                            <p>
                                If you no longer have
                                access to these lines
                                please <a href="#">contact us here</a>
                                for technical assistance.
                            </p>
                        </div>
                        <div class="right-col">
                            <div class="formRow full">
                                <label>Current Password</label>
                                <input type="password" class="form-control dropdown_font" id="InputCurrentPassword" Name="InputCurrentPassword" required="required">
                            </div>
                            <div class="formRow full">
                                <label>New Password</label>
                                <input type="password" class="form-control dropdown_font" id="InputNewPassword" Name="InputNewPassword" required="required">
                            </div>
                            <div class="formRow full">
                                <label>Confirm New Password</label>
                                <input type="password" class="form-control dropdown_font" id="InputConfirmNewPassword" Name="InputConfirmNewPassword" required="required">

                                <div style="display:none" class="error_signup" id="error_signup">
                                    New Password and Confirm New Password mis-match. Please Try again.
                                </div>
                            </div>

                            <div class="formRow full">
                                <input type="button" class="cta-common" id="changepassword" value="Save Changes" onclick="ChangePassword()">
                            </div>
                        </div>
                    </div>

                    <div class="form-segment general-form">
                        <h3>Two-factor authentication</h3>
                        <div class="left-col">
                            <p>
                                Changing your email and
                                mobile number will require
                                identity confirmation.
                            </p>
                            <p>
                                If you no longer have
                                access to these lines
                                please <a href="#">contact us here</a>
                                for technical assistance.
                            </p>
                        </div>
                        <div class="right-col">
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
                                <input type="text">
                            </div>
                            <div class="formRow full">
                                <label>Confirmation code (4 digits)</label>
                                <input type="text">
                            </div>
                            <div class="formRow full">
                                <a href="#">Send confirmation code</a>
                            </div>
                            <div class="formRow full">
                                <input type="button" class="cta-common" value="Activate Two-factor authentication">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- xxxx Security view xxxx -->
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

</body>

<script>
    var baseURL = "<?php echo base_url("index.php/ContactUs/"); ?>";
    var baseapiURL = "<?php echo base_url("index.php/ServicesController/ServiceCall/"); ?>";

    function ChangePassword() {
        validate = changepasswordValidation("");
        if (!validate)
            return;

        var Password = $("#InputNewPassword").val();
        var PasswordC = $("#InputConfirmNewPassword").val();

        if (Password != PasswordC) {
            $("#error_signup").fadeIn();
            document.getElementById("changepassword").value = "Change Password";
            document.getElementById("changepassword").disabled = false;
            return false;
        }
        $("#error_signup").fadeOut();


        var qstrings = {
            CurrentPassword: $("#InputCurrentPassword").val(),
            NewPassword: $("#InputNewPassword").val(),
        };

        $.ajax({
            type: 'POST',
            url: baseapiURL + 'changepasswordAPI',
            contentType: "application/json",
            data: JSON.stringify(qstrings),
            success: function(response) {
                if (response == 200) {
                    showSucessDialogue("Password has been changed successfully")
                } else {
                    showFailureDialogue("The service is temporarily unavailable")
                    return;
                }
            }

        });
    }

    $(document).ajaxStart(function() {
        $("#loaderdiv").css("display", "flex");
    });

    $(document).ajaxComplete(function() {
        $("#loaderdiv").css("display", "none");
    });


    function changepasswordValidation(mymessage) {

        currentpassworderrorMessage = "Please Enter The Current Password";
        newpassworderrorMessage = "Please Enter The New Password";
        confirmnewpassworderrorMessage = "Please Enter The Confirm New Password";

        var CurrentPassword = document.getElementsByName('InputCurrentPassword')[0].value
        var NewPassword = document.getElementsByName('InputNewPassword')[0].value;
        var ConfirmNewPassword = document.getElementsByName('InputConfirmNewPassword')[0].value;

        if (CurrentPassword == "" || CurrentPassword == 0) {
            showFailureDialogue(currentpassworderrorMessage);
        } else if (NewPassword == "" || NewPassword == 0) {
            showFailureDialogue(newpassworderrorMessage);
        } else if (ConfirmNewPassword == "" || ConfirmNewPassword == 0) {
            showFailureDialogue(confirmnewpassworderrorMessage);
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

<script src="<?php echo base_url(); ?>assets/js/components/fileupload.js"></script>


</html>