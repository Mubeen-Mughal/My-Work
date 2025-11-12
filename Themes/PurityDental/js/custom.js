/************ scroll to top  ************/
$(document).ready(function () { $(window).scroll(function () { $(this).scrollTop() > 100 ? $(".scrollup").fadeIn() : $(".scrollup").fadeOut() }) }), $(".scrollup").click(function () { return $("html, body").animate({ scrollTop: 0 }, 600), !1 });



/*============== Appointment Request Form Validation START =================*/
function validateFormOnSubmit(theForm) {
    var reason = "";
    reason += validateName(theForm.Field1);
    reason += validateEmail(theForm.Field2);
    reason += validateName2(theForm.Field5);
    reason += validateTel(theForm.Field4);
    reason += validateMessage(theForm.Field6);
    //  reason += validateQuestion(theForm.question);

    if (reason != "") {
        alert("Following field(s) need to be Filled:\n" + reason);
        return false;
    }
    if (checkValue(theForm)) {
        insitePost(theForm);
    }
    setTimeout(function () { theForm.submit(); }, 500); // increase this value if it's not tracking properly
    return true;
}

function validateDate(fld) {
    var error = "";

    if (fld.value == "") {
        fld.style.background = "";
        error = "- Enter a date\n"
    } else if (fld.value == "Appointment Date*") {
        fld.style.background = "";
        error = "- Enter a date\n"
    } else {
        fld.style.background = "";
    }
    return error;
}

function validateTime(fld) {
    var error = "";

    if (fld.value == "") {
        fld.style.background = "";
        error = "- Enter a date\n"
    } else if (fld.value == "Time") {
        fld.style.background = "";
        error = "- Select a Time\n"
    } else {
        fld.style.background = "";
    }
    return error;
}

function validateName(fld) {
    var error = "";

    if (fld.value == "") {
        fld.style.background = "";
        error = "- Enter your name\n"
    } else if (fld.value == "Your Name*") {
        fld.style.background = "";
        error = "- Enter your name\n"
    } else {
        fld.style.background = "";
    }
    return error;
}

function validateName2(fld) {
    var error = "";

    if (fld.value == "") {
        fld.style.background = "";
        error = "- Enter your name\n"
    } else if (fld.value == "Your Name*") {
        fld.style.background = "";
        error = "- Enter Required Service\n"
    } else {
        fld.style.background = "";
    }
    return error;
}

function trim(s) {
    return s.replace(/^\s+|\s+$/, '');
}

function validateEmail(fld) {
    var error = "";
    var tfld = trim(fld.value);                        // value of field with whitespace trimmed off
    var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/;

    if (fld.value == "") {
        fld.style.background = "";
        error = "- Enter your email address\n";
    } else if (!emailFilter.test(tfld)) {              //test email address for illegal characters
        fld.style.background = "";
        error = "- Enter a valid email address\n";
    } else if (fld.value == "Email*") {              //test email address for illegal characters
        fld.style.background = "";
        error = "- Enter a valid email address\n";
    } else {
        fld.style.background = "";
    }
    return error;
}

