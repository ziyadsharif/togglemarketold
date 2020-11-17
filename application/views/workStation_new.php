<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Togglemarket</title>
    <link href="<?php echo base_url()?>assets/js/libraries/fullcalendar/lib/main.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/js/libraries/jquery-ui/jquery-ui.min.css" rel="stylesheet">


    <script src="<?php echo base_url()?>assets/js/libraries/fullcalendar/lib/main.min.js"></script>

</head>

<body class="blue-bg">
    <!-- Popups -->
    <div class="schedular-backdrop">

        <div class="scheduler-popup">
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
                                        <img src="<?php echo base_url()?>assets/images/calendar-navy.png" />
                                        <input type="input" class="dp" />


                                    </div>
                                    <span class="text">at, </span>
                                    <div class="picker time-picker">
                                        <input type="time" class="tp" />
                                    </div>
                                    <span class="text">via: </span>
                                </div>
                                <label>
                                    <input type="checkbox" />
                                    Text Message
                                </label>

                                <label>
                                    <input type="checkbox" />
                                    Email
                                </label>
                            </div>
                            <div class="rn-footer">
                                <button type="submit" class="save-changes-button">Save Changes</button>
                            </div>
                        </div>
                        <div onclick="hideReminderNotification()" class="cross-container">
                            <img src="<?php echo base_url()?>assets/images/cross-black.png" />
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
                                <img onclick="hideAddEventPopup()" src="<?php echo base_url()?>assets/images/cross-black.png" />
                            </div>
                        </div>

                        <div class="ae-body">
                            <div class="form-container">
                                <div class="general-form">
                                    <div class="formRow full">
                                        <input type="text" placeholder="Event Title" id="InputCreateEventEventTitle" class="aep-event-title" required>
                                    </div>

                                    <div class="formRow full">
                                        <input type="text" placeholder="From Date"id="InputCreateEventFromDate" class="ae-from-input" required/>
                                    </div>
                                    <!-- <div class="formRow half">
                                            <input type="text" placeholder="To" class="ae-to-input" />
                                        </div> -->
                                    <div class="formRow full">
                                        <div class="from-to-container">
                                            <div class="formRow half time-picker">
                                                <input type="time" placeholder="From Time"id="InputCreateEventFromTime" required  />
                                            </div>

                                            <div class="formRow half time-picker">
                                                <input type="time" placeholder="To Time" id="InputCreateEventToTime"  required />
                                            </div>
                                        </div>
                                    </div>


                                    <div class="formRow full">
                                        <select id="SelectCreateEventProjects" name="SelectCreateEventProjects" required>
                                        </select>
                                        <!-- <select class="event-project">
                                            <option disabled="true">Project</option>
                                            <option id="0" value="Personal">Personal</option>
                                            <option id="1" value="JW Marriot Harageisa">JW Marriot Harageisa
                                            </option>
                                            <option id="2" value="Kempinski Amman">Kempinski Amman</option>
                                            <option id="3" value="Fairmont Harare">Fairmont Harare</option>
                                            <option id="4" value="Hilton Abu Dhabi">Hilton Abu Dhabi</option>
                                             <option value="Add Project">+ Add Project</option> 
                                        </select> -->
                                    </div>
                                    <!-- <div class="formRow full">
                                        <input type="text" placeholder="Add users or emails" />
                                    </div> -->
                                    <div class="formRow full">
                                        <textarea class="aep-description" placeholder="Description"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div onclick="showReminderNotification('workstation-reminder-scheduler')"
                            class="aep-notification-settings">
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
                                <ul class="radioContainer" id="CalendarProjectsList">
                                        <!--  <li><input type="checkbox" id='furniture1' name='furniture' checked> Furniture supplies</li>
                                         <li><input type="checkbox" id='furniture2' name='furniture'> Furniture supplies</li> -->
                                </ul>
                                <!-- <label>
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
                                </label> -->
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
            <div class="cross-container" onclick="hideScheduler()">
                <img src="<?php echo base_url()?>assets/images/cross-white.png" />
            </div>
        </div>

    </div>
    <div class="backdrop">
        <div class="add-user-popup">
            <div class="au-content">
                <div class="au-header">
                    <div class="bubble">
                        <img src="<?php echo base_url()?>assets/images/follow.png" />
                    </div>
                    <p>Add users to this project</p>
                </div>
                <div class="au-body">


                    <div class="search-dropdown">
                        <div class="search-dropdown-container">
                            <input type="text" placeholder="Add users or emails" class="search-dropdown-input" />
                            <!-- <div class="search-cell">
                                <div class="contact-cell">
                                    <img src="https://thispersondoesnotexist.com/image" class="image-bubble" />
                                    <div class="user-info">
                                        <p>Shakira (you) Owner</p>
                                        <p>Owner</p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>


                    <div class="contact-list">
                        <div class="contact-cell">
                            <img src="https://thispersondoesnotexist.com/image" class="image-bubble" />
                            <div class="user-info">
                                <p>David Hume (you) Owner</p>
                                <div id="user-1" class="user-role">
                                    <div class="ur-header">
                                        <p class="role-name">Owner stuff</p>
                                        <div class="ur-header-text">
                                            <p id="view"> View </p>
                                            <p id="edit"> Edit </p>
                                        </div>
                                        <img class="ur-arrow-down" src="<?php echo base_url()?>assets/images/arrowDown.png" />

                                    </div>
                                    <div class="ur-body">
                                        <div class="ur-body-item">
                                            <p>Analytics</p>
                                            <div class="ur-checkboxes-container">
                                                <input type="checkbox" />
                                                <input type="checkbox" />
                                            </div>
                                        </div>
                                        <div class="ur-body-item">
                                            <p>Reminders</p>
                                            <div class="ur-checkboxes-container">
                                                <input type="checkbox" />
                                                <input type="checkbox" />
                                            </div>
                                        </div>

                                        <div class="ur-body-item">
                                            <p>Project Areas</p>
                                            <div class="ur-checkboxes-container">
                                                <input type="checkbox" />
                                                <input type="checkbox" />
                                            </div>
                                        </div>

                                        <div class="ur-body-item">
                                            <p>Bill of Quantities</p>
                                            <div class="ur-checkboxes-container">
                                                <input type="checkbox" />
                                                <input type="checkbox" />
                                            </div>
                                        </div>

                                        <div class="ur-body-item">
                                            <p>Current Requests</p>
                                            <div class="ur-checkboxes-container">
                                                <input type="checkbox" />
                                                <input type="checkbox" />
                                            </div>
                                        </div>

                                        <div class="ur-body-item">
                                            <p>Purchase order</p>
                                            <div class="ur-checkboxes-container">
                                                <input type="checkbox" />
                                                <input type="checkbox" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-cell">
                            <img src="https://thispersondoesnotexist.com/image" class="image-bubble" />
                            <div class="user-info">
                                <p>David Hume (you) Owner</p>
                                <div id="user-2" class="user-role">
                                    <div class="ur-header">
                                        <p class="role-name">Owner stuff</p>
                                        <div class="ur-header-text">
                                            <p id="view"> View </p>
                                            <p id="edit"> Edit </p>
                                        </div>
                                        <img class="ur-arrow-down" src="<?php echo base_url()?>assets/images/arrowDown.png" />

                                    </div>
                                    <div class="ur-body">
                                        <div class="ur-body-item">
                                            <p>Analytics</p>
                                            <div class="ur-checkboxes-container">
                                                <input type="checkbox" />
                                                <input type="checkbox" />
                                            </div>
                                        </div>
                                        <div class="ur-body-item">
                                            <p>Reminders</p>
                                            <div class="ur-checkboxes-container">
                                                <input type="checkbox" />
                                                <input type="checkbox" />
                                            </div>
                                        </div>

                                        <div class="ur-body-item">
                                            <p>Project Areas</p>
                                            <div class="ur-checkboxes-container">
                                                <input type="checkbox" />
                                                <input type="checkbox" />
                                            </div>
                                        </div>

                                        <div class="ur-body-item">
                                            <p>Bill of Quantities</p>
                                            <div class="ur-checkboxes-container">
                                                <input type="checkbox" />
                                                <input type="checkbox" />
                                            </div>
                                        </div>

                                        <div class="ur-body-item">
                                            <p>Current Requests</p>
                                            <div class="ur-checkboxes-container">
                                                <input type="checkbox" />
                                                <input type="checkbox" />
                                            </div>
                                        </div>

                                        <div class="ur-body-item">
                                            <p>Purchase order</p>
                                            <div class="ur-checkboxes-container">
                                                <input type="checkbox" />
                                                <input type="checkbox" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="au-footer">
                    <button>Save Changes</button>
                </div>
            </div>
            <div onclick="hideAddUserPopup()" class="cross-container">
                <img src="<?php echo base_url()?>assets/images/cross-white.png" />
            </div>
        </div>
        <div class="project-area-details-popup">
            <div class="project-area-details-content">
                <div class="pad-header">
                    <div class="pad-name-container">
                        <h2>Lobby</h2>
                        <div class="general-form">
                            <div class="full">
                                <select>
                                    <option disabled="true">Project</option>
                                    <option value="Personal">Kitchen</option>
                                    <option value="JW Marriot Harageisa">Bedrooms</option>
                                    <option value="Kempinski Amman">Restaurant</option>
                                    <option value="Fairmont Harare">Lobby</option>
                                    <!-- <option value="Add Project">+ Add Project</option> -->
                                </select>
                            </div>
                        </div>
                        <!-- <div id="dropdown-one" class="custom-dropdown">
                            <div id="1" class="main">
                                <span class="label">Kitchen</span>
                                <img src="<?php echo base_url()?>assets/images/dropdown-arrow.png" />
                            </div>

                            <div id="2" class="option">
                                <span class="label">Kitchen</span>
                            </div>

                            <div id="3" class="option">
                                <span class="label">Bedrooms</span>
                            </div>

                            <div id="4" class="option">
                                <span class="label">Restaurant</span>
                            </div>

                            <div id="5" class="option">
                                <span class="label">Lobby</span>
                            </div>

                        </div> -->
                    </div>
                    <span>Budget: $875,000</span>
                </div>
                <div class="pad-body">
                    <table class="pad-table">
                        <thead>
                            <tr>
                                <th>Steelite</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="data-row">
                                <td>
                                    <div class="product-info-cell">
                                        <img src="<?php echo base_url()?>assets/images/cup_2.png" class="item-image" />

                                        <div class="name-container">
                                            <p>Rio <b>by</b> Steelite™</p>
                                            <p><b>Red Teacup</b></p>
                                        </div>
                                    </div>
                                </td>
                                <td>$5</td>
                                <td>100</td>
                                <td>$500</td>
                            </tr>
                            <tr class="data-row">
                                <td>
                                    <div class="product-info-cell">
                                        <img src="<?php echo base_url()?>assets/images/cup_2.png" class="item-image" />

                                        <div class="name-container">
                                            <p>Rio <b>by</b> Steelite™</p>
                                            <p><b>Blue Bowl</b></p>
                                        </div>
                                    </div>
                                </td>
                                <td>$5</td>
                                <td>100</td>
                                <td>$500</td>
                            </tr>
                            <tr class="data-row">
                                <td>
                                    <div class="product-info-cell">
                                        <img src="<?php echo base_url()?>assets/images/cup_dummy_1.png" class="item-image" />

                                        <div class="name-container">
                                            <p>Rio <b>by</b> Steelite™</p>
                                            <p><b>Red Teacup</b></p>
                                        </div>
                                    </div>
                                </td>
                                <td>$5</td>
                                <td>100</td>
                                <td>$500</td>
                            </tr>
                        </tbody>

                    </table>
                    <h3>Easton Hospitality Solutions</h3>
                    <table class="pad-table">
                        <tbody>
                            <tr class="data-row">
                                <td>
                                    <div class="product-info-cell">
                                        <img src="<?php echo base_url()?>assets/images/cup_dummy_1.png" class="item-image" />

                                        <div class="name-container">
                                            <p>Rio <b>by</b> Steelite™</p>
                                            <p><b>Laundry Trolley with Hanger Closet</b></p>
                                        </div>
                                    </div>
                                </td>
                                <td>$5</td>
                                <td>100</td>
                                <td>$500</td>
                            </tr>
                            <tr class="data-row">
                                <td>
                                    <div class="product-info-cell">
                                        <img src="<?php echo base_url()?>assets/images/cup_dummy_1.png" class="item-image" />

                                        <div class="name-container">
                                            <p>Rio <b>by</b> Steelite™</p>
                                            <p><b>Red Teacup</b></p>
                                        </div>
                                    </div>
                                </td>
                                <td>$5</td>
                                <td>100</td>
                                <td>$500</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="pad-footer">

                    <span>Total:</span>
                    <div class="pad-total-number">
                        <p>$14,050</p>
                    </div>

                </div>
            </div>
            <div onclick="hideProjectAreaDetails()" class="cross-container">
                <img src="<?php echo base_url()?>assets/images/cross-white.png" />
            </div>
        </div>
        <div class="workstation-detail-popup">
            <form class="wd-popup-detail"  method=POST action= "<?php echo base_url("index.php/ServicesController/ServiceCall/editProjectAPI"); ?>" enctype="multipart/form-data">>
                <div class="content">
                    <div class="wd-header">
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
                            <div style="background-image: url('<?php echo base_url()?>assets/images/dummy_building.png');"
                                class="edit-project-picture">
                                <div class="edit-picture-footer">
                                   <!--  <img src="<php echo base_url()?>assets/images/edit.png" /> -->
                                        <div class="tgm_fileupload">
                                            <div class="box js">
                                                <div class="box__input">
                                                    <input type="file" name="files[]" id="files[]" class="box__file" multiple="multiple" required/>
                                                    <label for="file">
                                                        <span class="box__dragndrop"> Drop files here or</span><br>
                                                        <span class="selectCta">Select files</span>
                                                    </label>
                                                    <button type="submit" class="box__button">Upload</button>
                                                </div>
                                            </div>
                                        </div> 
                                   <a href="#" id="WorkStationEditProjectPic">Edit Project Picture</a>
                                </div>
                            </div>
                        </div>

                        <div class="wd-body-right">
                            <div class="wd-form">
                                <input type="text" id="InputEditProjectProjectId" name="InputEditProjectProjectId" style="display:none;" />
                                <div class="form-cell form-cell-half">
                                    <p>Project Name</p>
                                    <input type="text" class="wd-input"  id="InputWorkStationProjectName" name="InputWorkStationProjectName" />
                                </div>
                                <div class="form-cell form-cell-half">
                                    <p>Client’s Name</p>
                                    <input type="text" class="wd-input" id="InputWorkStationClientName" name="InputWorkStationClientName"  />
                                </div>
                                <div class="form-cell form-cell-half">
                                    <p>City</p>
                                    <input type="text" class="wd-input" id="InputWorkStationCityName" name="InputWorkStationCityName"  />
                                </div>
                                <div class="form-cell form-cell-half">
                                    <p>Country</p>
                                    <input type="text" class="wd-input" id="InputWorkStationCountryName" name="InputWorkStationCountryName"  />
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
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div onclick="hideEditWorkstationPopup()" class="cross-container reminders-cross">
                <img src="<?php echo base_url()?>assets/images/cross-white.png" />
            </div>
        </div>
    </div>

    <!-- Main page -->
    <div class="container-fluid alpha omega blue-bg page-container">
        <div class="dashboard-layout">
            <div class="sidebar">
                <div class="sidebar-item">
                    <div class="profile-avi trigger">
                        <img src="<?php echo base_url()?>assets/images/avi.png">
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
                <div class="sidebar-item">
                    <div class="sidebar-bubble">
                        <img src="<?php echo base_url()?>assets/images/searchwhite.png" />
                    </div>
                </div>
                <div onclick="showScheduler()" class="sidebar-item">
                    <div class="sidebar-bubble">
                        <img src="<?php echo base_url()?>assets/images/Group-1420.png" />
                    </div>
                </div>
                <div class="sidebar-item">
                    <div class="sidebar-bubble">
                        <img src="<?php echo base_url()?>assets/images/heart.png" />
                    </div>
                </div>
            </div>

            <div class="dashboard">
                <div class="dashboard-layout-content">
                    <div class="dashboard-layout-header">
                        <div class="dlh dlh-left">
                            <div class="hotel-avatar"
                                style="background-image: url('https://cf.bstatic.com/images/hotel/max1024x768/192/192028571.jpg');">
                            </div>
                            <div class="dls-title-holder">
                                <p>JW Marriott Harageisa’s Workstation</p>
                                <span onclick="showEditWorstationPopup()">Edit Project Details</span>
                            </div>
                        </div>
                        <div class="dlh dlh-right">
                            <div onclick="showAddUserPopup()" class="dlh-button add-button">
                                <img src="<?php echo base_url()?>assets/images/follow.png" />
                            </div>
                            <!-- <div class="dlh-button edit-button">
                                <img src="<?php echo base_url()?>assets/images/edit.png" />
                                <span>Edit</span>
                            </div> -->
                            <div class="dlh-button fullview-button">
                                <img src="<?php echo base_url()?>assets/images/window.png" />
                                <span>Full View</span>
                            </div>
                        </div>
                    </div>
                    <div class="ws-dashboard-body">
                        <!-- <div class="wsb-item">
                            <div class="card fit-parent">
                                <div class="header">
                                    <div class="title">
                                        <span>Cost Breakdown</span>
                                        <img src="<?php echo base_url()?>assets/images/arrowDown.png" />
                                    </div>

                                    <div class="more"></div>
                                </div>
                                <div class="body">
                                    <div class="cost-breakdown-section">
                                        <div class="chart-holder-container">
                                            <div class="chart-holder">
                                                <canvas id="chart"></canvas>
                                            </div>
                                        </div>
                                        <div class="chart-type-controls">
                                            <div onclick="changeChartType('bar')" class="control bar-chart">
                                                <img src="<?php echo base_url()?>assets/images/statistics.png" />
                                            </div>
                                            <div onclick="changeChartType('line')" class="control graph-chart">
                                                <img src="<?php echo base_url()?>assets/images/graph.png" />
                                            </div>
                                            <div onclick="changeChartType('pie')" class="control pie-chart">
                                                <img src="<?php echo base_url()?>assets/images/pie-chart.png" />
                                            </div>
                                            <div onclick="changeChartType('polarArea')" class="control list-chart">
                                                <img src="<?php echo base_url()?>assets/images/list.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <div class="wsb-item">
                            <div class="positioned-popup reminder-notification">
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
                                                        <img src="<?php echo base_url()?>assets/images/calendar-navy.png" />
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
                                                    <input type="checkbox" id="CheckboxCreateEventRemindType[]"/>
                                                    Text Message
                                                </label>

                                                <label>
                                                    <input type="checkbox" id="CheckboxCreateEventRemindType[]" />
                                                    Email
                                                </label>
                                            </div>
                                            <div class="rn-footer">
                                                <button type="submit" onclick="saveNotificationSettings();" class="save-changes-button">Save
                                                    Changes</button>
                                            </div>
                                        </div>
                                        <div onclick="hideReminderNotification()" class="cross-container">
                                            <img src="<?php echo base_url()?>assets/images/cross-black.png" />
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
                                        <div class="reminder-item"id="dvWorkStationEventReminders" style="display: none;">
                                            <div class="reminder-left">
                                                <div class="calendar-icon">
                                                    <img src="<?php echo base_url()?>assets/images/calendar.png" />
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
                                                <div class="reminder-edit">
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

                        <div class="wsb-item">
                            <div class="positioned-popup add-an-area-popup">
                                <div class="positioned-popup-container">
                                    <div class="positioned-popup-content">
                                        <div class="project-area-card">
                                            <div class="pa-card-header">
                                                <h3>Add an Area</h3>
                                            </div>

                                            <form class="add-area-form general-form">
                                                <div class="formRow full">
                                                    <input id="area-name" type="text" placeholder="Area Name" />
                                                </div>
                                                <div class="formRow half">
                                                    <input id="budget" type="text" class="aep-area-budget small"
                                                        placeholder="Budget (optional)" />
                                                </div>
                                                <div class="formRow half">
                                                    <select id="area-type">
                                                        <option disabled selected>Area Type</option>
                                                        <option>Kitchen</option>
                                                        <option>Lobby</option>
                                                        <option>Bedrooms</option>
                                                        <option>Restaurant</option>
                                                    </select>
                                                </div>

                                                <div class="submit-holder"> 
                                                    <button type="button" onclick="addArea('https://i.pinimg.com/originals/04/80/d2/0480d2416bb57a56e80b1a759c044469.jpg', 'ketchen')">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div onclick="hideAddAreaPopup()" class="cross-container">
                                            <img src="<?php echo base_url()?>assets/images/cross-white.png" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card fit-parent">
                                <div class="header">
                                    <div class="title">
                                        <span>Project Areas</span>
                                        <a class="subtitle">Project Areas Add areas and edit area parameters</a>
                                    </div>

                                    <div class="more"></div>
                                </div>

                                <div class="body">
                                    <div class="project-area-container">
                                        <!-- <div onclick="showProjectAreaDetails()" class="project-area-item"
                                            style="background-image: url('https://4.imimg.com/data4/FS/LT/MY-8734260/modern-hotel-kitchen-500x500.jpg');">
                                            <div class="project-area-title">
                                                Kitchen
                                            </div>
                                        </div>
                                        <div onclick="showProjectAreaDetails()" class="project-area-item"
                                            style="background-image: url('https://www.kixp.net/wp-content/uploads/2019/03/ceiling-light-1.jpg');">
                                            <div class="project-area-title">
                                                Lobby
                                            </div>
                                        </div>
                                        <div onclick="showProjectAreaDetails()" class="project-area-item"
                                            style="background-image: url('https://www.galeriemagazine.com/wp-content/uploads/2019/03/243f89e0-8235-11e7-a767-bc310e55dd10_1320x770_154749-1024x597.jpg');">
                                            <div class="project-area-title">
                                                Bedrooms
                                            </div>
                                        </div>

                                        <div onclick="showProjectAreaDetails()" class="project-area-item"
                                            style="background-image: url('https://www.movenpick.com/fileadmin/_processed_/4/7/csm_Accra_xxxxxxxxx_i111605_17_73a91adbb5.jpg');">
                                            <div class="project-area-title">
                                                Restaurant
                                            </div>
                                        </div> -->

                                        <div onclick="showAddAreaPopup()" class="add-project-area">
                                            <p>+</p>
                                            <p>Add an Area</p>
                                        </div>
                                    </div>
                                    <div class="add-area-type-text">
                                        + Add Area Type
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wsb-item">
                            <div class="card fit-parent">
                                <div class="header">
                                    <div class="title">
                                        <span>Current Requests</span>
                                    </div>

                                    <div class="more"></div>
                                </div>

                                <div class="body">
                                    <div class="current-request-container">
                                        <div class="cri-open">
                                            <div onclick="closeCurrentRequest()" class="cri-open-header">

                                            </div>
                                            <div class="cri-open-body">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" />
                                                            </td>
                                                            <td>
                                                                Product
                                                            </td>
                                                            <td>
                                                                Unit Price
                                                            </td>

                                                            <td>
                                                                Quantity
                                                            </td>

                                                            <td>
                                                                Subtotal
                                                            </td>

                                                            <td>
                                                                Area
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" />
                                                            </td>
                                                            <td>
                                                                Dual Fridge Unit
                                                            </td>
                                                            <td class="green">
                                                                $1000
                                                            </td>

                                                            <td>
                                                                5
                                                            </td>

                                                            <td class="green">
                                                                $5000
                                                            </td>

                                                            <td>
                                                                Kitchen
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" />
                                                            </td>
                                                            <td>
                                                                Deep Freezer
                                                            </td>
                                                            <td class="green">
                                                                $1000
                                                            </td>

                                                            <td>
                                                                5
                                                            </td>

                                                            <td class="green">
                                                                $5000
                                                            </td>

                                                            <td>
                                                                Lobby
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" />
                                                            </td>
                                                            <td>
                                                                Convection Open
                                                            </td>
                                                            <td class="green">
                                                                $1000
                                                            </td>

                                                            <td>
                                                                5
                                                            </td>

                                                            <td class="green">
                                                                $5000
                                                            </td>

                                                            <td>
                                                                Lobby
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="current-request-item cr-pending">
                                            <div class="cr-info">
                                                <div class="cr-bubble">
                                                    <img src="<?php echo base_url()?>assets/images/pending.png" />
                                                </div>
                                                <div class="cr-info-text">
                                                    <p>12/03/2020</p>
                                                    <p><b>Steelite Banqueting</b></p>
                                                    <p>Status: <b>Pending</b></p>
                                                </div>
                                            </div>
                                            <div class="download-container">
                                                <img src="<?php echo base_url()?>assets/images/download.png" />
                                            </div>
                                        </div>
                                        <div onclick="openCurrentRequest('Steelite Banqueting')"
                                            class="current-request-item cr-qouted">
                                            <div class="cr-info">
                                                <div class="cr-bubble">
                                                    <img src="<?php echo base_url()?>assets/images/pending.png" />
                                                </div>
                                                <div class="cr-info-text">
                                                    <p>12/03/2020</p>
                                                    <p><b>Steelite Banqueting</b></p>
                                                    <p>Status: <b>Qouted</b></p>
                                                </div>
                                            </div>
                                            <div class="download-container">
                                                <img src="<?php echo base_url()?>assets/images/download.png" />
                                            </div>
                                        </div>
                                        <div onclick="openCurrentRequest('Steelite Banqueting #1', 'success')"
                                            class="current-request-item cr-success">
                                            <div class="cr-info">
                                                <div class="cr-bubble">
                                                    <img src="<?php echo base_url()?>assets/images/tick.png" />
                                                </div>
                                                <div class="cr-info-text">
                                                    <p>12/03/2020</p>
                                                    <p><b>Steelite Banqueting #1</b></p>
                                                    <p>Status: <b>Success</b></p>
                                                </div>
                                            </div>
                                            <div class="download-container">
                                                <img src="<?php echo base_url()?>assets/images/download.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wsb-item">
                            <div class="card fit-parent">
                                <div class="header">
                                    <div class="title">
                                        <span>Bill of Quantities</span>
                                        <a class="subtitle">Products currently in your project cart</a>
                                    </div>

                                    <div class="more"></div>
                                </div>

                                <div class="body">
                                    <div class="boq-container">
                                        <div class="boq-item">
                                            <div class="checkbox-container">
                                                <input type="checkbox" />
                                            </div>
                                            <div class="product-info-cell">
                                                <img src="<?php echo base_url()?>assets/images/cup_dummy_1.png" class="item-image" />

                                                <div class="name-container">
                                                    <p>Rio <b>by</b> Steelite™</p>
                                                    <p><b>Red Teacup</b></p>
                                                </div>
                                            </div>



                                            <div class="dd-container form-container">
                                                <div class="general-form">
                                                    <div class="full">
                                                        <select>
                                                            <option disabled="true">Project</option>
                                                            <option value="Personal">Kitchen</option>
                                                            <option value="JW Marriot Harageisa">Bedrooms</option>
                                                            <option value="Kempinski Amman">Restaurant</option>
                                                            <option value="Fairmont Harare">Lobby</option>
                                                            <!-- <option value="Add Project">+ Add Project</option> -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="dd-container form-container">
                                                <div class="general-form">
                                                    <div class="full">
                                                        <select>
                                                            <option disabled="true">40000</option>
                                                            <option value="Personal">50000</option>
                                                            <option value="JW Marriot Harageisa">60000</option>
                                                            <option value="Kempinski Amman">70000</option>

                                                            <!-- <option value="Add Project">+ Add Project</option> -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="boq-delete-container">
                                                <img id="trash-icon" src="<?php echo base_url()?>assets/images/trash.png" />
                                            </div>
                                        </div>
                                        <div class="boq-item">
                                            <div class="checkbox-container">
                                                <input type="checkbox" />
                                            </div>
                                            <div class="product-info-cell">
                                                <img src="<?php echo base_url()?>assets/images/cup_2.png" class="item-image" />

                                                <div class="name-container">
                                                    <p>Rio <b>by</b> Steelite™</p>
                                                    <p><b>Red Teacup</b></p>
                                                </div>
                                            </div>

                                            <div class="dd-container form-container">
                                                <div class="general-form">
                                                    <div class="full">
                                                        <select>
                                                            <option disabled="true">Project</option>
                                                            <option value="Personal">Kitchen</option>
                                                            <option value="JW Marriot Harageisa">Bedrooms</option>
                                                            <option value="Kempinski Amman">Restaurant</option>
                                                            <option value="Fairmont Harare">Lobby</option>
                                                            <!-- <option value="Add Project">+ Add Project</option> -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="dd-container form-container">
                                                <div class="general-form">
                                                    <div class="full">
                                                        <select>
                                                            <option disabled="true">40000</option>
                                                            <option value="Personal">50000</option>
                                                            <option value="JW Marriot Harageisa">60000</option>
                                                            <option value="Kempinski Amman">70000</option>

                                                            <!-- <option value="Add Project">+ Add Project</option> -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="boq-delete-container">
                                                <img id="trash-icon" src="<?php echo base_url()?>assets/images/trash.png" />
                                            </div>
                                        </div>
                                        <div class="boq-item">
                                            <div class="checkbox-container">
                                                <input type="checkbox" />
                                            </div>
                                            <div class="product-info-cell">
                                                <img src="<?php echo base_url()?>assets/images/cup_dummy_1.png" class="item-image" />

                                                <div class="name-container">
                                                    <p>Rio <b>by</b> Steelite™</p>
                                                    <p><b>Red Teacup</b></p>
                                                </div>
                                            </div>

                                            <div class="dd-container form-container">
                                                <div class="general-form">
                                                    <div class="full">
                                                        <select>
                                                            <option disabled="true">Project</option>
                                                            <option value="Personal">Kitchen</option>
                                                            <option value="JW Marriot Harageisa">Bedrooms</option>
                                                            <option value="Kempinski Amman">Restaurant</option>
                                                            <option value="Fairmont Harare">Lobby</option>
                                                            <!-- <option value="Add Project">+ Add Project</option> -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="dd-container form-container">
                                                <div class="general-form">
                                                    <div class="full">
                                                        <select>
                                                            <option disabled="true">40000</option>
                                                            <option value="Personal">50000</option>
                                                            <option value="JW Marriot Harageisa">60000</option>
                                                            <option value="Kempinski Amman">70000</option>

                                                            <!-- <option value="Add Project">+ Add Project</option> -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="boq-delete-container">
                                                <img id="trash-icon" src="<?php echo base_url()?>assets/images/trash.png" />
                                            </div>
                                        </div>
                                        <div class="boq-item">
                                            <div class="checkbox-container">
                                                <input type="checkbox" />
                                            </div>
                                            <div class="product-info-cell">
                                                <img src="<?php echo base_url()?>assets/images/cup_dummy_1.png" class="item-image" />

                                                <div class="name-container">
                                                    <p>Rio <b>by</b> Steelite™</p>
                                                    <p><b>Red Teacup</b></p>
                                                </div>
                                            </div>

                                            <div class="dd-container form-container">
                                                <div class="general-form">
                                                    <div class="full">
                                                        <select>
                                                            <option disabled="true">Project</option>
                                                            <option value="Personal">Kitchen</option>
                                                            <option value="JW Marriot Harageisa">Bedrooms</option>
                                                            <option value="Kempinski Amman">Restaurant</option>
                                                            <option value="Fairmont Harare">Lobby</option>
                                                            <!-- <option value="Add Project">+ Add Project</option> -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="dd-container form-container">
                                                <div class="general-form">
                                                    <div class="full">
                                                        <select>
                                                            <option disabled="true">40000</option>
                                                            <option value="Personal">50000</option>
                                                            <option value="JW Marriot Harageisa">60000</option>
                                                            <option value="Kempinski Amman">70000</option>

                                                            <!-- <option value="Add Project">+ Add Project</option> -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="boq-delete-container">
                                                <img id="trash-icon" src="<?php echo base_url()?>assets/images/trash.png" />
                                            </div>
                                        </div>
                                        <div class="boq-item">
                                            <div class="checkbox-container">
                                                <input type="checkbox" />
                                            </div>
                                            <div class="product-info-cell">
                                                <img src="<?php echo base_url()?>assets/images/cup_dummy_1.png" class="item-image" />

                                                <div class="name-container">
                                                    <p>Rio <b>by</b> Steelite™</p>
                                                    <p><b>Red Teacup</b></p>
                                                </div>
                                            </div>

                                            <div class="dd-container form-container">
                                                <div class="general-form">
                                                    <div class="full">
                                                        <select>
                                                            <option disabled="true">Project</option>
                                                            <option value="Personal">Kitchen</option>
                                                            <option value="JW Marriot Harageisa">Bedrooms</option>
                                                            <option value="Kempinski Amman">Restaurant</option>
                                                            <option value="Fairmont Harare">Lobby</option>
                                                            <!-- <option value="Add Project">+ Add Project</option> -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="dd-container form-container">
                                                <div class="general-form">
                                                    <div class="full">
                                                        <select>
                                                            <option disabled="true">40000</option>
                                                            <option value="Personal">50000</option>
                                                            <option value="JW Marriot Harageisa">60000</option>
                                                            <option value="Kempinski Amman">70000</option>

                                                            <!-- <option value="Add Project">+ Add Project</option> -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="boq-delete-container">
                                                <img id="trash-icon" src="<?php echo base_url()?>assets/images/trash.png" />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wsb-item">
                            <div class="card fit-parent">
                                <div class="header">
                                    <div class="title">
                                        <span>Asset Register</span>
                                        <a class="subtitle">All assets currently registered to this project</a>
                                    </div>

                                    <div class="more"></div>
                                </div>

                                <div class="body">
                                    <div class="asset-register-container">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Supplier</th>
                                                    <th>Product</th>
                                                    <th>Unit Price</th>
                                                    <th>Quantity</th>
                                                    <th>Area</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr class="data-row">
                                                    <td>12/03/2017</td>
                                                    <td>Abdin Refrige…</td>
                                                    <td>Dual Unit Fridge</td>
                                                    <td>$1000</td>
                                                    <td>5</td>
                                                    <td>Kitchen</td>
                                                </tr>
                                                <tr class="data-row">
                                                    <td>12/03/2017</td>
                                                    <td>Abdin Refrige…</td>
                                                    <td>Dual Unit Fridge</td>
                                                    <td>$1000</td>
                                                    <td>5</td>
                                                    <td>Kitchen</td>
                                                </tr>
                                                <tr class="data-row">
                                                    <td>12/03/2017</td>
                                                    <td>Abdin Refrige…</td>
                                                    <td>Dual Unit Fridge</td>
                                                    <td>$1000</td>
                                                    <td>5</td>
                                                    <td>Kitchen</td>
                                                </tr>
                                                <tr class="data-row">
                                                    <td>12/03/2017</td>
                                                    <td>Abdin Refrige…</td>
                                                    <td>Dual Unit Fridge</td>
                                                    <td>$1000</td>
                                                    <td>5</td>
                                                    <td>Kitchen</td>
                                                </tr>
                                                <tr class="data-row">
                                                    <td>12/03/2017</td>
                                                    <td>Abdin Refrige…</td>
                                                    <td>Dual Unit Fridge</td>
                                                    <td>$1000</td>
                                                    <td>5</td>
                                                    <td>Kitchen</td>
                                                </tr>
                                                <tr class="data-row">
                                                    <td>12/03/2017</td>
                                                    <td>Abdin Refrige…</td>
                                                    <td>Dual Unit Fridge</td>
                                                    <td>$1000</td>
                                                    <td>5</td>
                                                    <td>Kitchen</td>
                                                </tr>
                                                <tr class="data-row">
                                                    <td>12/03/2017</td>
                                                    <td>Abdin Refrige…</td>
                                                    <td>Dual Unit Fridge</td>
                                                    <td>$1000</td>
                                                    <td>5</td>
                                                    <td>Kitchen</td>
                                                </tr>
                                                <tr class="data-row">
                                                    <td>12/03/2017</td>
                                                    <td>Abdin Refrige…</td>
                                                    <td>Dual Unit Fridge</td>
                                                    <td>$1000</td>
                                                    <td>5</td>
                                                    <td>Kitchen</td>
                                                </tr>
                                                <tr class="data-row">
                                                    <td>12/03/2017</td>
                                                    <td>Abdin Refrige…</td>
                                                    <td>Dual Unit Fridge</td>
                                                    <td>$1000</td>
                                                    <td>5</td>
                                                    <td>Kitchen</td>
                                                </tr>
                                                <tr class="data-row">
                                                    <td>12/03/2017</td>
                                                    <td>Abdin Refrigator sdsdsds</td>
                                                    <td>Dual Unit Fridge</td>
                                                    <td>$1000</td>
                                                    <td>5</td>
                                                    <td>Kitchen</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="detail-asset-container">
                                        <span>Detailed Asset Register</span>
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
<script src="<?php echo base_url()?>assets/js/togglemarket.min.js"></script>
<script src="<?php echo base_url()?>assets/js/components/scheduler.js"></script>
<script src="<?php echo base_url()?>assets/js/pages/workstation.js"></script>
<script src="<?php echo base_url()?>assets/js/components/searchDropdown.js"></script>
<script src="<?php echo base_url()?>assets/js/libraries/jquery-ui/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script>

