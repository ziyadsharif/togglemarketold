<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Togglemarket</title>
<link href="<?php echo base_url()?>assets/css/main.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid alpha omega">
    <div class="banner-wrap">
        <div class="banner-container">
            <div class="img-container">
                <img src="<?php echo base_url()?>assets/images/Hospitalityreal-bottombit.png" />
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
            <div class="signup-modal addProject">
                <div class="logo">
                    <img src="<?php echo base_url()?>assets/images/toggleHospitality.png" alt="Toggle market logo">
                </div>
                <div class="form-container full">
                    <div class="form-heading">
                        Step 3. <span>Add a Project (optional)</span>
                        <p>
                            The parameters of your project determine what suppliers <br>
and products we will be recommending
                        </p>
                    </div>
                    <div class="general-form">
                        <form method=POST action= "<?php echo base_url("index.php/ServicesController/ServiceCall/addProjectAPI"); ?>" enctype="multipart/form-data">
                        
                        <div class="formRow half">
                            <input type="text" placeholder="Project name" id="InputAddProjectProjectName" name="InputAddProjectProjectName" required="required">
                        </div>
                        <div class="formRow half">
                            <input type="text" placeholder="Client's name" id="InputAddProjectClientName" name="InputAddProjectClientName" required="required">
                        </div>
                        <div class="formRow half">
                            <input type="text" placeholder="City" id="InputAddProjectCityName" name="InputAddProjectCityName" required="required">
                        </div>
                        <div class="formRow half">
                            <input type="text" placeholder="Country" id="InputAddProjectCountry" name="InputAddProjectCountry" required="required">
                        </div>
                        <div class="formRow half">
                            <textarea id="InputAddProjectProjectDesc" name="InputAddProjectProjectDesc" required>Describe your project</textarea>
                        </div>
                        <div class="formRow half">
                            <div class="tgm_fileupload">
                                <div class="box js">
                                    <div class="box__input">
                                        <input type="file" name="files[]" id="file" class="box__file" multiple="multiple" required/>
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
                            <ul class="radioContainer" id="projectInterestList">
                               <!--  <li><input type="checkbox" id='furniture1' name='furniture' checked> Furniture supplies</li>
                                <li><input type="checkbox" id='furniture2' name='furniture'> Furniture supplies</li> -->
                            </ul>
                        </div>

                        <div class="formRow half">
                        <h4>Star Rating</h4>
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                            </fieldset>
                        </div>
                        <div class="clearfix"></div>
                        <div class="area-fields-holder">
                            <h3>Add Areas (optional)</h3>
                            <input type="text" id="hiddenRowNum" name="hiddenRowNum" style="display:none;" />
                            <input type="text" id="isEdit" name="isEdit" value="false" style="display:none;" />
                            <div class="areas-fields" id="ap-area-fields">
                                <div class="area-row" id="ap-1">
                                    <div class="area-input">
                                        <input type="text" id="InputAddProjectAreaName-1" name="InputAddProjectAreaName-1"  placeholder="Area 1" required>
                                    </div>
                                    <div class="area-input">
                                        <input type="text" id="InputAddProjectBudget-1" name="InputAddProjectBudget-1" placeholder="Budget" required>
                                    </div>
                                    <div class="area-input">
                                        <select id="InputAddProjectAreaType-1" name="InputAddProjectAreaType-1" required>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="addRemoveAreaCtas">
                            <a href="#" id="addAreaRow">Add more</a>
                        </div>

                        <div class="formRow full"></div>

                        <div class="clearfix"></div>
                        <div class="form-ctas">
                        <input type="submit" name="submit" value="Add project & complete" class="cta-common" >
                            <div class="clearfix"></div>
                            <a href="#" class="cta-skip">Skip adding projects</a>
                        </div>
                        </form>
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
                <img src="<?php echo base_url()?>assets/images/LOGOTRANS-1@2x.png" alt="Toggle market logo">
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
<script src="<?php echo base_url()?>assets/js/togglemarket.min.js"></script>
<script src="<?php echo base_url()?>assets/js/components/fileupload.js"></script>
<!-- <script src="?php echo base_url()?>build/js/vendors/owl.carousel.min.js"></script> -->
<script>
    var baseURL = "<?php echo base_url("index.php/authenticate/"); ?>";
    var baseapiURL = "<?php echo base_url("index.php/ServicesController/ServiceCall/"); ?>";    
    var rowsCount = 1;

    $(document).ready(function() { 
      
      $('#hiddenRowNum').val(rowsCount);

      $.ajax({
        type: 'GET',
        url: baseapiURL + 'getAreaTypesAPI',
        contentType: "application/json",
        success: function(response) {
          if (response) {        
            var jsonObj = JSON.parse(response);
            var mySelect = $('#InputAddProjectAreaType-1');
            $.each(jsonObj.getAreaTypeData, function(val, text) {
              text = jsonObj.getAreaTypeData[val].areaName
              mySelect.append(
                $('<option></option>').val(jsonObj.getAreaTypeData[val]._id).html(text)
              );
            });
          } else {
            showFailureDialogue("The service is temporarily unavailable, area types are not uploaded properly")
            return;
          }
        }
      });

      $.ajax({
        type: 'GET',
        url: baseapiURL + 'getProjectInterestAPI',
        contentType: "application/json",
        success: function(response) {
          if (response) {        
            var jsonObj = JSON.parse(response);
            var list = $('#projectInterestList');
            $.each(jsonObj.getProjectInterestData, function(val, text) {
                text = jsonObj.getProjectInterestData[val].interestName;
                id = jsonObj.getProjectInterestData[val]._id;                
                list.append("<li><input type='checkbox' name='projectInterestArr[]' id = '"+ id +"' value = '" + id + "'>" + text + "</li>");
            });
          } else {
            showFailureDialogue("The service is temporarily unavailable, project interests are not uploaded properly")
            return;
          }
        }
      });
    });

    $('#addAreaRow').click(function(){
        rowsCount++;        
        $('#hiddenRowNum').val(rowsCount);
    });

    function addProject()
    {   
        var furnitureSupply = $("input[type='checkbox']:checked").val();
        var ratingStar = $("input[type='radio']:checked").val();  

        /* ?php 
        $files = array_filter($_FILES['files']['name']); //Use something similar before processing files.
        echo $files;
        ?>  */
        var arr = "";
        var files = "";

        var inp = document.getElementById('file');
        for (var i = 0; i < inp.files.length; ++i) {
            var name = inp.files.item(i).name;
            files += name+',';
        }

        files = files.slice(0,-1);

        for(var i = 1;i <= rowsCount;i++)
        {           
            arr += 'areaName='+$("#InputAddProjectAreaName-"+i).val()+',budget='+$("#InputAddProjectBudget-"+i).val()+',areaType='+$("#InputAddProjectAreaType-"+i+" option:selected").val()+';';
        }

        var qstrings = {
        ProjectName: $("#InputAddProjectProjectName").val(),
        ClientName: $("#InputAddProjectClientName").val(),
        Country: $("#InputAddProjectCountry").val(),
        City: $("#InputAddProjectCityName").val(),
        Rating: ratingStar,
        Description: $("#InputAddProjectProjectDesc").val(),
        /* AreaName: $("#InputAddProjectAreaName").val(),
        Budget: $("#InputAddProjectBudget").val(),
        AreaType: $("#InputAddProjectAreaTypes option:selected").val(), */
        arr,
        files,
      };

       $.ajax({
        type: 'POST',
        url: baseapiURL + 'addProjectAPI',
        data: JSON.stringify(qstrings),
        contentType: "application/json",
        dataType: 'json',
        success: function(response) {
          if (response == 200) {
            showSucessDialogue("succes");
          } else {
            showFailureDialogue("fail");
            return;
          }
        },
        contentType: "application/json",
        dataType: 'json'
      }); 
    }

</script>
</html>