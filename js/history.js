
const his = document.getElementById('history');
const hisBt = his.querySelector(".bottom");
const hisYear = hisBt.querySelector('.year .yearBox');
const hisYearTxt = hisYear.querySelector('h1');
const hisMonth = hisBt.querySelectorAll('.month table');
let hisBtY;
window.addEventListener('scroll', () => {
  historyAction();
})
const historyAction = () => {
  hisBtY = hisBt.getBoundingClientRect().y;
  if(hisBtY < 0) {hisYear.style.position = "fixed";hisYear.classList.add('on');}
  else {hisYear.style = "";hisYear.classList.remove('on');}
  for (let i = 0; i < hisMonth.length; i++) {
    const hisMtY = hisMonth[i].getBoundingClientRect().y;
    hisMtY < 0 ? hisYearTxt.innerText = hisMonth[i].dataset.year : '';
    if (hisMtY < window.innerHeight/3) {
      hisMonth[i].style.opacity = 1;
    }else{
      hisMonth[i].style.opacity = 0.2;
    }
  }
}
historyAction();

$(function(){
    $(window).on('scroll', function(){
        var WHeight = $('body').height();
        var ht = $(window).scrollTop();
        var main = $('.main').height();
        var PageWrapTop = $('.page_wrap').offset().top;
        var TitleBoxTop = $('.title_box').offset().top;
        var CenterBoxTop = $('.center_box').offset().top;

        if(ht > 0) {
            $(".paralax_title").css({transform:"translateX(-"+ht / 20 + "%)"});
        }

        if(ht > PageWrapTop - (main / 2)) {
            $('.title_box .left_box p').stop().css({opacity:"1", transform:"translateY(0)"});
            $(".title_box .left_box h2").delay(300).queue(function(next){
                $(this).stop().css({opacity:"1",transform:"translateY(0)"});
                next();
            });
            $('.title_box .right_box p').stop().css({opacity:"1", transform:"translateY(0)"});
            
        } else {
          $('.title_box .left_box p').stop().css({opacity:"0", transform:"translateY(100%)"});
          $('.title_box .left_box h2').stop().css({opacity:"0", transform:"translateY(50%)"});
          $('.title_box .right_box p').stop().css({opacity:"0", transform:"translateY(30%)"});
        };

        if(ht > TitleBoxTop) {
          $('.center_box div:nth-child(1) p').css({opacity:"1", transform:"translateY(0)"});
          $('.card_1').delay(300).queue(function(next){
            $(this).stop().css({opacity:"1",transform:"translateY(0)"});
            next();
          });
          $('.card_2').delay(600).queue(function(next){
            $(this).stop().css({opacity:"1",transform:"translateY(0)"});
            next();
          });
          $('.card_3').delay(900).queue(function(next){
            $(this).stop().css({opacity:"1",transform:"translateY(0)"});
            next();
          });
        } else {
          $('.center_box div:nth-child(1) p').stop().css({opacity:"0", transform:"translateY(100%)"});
          $('.card_1, .card_2, .card_3').stop().css({opacity:"0", transform:"translateY(30%)"});
        };

    });

    
});