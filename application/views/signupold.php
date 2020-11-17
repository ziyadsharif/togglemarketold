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
          <img src=<?php echo base_url('assets/images/toggleHospitality.png'); ?> alt="Toggle hospitality logo">
        </div>
        <div class="right-panel">
          <div class="tabs">
            <ul>
              <li><a href="<?php echo base_url_togglemarket(); ?>">About</a></li>
              <li class="bluetxt"><a href="<?php echo base_url(); ?>">Toggle Hospitality</a></li>
              <li><a href="<?php echo base_url("contactus/contact"); ?>">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="col-md-11 mx-auto">
      <div class="our-story">
        <h2>Sign Up</h2>
        <div class="form-holder">


          <!--  <div class="form-row">
            <div class="form-check checkbox-togglemarket">
              <label style="color:#000;" for="InputAccountType">You Are?</label>
              <div class="half">
                <input type="radio" class="form-check-input" value="B" id="InputAccountType" name="InputAccountType">
                <label class="form-check-label" for="InputAccountType">Buyer</label>
              </div>
              <div class="half">
                <input type="radio" class="form-check-input" value="S" id="InputAccountType" name="InputAccountType" checked>
                <label class="form-check-label" for="InputAccountType">Seller</label>
              </div>
            </div>
          </div> -->

          <div class="form-row">

            <div class="half">
              <label>Full Name</label>
              <input type="text" id="InputFullName" required="required" Name="InputFullName" placeholder="Full Name">

            </div>
            <div class="half">
              <label>Email</label>
              <input type="text" id="InputEmail" required="required" Name="InputEmail" placeholder="Email address">

            </div>
          </div>

          <div class="form-row">

            <div class="half">
              <label>Mobile Number</label>
              <input type="text" id="InputMobileNumber" required="required" Name="InputMobileNumber" placeholder="Mobile Number">

            </div>
            <div class="half">
              <label>Nature Of Business</label>
              <input type="text" id="InputNatureOfBusiness" required="required" Name="InputNatureOfBusiness" placeholder="Nature Of Business">

            </div>
          </div>

          <div class="form-row">

            <div class="half">
              <label>Company Name</label>
              <input type="text" id="InputCompanyName" required="required" Name="InputCompanyName" placeholder="Company Name">

            </div>
            <div class="half">
              <label>Company Address</label>
              <input type="text" id="InputCompanyAddress" Name="InputCompanyAddress" placeholder="Company Address">

            </div>
          </div>

          <div class="form-row">

            <div class="half">
              <label>City</label>
              <select class="form-control dropdown_font" id="InputCompanyCity" Name="InputCompanyCity" required="required">
                <option selected="selected">Select The City</option>
              </select>
            </div>
            <div class="half">
              <label>Country</label>
              <select class="form-control dropdown_font" id="InputCompanyCountry" Name="InputCompanyCountry" required="required">
                <option selected="selected">Select The Country</option>
              </select>
            </div>
          </div>

          <div class="form-row">

            <div class="half">
              <label>Type</label>
              <select class="form-control dropdown_font" id="InputCompanyBranchType" Name="InputCompanyBranchType" required="required">
                <option selected="selected">Select Type</option>
                <!-- <option value="HO">Head Office</option>
                <option value="BR">Branch</option> -->
              </select>

            </div>
            <div class="half">
              <label>Your Designation</label>
              <input type="text" id="InputYourDesignation" Name="InputYourDesignation" required="required" placeholder="Your Designation">

            </div>
          </div>

          <div class="form-row">

            <div class="half">
              <label>Password</label>
              <input type="password" id="InputPassword" Name="InputPassword" required="required" placeholder="Password">

            </div>
            <div class="half">
              <label>Confirm Password</label>
              <input type="password" id="InputConfirmPassword" Name="InputConfirmPassword" required="required" placeholder="Confirm Password">
            </div>
            <div class="error_signup" id="error_signup">
              Passwords mis-match. Please Try again.
            </div>
          </div>
          <div class=" full-row">
            <!--  <input type="submit" class="btn btn-primary btn-Login" id="signupbtn" value="Sign up" onclick="$('#myDiv').
              html('<div id=\'loading-image\'></div>'); add_user();"></button> -->
            <input type="submit" class="btn btn-primary btn-Login" id="signupbtn" value="Sign up" onclick="add_user();"></button>
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
            showFailureDialogue("The service is temporarily unavailable, countries are not uploaded properly")
            return;
          }
        }

      });


    });
    $(document).ajaxStart(function() {
      $("#loaderdiv").css("display", "flex");
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

      //var radioValue = $("input[name='InputAccountType']:checked").val();
      var SelectedCountry = $("#InputCompanyCountry option:selected").text();
      var SelectedTypeId = $("#InputCompanyBranchType option:selected").val();

      var qstrings = {
        //Type: radioValue,
        FullName: $("#InputFullName").val(),
        Email: $("#InputEmail").val(),
        Password: $("#InputPassword").val(),
        NatureOfBusiness: $("#InputNatureOfBusiness").val(),
        MobileNumber: $("#InputMobileNumber").val(),
        CompanyName: $("#InputCompanyName").val(),
        CompanyAddress: $("#InputCompanyAddress").val(),
        CompanyCity: $("#InputCompanyCity").val(),
        CompanyCountry: SelectedCountry,
        CompanyBranchType: SelectedTypeId,
        CompanyBranchName: $("#InputCompanyBranchName").val(),
        Designation: $("#InputYourDesignation").val(),
        Password: PasswordC
      };

      /*  var qstrings = {
         email: $("#InputEmail").val(),
         password: $("#InputPassword").val(),
         fullname: $("#InputFullName").val(),
       }; */

      $.ajax({
        type: 'POST',
        url: baseapiURL + 'createuserAPI',
        data: JSON.stringify(qstrings),
        contentType: "application/json",
        dataType: 'json',
        success: function(response) {
          if (response == 200) {
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

      fullnameerrorMessage = "Please Enter The Full Name without any special characters and numbers";
      emailaddressnameerrorMessage = "Please Enter Valid Email Address";
      natureofbusinesserrorMessage = "Please Enter The Nature Of Business without any special characters and numbers";
      mobilenumbererrorMessage = "Please Enter The Mobile Number without any letters";
      companynameerrorMessage = "Please Enter The Company Name without any special characters and numbers";
      companyaddresserrorMessage = "Please Enter The Company Address without any special characters";
      cityerrorMessage = "Please Select The City";
      countryerrorMessage = "Please Select The Country";
      typeerrorMessage = "Please Select The Type";
      designationerrorMessage = "Please Enter The Designation without any special characters";
      passworderrorMessage = "Please Set The Password";
      confirmpassworderrorMessage = "Please Set The Confirm Password";

      var FullName = document.getElementsByName('InputFullName')[0].value //string
      var EmailAddress = document.getElementsByName('InputEmail')[0].value //string
      var MobileNumber = document.getElementsByName('InputMobileNumber')[0].value //int > 0
      var NatureOfBusiness = document.getElementsByName('InputNatureOfBusiness')[0].value
      var CompanyName = document.getElementsByName('InputCompanyName')[0].value
      var CompanyAddress = document.getElementsByName('InputCompanyAddress')[0].value;
      var City = document.getElementsByName('InputCompanyCity')[0].value;
      var Country = document.getElementsByName('InputCompanyCountry')[0].value //String
      var Type = $("#InputCompanyBranchType option:selected").text(); //int > 0
      var yourDesignation = document.getElementsByName('InputYourDesignation')[0].value // String
      var Password = document.getElementsByName('InputPassword')[0].value // String
      var ConfirmPassword = document.getElementsByName('InputConfirmPassword')[0].value // String

      var regexMobile = new RegExp('^\\d+$');
      var regexEmail = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i
      var regexSpecialCharsAndNum = /[0-9`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
      var regexSpecialChars = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;

      if (FullName == "" || FullName == 0 || regexSpecialCharsAndNum.test(FullName)) {
        showFailureDialogue(fullnameerrorMessage);
      } else if (EmailAddress == "" || EmailAddress == 0 || !regexEmail.test(EmailAddress)) {
        showFailureDialogue(emailaddressnameerrorMessage);
      } else if (MobileNumber == "" || MobileNumber == 0 || !regexMobile.test(MobileNumber)) {
        showFailureDialogue(mobilenumbererrorMessage);
      } else if (NatureOfBusiness == "" || NatureOfBusiness == 0 || regexSpecialCharsAndNum.test(NatureOfBusiness)) {
        showFailureDialogue(natureofbusinesserrorMessage);
      } else if (CompanyName == "" || CompanyName == 0 || regexSpecialCharsAndNum.test(CompanyName)) {
        showFailureDialogue(companynameerrorMessage);
      } else if (CompanyAddress == "" || CompanyAddress == 0 || regexSpecialChars.test(CompanyAddress)) {
        showFailureDialogue(companyaddresserrorMessage);
      } else if (City == "Select The City" || City == 0) {
        showFailureDialogue(cityerrorMessage);
      } else if (Country == "Select The Country" || Country == 0) {
        showFailureDialogue(countryerrorMessage);
      } else if (Type == "Select Type" || Type == 0) {
        showFailureDialogue(typeerrorMessage);
      } else if (yourDesignation == "" || yourDesignation == 0 || regexSpecialCharsAndNum.test(yourDesignation)) {
        showFailureDialogue(designationerrorMessage);
      } else if (Password == "" || Password == 0) {
        showFailureDialogue(passworderrorMessage);
      } else if (ConfirmPassword == "" || ConfirmPassword == 0) {
        showFailureDialogue(confirmpassworderrorMessage);
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