var baseURL = "<?php echo base_url("index.php/authenticate/"); ?>";
var baseapiURL = "<?php echo base_url("index.php/ServicesController/ServiceCall/"); ?>";
var rowsCount = 1;

$(document).ready(function() { 
    $.ajax({
        type: 'GET',
        url: baseapiURL + 'getEventsAPI',
        contentType: "application/json",
        success: function(response) {
          if (response) {           
            var jsonObj = JSON.parse(response);

            if(jsonObj != undefined)
            {
                var list = $('#remindersData');
                var len = jsonObj.length;

                for(var i = 0;i < len;i++)
                {                              
                    var eventDesc = jsonObj[i].event__additionalnotes;
                    var eventDate = jsonObj[i].event__date;
                    var eventDateConverted = moment(eventDate).format('DD/MM/YYYY');
                    var date = new Date(eventDateConverted);
                    var eventMonth = date.getMonth()+1;
                    var eventMonthName = moment(eventMonth, 'M').format('MMMM');
                    var eventDay = date.getDate();
                    var eventName = jsonObj[i].event__name;
                    var id = jsonObj[i].id;

                    if(eventDesc != undefined && eventName != undefined && (eventDate != undefined || eventDate != null))
                    {
                        if(i > 0)
                        {
                            $("#dvWorkStationEventReminders").clone().appendTo("#dvWorkStationEventRemindersData");
                        }  
                        $('#dvWorkStationEventReminders').find('#dvWorkStationDay').text(eventDay);    
                        $('#dvWorkStationEventReminders').find('#dvWorkStationMonth').text(eventMonthName); 
                        $('#dvWorkStationEventReminders').find('#pWorkStationEventDate').text(eventDateConverted);
                        $('#dvWorkStationEventReminders').find('#pWorkStationEventName').text(eventName);
                        $('#dvWorkStationEventReminders').find('#pWorkStationEventDetails').text(eventDesc);
                        $("#dvWorkStationEventReminders").css('display','flex'); 
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
                list.append("<li><input type='checkbox' name='projectInterestArr[]' id = '"+ id +"' value = '" + id + "'>" + text + "</li>");
            });
          } else {
            showFailureDialogue("The service is temporarily unavailable, project interests are not uploaded properly")
            return;
          }
        }
      });

      var id =  getUrlVars();

       var qstrings = {
            projectId :'5f970f0cbe96120024ee61a6',//'5f8dad54350c780024256c29',
      };

      $('#InputEditProjectProjectId').val('5f970f0cbe96120024ee61a6');

      $.ajax({
        type: 'POST',
        url: baseapiURL + 'getProjectDetailsAPI',
        data: JSON.stringify(qstrings),
        contentType: "application/json",
        success: function(response) {
          if (response) {    
              if(response.indexOf(200) != -1)
              {
                  response = response.substr(3);                  
              }    
            var jsonObj = JSON.parse(response);
            var list = $('#projectInterestList');
            if(jsonObj != undefined)
            {
                $('#InputWorkStationProjectName').val(jsonObj.getProject.projectName);
                $('#InputWorkStationClientName').val(jsonObj.getProject.clientName);
                $('#InputWorkStationCityName').val(jsonObj.getProject.city);
                $('#InputWorkStationCountryName').val(jsonObj.getProject.country);
                $('#TextAreaWorkStationDescription').val(jsonObj.getProject.description);
                var rating = jsonObj.getProject.rating;
                $.each(jsonObj.getProject.projectInterest, function(val, text) {
                    text = jsonObj.getProject.projectInterest[val].projectInterestId.interestName;
                    id = jsonObj.getProject.projectInterest[val].projectInterestId;                
                    
                    $('input[type=checkbox][name=projectInterestArr\\[\\]]').each(function(){
                        if(this.id == id)
                        {
                            $('#'+id).prop( "checked", true );
                        }                        
                    });

                    getRating(rating);
                });
            }            
          } else {
            showFailureDialogue("The service is temporarily unavailable, project interests are not uploaded properly")
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
            var len = jsonObj.getBuyer.length;

            var mySelect = $('#SelectCreateEventProjects');

            var list = $('#CalendarProjectsList');           

            $.each(jsonObj.getBuyer, function(val, text) {
              text = jsonObj.getBuyer[val].projectName;
              if(text != '' && text != undefined && text != null)
              {
                mySelect.append(
                    $('<option></option>').val(jsonObj.getBuyer[val]._id).html(text)
                );
                list.append("<li><input type='checkbox' id = '"+ jsonObj.getBuyer[val]._id +"' value = '" + jsonObj.getBuyer[val]._id + "'>" + text + "</li>");
              }                            
            });

          } else {
            showFailureDialogue("The service is temporarily unavailable, area types are not uploaded properly")
            return;
          }
        }
      });
});

function getRating(ratingReceived) {
    var count = 0;

    for (i = 0.5; i < ratingReceived; i+=0.5) 
    {     
        document.getElementsByName('rating')[count].checked = true;       
        count++;
    }
}

function validate()
{
    var isValid = true;

    var dateinput = $('#InputCreateEventFromDate').val();
    var startTime = $('#InputCreateEventFromTime').val();
    var endTime = $('#InputCreateEventToTime').val();
    var eventName = $("#InputCreateEventEventTitle").val();
    var remindBeforeTime = $('#InputCreateEventRemindTime').val();
    var eventAdditionalNotes = $("#TextareaCreateEventDesc").val();

    if(dateinput == undefined || dateinput == '')
    {
        isValid = false;
    }
    if(startTime == undefined || startTime == '')
    {
        isValid = false;
    }
    if(endTime == undefined || endTime == '')
    {
        isValid = false;
    }
    if(eventName == undefined || eventName == '')
    {
        isValid = false;
    }
    if(remindBeforeTime == undefined || remindBeforeTime == '')
    {
        isValid = false;
    }
    if(eventAdditionalNotes == undefined || eventAdditionalNotes == '')
    {
        isValid = false;
    }
    return isValid;
}

function addEvent()
{      
    var isValid = validate();

    if(isValid)
    {
        var today = new Date();
        var date_ = today.getDay()+'/'+today.getMonth()+1+'/'+today.getFullYear();    

        var dateinput = $('#InputCreateEventFromDate').val();
        dateinput = moment(dateinput).format('YYYY-MM-DD');
        dateinput = dateinput+'T13:34:40.238+00:00';

        var dateInputForTimings = $('#InputCreateEventFromDate').val();
        dateInputForTimings =  moment(dateInputForTimings).format('YYYY-MM-DD');    

        var startTime = $('#InputCreateEventFromTime').val();
        startTime = dateInputForTimings+'T'+ startTime +':40.238+00:00';

        var endTime = $('#InputCreateEventToTime').val();
        endTime = dateInputForTimings+'T'+ endTime +':40.238+00:00';
        
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
                //alert('Event Successfully created');
                location.reload();
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
    else
    {
        alert('Fill all the fields!');
    }    
}

function saveNotificationSettings()
{
    var date = $('.dp').val();
    date =  moment(date).format('YYYY-MM-DD');
    var time = $('.tp').val();

    var remindTime = date+'T'+ time +':40.238+00:00';
    $('#InputCreateEventRemindTime').val(remindTime);
    hideReminderNotification();
}

function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
</script>



</html>