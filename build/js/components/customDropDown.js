function handleDropdown(event, dropdown) {
    var element = event.target;
    var parentElement = element.parentElement;
    var dropdownClasses = dropdown.attr('class');
    var isOpen = dropdownClasses.includes('opened');
    
    if (parentElement.className === 'main') {
        if (isOpen) {
            dropdown.removeClass('opened');
            return;
        }
        dropdown.addClass('opened');
    } else {
        var dropDownItem = dropdown.find(`#${parentElement.id}`);
        console.log(dropdown, 'drop down');
        
        var originalPrevMainItem = dropdown.find('.main');
        if (dropDownItem.find('span').text() === originalPrevMainItem.find('span').text()) {
            return;
        }

        var clonedPrevMainItem = dropdown.find('.main').clone();
        var clonedCurrentMainItem = dropDownItem.clone();

        clonedPrevMainItem.removeClass('main').addClass('option');
        clonedCurrentMainItem.removeClass('option');
        clonedCurrentMainItem.addClass('main');

        
        $(`#${originalPrevMainItem.attr('id')}`).remove();

        clonedCurrentMainItem.append('<img src="build/images/dropdown-arrow.png" />');
        dropdown.prepend(clonedCurrentMainItem[0].outerHTML);

    }

}

$(document).ready(function (e) {
    $(document).click(function (e) {
        var targetParent = e.target.parentElement.parentElement;
        
        if (!targetParent.className.includes('custom-dropdown')) {
            return;
        } 

        console.log(targetParent, 'target parent');

        var dropdown = $(`#${targetParent.id}`);
        handleDropdown(e, dropdown);
    });
});