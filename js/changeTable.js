$('.confim_table_changes').hide();

$('.change_table').children().click(function() {
    let index = $(this).index();
    $(this).hide(200);
    if(index == 0) {
        $(this).parent().children().eq(1).show(200);
    } else {
        $(this).parent().children().eq(0).show(200);
    }
});
