$(document).ready(function() {
    $(document).on('click', '.omni-link', function() {
        var data = $(this).data('omniLink');

        // Get link attributes
        var ltype = (data.ltype === undefined) ? 'o' : data.ltype;
        var label  = (data.label === undefined) ? '' : data.label;

        s.linkTrackVars = 'eVar57,eVar59,prop19';
        s.eVar59 = omni_page;
        s.eVar57 = s.prop19 = label;
        s.tl(this, ltype, label);
        s.eVar59 = s.eVar57 = s.prop19 = '';
    });

    $(document).on('click', '.chat-link', function() {
        s.linkTrackVars = 'events,eVar57,eVar59,prop19';
        s.linkTrackEvents = 'event3';
        s.events = 'event3';
        s.eVar59 = omni_page;
        s.eVar57 = s.prop19 = 'TWC WiFi Portal Chat';
        s.tl(this,'o','TWC WiFi Portal Chat');
        s.eVar59 = s.eVar57 = s.prop19 = s.events = '';
    });
});

var omni_error = function(msg)
{
    s.linkTrackVars = 'events,eVar2';
    s.linkTrackEvents = 'event4';
    s.events = 'event4';
    s.eVar2 = msg;
    s.tl(this,'o','wifi portal error');
    s.eVar2 = s.events = '';
}

var omni_login_error = function(user_type, error_code, error_text)
{
    // Track login error with omniture
    s.linkTrackVars = 'eVar57,eVar59,prop19';
    s.linkTrackEvents = 'event2,event49';
    s.events = 'event2,event49';
    s.eVar59 = omni_page;
    if (user_type && error_code && error_text)
    {
        s.eVar57 = s.prop19 = user_type + ' ' + error_code + ' ' + error_text;
        s.tl(this, 'o', user_type + ' ' + error_code + ' ' + error_text);
    }
    s.eVar59 = s.eVar57 = s.prop19 = s.events = '';
}
