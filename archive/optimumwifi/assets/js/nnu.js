var timerUp = 0;
var timerDown = 0;
var mobile = false;
var waiting = false;

$(document).ready(function(){
    // Hide all error labels
    $('.modal_container, label.error').hide();

    // Hide div on mobile
    if (($(window).width() < 499) || is_mobile_chat())
        $('#lpButtonDivWifi').hide();

    // These links open in 'pop' window, so there can only be one
    $(document).on('click', '.pop', function() {
        var url = $(this).attr('href');
        window.open(url,'pop');
        return false;
    });

    // These links will close a window without displaying warning
    $(document).on('click', '.close_win', function() {
        window.open('','_self','');
        window.close();
    });

    // Restrict user input
    $(document).on('keypress', 'input.valid-int', valid_int)
               .on('keypress', 'input.valid-float', valid_float)
               .on('keypress', 'input.valid-phone', valid_phone);

    if (jQuery().placeholder)
    {
        // Enable placeholder support
        $('input, textarea').placeholder();
    }

    $('#language').click(function(){
        //switch to specified language explicitly
        language = $(this).attr("data-lang") || 'en';

        $.post(
            basepath + 'ajax/setlang',
            {
                language: language,
            },
            function(){
                window.location.reload(true)
            }
        )
    });
});

// Check user-agent to try to identify devices that need to use
// the mobile chat client (this is needed mainly to include
// tablets that may not be considered mobile devices)
var is_mobile_chat = function()
{
    if ((navigator.userAgent.match(/ipad/i)) ||
        (navigator.userAgent.match(/ipod/i)) ||
        (navigator.userAgent.match(/iphone/i)) ||
        (navigator.userAgent.match(/android/i)) ||
        (navigator.userAgent.match(/kindle/i)) ||
        (navigator.userAgent.match(/nook/i)))
    {
        return true;
    }

    return false;
}

var log_pageload = function()
{
    var plend = new Date();

    $.post(
        basepath + 'ajax/logpl',
        {
            page : document.location.href,
            start : plstart.getTime(),
            end : plend.getTime()
        }
    );
}

// Redirect function
var nav = function(url)
{
    document.location = url
}

// Clear all form fields
var clear_all_fields = function()
{
    $('input[type="text"], input[type="password"]').val('');
    $('input[type="checkbox"], input[type="radio"]').removeAttr('checked');
    $('select').removeAttr('selected');
}

var modal_wait = function(msg)
{
    $('.modal_wait_content').html(msg);
    $('#modal_wait_container').modal({close:false});
    $('.simplemodal-container').css('height','');
    waiting = true;
}

var modal_error = function(msg)
{
    // Set up modal content
    $('.modal-header span.h3').html('<span class="twc-icon-before icon-exclamation-sign blue-icon"></span>'+translate('Notice', language));
    $('.modal-content').html(msg);
    $('.modal-button').removeData('omniLink');
    $('.modal-footer').hide();

    $('.modal-container').modal({minHeight:350, minWidth:230, maxWidth:500, autoResize:true});
}

// Functions for input restrictions

var valid_int = function(e)
{
    // Allow ctrl characters
    if (e.ctrlKey) return true;

    // Allow null and backspace
    if ($.inArray(e.which, [0,8]) >= 0) return true;

    // Allow numbers
    if ((e.which >= 48) && (e.which <= 57)) return true;

    return false
}

var valid_float = function(e)
{
    // Allow all integer characters
    if (valid_int(e)) return true;

    // Allow period
    if (e.which == 46) return true;

    return false
}

var valid_phone = function(e)
{
    // Allow all integer characters
    if (valid_int(e)) return true;

    // Allow hyphen and parenthesis
    if ($.inArray(e.which, [40,41,45]) >= 0) return true;

    return false
}

function zero_pad(num, n) {
    if (num.constructor == Number) {
        num = num.toString();
    }

    while (num.length < n) {
        num = '0' + num;
    }

    return num;
}
