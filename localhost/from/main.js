$('.submit').click(function doAjax () {
    $.ajax({
        type: "POST",
        url: "http://127.0.0.1/openserver/phpmyadmin/index.php?route=/database/structure&server=1&db=forma&table=orders",
        data: "name=name&location=location",
        success: function(msg){
            alert( "Data Saved: " + msg );
        }
    });
    return false
});