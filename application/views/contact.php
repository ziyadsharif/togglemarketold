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


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>



</head>

<body>
    <div class="container-fluid alpha omega">
        <div class="nav-wrap-main fixed">
            <div class="col-md-11 mx-auto">
                <div class="logo">
                    <img src=<?php echo base_url('assets/images/toggleHospitality.png'); ?> alt="Toggle market logo">
                </div>
                <div class="right-panel">
                    <div class="tabs">
                        <ul>
                            <li><a href="<?php echo base_url_togglemarket(); ?>">About</a></li>
                            <li class="bluetxt"><a href="<?php echo base_url(); ?>">Toggle Hospitality</a></li>
                            <li class="current"><a href="<?php echo base_url("contactus/contact"); ?>">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-md-11 mx-auto">
            <div class="our-story">
                <h2>Contact Us</h2>
                <div class="form-holder">
                    <div class="form-row">
                        <label class="full">Name*</label>
                        <div class="half">
                            <input type="text" id="InputFirstName" name="InputFirstName">
                            <label>First Name</label>
                        </div>
                        <div class="half">
                            <input type="text" id="InputLastName" name="InputLastName">
                            <label>Last Name</label>
                        </div>
                    </div>
                    <div class="full-row">
                        <label>Email*</label>
                        <input type="text" id="InputEmail" name="InputEmail">
                    </div>
                    <div class="full-row">
                        <label>Subject</label>
                        <input type="text" id="InputSubject" name="InputSubject">
                    </div>
                    <div class="full-row">
                        <label>Message*</label>
                        <textarea class="txtarea" id="InputMessage" name="InputMessage"></textarea>
                    </div>
                    <div class="full-row">
                        <div class="g-recaptcha" data-sitekey="6LcUYtYZAAAAAK_hX0jB1b3FXGiHh0zZGrcCSs70" data-callback="recaptchaCallback"></div>
                        <span id="captcha_error" name="captcha_error" class="text-danger"></span>
                    </div>

                    <div class="full-row">
                        <input type="submit" class="cta-common" id="signupbtn" value="Send" onclick="$('#myDiv').
                         html('<div id=\'loading-image\'></div>'); send_email();"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="myDiv">
    </div>

    <div class="foo-wrapper container-fluid alpha omega">
        <div class="foo col-md-11 mx-auto">
            <div class="col-md-4 logo">
                <div class="logo">
                    <img src=<?php echo base_url('assets/images/toggleHospitality.png'); ?> alt="Toggle market logo">
                </div>
            </div>
            <div class="col-md-4 copyright">
                2020 Toggle Hospitality. All rights reserved.
            </div>
            <div class="col-md-4 follow hideit">
                Follow us
            </div>
        </div>
    </div>



    <script>
        var baseURL = "<?php echo base_url("index.php/ContactUs/"); ?>";
        var baseapiURL = "<?php echo base_url("index.php/ServicesController/ServiceCall/"); ?>";
        var FirstName = $("#InputFirstName").val();

        function send_email() {
            validate = validation("");
            if (!validate)
                return;

            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                alert('Capctah Verification Falied');
                return;
            }

            var qstrings = {
                Email: $("#InputEmail").val(),
                Fullname: FirstName,
                Message: $("#InputMessage").val(),
                Subject: $("#InputSubject").val(),
                Captcha: response
            };

            $.ajax({
                type: 'POST',
                url: baseapiURL + 'sendemailAPI',
                data: JSON.stringify(qstrings),

                beforeSend: function() {
                    $("#loading-image").show();
                },

                success: function(response) {
                    if (response.Success = 1) {
                        grecaptcha.reset();
                        showSucessDialogue('Email sent successfully to' + " " + $("#InputEmail").val());
                    } else {
                        showFailureDialogue('Email did not sent successfully');
                        return;
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    //alert(jqXHR + textStatus + errorThrown);
                    showFailureDialogue('Something is wrong, please try again');
                },
                complete: function() {
                    $("#loading-image").hide();
                },
                contentType: "application/json",
                dataType: 'json'
            });
        }

        var recaptchachecked;

        function recaptchaCallback() {
            //If we managed to get into this function it means that the user checked the checkbox.
            recaptchachecked = true;
        }

        function validation(mymessage) {

            fullfirstnameerrorMessage = "Please Enter The First Name";
            fullsecondnameerrorMessage = "Please Enter The Second Name";
            emailaddressnameerrorMessage = "Please Enter The Email Address";
            messageerrorMessage = "Please Type A Message";
            subjectnumbererrorMessage = "Please Enter The Subject";
            captchaerrorMessage = "Please Check The Captcha";

            var FullName = document.getElementsByName('InputFirstName')[0].value //string
            var SecondName = document.getElementsByName('InputLastName')[0].value //string
            var EmailAddress = document.getElementsByName('InputEmail')[0].value //int > 0
            var Subject = document.getElementsByName('InputSubject')[0].value
            var Message = document.getElementsByName('InputMessage')[0].value
            var Captcha = document.getElementsByName('captcha_error')[0].value


            if (FullName == "" || FullName == 0) {
                showFailureDialogue(fullfirstnameerrorMessage);
            } else if (SecondName == "" || SecondName == 0) {
                showFailureDialogue(fullsecondnameerrorMessage);
            } else if (EmailAddress == "" || EmailAddress == 0) {
                showFailureDialogue(emailaddressnameerrorMessage);
            } else if (Subject == "" || Subject == 0) {
                showFailureDialogue(subjectnumbererrorMessage);
            } else if (Message == "" || Message == 0) {
                showFailureDialogue(messageerrorMessage);
            } else if (!recaptchachecked) {
                showFailureDialogue(captchaerrorMessage);
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