function isNumeric(v) {
    return v.length > 0 && !isNaN(v) && v.search(/[A-Z]|[#]/ig) == -1;
};

function validateTel(fld) {
    var error = "";
    var stripped = fld.value.replace(/[\(\)\.\-\ ]/g, '');

    if (fld.value == "") {
        error = "- Enter your telephone number \n";
        fld.style.color = "";
    }
    else if (stripped.length != 10) {
        error = "- Enter valid telephone number \n";
    }
    else if (fld.value == "Contact Number*") {
        error = "- Enter your telephone number \n";
    }
    else {
        if (isNumeric(stripped) == false) {
            error = "- Enter only numeric values for your telephone number \n";
        }
        else {
            fld.style.color = "";
        }
    }
    return error;
}

function validateMessage(fld) {
    var error = "";

    if (fld.value == "") {
        fld.style.background = "";
        error = "- Enter other specific requests/comments\n"
    } else if (fld.value == "Message*") {
        fld.style.background = "";
        error = "- Enter other specific requests/comments\n"
    } else {
        fld.style.background = "";
    }
    return error;
}

function validateQuestion(fld) {
    var error = "";

    if (fld.value == "") {
        fld.style.background = "";
        error = "- Answer the simple question\n";
    } else {
        fld.style.background = "";
    }
    return error;
}






/************* input place holder ************/

function clearText(e) { e.defaultValue == e.value && (e.value = "") } function replaceText(e) { "" == e.value && (e.value = e.defaultValue) }


// Plugin - Carousel setup or controlling script
/**** carusel***/
$('.carousel').carousel();



/******** date picker ********/

var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);



var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

var checkin = $('.datepicker').datepicker({
    format: 'mm-dd-yyyy',
    onRender: function (date) {
        return date.valueOf() < now.valueOf() ? 'disabled' : '';
    }
}).on('changeDate', function (ev) {

    checkin.hide();
}).data('datepicker');





//header animation

!function (i, t) { var o = { stuckClass: "isStuck" }, e = i(document); i.fn.TMStickUp = function (t) { t = i.extend(!0, {}, o, t), i(this).each(function () { var o, n, s, c, a = i(this), r = !1, l = a.clone().appendTo(a.parent()).addClass(t.stuckClass), p = l.outerHeight(); i(window).resize(function () { clearTimeout(c), l.css({ top: r ? 0 : -p, visibility: r ? "visible" : "hidden" }), c = setTimeout(function () { o = a.offset().top, n = a.outerHeight(), p = l.outerHeight(), s = i.cookie && "opened" === i.cookie("panel1"), l.css({ top: r ? 0 : -p }) }, 40) }).resize(), l.css({ position: "fixed", width: "100%" }), a.on("rePosition", function (i, t) { r && l.animate({ marginTop: t }, { easing: "linear" }), s = 0 === t ? !1 : !0 }), e.on("scroll", function () { var i = e.scrollTop(); i >= o && !r && (l.stop().css({ visibility: "visible" }).animate({ top: 0, marginTop: s ? 50 : 0 }, {}), r = !0), o + n > i && r && (l.stop().animate({ top: -p, marginTop: 0 }, { duration: 200, complete: function () { l.css({ visibility: "hidden" }) } }), r = !1) }).trigger("scroll") }) } }(jQuery);



$(window).on('load', function () {
    $('.navigation,.mobile-menu').TMStickUp({
    })
});


/**** treview ****/
$(function () {
    $("#tree").treeview({
        collapsed: true,
        animated: "medium",
        control: "#sidetreecontrol",
        persist: "location"
    });
})




/******* Light box ***********/

$(document).on('click', '[data-toggle="lightbox"]', function (event) {

    if ($("body").hasClass("desktop")) {
        event.preventDefault();

        $(this).ekkoLightbox({
            alwaysShowClose: true
        });

    } else {

        if (!($(this).hasClass("video"))) {
            event.preventDefault();

        }
    }

});



/* ---------------------------------------

     PRELOADER

     --------------------------------------- */

/*will first fade out the loading animation*/

$("#status").fadeOut();

/*will fade out the whole DIV that covers the website.*/

$(".preloader").delay(1000).fadeOut("slow");

$("body").css('overflow-y', 'visible');

$("body").css('position', 'relative');




new WOW({ mobile: false }).init();







/*** fire menu ***/
//var $pop = jQuery.noConflict();
$(function () {
    $('nav#menu').mmenu({
        "offCanvas": {
            /*"zposition": "front"*/
        },
        "extensions": [
            "shadow-page"
        ],
        "setSelected": {
            "hover": true,
            "parent": true
        }
    });
});

//var $pop = jQuery.noConflict();
$(function () {
    $('nav#menu1').mmenu({
        "offCanvas": {
            /*"zposition": "front"*/
        },
        "extensions": [
            "shadow-page"
        ],
        "setSelected": {
            "hover": true,
            "parent": true
        },
        navbar: {
            title: "Our Services"
        }
    });
    var API = $("#menu1").data("mmenu");
    $("#my-button").click(function () {
        API.close();
    });
});

//var $pop = jQuery.noConflict();
$(function () {
    $('nav#menu2').mmenu({
        "offCanvas": {
            /*"zposition": "front"*/
        },
        "extensions": [
            "shadow-page"
        ],
        "setSelected": {
            "hover": true,
            "parent": true
        },
        navbar: {
            title: "Call Us"
        }
    });
    var API = $("#menu2").data("mmenu");
    $("#my-button").click(function () {
        API.close();
    });
});

//var $pop = jQuery.noConflict();
$(function () {
    $('nav#menu3').mmenu({
        "offCanvas": {
            /*"zposition": "front"*/
        },
        "extensions": [
            "shadow-page"
        ],
        "setSelected": {
            "hover": true,
            "parent": true
        },
        navbar: {
            title: "Locations"
        }
    });
    var API = $("#menu3").data("mmenu");
    $("#my-button").click(function () {
        API.close();
    });
});




/**********review page *********/

$(function () {
    $(".review-block").slice(0, 5).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".review-block:hidden").slice(0, 5).slideDown();
        if ($(".review-block:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });
});





$('.staff-listin').owlCarousel({
    loop: true,
    autoplay: true,
    margin: 25,
    responsive: {
        0: {
            items: 1
        },
        480: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})




$('#news-slider').owlCarousel({
    loop: true,
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },
        480: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})





/*
$(function() {
   $(' .da-thumbs > a ').each( function() { $(this).hoverdir(); } );
});

*/



$("body").on("click", ".search-icon", function () {

    $(".search_form").slideToggle();

    $(".fa-search").toggleClass("fa-times");

});




