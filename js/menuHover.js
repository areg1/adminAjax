$('#menu>span').mouseover(function() {
    $(this).children('span').css({'display':'block'});
});
$('#menu>span').mouseout(function() {
    $(this).children('span').css({'display':'none'});
});