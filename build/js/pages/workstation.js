
function showBackdrop() {
    $('.backdrop').addClass('show');
}

function hideBackdrop() {
    $('.backdrop').removeClass('show');
}

function showEditWorstationPopup() {
    showBackdrop();
    $('.workstation-detail-popup').css('display', 'flex');
}

function hideEditWorkstationPopup() {
    hideBackdrop();
    $('.workstation-detail-popup').css('display', 'none');
}

function showProjectAreaDetails() {
    showBackdrop();
    $('.project-area-details-popup').css('display', 'flex');
}

function hideProjectAreaDetails() {
    hideBackdrop();
    $('.project-area-details-popup').css('display', 'none');
}

function showAddAreaPopup() {
    $("#area-name").val('');
    $("#budget").val('');
    $('#area-type').prop('selectedIndex',0);
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

function hideAddUserPopup() {
    hideBackdrop();
    $('.add-user-popup').css('display', 'none');
}

function showReminderNotification(specialId) {
    // showBackdrop();
    var reminderNotificationEl = $('.reminder-notification');
    if(specialId){
        reminderNotificationEl = $(`#${specialId}`);
    }
    console.log(reminderNotificationEl);
    reminderNotificationEl.css('display', 'block');
}

function hideReminderNotification() {
    hideBackdrop();
    $('.reminder-notification').css('display', 'none');
}

function openCurrentRequest(title, status = "qouted") {
    var headerEl = `<div class="cri-left cr-${status}">
    <div class="cr-bubble">
        <img src="build/images/pending.png" />
    </div>
    <span>${title}</span>
</div>
<span class="cri-right">
    Full Qoutation (PDF)
</span>`;


    $('.cri-open').addClass(`cri-${status}`);

    $('.cri-open-header').empty();

    $('.cri-open-header').append(headerEl);

    $('.cri-open').css('display', 'block');
    $('.current-request-item').css('display', 'none');
}

function closeCurrentRequest() {
    var criClasses = $('.cri-open').attr('class').split(' ');
    console.log(criClasses);
    $('.cri-open').removeClass(criClasses[1]);
    $('.cri-open').css('display', 'none');
    $('.current-request-item').css('display', 'flex');
}
var userRoleElem;
var expandedPermission = false;

function handleUserRoleClick(e) {
    var arrowParent = e.target.parentElement.parentElement.id;
    if (expandedPermission) {
        shrinkUserRole(arrowParent);
        expandedPermission = !expandedPermission;
        return;
    }

    shrinkAllUserRoles();

    expandUserRole(arrowParent);
    expandedPermission = !expandedPermission;
}

function shrinkAllUserRoles() {
    $('.user-role').map(function (index, item) {
        if (item.className.includes('animate-user-role')) {

            shrinkUserRole(item.id);
        }
    });
}

function expandUserRole(target) {
    userRoleElem = $('.role-name').html();
    $(`#${target}`).css('z-index', '5');
    $(`#${target}`).addClass('animate-user-role');
    $(`#${target} > .ur-header > .role-name`).css('color', 'black').text('Permissions')
}

function shrinkUserRole(target) {
    $(`#${target}`).css('z-index', '4');
    $(`#${target}`).removeClass('animate-user-role');
    $(`#${target} > .ur-header > .role-name`).css('color', '#747474').text(userRoleElem);
}

function toggleReminderBell(e) {
    var bellEl = $(`#${e.target.id}`);
    var bellClass = bellEl.attr('class').split(' ')[1];

    if (bellClass === 'fill-bell') {
        bellEl.removeClass('fill-bell');
        bellEl.addClass('empty-bell')
        return;
    }

    bellEl.removeClass('empty-bell');
    bellEl.addClass('fill-bell');
}

function buildAreaElement(areaType) {
    var areaImage = areaType.toLowerCase() + "-area-image";
    var areaElem = `
    <div onclick="showProjectAreaDetails()" class="project-area-item" style="background-image: url('build/images/${areaImage}.jpg');">
    <div class="project-area-title">
        ${areaType}
    </div>
</div>
    `

    return areaElem;
}

function addArea() {
    var areaname = $("#area-name").val();
    var budget = $("#budget").val();
    var areaType = $("#area-type").val();

    if (areaname.length === 0 | !areaType) {
        alert('Please fill in all the required fields');
        return;
    }

    $('.add-project-area').before(buildAreaElement(areaType));

    hideAddAreaPopup();

}

$(document).ready(function () {
    $('.ur-arrow-down').on('click', handleUserRoleClick);
    $('.reminder-bell-image').on('click', toggleReminderBell);
    $('.dp').datepicker({

    });
    $('.dp').datepicker("setDate", new Date());

});