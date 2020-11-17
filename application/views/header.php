<?php
if (!isset($_SESSION["token"])) {
    header("Location: " . base_url("index.php/authenticate/signin"));
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Togglemarket</title>
    <link href="<?php echo base_url(); ?>assets/js/libraries/fullcalendar/lib/main.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/js/libraries/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">

    <script src="<?php echo base_url(); ?>assets/js/togglemarket.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendors/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/libraries/fullcalendar/lib/main.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/libraries/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/components/scheduler.js"></script>
   <!--  <script src="?php echo base_url(); ?>assets/js/components/customDropDown.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/js/components/searchDropdown.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/pages/workstation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src=<?php echo base_url('assets/js/components/fileupload.js'); ?>></script>
    <!--<link href="<?php echo base_url(); ?>build/css/main.css" rel="stylesheet">-->

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