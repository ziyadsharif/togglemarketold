<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Togglemarket</title>
    <link href="<?php echo base_url()?>assets/js/libraries/fullcalendar/lib/main.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/js/libraries/jquery-ui/jquery-ui.min.css" rel="stylesheet">


    <script src="<?php echo base_url(); ?>assets/js/libraries/fullcalendar/lib/main.min.js"></script>

    <link href=<?php echo base_url('assets/css/main.css'); ?> rel="stylesheet">
    <script src=<?php echo base_url('assets/js/togglemarket.min.js'); ?>> </script>

    <!-- include the script -->
    <script src="<?php echo base_url(); ?>assets/alertifyjs/alertify.min.js"></script>
    <!-- include the style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/alertifyjs/alertify.min.css" />
    <!-- include a theme -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/alertifyjs/themes/default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <!-- Popups -->
    <div class="schedular-backdrop">
        <div class="scheduler-popup">
            <div class="scheduler-popup-content">
                <div class="add-event-popup-container">
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
                                        <input type="text" placeholder="Event Title" id="InputCreateEventEventTitle" class="aep-event-title">
                                    </div>

                                    <div class="formRow full">
                                        <select id="SelectCreateEventProjects">
                                            <option disabled="true">Project</option>
                                            <option value="Personal">Personal</option>
                                            <option value="JW Marriot Harageisa">JW Marriot Harageisa</option>
                                            <option value="Kempinski Amman">Kempinski Amman</option>
                                            <option value="Fairmont Harare">Fairmont Harare</option>
                                            <option value="Hilton Abu Dhabi">Hilton Abu Dhabi</option>
                                            <!-- <option value="Add Project">+ Add Project</option> -->
                                        </select>
                                    </div>
                                    <div class="formRow full">
                                        <input type="text" placeholder="Add users or emails" id="InputCreateEventUserEmails" />
                                    </div>
                                    <div class="formRow full">
                                        <textarea placeholder="Description" id="TextareaCreateEventDesc"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ae-footer">
                            <button onclick="addEvent()" class="save-changes-button">Save Changes</button>
                        </div>
                    </div>
                </div>
                <div class="aep-body">
                    <div class="left">
                        <p class="left-title">Calendar</p>
                        <button class="create-event-button">+ Create Event</button>
                        <div class="mini-calender-holder">
                            <div id="mini-calender"></div>
                        </div>
                        <div class="left-inputs">
                            <input type="text" class="left-search" placeholder="Search Events" />
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
            <div onclick="hideScheduler()" class="cross-container">
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
                                            <div class="ur-checkboxes-container" id="remindersData">
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
            <div class="wd-popup-detail">
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
                                    <img src="<?php echo base_url()?>assets/images/edit.png" />
                                    <p>Edit Project Picture</p>
                                </div>
                            </div>
                        </div>

                        <div class="wd-body-right">
                            <form class="wd-form">
                                <div class="form-cell">
                                    <p>Project Name</p>
                                    <input type="text" class="wd-input" id="InputWorkStationProjectName" />
                                </div>
                                <div class="form-cell">
                                    <p>Client’s Name</p>
                                    <input type="text" class="wd-input" id="InputWorkStationClientName" />
                                </div>
                                <div class="form-cell">
                                    <p>City</p>
                                    <input type="text" class="wd-input" id="InputWorkStationCityName" />
                                </div>
                                <div class="form-cell">
                                    <p>Country</p>
                                    <input type="text" class="wd-input" id="InputWorkStationCountryName" />
                                </div>

                                <div class="form-cell">
                                    <p>Description</p>
                                    <textarea id="TextAreaWorkStationDescription"></textarea>
                                </div>

                                <div class="form-cell">
                                <h4>Looking for</h4>
                                    <ul class="radioContainer" id="projectInterestList">
                                    <!--  <li><input type="checkbox" id='furniture1' name='furniture' checked> Furniture supplies</li>
                                        <li><input type="checkbox" id='furniture2' name='furniture'> Furniture supplies</li> -->
                                    </ul>
                                </div>

                                <div class="form-cell submit">
                                    <input type="submit" class="save-changes" value="Save Changes" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
                                <li><a href="<?php echo base_url("index.php/authenticate/accountdetails/"); ?>">My Account</a></li>
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
                                            <img src="<?php echo base_url()?>assets/images/cross-white.png" />
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
                                                <div class="reminder-edit" id="dvWorkStationEditButton">
                                                    <div id="bell-icon-1" class="reminder-bell-image empty-bell"></div>
                                                    <span onclick="showReminderNotification()">edit</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="reminder-item">
                                            <div class="reminder-left">
                                                <div class="calendar-icon">
                                                    <img src="<?php echo base_url()?>assets/images/calendar.png" />
                                                    <div class="day-holder">
                                                        <p>10</p>
                                                    </div>

                                                    <div class="month-holder">
                                                        <p>June</p>
                                                    </div>
                                                </div>
                                                <div class="reminder-info">
                                                    <p>10/06/2020</p>
                                                    <p><b>Steelite First Payment</b></p>
                                                    <p><i>-$13,000</i></p>
                                                </div>
                                            </div>

                                            <div class="reminder-right">
                                                <div class="reminder-edit">
                                                    <div id="bell-icon-2" class="reminder-bell-image empty-bell"></div>
                                                    <span onclick="showReminderNotification()">edit</span>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="reminder-item">
                                            <div class="reminder-left">
                                                <div class="calendar-icon">
                                                    <img src="<?php echo base_url()?>assets/images/calendar.png" />
                                                    <div class="day-holder">
                                                        <p>10</p>
                                                    </div>

                                                    <div class="month-holder">
                                                        <p>June</p>
                                                    </div>
                                                </div>
                                                <div class="reminder-info">
                                                    <p>10/06/2020</p>
                                                    <p><b>Steelite First Payment</b></p>
                                                    <p><i>-$13,000</i></p>
                                                </div>
                                            </div>

                                            <div class="reminder-right">
                                                <div class="reminder-edit">
                                                    <div id="bell-icon-3" class="reminder-bell-image empty-bell"></div>
                                                    <span onclick="showReminderNotification()">edit</span>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="reminder-item">
                                            <div class="reminder-left">
                                                <div class="calendar-icon">
                                                    <img src="<?php echo base_url()?>assets/images/calendar.png" />
                                                    <div class="day-holder">
                                                        <p>10</p>
                                                    </div>

                                                    <div class="month-holder">
                                                        <p>June</p>
                                                    </div>
                                                </div>
                                                <div class="reminder-info">
                                                    <p>10/06/2020</p>
                                                    <p><b>Steelite First Payment</b></p>
                                                    <p><i>-$13,000</i></p>
                                                </div>
                                            </div>

                                            <div onclick="showReminderNotification()" class="reminder-right">
                                                <div class="reminder-edit">
                                                    <img src="<?php echo base_url(); ?>assets/images/fullbell.png" />
                                                    <span>edit</span>
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
                                                        <option >Kitchen</option>
                                                        <option>Lobby</option>
                                                        <option>Bedrooms</option>
                                                        <option>Restaurant</option>
                                                    </select>
                                                </div>

                                                <div class="submit-holder">
                                                    <button type="button" onclick="addArea()">Save Changes</button>
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

                                        <div onclick="showProjectAreaDetails()" class="project-area-item" style="background-image: url('https://www.movenpick.com/fileadmin/_processed_/4/7/csm_Accra_xxxxxxxxx_i111605_17_73a91adbb5.jpg');">
                                            <div class="project-area-title">
                                                Restaurant
                                            </div>
                                        </div>

                                        <div onclick="showAddAreaPopup()" class="project-area-item add-project-area">
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
    <div class="loader" id="loaderdiv">
        <div class="gifHolder">
            <img src="<?php echo base_url("assets/images/loader.gif"); ?>">
        </div>
    </div>
