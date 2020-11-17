<div class="sidebar">
    <div class="sidebar-item">
        <div class="profile-avi trigger">
            <img src="<?php echo base_url(); ?>assets/images/avi.png">
            <span class="ncount hideifempty">0</span>
            <div class="dropdown">
                <ul>
                    <li>David Hume</li>
                    <li><a href="<?php echo base_url("index.php/authenticate/accountdetails/"); ?>">My Account</a></li>
                    <li><a href="<?php echo base_url("index.php/Buyerdashboard/buyerdashboard"); ?>">Dashboard</a></li>
                    <li><a href="#">Messages <span class="hideifempty">0</span></a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Quotations</a></li>
                    <li><a href="<?php echo base_url("index.php/ServicesController/ServiceCall/Logout");?>">Log out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sidebar-item">
        <div class="sidebar-bubble">
            <img src="<?php echo base_url(); ?>assets/images/searchwhite.png" />
        </div>
    </div>
    <div onclick="showScheduler()" class="sidebar-item">
        <div class="sidebar-bubble">
            <img src="<?php echo base_url(); ?>assets/images/Group-1420.png" />
        </div>
    </div>
    <div class="sidebar-item">
        <div class="sidebar-bubble">
            <img src="<?php echo base_url(); ?>assets/images/heart.png" />
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

        function logout() {
			window.location.replace("");
            //$.ajax({
//                type: 'POST',
//                url: baseapiURL + 'Logout',
//                contentType: "application/json",
//                dataType: 'json',
//            });
        }
</script>