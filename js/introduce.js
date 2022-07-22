
$(function(){
    
    $(window).on('scroll', function(event, delta){
        var scrollTriger = 0;
            if(delta > 0) { // 스크롤 올릴 때
                scrollTriger++;
                console.log(scrollTriger+"scrolltriger On");
            } else if(delta < 0) { // 스크롤 내릴 때
                scrollTriger--;
                console.log(scrollTriger+"scrolltriger Down");
            };
            
            

        var WHeight = $('body').height(); // pc 기준 8230
        var ht = $(window).scrollTop();
        var sec1Offset = $('.page_wrap').offset().top; // pc 기준 766
        var header = $("#hd").height(); // pc 기준 100
        var wH = $(window).height();

        var sec0Ht = $('.section0').height();
        var sec0_1 = $('.section0_1').offset().top;
        var sec0_3 = $('.section0_3').offset().top;
        var sec0_3Height = $('.section0_3').height();
        var animate_1 = $(".animate_1").offset().top; // 첫번째 카드 애니메이션 높이 
        var animate_2 = $(".animate_2").offset().top; // 두번째 카드 애니메이션 높이 
        var animate_3 = $(".animate_3").offset().top; // 세번째 카드 애니메이션 높이 
            console.log(ht-(animate_2-(wH/2)));

        var sec3_animate_1 = $(".sec3_animate_1").offset().top; // section3 첫번째 카드 애니메이션 높이
        var sec3_animate_2 = $(".sec3_animate_2").offset().top; // section3 두번째 카드 애니메이션 높이
        var sec3_animate_3 = $(".sec3_animate_3").offset().top; // section3 세번째 카드 애니메이션 높이
        var sec3_animate_4 = $(".sec3_animate_4").offset().top; // section3 네번째 카드 애니메이션 높이

        var who_we_are = $(".who_we_are").offset().top; // we are cenno top 애니메이션 높이
        var comment = $(".comment").offset().top; // we are cenno 텍스트 애니메이션 높이
        var value_1 = $(".value_1").offset().top; // we are cenno 첫번째 카드 애니메이션 높이
        var value_2 = $(".value_2").offset().top; // we are cenno 두번째 카드 애니메이션 높이
        var value_3 = $(".value_3").offset().top; // we are cenno 세번째 카드 애니메이션 높이

        var text_animate_1 = $(".text_animate_1").offset().top; // 하단 첫번째 텍스트 애니메이션 높이
        var text_animate_2 = $(".text_animate_2").offset().top; // 하단 두번째 텍스트 애니메이션 높이


        if(ht > 0) {
            $(".paralax_title").css({transform:"translateX(-"+ht / 20 + "%)"});
        };
        if(ht > WHeight / 2) {
            $(".paralax_title2").css({transform:"translateX(-"+(ht /100)*22 + "%)"});
        };

        if(ht-(text_animate_1-(wH/2))>= 1 ) {
            $(".text_animate_1").stop().css({transform:"translateY(0)"});
        }

        if(ht-(text_animate_2-(wH/2))>= 1 ) {
            $(".text_animate_2").stop().css({transform:"translateY(0)"});
        }

        if(ht > (WHeight / 2) + (header * 5)) {
            $(".tit_holder_left .txt_mask:nth-child(2) span").delay(300).queue(function(next){
                $(this).stop().css({transform:"translateY(0)"});
                next();
            });
        } else {
            $('.tit_holder_left .txt_mask:nth-child(1) span, .tit_holder_left .txt_mask:nth-child(2) span').stop().css({transform:"translateY(120%)"});
        }

        if(ht > sec1Offset / 2) {
            $(".tit_holder .txt_mask:nth-child(1) span").stop().css({transform:"translateY(0)"});
            $(".tit_holder .txt_mask:nth-child(2) span").delay(300).queue(function(next){
                $(this).stop().css({transform:"translateY(0)"});
                next();
            });
            $(".tit_holder .txt_mask:nth-child(3) span").delay(600).queue(function(next){
                $(this).stop().css({transform:"translateY(0)"});
                next();
            });
        } else {
            $(".tit_holder .txt_mask:nth-child(1) span, .tit_holder .txt_mask:nth-child(2) span, .tit_holder .txt_mask:nth-child(3) span").stop().css({transform:"translateY(100%)"});
        }


        // 첫번째, 두번째, 세번째 카드 애니메이션 시작
        if(ht-(animate_1-(wH/2))>= 1 ) {
            $(".container_columns:nth-child(1) .txt_motion .txt_mask span").stop().css({transform:"translateY(0)"});
            $(".card1_1 .img_holder .img_wrap").stop().css({width:"100%",height:"100%","border-radius":"0"});
            $(".card1_1").stop().css({opacity:"1", transform:"translate3d(0,"+ -(ht-(animate_1-(wH/2)))/2.5+"px, 0)"});
            // 텍스트 애니메이션
            $(".card1_1 .text_animate_1 p").stop().css({transform:"translateY(0)"});
            $(".card1_1 .text_wrap h3").delay(300).queue(function(next){
                $(this).stop().css({transform:"translateY(0)"});
                next();
            });
            $(".card1_1 .text_wrap .text_animate_3 p").delay(600).queue(function(next){
                $(this).stop().css({transform:"translateY(0)"});
                next();
            });
        } else {
            $(".container_columns:nth-child(1) .txt_motion .txt_mask span").stop().css({transform:"translateY(120%)"});
        };

        if(ht-(animate_2-(wH/2))>= 1) {
            $(".container_columns:nth-child(2) .txt_motion .txt_mask span").stop().css({transform:"translateY(0)"});
            $(".card1_2 .img_holder .img_wrap").stop().css({width:"100%",height:"100%","border-radius":"0"});
            $(".card1_2").stop().css({opacity:"1", transform:"translate3d(0,"+ -(ht-(animate_2-(wH/2)))/2.5+"px, 0)"});
            // 텍스트 애니메이션
            $(".card1_2 .text_animate_1 p").stop().css({transform:"translateY(0)"});
            $(".card1_2 .text_wrap h3").delay(300).queue(function(next){
                $(this).stop().css({transform:"translateY(0)"});
                next();
            });
            $(".card1_2 .text_wrap .text_animate_3 p").delay(600).queue(function(next){
                $(this).stop().css({transform:"translateY(0)"});
                next();
            });
        } else {
            $(".container_columns:nth-child(2) .txt_motion .txt_mask span").stop().css({transform:"translateY(120%)"});
        };

        if(ht-(animate_3-(wH/2))>= 1) {
            $(".container_columns:nth-child(3) .txt_motion .txt_mask span").stop().css({transform:"translateY(0)"});
            $(".card1_3 .img_holder .img_wrap").css({width:"100%",height:"100%","border-radius":"0"});
            $(".card1_3").css({opacity:"1", transform:"translate3d(0,"+ -(ht-(animate_3-(wH/2)))/2.5+"px, 0)"});
            // 텍스트 애니메이션
            $(".card1_3 .text_animate_1 p").stop().css({transform:"translateY(0)"});
            $(".card1_3 .text_wrap h3").delay(300).queue(function(next){
                $(this).stop().css({transform:"translateY(0)"});
                next();
            });
            $(".card1_3 .text_wrap .text_animate_3 p").delay(600).queue(function(next){
                $(this).stop().css({transform:"translateY(0)"});
                next();
            });
        } else {
            $(".container_columns:nth-child(3) .txt_motion .txt_mask span").stop().css({transform:"translateY(120%)"});
        };
        // 첫번째, 두번째, 세번째 카드 애니메이션 끝

        

        // 하단 container_columns 카드 애니메이션 
        if(ht-(sec3_animate_1-(wH/2))>= 1) {
            $(".sec3_animate_1 .img_holder .img_wrap").css({width:"100%",height:"100%","border-radius":"0"});
        }

        if(ht-(sec3_animate_2-(wH/2))>= 1) {
            $(".sec3_animate_2 .img_holder .img_wrap").css({width:"100%",height:"100%","border-radius":"0"});
        }

        if(ht-(sec3_animate_3-(wH/2))>= 1) {
            $(".sec3_animate_3 .img_holder .img_wrap").css({width:"100%",height:"100%","border-radius":"0"});
        }

        if(ht-(sec3_animate_4-(wH/2))>= 1) {
            $(".sec3_animate_4 .img_holder .img_wrap").css({width:"100%",height:"100%","border-radius":"0"});
        }
        // 하단 container_columns 카드 애니메이션 끝

        // we are cenno top 애니메이션 시작
        if(ht-(who_we_are-(wH/2))>= 1) {
            $('.who_we_are p').stop().css({opacity:"1", transform:"translateY(0)"});
            $('.who_we_are h2').delay(300).queue(function(next){
                $(this).stop().css({opacity:"1", transform:"translateY(0)"});
                next();
            });
        } else {
            $('.who_we_are p, .who_we_are h2').stop().css({opacity:"0", transform:"translateY(100%)"});
        }
        // we are cenno top 애니메이션 끝

        // we are cenno 텍스트 애니메이션 시작
        if(ht-(comment-(wH/2))>= 1) {
            $('.comment p').stop().css({opacity:"1", transform:"translateY(0)"})
        } else {
            $('.comment p').stop().css({opacity:"0", transform:"translateY(100%)"});
        }
        // we are cenno 텍스트 애니메이션 끝

        // we are cenno 첫번째 카드 애니메이션 시작
        if(ht-(value_1-(wH/2))>= 1) {
            $('.value_1').delay(0).queue(function(next){
                $(this).stop().css({opacity:"1", transform:"translateY(0)"});
                next();
            });
        } else {
            $('.value_1').stop().css({opacity:"0", transform:"translateY(20%)"});
        }
        // we are cenno 첫번째 카드 애니메이션 끝

        // we are cenno 두번째 카드 애니메이션 시작
        if(ht-(value_2-(wH/2))>= 1) {
            $('.value_2').delay(300).queue(function(next){
                $(this).stop().css({opacity:"1", transform:"translateY(0)"});
                next();
            });
        } else {
            $('.value_2').stop().css({opacity:"0", transform:"translateY(20%)"});
        }
        // we are cenno 두번째 카드 애니메이션 끝

        // we are cenno 세번째 카드 애니메이션 시작
        if(ht-(value_3-(wH/2))>= 1) {
            $('.value_3').delay(600).queue(function(next){
                $(this).stop().css({opacity:"1", transform:"translateY(0)"});
                next();
            });
        } else {
            $('.value_3').stop().css({opacity:"0", transform:"translateY(20%)"});
        }
        // we are cenno 두번째 카드 애니메이션 끝
        
    });
});