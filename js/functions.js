/**
 *
 *
 * Author: Karim Norman Gorjux
 * Date  : 21/08/14
 * Time  : 17:29
 */

// at the loading this is the activated link in the header
var activeLink = "#home-link";
var submitFormButton = "#contact-submit";
var formFields = [
    "#contact-email",
    "#contact-first-name",
    "#contact-last-name",
    "#contact-subject",
    "#contact-message"
];

var formFieldsLength = formFields.length;

// function to feedback the result of the form's sending
function messageSent(){
    $("#message-sent").css("visibility", "visible");
    $("#message-sent").css("class", "alert alert-success");
    $("#message-sent").fadeIn();
    $("#form-contact")[0].reset();
};

function messageError(){
    $("#message-error").css("visibility", "visible");
    $("#message-sent").css("class", "alert alert-error");
    $("#message-error").fadeIn();
};

/*
 * Remove the active class to all the header links.
 * Deprecated
 */
function cleanAllActiveLinks(){
    $('#header-links').find('li').each(function(index, element){
        $(element).children().removeClass("active");
    });
};

/*
 * using the activeLink varible tracks the active link in the
 * @param newLink the id of the new link with the # (to use for jQuery selection)
 */
function updateActiveLink(newLink){
    $(activeLink).toggleClass('active');
    $(newLink).toggleClass('active');
    activeLink = newLink;
};

/*
 * Scroll to the selected hash anchor
 * @param id the id of the header's link clicked
 * @param hash the hash of the anchor to jump (with the # at beginning)
 *
 * Is not used at the moment cause a bad scrolling result
 */
function scrollJump(id, hash) {
    updateActiveLink(id);

    target = $('[name=' + hash.slice(1) +']');

    $('html,body').animate({
        scrollTop: target.offset().top - 138
    }, 1000);
    return false;
};

/*
 * Used to enable or disable the sticky menu on resize of the window
 */
function resize(){
    var width = $( window ).width();
    console.log("Width = " + width);
    if (width < 700) {
        $("#header").unstick();
    }
    else {
        $("#header").sticky({
            topSpacing: 0,
            center: true
        });
    }
};

/*
 * Check if a string passed by parameter is a valid email
 * @param email the string to check
 */
function checkEmail(email) {
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    console.log(email);
    if (filter.test(email)) { console.log("ritorno true"); return true; }
    console.log("ritorno false");
    return false;
};



function formValidation(){

    // to enable the submit correctInputs must be equal to the formFieldslenght
    var correctInputs = 0;

    // submit is disabled
    $(submitFormButton).attr('disabled', 'disabled');

    for (var i=0; i < formFieldsLength; i++) {

        console.log("Sono le for ed analizzo: " + formFields[i]);

        // the email is tested using a regex function
        if (formFields[i] == "#contact-email") {
            var email = $(formFields[0]);
            var textInTheEmailInput = $(email).val();
            var value = checkEmail(textInTheEmailInput);
            console.log("Sono nell'email: " + value);
        }
        else {
            var value = $(formFields[i]).val();
            console.log("Sono nell'input " + formFields[i] + ": " + value);

        }


        // value is true or false based the email reges
        // or contain the box value

        if (value) {
            $(formFields[i]).css('border-color', '');
            console.log('Value è stato dato positivo');
            correctInputs++;
        }
        else {
            $(formFields[i]).css('border-color', '#a9302a');
            //$(formFields[i]).focus();
            console.log('Value è stato dato negativo. Brekko');
        }

        // all the input are filled?
        if (correctInputs == formFieldsLength) {
            $(submitFormButton).removeAttr('disabled');
        }
    }


    /*

    // check the email input
    if (checkEmail(textInTheEmailInput)) {
        $('input[id="contact-submit"]').removeAttr('disabled');
        $('input[id="contact-email"]').css('border-color', '');
    }
    else {
        $('input[id="contact-email"]').css('border-color', '#a9302a');
        $('input[id="contact-submit"]').attr('disabled', 'disabled');
    }
    */
};

function hookFormEvents() {
   for (var i=0; i < formFieldsLength; i++) {
       console.log("Hooking: " + formFields[i]);
       var input =  $(formFields[i]);
       input.keyup(formValidation);
       //input.onblur(formValidation);
       //$('input[id=' + formFields[i] +']').onchange(formValidation);
       //$('input[id=' + formFields[i] +']').onfocus(formValidation);
   }
};

$(document).ready(function(){
    // in a mobile view the sticky menu is disabled
    if ($(document).width() > 700) {
        // the sticky menu plugin
        $("#header").sticky({
            topSpacing: 0,
            center: true
        });
    }
    // window.onresize = resize;

    /*
     * Activate the sticky plugin based on the size of the document
     */


    /*
     *  ajax call to the submit-form.php sending the data
     *  using a post method.
     */

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

    // Validation contact form

    $('input[id="contact-submit"]').attr('disabled','disabled');

    hookFormEvents();
    //$('input[id="contact-email"]').keyup(formValidation);
    /*
    $('input[id="contact-email"]').keyup(function() {
        var textInTheEmailInput = $(this).val();
        if( checkEmail(textInTheEmailInput)) {
            $('input[id="contact-submit"]').removeAttr('disabled');
            $('input[id="contact-email"]').css('border-color', '');
        }
        else {
            $('input[id="contact-email"]').css('border-color', '#a9302a');
            $('input[id="contact-submit"]').attr('disabled','disabled');
        }
    });
    */
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

    $('#footer-top').click(function() {
        // scroll to top

        var id = ("#" + this.id);
        updateActiveLink('#home-link');

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
}); // end document ready