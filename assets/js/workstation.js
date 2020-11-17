
function showBackdrop(){
    $('.backdrop').addClass('show');
}

function hideBackdrop(){
    $('.backdrop').removeClass('show');
}

function showEditWorstationPopup() {
    showBackdrop();
    $('.workstation-detail-popup').css('display', 'flex');
}

function showProjectAreaDetails () {
    showBackdrop();
    $('.project-area-details-popup').css('display', 'flex');
}

function showAddAreaPopup() {
    showBackdrop();
    $('.add-an-area-popup').css('display', 'block');   
}

function hideAddAreaPopup() {
    hideBackdrop();
    $('.add-an-area-popup').css('display', 'none');  
}

function showAddUserPopup() {
    showBackdrop();
    $('.add-user-popup').css('display', 'flex');
}

function showReminderNotification() {
    showBackdrop();
    $('.reminder-notification').css('display', 'block');
}

function hideReminderNotification() {
    hideBackdrop();
    $('.reminder-notification').css('display', 'none');
}




$(document).ready(function (e) {
    console.log('stuff');
});