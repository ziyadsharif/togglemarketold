var dateInfo = null;
var calender = null;
var miniCalendar = null;
var eventDetails = null;


function formatDate(dateObject) {
    var d = new Date(dateObject);
    var day = d.getDate();
    var month = d.getMonth() + 1;
    var year = d.getFullYear();
    if (day < 10) {
        day = "0" + day;
    }
    if (month < 10) {
        month = "0" + month;
    }
    var date = month + "/" + day + "/" + year;

    return date;
};

function showSchedulerBackdrop() {
    $('.schedular-backdrop ').css('visibility', 'visible');
}

function hideSchedulerBackdrop() {
    $('.schedular-backdrop ').css('visibility', 'hidden');
}

function hideAddEventPopup() {
    $('.add-event-popup-container').css('display', 'none');
}


function resetSchedulerPopup() {
    $('.aep-event-title').val('');
    $('.event-project').prop('selectedIndex', 0);
    $('.aep-description').val('');
    $('.ae-from-input').val('');
    $('.ae-to-input').val('');
    $('.ae-description').val('');
}

function showAddEventPopup(newDate) {
    if (newDate) {
        dateInfo = null;
    }
    resetSchedulerPopup();
    $('.add-event-popup-container').css('display', 'flex');
}

function handleDateClick() {
    showAddEventPopup();
}

function handleEventColor(eventId) {
    switch (eventId) {
        case '1':
            return '#f37f5d';
        case '2':
            return '#f45c85';
        case '3':
            return '#af89eb';
        case '4':
            return '#4cc1b7';
        default:
            return '#47a1da';
    }
}

function handleDateSelected() {
    var from = $('.ae-from-input').val();
    var to = $('.ae-to-input').val();

    if (from.length === 0 || to.length === 0) {
        if (dateInfo) {
            return {
                start: dateInfo.dateStr,
            }
        } else {
            return null;
        }
    }

    return {
        start: new Date(from),
        end: new Date(to),
    }
}

function addEvent() {
    var eventTitleName = $('.aep-event-title').val();
    if (eventTitleName.length === 0) {
        alert('Please fill in the event title');
        return;
    }

    var projectSelectedId = $('.event-project').find(':selected').attr('id');
    var dateSelected = handleDateSelected();
    if (!dateSelected) {
        alert('Please fill in the date correctly');
        return;
    }

    calendar.addEvent({
        ...dateSelected,
        title: eventTitleName,
        allDay: true,
        color: handleEventColor(projectSelectedId),

    });

    hideAddEventPopup();
}


function showScheduler() {
    
    showSchedulerBackdrop();
    $('.scheduler-popup').css('visibility', 'visible');
}

function hideScheduler() {
    hideSchedulerBackdrop();
    $('.scheduler-popup').css('visibility', 'hidden');
}



document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');

    calendar = new FullCalendar.Calendar(calendarEl, {
        timeZone: 'UTC',
        initialView: 'dayGridMonth',
        editable: true,
        selectable: true,
        dateClick: function (info) {
            $('.hidden-clicked-date-value').val(formatDate(info.dateStr));
            dateInfo = info;
            handleDateClick(info);
            
        },
        eventDidMount: function (info) {
        }  

    });

    calendar.render();


});

$(document).ready(function () {
    $('.fc-button-group>.fc-prev-button>span').removeClass('fc-icon fc-icon-chevron-left').append('<img style="width: 22px;height: 22px;" src="build/images/chevron-left.png"/>');
    $('.fc-button-group>.fc-next-button>span').removeClass('fc-icon fc-icon-chevron-left').append('<img style="width: 22px;height: 22px;" src="build/images/chevron-right.png"/>');
    $('.ae-from-input').datepicker();
    $('.ae-to-input').datepicker();
});