$('.edit_image').on('click', function() {
    
    $(this).parent().parent().children().children().removeAttr('readonly');
});

$('.edit .confim_table_changes').on('click', function() {

    let fieldValue=[];
    let fieldCategory=[];
    let tdCount = $(this).parent().index();
    let index = $(this).parent().parent().index();

    for(let i = 0; i < tdCount; i++) {

        fieldValue[i] = $('tr').eq(index).children().eq(i).children().val();
        fieldCategory[i] = $('#table_categorys td').eq(i).text();
    }

    let fieldValueJSON = JSON.stringify(fieldValue);
    let fieldCategoryJSON = JSON.stringify(fieldCategory);

    let pathUpdateDb = $('#update_db_path').val();
    let fileName = $('#file_name').val();
    let lineId = $(this).parent().attr('value');

    $(this).parent().parent().children().children().attr('readonly','readonly');

    $.ajax({
        type: "post",
        url: pathUpdateDb,
        data: {fieldCategoryJSON: fieldCategoryJSON, fieldValueJSON: fieldValueJSON, fileName: fileName, lineId: lineId }
    });    
});