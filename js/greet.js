$(function(){
    $(window).on('scroll', function(){
        const ht = $(window).scrollTop();
        const deviceHt = $(window).outerHeight(true);
        const PTF = $('.page_center').offset().top;
        const Bd = $('.text_box .bold').offset().top;
        const Com = $('.comment').offset().top;

        if(ht > 0) {
            $(".paralax_title").css({transform:"translateX(-"+ht / 20 + "%)"});
        };

        if(ht + (deviceHt / 2) > PTF) {
            $('.page_title_flex h2').stop().css({opacity:"1", transform:"translateY(0)"});
        } else {
            $('.page_title_flex h2').stop().css({opacity:"0", transform:"translateY(100%)"});
        };

        if(ht + (deviceHt / 2) > Bd) {
            $('.bold_ani_1').stop().css({opacity:"1", transform:"translateY(0)"});
            $('.bold_ani_2').delay(300).queue(function(next){
                $(this).stop().css({opacity:"1", transform:"translateY(0)"});
                next();
            });
        } else {
            $('.bold_ani_1, .bold_ani_2').stop().css({opacity:"0", transform:"translateY(100%)"});
        };

        if(ht + (deviceHt / 2) > Com) {
            $('.com_ani_1').stop().css({opacity:"1", transform:"translateY(0)"});
            $('.com_ani_2').delay(300).queue(function(next) {
                $(this).stop().css({opacity:"1", transform:"translateY(0)"});
                next();
            });
            $('.com_ani_3').delay(600).queue(function(next) {
                $(this).stop().css({opacity:"1", transform:"translateY(0)"});
                next();
            });
            $('.com_ani_4').delay(900).queue(function(next) {
                $(this).stop().css({opacity:"1", transform:"translateY(0)"});
                next();
            });
            $('.com_ani_5').delay(1200).queue(function(next) {
                $(this).stop().css({opacity:"1", transform:"translateY(0)"});
                next();
            });
        } else {
            $('.com_ani_1, .com_ani_2, .com_ani_3, .com_ani_4, .com_ani_5').stop().css({opacity:"0", transform:"translateY(100%)"});
        }

    });
});