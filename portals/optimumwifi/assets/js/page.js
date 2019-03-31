// Place page specific jQuery here

$(function() {
    $('.answers').hide();

    $("li.expand-box").each(function(index) {
        if ($(this).find('ul li').length > 1)
        {
            $(this).removeClass('expand-box').addClass('expand-nested');
            $(this).find('ul li').addClass('expand-childLI');
            $(this).children('ul').slideUp();
        }
    });

    $('li.expand-box header').click(function(){
        if ($(this).parent().find('.answers').first().is(':hidden'))
            $(this).parent().find('span').removeClass('icon-chevron-down').addClass('icon-chevron-up');
        else
            $(this).parent().find('span').removeClass('icon-chevron-up').addClass('icon-chevron-down');

        $(this).parent().find('.answers').first().css({'display':'block'});
        $(this).parent().children('ul').slideToggle();

        return false;
    });

    $(document).on("click", ".expand-nested",function() {
        if (!$(this).find('ul').is(':hidden'))
        {
            $('.expand-nested').toggleClass('expanded');
            $(this).children('ul').slideUp();
            $(this).find('ul li').removeClass('expand-childLI');
        }
        else
        {
            $('.expand-nested').toggleClass('expanded')
            $(this).children('ul').slideDown();
            $(this).find('ul li').addClass('expand-childLI');
        }

        return false;
    });

    $(document).on("click", ".expand-childLI a",function() {
        $(this).parent().toggleClass('expanded');
        $(this).next().slideToggle();
        return false;
    });

    $(".answers").click(function(e) {
        e.stopPropagation();
    });

    $(document).on("click", ".expand-childLI",function() {
        $(this).toggleClass('expanded');
        $(this).find('.answers').slideToggle();

        return false;
    });

    function sentUserAgent()
    {
        var agentVar = 'desktop';

        // Determines agent variable based on window resize()
        if (($(window).width() > 500) && ($(window).width() < 1099))
            agentVar = 'tablet';
        else if ($(window).width() < 499)
            agentVar = 'phone';

        $.post(
            basepath + 'ajax/resize',
            {
                agent : agentVar
            }
        );
    };

    var resizeTimer = null;
    $(window).bind('resize', function() {
        if (resizeTimer) clearTimeout(resizeTimer);
        resizeTimer = setTimeout(sentUserAgent, 150);
    });

    sentUserAgent();
});
