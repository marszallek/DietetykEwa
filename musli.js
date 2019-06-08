/* MUSLI jQuery plugin */
/* Version: 0.4 */
/* Author: ziemekpr0@gmail.com */
/* Plugin homepage: http://musli.newdivide.pl */

(function($) {
    $.fn.musli = function(options) {

    var settings = $.extend({
        animationAction: 'hover',
        animationSpeed: 1000,
        musliPosition: 'right',
        animationEasing: 'linear'
    }, options );

    var tab = this.children('li');

    if(settings.animationAction == 'click')
    {
         tab.children('img').click(function(){
            if(! $(this).parent('li').hasClass('musli-opened')) {
                var animationBegin = {};

                if(settings.musliPosition == 'top' || settings.musliPosition == 'bottom'){
                    animationBegin[settings.musliPosition] = $(this).siblings('div').outerHeight();
                }
                else{
                    animationBegin[settings.musliPosition] = $(this).siblings('div').outerWidth();
                }

                $(this).parent('li').animate(animationBegin, parseInt(settings.animationSpeed), settings.animationEasing).addClass('musli-opened');
            }
            else {
                var animationEnd = {};
                animationEnd[settings.musliPosition] = "0";
                $(this).parent('li').animate(animationEnd, parseInt(settings.animationSpeed), settings.animationEasing).removeClass('musli-opened');
            }
        });
    }
    else
    {
        tab.hover(
            function(){
                var animationBegin = {};

                if(settings.musliPosition == 'top' || settings.musliPosition == 'bottom'){
                    animationBegin[settings.musliPosition] = $(this).children('div').outerHeight();
                }
                else{
                    animationBegin[settings.musliPosition] = $(this).children('div').outerWidth();
                }

                $(this).stop().animate(animationBegin, parseInt(settings.animationSpeed), settings.animationEasing); 
            },
            function(){
                var animationEnd = {};
                animationEnd[settings.musliPosition] = "0";

                $(this).stop().animate(animationEnd, parseInt(settings.animationSpeed), settings.animationEasing); 
            }
        );
    }
}
}(jQuery));