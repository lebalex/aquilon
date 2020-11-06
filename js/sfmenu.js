;(function ($) {
    $(window).load(function () {
        var o = $('.sf-menu');
        o.superfish();
        o.find('li a').each(function () {
            if ($(location).attr('href').indexOf($(this).attr('href')) >= 0){
                $(this).addClass('active');
                return;
            }
        })
        if (o.parents('aside').length){
            var width = $('.container').outerWidth() - $('aside').outerWidth();
            o.find('.sf-mega').each(function () {
                $(this).width(width);
            })
        }
    });
})(jQuery);