</body>
<script src="<?php echo base_url()?>assets/js/togglemarket.min.js"></script>
<script src="<?php echo base_url()?>assets/js/components/scheduler.js"></script>
<script src="<?php echo base_url()?>assets/js/components/customDropDown.js"></script>
<script src="<?php echo base_url()?>assets/js/pages/workstation.js"></script>
<script src="<?php echo base_url()?>assets/js/components/searchDropdown.js"></script>
<script src="<?php echo base_url()?>assets/js/libraries/jquery-ui/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

<script>

var baseURL = "<?php echo base_url("index.php/authenticate/"); ?>";
var baseapiURL = "<?php echo base_url("index.php/ServicesController/ServiceCall/"); ?>";    

$('#tblMain').find('td').click(function(){
   alert($(this).text());
});

$(document).ready(function() { 
    $.ajax({
            type: 'GET',
            url: baseapiURL + 'getuserAPI',
            contentType: "application/json",
            async: true,
            success: function(response) {
                if (response) {
                    // var jsonObj = JSON.parse(response);
                    try{
                var jsonObj = JSON.parse(response);
                }   catch ( error){
                    console.log(error);
                }   
                } else {
                    showFailureDialogue("The service is temporarily unavailable, area types are not uploaded properly")
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

      var qstrings = {
            projectId :'5f8dad54350c780024256c29',
      };

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
                  console.log(response);
              }    

              try{
                var jsonObj = JSON.parse(response);
                }   catch ( error){
                    console.log(error);
                }   
            // var jsonObj = JSON.parse(response);

            if(jsonObj != undefined)
            {
                $('#InputWorkStationProjectName').val(jsonObj.getProject.projectName);
                $('#InputWorkStationClientName').val(jsonObj.getProject.clientName);
                $('#InputWorkStationCityName').val(jsonObj.getProject.city);
                $('#InputWorkStationCountryName').val(jsonObj.getProject.country);
                $('#TextAreaWorkStationDescription').val(jsonObj.getProject.description);
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
              try{
                var jsonObj = JSON.parse(response);
                }   catch ( error){
                    console.log(error);
                }    
            
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

function addEvent()
    {      
        var today = new Date();
        var date_ = today.getDay()+'/'+today.getMonth()+1+'/'+today.getFullYear();   
        var qstrings = {
        EventName: $("#InputCreateEventEventTitle").val(),
        EventDate: '2020-08-12T13:34:40.238+00:00',
        EventStartTime: '2020-08-12T13:34:40.238+00:00',
        EventEndTime: '2020-08-12T13:34:40.238+00:00',
        RemindBeforeTime: '2020-08-12T13:34:40.238+00:00',
        EventInviteEmail: $('#InputCreateEventUserEmails').val(),
        EventAdditionalNotes: $("#TextareaCreateEventDesc").val(),
      };

       $.ajax({
        type: 'POST',
        url: baseapiURL + 'createEventAPI',
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

   
    function SaveProjectArea() {

        validate = projectareaValidation("");
        if (!validate)
            return;

        var AreaName = $("#InputAreaName").val();
        var Budget = $("#InputBudget").val();
        var SelectedAreaTypeId = $("#InputAreaTypes option:selected").val();

        var qstrings = {
            AreaName: AreaName,
            Budget: Budget,
            AreaTypes: SelectedAreaTypeId,
        };
        $.ajax({
            type: 'POST',
            url: baseapiURL + 'AddProjectAreaAPI',
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

    function projectareaValidation(mymessage) {

        areanameerrorMessage = "Please Enter The Area Name";
        budgeterrorMessage = "Please Enter The Budget";
        areatypeerrorMessage = "Please Select The Area Type";

        var AreaName = document.getElementsByName('InputAreaName')[0].value
        var Budget = document.getElementsByName('InputBudget')[0].value;
        var AreaType = $("#InputAreaTypes option:selected").text();

        if (AreaName == "" || AreaName == 0) {
            showFailureDialogue(areanameerrorMessage);
        } else if (Budget == "" || Budget == 0) {
            showFailureDialogue(budgeterrorMessage);
        } else if (AreaType == "Select The Area Type" || AreaType == 0) {
            showFailureDialogue(areatypeerrorMessage);
        } else {
            return true;
        }
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
</script>

<script src="<?php echo base_url(); ?>assets/js/components/scheduler.js"></script>
<script src="<?php echo base_url(); ?>assets/js/components/customDropDown.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/workstation.js"></script>
<script src="<?php echo base_url(); ?>assets/js/components/searchDropdown.js"></script>

</html>