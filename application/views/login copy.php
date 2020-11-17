<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Togglemarket</title>
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
                <div class="login-modal">
                    <div class="logo">
                        <img src="<?php echo base_url(); ?>assets/images/LOGOTRANS-1@2x.png" alt="Toggle market logo">
                    </div>
                    <h4>Log in</h4>
                    <p>to view the catalogue</p>
                    <div class="general-form">
                        <div class="formRow full">
                            <input type="text" id="InputLoginEmail" name="InputLoginEmail" placeholder="Email">
                        </div>
                        <div class="formRow full no-margin-bottom">
                            <input type="password" id="InputLoginPassword" name="InputLoginPassword" placeholder="Password">
                        </div>
                        <div class="clearfix"></div>
                        <a href="javascript:void(0)" onclick="forgotpassword()">Forgot Password?</a> <!--  ?php echo base_url("index.php/authenticate/accountdetails"); ?>-->
                        <div class="clearfix"></div>
                        <div class="cta-holder">
                            <a href="<?php echo base_url("index.php/authenticate/signup"); ?>">Create Account</a>
                            <input type="button" class="cta-common" value="Continue" onclick="login()">
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

    <div class="loader" id="loaderdiv" style="display:none">
        <div class="gifHolder">
            <img src="<?php echo base_url("assets/images/loader.gif"); ?>">
        </div>
    </div>


    <script>
        var baseURL = "<?php echo base_url("index.php/ContactUs/"); ?>";
        var baseapiURL = "<?php echo base_url("index.php/ServicesController/ServiceCall/"); ?>";

        function login() {

            validate = loginValidation("");
            if (!validate)
                return;

            var Email = $("#InputLoginEmail").val();
            var Password = $("#InputLoginPassword").val();

            var qstrings = {
                LoginEmail: Email,
                LoginPassword: Password,
            };
            $.ajax({
                type: 'POST',
                url: baseapiURL + 'loginAPI',
                data: JSON.stringify(qstrings),
                contentType: "application/json",
                dataType: 'json',
                success: function(response) {
                    if (response == 200) {
                        showSuccessDialogue("Login is successful!")
                        return;
                    } else {
                        showFailureDialogue("The service is temporarily unavailable, please try again")
                        return;
                    }
                }

            });
        }

        function forgotpassword() {

            $.confirm({
                title: 'Forgot Password!',
                content: '' +
                    '<form action="" class="formName">' +
                    '<div class="general-form">' +
                    '<div class="formRow full">' +
                    //'<label>Full Name</label>' +
                    '<div class="formRow full">' +
                    '<input type="text" placeholder="Full name" class="name form-control" required />' +
                    '</div class="formRow full">' +
                    '<input type="text" id="InputForgotPasswordEmail" name="InputLoginEmail" class="name form-control" placeholder="Email" required>' +
                    '</div>' +
                    '</div>' +
                    '</form>',
                buttons: {
                    formSubmit: {
                        text: 'Submit',
                        btnClass: 'btn-blue',
                        action: function() {
                            console.log('sumbit clicked');
                            var name = this.$content.find('.name').val();
                            var email = this.$content.find('.email').val();
                            if (!name) {
                                $.alert('provide a valid name');
                                return false;
                            }
                            if (!email) {
                                $.alert('provide a valid email');
                                return false;
                            }
                            $.alert('Your name is ' + name);
                            return false;
                        }
                    },
                    cancel: function() {
                        //close
                        console.log('cancel ran');
                        return false;
                    },
                },
                onContentReady: function() {
                    // bind to events

                    var jc = this;
                    this.$content.find('form').on('submit', function(e) {
                        // if the user submits the form by pressing enter in the field.
                        e.preventDefault();
                        //jc.$formSubmit.trigger('click'); // reference the button and click it
                    }); 
                }
            });

            /* validate = loginValidation("");
            if (!validate)
                return;

            var Email = $("#InputLoginEmail").val();
            var Password = $("#InputLoginPassword").val();

            var qstrings = {
                LoginEmail: Email,
                LoginPassword: Password,
            };

            $.ajax({
                type: 'POST',
                url: baseapiURL + 'loginAPI',
                data: JSON.stringify(qstrings),
                contentType: "application/json",
                success: function(response) {
                    if (response) {
                        var jsonObj = JSON.parse(response);
                    } else {
                        showFailureDialogue("The service is temporarily unavailable, please try again")
                        return;
                    }
                }

            }); */
        }

        $(document).ajaxStart(function() {
            $("#loaderdiv").css("display", "flex");
        });

        $(document).ajaxComplete(function() {
            $("#loaderdiv").css("display", "none");
        });

        function loginValidation(mymessage) {

            loginemailerrorMessage = "Please Enter The Email";
            loginpassworderrorMessage = "Please Enter The Password";

            var LoginEmail = document.getElementsByName('InputLoginEmail')[0].value
            var LoginPassword = document.getElementsByName('InputLoginPassword')[0].value;

            if (LoginEmail == "" || LoginEmail == 0) {
                showFailureDialogue(loginemailerrorMessage);
            } else if (LoginPassword == "" || LoginPassword == 0) {
                showFailureDialogue(loginpassworderrorMessage);
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

<script src="<?php echo base_url(); ?>assets/js/components/fileupload.js"></script>


</html>