<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Togglemarket</title>
    <link href="build/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/togglemarket.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendors/owl.carousel.min.js"></script>

    <!-- include the script -->
    <script src="<?php echo base_url(); ?>assets/alertifyjs/alertify.min.js"></script>
    <!-- include the style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/alertifyjs/alertify.min.css" />
    <!-- include a theme -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/alertifyjs/themes/default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
</head>

<body>
    <div class="container-fluid alpha omega">
        <div class="banner-wrap">
            <div class="banner-container">
                <div class="img-container">
                    <img src="build/images/Hospitalityreal-bottombit.png" />
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
                <div class="login-modal">
                    <div class="logo">
                        <img src="build/images/LOGOTRANS-1@2x.png" alt="Toggle market logo">
                    </div>
                    <h4>Password Reset</h4>
                    <p>type your new password</p>
                    <div class="general-form">
                        <div class="formRow full">
                            <input type="Password" id="InputNewPassword" name="InputNewPassword" placeholder="Password">
                        </div>
                        <div class="formRow full no-margin-bottom">
                            <input type="Password" id="InputConfirmNewPassword" name="InputConfirmNewPassword" placeholder="Confirm new password">
                        </div>
                        <div class="clearfix"></div>
                        <div class="clearfix"></div>
                        <div class="cta-holder">
                            <input type="button" id="btnchangepassword" class="cta-common" value="Change Password" onclick="changepassword()">
                        </div>
                        <div class="error_signup" id="error_signup" style="display:none">
                            Passwords mis-match. Please Try again.
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
                    <img src="build/images/LOGOTRANS-1@2x.png" alt="Toggle market logo">
                </div>
            </div>
            <div class="col-md-4 follow">

            </div>
            <div class="col-md-4 copyright">
                2020 Toggle Market. All rights reserved.
            </div>
        </div>
    </div>

    <script>
        var baseapiURL = "<?php echo base_url("index.php/ServicesController/ServiceCall/"); ?>";

        var NewPassword;
        var ConfirmNewPassword;

        function changepassword() {
            NewPassword = $("#InputNewPassword").val();
            ConfirmNewPassword = $("#InputConfirmNewPassword").val();

            validate = changepasswordValidation("");
            if (!validate)
                return;

            if (NewPassword != ConfirmNewPassword) {
                $("#error_signup").fadeIn();
                document.getElementById("btnchangepassword").value = "Change Password";
                document.getElementById("btnchangepassword").disabled = false;
                return false;
            }
            $("#error_signup").fadeOut();

            var qstrings = {
                NewPassword: NewPassword,
                ConfirmNewPassword: ConfirmNewPassword,
            };
            $.ajax({
                type: 'POST',
                url: baseapiURL + 'forgotpasswordAPI',
                data: JSON.stringify(qstrings),
                contentType: "application/json",
                dataType: 'json',
                success: function(response) {
                    if (response == 200) {
                        showSuccessDialogue("Password changed successfully!")
                        return;
                    } else {
                        showFailureDialogue("The service is temporarily unavailable, please try again")
                        return;
                    }
                }

            });
        }


        function changepasswordValidation(mymessage) {

            newpassworderrorMessage = "Please Enter The New Password";
            confirmnewpassworerrorMessage = "Please Enter Confirm New Password";

            var NewPasswordEmail = document.getElementsByName('InputNewPassword')[0].value
            var ConfirmNewPasswordLoginPassword = document.getElementsByName('InputConfirmNewPassword')[0].value;

            if (NewPasswordEmail == "" || NewPasswordEmail == 0) {
                showFailureDialogue(newpassworderrorMessage);
            } else if (ConfirmNewPasswordLoginPassword == "" || ConfirmNewPasswordLoginPassword == 0) {
                showFailureDialogue(confirmnewpassworerrorMessage);
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

        function showSuccessDialogue(mymessage) {

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
<script src="build/js/togglemarket.min.js"></script>
<script src="build/js/components/fileupload.js"></script>
<script src="build/js/vendors/owl.carousel.min.js"></script>

</html>