$(document).ready(function(){
    if ($(".prod-detail-container")[0]){
        var getUrl;
        var getColorUrl;
        $(this).find('.thumbs-grid li').each(function(){
            $(this).click(function(){
               getUrl = $(this).find('img').attr('src'); 
               $('.main-img').find('img').attr('src',getUrl);
            })
        })
        $('.colors').find('li').each(function(){
            $(this).click(function(){
                getColorUrl = $(this).attr('value');
                $('.main-img').find('img').attr('src',getColorUrl);
            });
        })
    }
})