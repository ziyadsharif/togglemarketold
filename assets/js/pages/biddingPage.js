
function expandBOQDiv() {
    $('.bidding-left').removeClass('shrink-boq-animation');
    $('.bidding-left').addClass('expand-boq-animation');
    $('.standard-boq-table').fadeOut("fast", function(){
        $('.standard-boq-table').css('display', 'none');
        
        $('.expanded-boq-table').fadeIn("fast", function(){

        })
    });
}

function shrinkBOQDiv() {
    $('.bidding-left').removeClass('expand-boq-animation');
    $('.bidding-left').addClass('shrink-boq-animation');
    $('.standard-boq-table').fadeIn("fast", function(){
        $('.standard-boq-table').css('display', 'block');
        
        $('.expanded-boq-table').fadeOut("fast", function(){
            $('.expanded-boq-table').css('display', 'none');
        })
    });
}

function toggleBOQDiv() {
    var standardTable = $('.standard-boq-table');
    var expandedTable = $('.expanded-boq-table');

    console.log(standardTable.css('display'), 'display');
    if(standardTable.css('display') === 'none') {
        shrinkBOQDiv();
        $('.resize-toggle').css('cursor', 'e-resize');
        return;
    }

    expandBOQDiv();
    $('.resize-toggle').css('cursor', 'w-resize');
}

$(document).ready(function () {
    $('.resize-toggle').on('click', toggleBOQDiv);
    
});