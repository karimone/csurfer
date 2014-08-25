/**
 *
 *
 * Author: Karim Norman Gorjux
 * Date  : 21/08/14
 * Time  : 17:29
 */


function messageSent(){
    $("#message-sent").css("visibility", "visible");
    $("#message-sent").fadeIn();
    $("#form-contact")[0].reset();
};

function messageError(){
    $("#message-error").css("visibility", "visible");
    $("#message-error").fadeIn();
};

$(document).ready(function(){
    // the sticky menu plugin
    $("#header").sticky({
        topSpacing: 0,
        center: true
    });

    $('#form-contact').on('submit',function(e) {

        $.ajax({
            url:'submit-form.php',
            data:$(this).serialize(),
            type:'POST',
            success:function(data){
                console.log(data);
                messageSent();
            },
            error:function(data){
                messageError();
            }
        });
        e.preventDefault(); //=== To Avoid Page Refresh and Fire the Event "Click"===
    });
});