$(function(){
    $(window).on('scroll', function(){
        const WHeight = $('body').height();
        const ht = $(window).scrollTop();
        const PageWrapTop = $('.page_wrap').offset().top;
        const deviceHt = $(window).outerHeight(true);
        const CUHt = $('.context_us').offset().top;
        const TBHt = $('.context_us table').offset().top;
        

        if(ht > 0) {
            $(".paralax_title").css({transform:"translateX(-"+ht / 20 + "%)"});
        }

        if(ht > PageWrapTop) {
            $('.left_title').stop().css({opacity:"1", transform:"translateY(0)"});
            $('.right_top').delay(300).queue(function(next) {
                $(this).stop().css({opacity:"1", transform:"translateY(0)"});
                next();
            });
            $('.right_bot').delay(600).queue(function(next) {
                $(this).stop().css({opacity:"1", transform:"translateY(0)"});
                next();
            });
        } else {
            $('.left_title').stop().css({opacity:"0", transform:"translateY(20%)"});
            $('.right_top').stop().css({opacity:"0", transform:"translateY(30%)"});
            $('.right_bot').stop().css({opacity:"0", transform:"translateY(20%)"});
        };

        if(ht + (deviceHt /2 ) >= CUHt) {
            $('.context_title').stop().css({opacity:"1", transform:"translateY(0)"});
            $('.context_us table').delay(300).queue(function(next){
                $(this).stop().css({opacity:"1", transform:"translateY(0)"});
                next();
            });
        } else {
            $('.context_title').stop().css({opacity:"0", transform:"translateY(200%)"});
            $('.context_us table').stop().css({opacity:"0", transform:"translateY(100%)"});
        }
    });
});