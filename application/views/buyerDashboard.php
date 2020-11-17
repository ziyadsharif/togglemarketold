<!doctype html>
<html lang="en">

<?php
require("header.php");
?>

<body class="blue-bg">
    <div class="backdrop">
        <div class="workstation-detail-popup">
            <!-- <div class="wd-popup-detail"> -->
            <form class="wd-popup-detail" method=POST action="<?php echo base_url("index.php/ServicesController/ServiceCall/editProjectAPI"); ?>" enctype="multipart/form-data">
                <div class="content">
                    <div class="wd-header">
                        <h2>JW Marriot Harageisa</h2>
                        <div class="rating-container">
                            <span>Star Rating: </span>
                            <div class="general-form">
                                <fieldset class="rating">
                                    <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </fieldset>
                            </div>
                        </div>
                        <div class="wd-body">
                            <div class="wd-body-left">
                                <div style="background-image: url('<?php echo base_url() ?>assets/images/dummy_building.png');" class="edit-project-picture">
                                    <div class="edit-picture-footer">
                                        <!--  <img src="<php echo base_url()?>assets/images/edit.png" /> -->
                                        <!-- <div class="tgm_fileupload">
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
                                        </div> -->
                                        <p>Edit Project Picture</p>
                                    </div>
                                    <p>Edit Project Picture</p>
                                </div>
                            </div>
                        </div>

                        <div class="wd-body-right">
                            <!-- <form class="wd-form"> -->
                            <input type="text" id="isEdit" name="isEdit" value="true" style="display:none;" />
                            <input type="text" id="InputEditProjectProjectId" name="InputEditProjectProjectId" style="display:none;" />

                            <div class="form-cell form-cell-half">
                                <p>Project Name</p>
                                <input type="text" class="wd-input" id="InputWorkStationProjectName" name="InputWorkStationProjectName" />
                            </div>
                            <div class="form-cell form-cell-half">
                                <p>Client’s Name</p>
                                <input type="text" class="wd-input" id="InputWorkStationClientName" name="InputWorkStationClientName" />
                            </div>
                            <div class="form-cell form-cell-half">
                                <p>City</p>
                                <input type="text" class="wd-input" id="InputWorkStationCityName" name="InputWorkStationCityName" />
                            </div>
                            <div class="form-cell form-cell-half">
                                <p>Country</p>
                                <input type="text" class="wd-input" id="InputWorkStationCountryName" name="InputWorkStationCountryName" />
                            </div>

                            <div class="form-cell form-cell-full">
                                <p>Description</p>
                                <textarea id="TextAreaWorkStationDescription" name="TextAreaWorkStationDescription"></textarea>
                            </div>

                            <div class="form-cell">
                                <ul class="radioContainer" id="projectInterestList">
                                    <!--  <li><input type="checkbox" id='furniture1' name='furniture' checked> Furniture supplies</li>
                                            <li><input type="checkbox" id='furniture2' name='furniture'> Furniture supplies</li> -->
                                </ul>
                            </div>

                            <div class="form-cell submit">
                                <input type="submit" name="submit" class="save-changes" value="Save Changes" />
                            </div>
                            <!-- </form> -->
                        </div>
                    </div>

                    <!-- <div class="wd-header">
                        <h2>JW Marriot Harageisa</h2>
                        <div class="rating-container">
                            <span>Star Rating: </span>
                            <div class="general-form">
                                <fieldset class="rating">
                                    <input type="radio" id="star5" name="rating" value="5" /><label class="full"
                                        for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label
                                        class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" id="star4" name="rating" value="4" /><label class="full"
                                        for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label
                                        class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input type="radio" id="star3" name="rating" value="3" /><label class="full"
                                        for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label
                                        class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" id="star2" name="rating" value="2" /><label class="full"
                                        for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label
                                        class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" id="star1" name="rating" value="1" /><label class="full"
                                        for="star1" title="Sucks big time - 1 star"></label>
                                    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half"
                                        for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="wd-body">
                        <div class="wd-body-left">
                            <div style="background-image: url('<?php echo base_url() ?>assets/images/dummy_building.png');"
                                class="edit-project-picture">
                                <div class="edit-picture-footer">
                                    <img src="<?php echo base_url() ?>assets/images/edit.png" />
                                    <p>Edit Project Picture</p>
                                </div>
                            </div>
                        </div>

                        <div class="wd-body-right">
                            <form class="wd-form"> 
                                <div class="form-cell form-cell-half">
                                    <p>Project Name</p>
                                    <input type="text" class="wd-input" />
                                </div>
                                <div class="form-cell form-cell-half">
                                    <p>Client’s Name</p>
                                    <input type="text" class="wd-input" />
                                </div>
                                <div class="form-cell form-cell-half">
                                    <p>City</p>
                                    <input type="text" class="wd-input" />
                                </div>
                                <div class="form-cell form-cell-half">
                                    <p>Country</p>
                                    <input type="text" class="wd-input" />
                                </div>

                                <div class="form-cell form-cell-full">
                                    <p>Description</p>
                                    <textarea></textarea>
                                </div>

                                <div class="form-cell">
                                    <p>Looking for</p>
                                    <label>
                                        <input type="checkbox" />
                                        Furniture Supplies
                                    </label>
                                    <label>
                                        <input type="checkbox" />
                                        Operational Supplies
                                    </label>
                                </div>

                                <div class="form-cell submit">
                                    <input type="button" class="save-changes" value="Save Changes" />
                                </div>
                             </form> 
                        </div>
                    </div> -->
                </div>
            </form>
            <!-- </div> -->
            <div onclick="hideEditWorkstationPopup()" class="cross-container reminders-cross">
                <img src="<?php echo base_url() ?>assets/images/cross-white.png" />
            </div>
        </div>
    </div>
    <div class="project-sidebar">
        <div class="project-sidebar-title">
            <div id="project-icon"></div>
            <p>Projects</p>
        </div>

        <div class="open-project-sidebar-content">
        </div>
    </div>
    <div class="container-fluid alpha omega blue-bg page-container">
        <div class="dashboard-layout">
            <?php
            require("menuworkstation.php");
            ?>
            <div class="dashboard">
                <div class="dashboard-layout-content buyer-dashboard-container">
                    <div class="dashboard-layout-header">
                        <div class="dlh dlh-left">
                            <div class="hotel-avatar" style="background-image: url('https://thispersondoesnotexist.com/image');">
                            </div>
                            <div class="dls-title-holder">
                                <p><?php echo $_SESSION["fullname"] ?> Dashboard</p>
                                <span onclick="RedirectToAccountDetails()">Account Details</span>
                            </div>
                        </div>
                        <div class="dlh dlh-right">
                            <div class="dlh-button edit-button">
                                <img src="<?php echo base_url() ?>assets/images/edit.png" />
                                <span>Edit</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buyer-dashboard-body">
                    <div class="bd-body bdb-left-side">
                        <div class="card fit-parent">

                            <div class="body">
                                <div class="chat-card">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bd-body bdb-right-side">

                        <div class="bd-item">
                            <div class="card fit-parent">
                                <div class="header">
                                    <div class="title">
                                        <span>Project Manager</span>
                                        <a class="subtitle">Add and delete projects or edit project parameters</a>
                                    </div>

                                    <div class="more"></div>
                                </div>
                                <div class="body">
                                    <div class="project-manager-section" id="dvBuyerDashboardBuyersProjectsList">
                                        <div class="project-manager-item" id="dvBuyerDashboardBuyerProjects" style="display: none;">
                                            <div style="background-image: url('<?php echo base_url() ?>assets/images/hotel-pic1.png');" class="pm-left">

                                            </div>
                                            <div class="pm-middle">
                                                <p class="pm-name" id="PBuyerDashboardBuyersProject"></p>
                                                <p id="PBuyerDashboardBuyersProjectId" style="display: none;"></p>
                                                <p class="pm-status">Project status: <b>Ongoing</b></p>
                                                <p class="pm-date">Created on 25/11/2019</p>
                                            </div>
                                            <div onclick="handleWorkstationPopup(this)" class="pm-right">
                                                <p>Edit</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="footer-text">+ Create New Project</p>
                                </div>
                            </div>
                        </div>

                        <div class="bd-item">
                            <div id="reminder-card-notification" class="positioned-popup reminder-notification">
                                <div class="positioned-popup-container">
                                    <div class="positioned-popup-content">
                                        <div class="reminders-notification-card">
                                            <div class="rn-header">
                                                <p>Notification settings</p>
                                            </div>
                                            <div class="rn-body">
                                                <div class="reminder-datetime-holder">
                                                    <span class="text">Remind me on</span>
                                                    <div class="picker date-picker">
                                                        <img src="<?php echo base_url() ?>assets/images/calendar-navy.png" />
                                                        <input type="input" class="dp" />


                                                    </div>
                                                    <span class="text">at, </span>
                                                    <div class="picker time-picker">
                                                        <input type="time" class="tp" />
                                                        <input type="text" id="InputCreateEventRemindTime" style="display: none;" />
                                                    </div>
                                                    <span class="text">via: </span>
                                                </div>
                                                <label>
                                                    <input type="checkbox" id="CheckboxCreateEventRemindType[]" />
                                                    Text Message
                                                </label>

                                                <label>
                                                    <input type="checkbox" id="CheckboxCreateEventRemindType[]" />
                                                    Email
                                                </label>
                                            </div>
                                            <div class="rn-footer">
                                                <button type="submit" class="save-changes-button" onclick="saveNotificationSettings();">Save Changes</button>
                                            </div>
                                        </div>
                                        <div onclick="hideReminderNotification()" class="cross-container">
                                            <img src="<?php echo base_url() ?>assets/images/cross-white.png" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card fit-parent">
                                <div class="header">
                                    <div class="title">
                                        <span>Reminders</span>
                                    </div>

                                    <div class="more"></div>
                                </div>
                                <div class="body">
                                    <div class="reminder-section" id="dvWorkStationEventRemindersData">
                                        <div class="reminder-item" id="dvWorkStationEventReminders" style="display: none;">
                                            <div class="reminder-left">
                                                <div class="calendar-icon">
                                                    <img src="<?php echo base_url() ?>assets/images/calendar.png" />
                                                    <div>
                                                        <div class="day-holder">
                                                            <p id="dvWorkStationDay"></p>
                                                        </div>
                                                    </div>
                                                    <div class="month-holder">
                                                        <p id="dvWorkStationMonth"></p>
                                                    </div>
                                                </div>
                                                <div class="reminder-info" id="dvWorkStationEventDetails">
                                                    <p id="pWorkStationEventDate"></p>
                                                    <p><b id="pWorkStationEventName"></b></p>
                                                    <p><i id="pWorkStationEventDetails"></i></p>
                                                </div>
                                            </div>

                                            <div class="reminder-right">
                                                <div class="reminder-edit" id="dvWorkStationEditButton">
                                                    <div id="bell-icon-1" class="reminder-bell-image empty-bell">
                                                    </div>
                                                    <span onclick="showReminderNotification()">edit</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-reminder-container">
                                        <p>+ Add Reminder</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="bd-scheduler-container">
                    <div id="workstation-reminder-scheduler" class="positioned-popup reminder-notification">
                        <div class="positioned-popup-container">
                            <div class="positioned-popup-content">
                                <div class="reminders-notification-card">
                                    <div class="rn-header">
                                        <p>Notification settings</p>
                                    </div>
                                    <div class="rn-body">
                                        <div class="reminder-datetime-holder">
                                            <span class="text">Remind me on </span>
                                            <div class="picker date-picker">
                                                <img src="<?php echo base_url() ?>assets/images/calendar-navy.png" />
                                                <input type="input" class="dp" />


                                            </div>
                                            <span class="text">at, </span>
                                            <div class="picker time-picker">
                                                <input type="time" class="tp" id="TimeBuyerDashboardTimeValue" />
                                            </div>
                                            <span class="text">via: </span>
                                        </div>
                                        <label>
                                            <input type="checkbox" id="CheckboxCreateEventRemindType[]" />
                                            Text Message
                                        </label>

                                        <label>
                                            <input type="checkbox" id="CheckboxCreateEventRemindType[]" />
                                            Email
                                        </label>
                                    </div>
                                    <div class="rn-footer">
                                        <button type="submit" class="save-changes-button" onclick="saveNotificationSettings();">Save Changes</button>
                                    </div>
                                </div>
                                <div onclick="hideReminderNotification()" class="cross-container">
                                    <img src="<?php echo base_url() ?>assets/images/cross-black.png" />
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="scheduler-popup-content">
                        <div class="add-event-popup-container">
                            <input type="text" style="display: none;" value="" class="hidden-clicked-date-value" />
                            <div class="add-event-popup">
                                <div class="ae-header">
                                    <p>Create Event</p>
                                    <div class="cross-container">
                                        <img onclick="hideAddEventPopup()" src="<?php echo base_url() ?>assets/images/cross-black.png" />
                                    </div>
                                </div>

                                <div class="ae-body">
                                    <div class="form-container">
                                        <div class="general-form">
                                            <div class="formRow full">
                                                <input type="text" placeholder="Event Title" id="InputCreateEventEventTitle" class="aep-event-title" required>
                                            </div>

                                            <div class="formRow full">
                                                <input type="text" placeholder="From Date" id="InputCreateEventFromDate" class="ae-from-input" required />
                                            </div>
                                            <!-- <div class="formRow half">
                                                    <input type="text" placeholder="To" class="ae-to-input" />
                                                </div> -->
                                            <div class="formRow full">
                                                <div class="from-to-container">
                                                    <div class="formRow half time-picker">
                                                        <input type="time" placeholder="From Time" id="InputCreateEventFromTime" required />
                                                    </div>

                                                    <div class="formRow half time-picker">
                                                        <input type="time" placeholder="To Time" id="InputCreateEventToTime" required />
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="formRow full">
                                                <select class="event-project" id="SelectCreateEventProjects">
                                                    <option disabled="true">Project</option>
                                                    <option id="0" value="Personal">Personal</option>
                                                    <option id="1" value="JW Marriot Harageisa">JW Marriot Harageisa
                                                    </option>
                                                    <option id="2" value="Kempinski Amman">Kempinski Amman</option>
                                                    <option id="3" value="Fairmont Harare">Fairmont Harare</option>
                                                    <option id="4" value="Hilton Abu Dhabi">Hilton Abu Dhabi</option>
                                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                                </select>
                                            </div>
                                            <!-- <div class="formRow full">
                                                <input type="text" placeholder="Add users or emails" />
                                            </div> -->
                                            <div class="formRow full">
                                                <textarea class="aep-description" placeholder="Description" id="TextareaCreateEventDesc" required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div onclick="showReminderNotification('workstation-reminder-scheduler')" class="aep-notification-settings">
                                    <div class="add-bubble">
                                        <p>+</p>
                                    </div>
                                    <p>Notification Settings</p>
                                </div>
                                <div class="ae-footer">
                                    <button onclick="addEvent()" class="save-changes-button">Save Changes</button>
                                </div>

                            </div>
                        </div>
                        <div class="aep-body">
                            <div class="left">
                                <div class="left-upper">
                                    <p class="left-title">Calendar</p>
                                    <button onclick="showAddEventPopup(true)" class="create-event-button">+ Create
                                        Event</button>
                                    <input type="text" class="left-search" placeholder="Search Events" />
                                </div>
                                <!-- <div class="mini-calender-holder">
                                    <div id="mini-calender"></div>
                                </div> -->
                                <div class="left-inputs">

                                    <div class="my-calendar-container">
                                        <p>My Calendars</p>
                                        <label>
                                            <input type="checkbox" />
                                            Personal
                                        </label>
                                        <label>
                                            <input type="checkbox" />
                                            JW Marriot Harageisa
                                        </label>
                                        <label>
                                            <input type="checkbox" />
                                            Kempinski Amman
                                        </label>
                                        <label>
                                            <input type="checkbox" />
                                            Fairmont Harare
                                        </label>
                                        <label>
                                            <input type="checkbox" />
                                            Hilton Abu Dhabi
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="right-holder">
                                <div class="right">
                                    <div id="calendar">

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    var baseURL = "<?php echo base_url("index.php/authenticate/"); ?>";
    var baseapiURL = "<?php echo base_url("index.php/ServicesController/ServiceCall/"); ?>";


    function RedirectToAccountDetails() {
        window.location.href = "<?php echo base_url("index.php/authenticate/accountdetails/"); ?>";
    }


    $(document).ajaxStart(function() {
        $("#loaderdiv").css("display", "flex");
    });

    $(document).ajaxComplete(function() {
        $("#loaderdiv").css("display", "none");
    });

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




    $(document).ready(function() {

        var ProjectName;
        var ProjectIds = [];
        $.ajax({
            type: 'GET',
            url: baseapiURL + 'getprojectsAPI',
            contentType: "application/json",
            success: function(response) {
                if (response) {
                    var jsonObj = JSON.parse(response);
                    var hasprojects = jsonObj.getBuyer.length > 0 ? true : false;
                    $.each(jsonObj.getBuyer, function(val) {
                        ProjectName = jsonObj.getBuyer[val].projectName
                        ProjectIds[val] = jsonObj.getBuyer[val]._id;
                        console.log(ProjectIds[val]);
                        var itemEl = `<div id="projects" onclick="window.location.href='<?php echo base_url("index.php/workstation/workstation/"); ?>?id=${ProjectIds[val]}'" class="ops-item">
                        <div class="ops-thumbnail">
                        </div>
                        <div class="ops-item-footer">
                        <p>${ProjectName}</p>
                        </div>
                        </div>`;
                        $('.open-project-sidebar-content').append(itemEl);
                    });
                } else {
                    showFailureDialogue("The service is temporarily unavailable, countries are not uploaded properly")
                    return;
                }
            }

        });

        $.ajax({
            type: 'GET',
            url: baseapiURL + 'getprojectsAPI',
            contentType: "application/json",
            success: function(response) {
                if (response) {
                    var jsonObj = JSON.parse(response);

                    if (jsonObj != undefined) {
                        var list = $('#dvBuyerDashboardBuyersProjectsList');
                        var len = jsonObj.getBuyer.length;

                        for (var i = 0; i < len; i++) {
                            var projectName = jsonObj.getBuyer[i].projectName;
                            var id = jsonObj.getBuyer[i]._id;

                            if (projectName != undefined && projectName != '') {
                                if (i > 0) {
                                    $("#dvBuyerDashboardBuyerProjects").clone().appendTo("#dvBuyerDashboardBuyersProjectsList");
                                }
                                $('#dvBuyerDashboardBuyerProjects').find('#PBuyerDashboardBuyersProject').text(projectName);
                                $('#dvBuyerDashboardBuyerProjects').find('#PBuyerDashboardBuyersProjectId').text(id);
                                $("#dvBuyerDashboardBuyerProjects").css('display', 'flex');
                            }
                        }
                    }

                } else {
                    showFailureDialogue("The service is temporarily unavailable, project interests are not uploaded properly")
                    return;
                }
            }
        });

        $.ajax({
            type: 'GET',
            url: baseapiURL + 'getEventsAPI',
            contentType: "application/json",
            success: function(response) {
                if (response) {
                    var jsonObj = JSON.parse(response);

                    if (jsonObj != undefined) {
                        var list = $('#remindersData');
                        var len = jsonObj.length;

                        for (var i = 0; i < len; i++) {
                            var eventDesc = jsonObj[i].event__additionalnotes;
                            var eventDate = jsonObj[i].event__date;
                            var eventDateConverted = moment(eventDate).format('DD/MM/YYYY');
                            var date = new Date(eventDateConverted);
                            var eventMonth = date.getMonth() + 1;
                            var eventMonthName = moment(eventMonth, 'M').format('MMMM');
                            var eventDay = date.getDate();
                            var eventName = jsonObj[i].event__name;
                            var id = jsonObj[i].id;

                            if (eventDesc != undefined && eventName != undefined && (eventDate != undefined || eventDate != null)) {
                                if (i > 0) {
                                    $("#dvWorkStationEventReminders").clone().appendTo("#dvWorkStationEventRemindersData");
                                }
                                $('#dvWorkStationEventReminders').find('#dvWorkStationDay').text(eventDay);
                                $('#dvWorkStationEventReminders').find('#dvWorkStationMonth').text(eventMonthName);
                                $('#dvWorkStationEventReminders').find('#pWorkStationEventDate').text(eventDateConverted);
                                $('#dvWorkStationEventReminders').find('#pWorkStationEventName').text(eventName);
                                $('#dvWorkStationEventReminders').find('#pWorkStationEventDetails').text(eventDesc);
                                $("#dvWorkStationEventReminders").css('display', 'flex');
                            }
                        }
                    }

                } else {
                    showFailureDialogue("The service is temporarily unavailable, project interests are not uploaded properly")
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
                        list.append("<li><input type='checkbox' name='projectInterestArr[]' id = '" + id + "' value = '" + id + "'>" + text + "</li>");
                    });
                } else {
                    showFailureDialogue("The service is temporarily unavailable, project interests are not uploaded properly")
                    return;
                }
            }
        });
    });

    function handleWorkstationPopup(e) {

        var id = $(e).parent().find('#PBuyerDashboardBuyersProjectId').text();
        getProjectsDetails(id);
    }

    function getRating(ratingReceived) {
        var count = 0;

        for (i = 0.5; i < ratingReceived; i += 0.5) {
            document.getElementsByName('rating')[count].checked = true;
            count++;
        }
    }

    function getProjectsDetails(id) {
        var qstrings = {
            projectId: id,
        };

        $('#InputEditProjectProjectId').val(id);

        $.ajax({
            type: 'POST',
            url: baseapiURL + 'getProjectDetailsAPI',
            data: JSON.stringify(qstrings),
            contentType: "application/json",
            success: function(response) {
                if (response) {
                    if (response.indexOf(200) != -1) {
                        response = response.substr(3);
                    }
                    var jsonObj = JSON.parse(response);
                    var list = $('#projectInterestList');
                    if (jsonObj != undefined) {
                        $('#InputWorkStationProjectName').val(jsonObj.getProject.projectName);
                        $('#InputWorkStationClientName').val(jsonObj.getProject.clientName);
                        $('#InputWorkStationCityName').val(jsonObj.getProject.city);
                        $('#InputWorkStationCountryName').val(jsonObj.getProject.country);
                        $('#TextAreaWorkStationDescription').val(jsonObj.getProject.description);
                        var rating = jsonObj.getProject.rating;
                        $.each(jsonObj.getProject.projectInterest, function(val, text) {
                            text = jsonObj.getProject.projectInterest[val].projectInterestId.interestName;
                            id = jsonObj.getProject.projectInterest[val].projectInterestId;

                            $('input[type=checkbox][name=projectInterestArr\\[\\]]').each(function() {
                                if (this.id == id) {
                                    $('#' + id).prop("checked", true);
                                }
                            });
                            getRating(rating);
                        });
                        showEditWorstationPopup();
                    }
                } else {
                    showFailureDialogue("The service is temporarily unavailable, project interests are not uploaded properly")
                    return;
                }
            }
        });
    }

    function validate() {
        var isValid = true;

        var dateinput = $('#InputCreateEventFromDate').val();
        var startTime = $('#InputCreateEventFromTime').val();
        var endTime = $('#InputCreateEventToTime').val();
        var eventName = $("#InputCreateEventEventTitle").val();
        var remindBeforeTime = $('#InputCreateEventRemindTime').val();
        var eventAdditionalNotes = $("#TextareaCreateEventDesc").val();

        if (dateinput == undefined || dateinput == '') {
            isValid = false;
        }
        if (startTime == undefined || startTime == '') {
            isValid = false;
        }
        if (endTime == undefined || endTime == '') {
            isValid = false;
        }
        if (eventName == undefined || eventName == '') {
            isValid = false;
        }
        if (remindBeforeTime == undefined || remindBeforeTime == '') {
            isValid = false;
        }
        if (eventAdditionalNotes == undefined || eventAdditionalNotes == '') {
            isValid = false;
        }
        return isValid;
    }

    function addEvent() {
        var isValid = validate();

        if (isValid) {
            var today = new Date();
            var date_ = today.getDay() + '/' + today.getMonth() + 1 + '/' + today.getFullYear();

            var dateinput = $('#InputCreateEventFromDate').val();
            dateinput = moment(dateinput).format('YYYY-MM-DD');
            dateinput = dateinput + 'T13:34:40.238+00:00';

            var dateInputForTimings = $('#InputCreateEventFromDate').val();
            dateInputForTimings = moment(dateInputForTimings).format('YYYY-MM-DD');

            var startTime = $('#InputCreateEventFromTime').val();
            startTime = dateInputForTimings + 'T' + startTime + ':40.238+00:00';

            var endTime = $('#InputCreateEventToTime').val();
            endTime = dateInputForTimings + 'T' + endTime + ':40.238+00:00';

            var qstrings = {
                EventName: $("#InputCreateEventEventTitle").val(),
                EventDate: dateinput,
                EventStartTime: startTime,
                EventEndTime: endTime,
                RemindBeforeTime: $('#InputCreateEventRemindTime').val(),
                EventInviteEmail: 'aqsa@togglemarket.com',
                EventAdditionalNotes: $("#TextareaCreateEventDesc").val(),
            };

            $.ajax({
                type: 'POST',
                url: baseapiURL + 'createEventAPI',
                data: JSON.stringify(qstrings),
                contentType: "application/json",
                dataType: 'json',
                success: function(response) {
                    if (response == "200200") {
                        alert('Event Successfully created');
                        location.reload();
                        //showSucessDialogue("succes");
                    } else {
                        //showFailureDialogue("fail");
                        return;
                    }
                },
                contentType: "application/json",
                dataType: 'json'
            });
        } else {
            alert('Fill all the fields!');
        }
    }

    function saveNotificationSettings() {
        var date = $('.dp').val();
        date = moment(date).format('YYYY-MM-DD');
        var time = $('#TimeBuyerDashboardTimeValue').val();

        var remindTime = date + 'T' + time + ':40.238+00:00';
        $('#InputCreateEventRemindTime').val(remindTime);
    }
</script>

</html>