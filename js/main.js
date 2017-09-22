// Avoid `console` errors in browsers that lack a console.

(function () {
    var method;
    var noop = function () { };
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// smooht scroll

$('a[href*="#"]')
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function () {
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) {
                        return false;
                    } else {
                        $target.attr('tabindex', '-1');
                        $target.focus();
                    };
                });
            }
        }
    });


// form

$(document).on("click", "#submit", function () {
    
    //$("article").fadeIn("slow");
    
    var name = document.getElementById('name').value;
    var COMMENT = document.getElementById('COMMENT').value;

    /*
    if (name == "") {
        return false;
    };*/

    if (COMMENT == "") {
        return false;
    };

    $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "process.php",
        dataType: "text",   //expect html to be returned  
        data: { NAME: name, COMMENT: COMMENT },
        success: function (data) {
            $("#display").html(data);
            $("#name").val('');
            $("#COMMENT").val('');
        }
     });
});

// textarea maxlenght
/*
$('textarea').keypress(function (e) {
    var tval = $('textarea').val(),
        tlength = tval.length,
        set = 1500,
        remain = parseInt(set - tlength);
    $('#counter').text(remain);
    if (remain <= 0 && e.which !== 0 && e.charCode !== 0) {
        $('textarea').val((tval).substring(0, tlength - 1))
    }
})*/


// fullscreen modal

$('#about-open').click(function (e) {
    $('.about-modal').addClass('modal-active');
    $('body').addClass('overflow-body');
    e.preventDefault();
});

$('#about-close').click(function (e) {
    $('.about-modal').removeClass('modal-active');
    $('body').removeClass('overflow-body');
    e.preventDefault();
});