/**
 *
 *
 * Author: Karim Norman Gorjux
 * Date  : 21/08/14
 * Time  : 17:29
 */


/*
(function($) {
    $('#header-links a[href^="#"]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 138
                }, 1200);
                return false;
            }
        }
    });
})(jQuery);
*/

var activeLink = "#home-link";

function messageSent(){
    $("#message-sent").css("visibility", "visible");
    $("#message-sent").fadeIn();
    $("#form-contact")[0].reset();
};

function messageError(){
    $("#message-error").css("visibility", "visible");
    $("#message-error").fadeIn();
};

function cleanAllActiveLinks(){
    $('#header-links').find('li').each(function(index, element){
        $(element).children().removeClass("active");
    });
};

function updateActiveLink(newLink){
    $(activeLink).toggleClass('active');
    $(newLink).toggleClass('active');
    activeLink = newLink;
};


function scrollJump(id, hash) {
    // this function replace the header links, but give a bad animation
    // must be implemented
    updateActiveLink(id);

    target = $('[name=' + hash.slice(1) +']');

    $('html,body').animate({
        scrollTop: target.offset().top - 138
    }, 1000);
    return false;
};


$(document).ready(function(){
    if ($(document).width() > 700) {
        // the sticky menu plugin
        $("#header").sticky({
            topSpacing: 0,
            center: true
        });
    }

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


    // replacing header links behaviour

    $('#home-link').click(function() {
        // scroll to top

        var id = ("#" + this.id);
        updateActiveLink(id);

        $('html,body').animate({
            scrollTop: 0
        }, 1200);
        return false;
    });


    $('#idea-link').click(function() {
        var id = ("#" + this.id);
        updateActiveLink(id);

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

        $('html,body').animate({
            scrollTop: target.offset().top - 138
        }, 1200);
        return false;
    });

    $('#faq-link').click(function() {
        var id = ("#" + this.id);
        updateActiveLink(id);

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        $('html,body').animate({
            scrollTop: target.offset().top - 138
        }, 1200);
        return false;
    });

    $('#about-link').click(function() {
        var id = ("#" + this.id);
        updateActiveLink(id);

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        $('html,body').animate({
            scrollTop: target.offset().top - 138
        }, 1200);
        return false;
    });

    $('#contact-link').click(function() {
        var id = ("#" + this.id);
        updateActiveLink(id);

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        $('html,body').animate({
            scrollTop: target.offset().top - 138
        }, 1200);
        return false;
    });
});