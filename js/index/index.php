<?
header("Content-type: application/javascript");
$load_check2 = $_GET['load_check2'];
$_load_check2 = sha1(date('d m A s i'));

    if($load_check2 == $_load_check2){
?>
        window.onload = function() {
            $(".load_line p").delay(500).stop().not(":animated").animate({
                "width": "100%"
            }, 2300, function() {
                $(".loading_main").delay(1300).not(":animated").animate({
                    "top": "-100%",
                    "opacity": "0"
                }, 500);
            });
        }

        $(document).ready(function() {

            $(".sec3_menu button:nth-child(1)").click(function() {
                $("#sec3_r__cont1, #sec3_left_tit1").stop().addClass("active");
                $("#sec3_r__cont2, #sec3_left_tit2").stop().removeClass("active");
                $("#sec3_r__cont3, #sec3_left_tit3").stop().removeClass("active");
                $("#sec3_r__cont4, #sec3_left_tit4").stop().removeClass("active");

                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().addClass("active");
                $("#sec3_r__cont2 .sec3_right__content h2, #sec3_r__cont2 .sec3_right__content h1, #sec3_r__cont2 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont3 .sec3_right__content h2, #sec3_r__cont3 .sec3_right__content h1, #sec3_r__cont3 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont4 .sec3_right__content h2, #sec3_r__cont4 .sec3_right__content h1, #sec3_r__cont4 .sec3_right__content span").stop().removeClass("active");

                $(".sec3_left #sec3_left_tit1 h1, .sec3_left #sec3_left_tit1 span, .sec3_left #sec3_left_tit1 p").stop().addClass("active");
                $(".sec3_left #sec3_left_tit2 h1, .sec3_left #sec3_left_tit2 span, .sec3_left #sec3_left_tit2 p").stop().removeClass("active");
                $(".sec3_left #sec3_left_tit3 h1, .sec3_left #sec3_left_tit3 span, .sec3_left #sec3_left_tit3 p").stop().removeClass("active");
                $(".sec3_left #sec3_left_tit4 h1, .sec3_left #sec3_left_tit4 span, .sec3_left #sec3_left_tit4 p").stop().removeClass("active");

                $(".sec3_left").css("background-image", "url(./img/sec3_content1.png)");

                $(this).stop().addClass("active");
                $(this).stop().siblings().removeClass("active");
            });
            $(".sec3_menu button:nth-child(2)").click(function() {
                $("#sec3_r__cont1, #sec3_left_tit1").stop().removeClass("active");
                $("#sec3_r__cont2, #sec3_left_tit2").stop().addClass("active");
                $("#sec3_r__cont3, #sec3_left_tit3").stop().removeClass("active");
                $("#sec3_r__cont4, #sec3_left_tit4").stop().removeClass("active");

                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("aos-init");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("aos-animate");

                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeAttr("data-aos");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeAttr("data-aos-duration");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeAttr("data-aos-delay");

                $("#sec3_r__cont2 .sec3_right__content h2, #sec3_r__cont2 .sec3_right__content h1, #sec3_r__cont2 .sec3_right__content span").stop().addClass("active");
                $("#sec3_r__cont3 .sec3_right__content h2, #sec3_r__cont3 .sec3_right__content h1, #sec3_r__cont3 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont4 .sec3_right__content h2, #sec3_r__cont4 .sec3_right__content h1, #sec3_r__cont4 .sec3_right__content span").stop().removeClass("active");

                $(".sec3_left #sec3_left_tit1 h1, .sec3_left #sec3_left_tit1 span, .sec3_left #sec3_left_tit1 p").stop().removeClass("active");
                $(".sec3_left #sec3_left_tit1 h1, .sec3_left #sec3_left_tit1 span, .sec3_left #sec3_left_tit1 p").stop().removeClass("aos-init");
                $(".sec3_left #sec3_left_tit1 h1, .sec3_left #sec3_left_tit1 span, .sec3_left #sec3_left_tit1 p").stop().removeClass("aos-animate");

                $(".sec3_left #sec3_left_tit1 h1, .sec3_left #sec3_left_tit1 span, .sec3_left #sec3_left_tit1 p").stop().removeAttr("data-aos");
                $(".sec3_left #sec3_left_tit1 h1, .sec3_left #sec3_left_tit1 span, .sec3_left #sec3_left_tit1 p").stop().removeAttr("data-aos-duration");
                $(".sec3_left #sec3_left_tit1 h1, .sec3_left #sec3_left_tit1 span, .sec3_left #sec3_left_tit1 p").stop().removeAttr("data-aos-delay");

                $(".sec3_left #sec3_left_tit2 h1, .sec3_left #sec3_left_tit2 span, .sec3_left #sec3_left_tit2 p").stop().addClass("active");
                $(".sec3_left #sec3_left_tit3 h1, .sec3_left #sec3_left_tit3 span, .sec3_left #sec3_left_tit3 p").stop().removeClass("active");
                $(".sec3_left #sec3_left_tit4 h1, .sec3_left #sec3_left_tit4 span, .sec3_left #sec3_left_tit4 p").stop().removeClass("active");

                $(".sec3_left").css("background-image", "url(./img/sec3_content2.png)");

                $(this).stop().addClass("active");
                $(this).stop().siblings().removeClass("active");

            });
            $(".sec3_menu button:nth-child(3)").click(function() {
                $("#sec3_r__cont1, #sec3_left_tit1").stop().removeClass("active");
                $("#sec3_r__cont2, #sec3_left_tit2").stop().removeClass("active");
                $("#sec3_r__cont3, #sec3_left_tit3").stop().addClass("active");
                $("#sec3_r__cont4, #sec3_left_tit4").stop().removeClass("active");

                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("aos-init");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("aos-animate");

                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeAttr("data-aos");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeAttr("data-aos-duration");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeAttr("data-aos-delay");

                $("#sec3_r__cont2 .sec3_right__content h2, #sec3_r__cont2 .sec3_right__content h1, #sec3_r__cont2 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont3 .sec3_right__content h2, #sec3_r__cont3 .sec3_right__content h1, #sec3_r__cont3 .sec3_right__content span").stop().addClass("active");
                $("#sec3_r__cont4 .sec3_right__content h2, #sec3_r__cont4 .sec3_right__content h1, #sec3_r__cont4 .sec3_right__content span").stop().removeClass("active");

                $(".sec3_left #sec3_left_tit1 h1, .sec3_left #sec3_left_tit1 span, .sec3_left #sec3_left_tit1 p").stop().removeClass("active");
                $(".sec3_left #sec3_left_tit2 h1, .sec3_left #sec3_left_tit2 span, .sec3_left #sec3_left_tit2 p").stop().removeClass("active");
                $(".sec3_left #sec3_left_tit3 h1, .sec3_left #sec3_left_tit3 span, .sec3_left #sec3_left_tit3 p").stop().addClass("active");
                $(".sec3_left #sec3_left_tit4 h1, .sec3_left #sec3_left_tit4 span, .sec3_left #sec3_left_tit4 p").stop().removeClass("active");

                $(".sec3_left").css("background-image", "url(./img/sec3_content3.png)");

                $(this).stop().addClass("active");
                $(this).stop().siblings().removeClass("active");
            });

            $(".sec3_menu button:nth-child(4)").click(function() {
                $("#sec3_r__cont1, #sec3_left_tit1").stop().removeClass("active");
                $("#sec3_r__cont2, #sec3_left_tit2").stop().removeClass("active");
                $("#sec3_r__cont3, #sec3_left_tit3").stop().removeClass("active");
                $("#sec3_r__cont4, #sec3_left_tit4").stop().addClass("active");

                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("aos-init");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("aos-animate");

                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeAttr("data-aos");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeAttr("data-aos-duration");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeAttr("data-aos-delay");

                $("#sec3_r__cont2 .sec3_right__content h2, #sec3_r__cont2 .sec3_right__content h1, #sec3_r__cont2 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont3 .sec3_right__content h2, #sec3_r__cont3 .sec3_right__content h1, #sec3_r__cont3 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont4 .sec3_right__content h2, #sec3_r__cont4 .sec3_right__content h1, #sec3_r__cont4 .sec3_right__content span").stop().addClass("active");

                $(".sec3_left #sec3_left_tit1 h1, .sec3_left #sec3_left_tit1 span, .sec3_left #sec3_left_tit1 p").stop().removeClass("active");
                $(".sec3_left #sec3_left_tit2 h1, .sec3_left #sec3_left_tit2 span, .sec3_left #sec3_left_tit2 p").stop().removeClass("active");
                $(".sec3_left #sec3_left_tit3 h1, .sec3_left #sec3_left_tit3 span, .sec3_left #sec3_left_tit3 p").stop().removeClass("active");
                $(".sec3_left #sec3_left_tit4 h1, .sec3_left #sec3_left_tit4 span, .sec3_left #sec3_left_tit4 p").stop().addClass("active");

                $(".sec3_left").css("background-image", "url(./img/sec3_content4.png)");

                $(this).stop().addClass("active");
                $(this).stop().siblings().removeClass("active");
            });
        });

        $(document).ready(function() {
            $(".sec4_main__visual div").hover(function() {
                $(this).stop().not(":animated").animate({
                    "padding-top": "-50px"
                }, 500);

            });
            $(".sec4_main__visual div").mouseleave(function() {
                $(this).stop().not(":animated").animate({
                    "padding-top": "25px"
                }, 500);
            });
        });

        $(document).ready(function() {
            $(".sec6_more").hover(function() {
                $(this).addClass("on");
            });
            $(".sec6_more").mouseleave(function() {
                $(this).removeClass("on");
            });
        });

        $(document).ready(function() {
            var mql = window.matchMedia("screen and (min-width: 1680px)");

            if (mql.matches) {
                let img1, img2, img3, img4;
                let x = 0,
                    y = 0;
                let mx = 0,
                    my = 0;
                const speed = 0.03;
                const loop = () => {
                    mx += (x - mx) * speed;
                    my += (y - my) * speed;
                    window.requestAnimationFrame(loop);
                }
                const mouseFunc = (e) => {
                    x = (e.clientX - window.innerWidth / 2), y = (e.clientY - window.innerHeight / 2);
                    img1.style.transform = `translate(${-(mx/22)}px, ${-(my/300)}px)`;
                    img2.style.transform = `translate(${-(mx/14)}px, ${-(my/21)}px)`;
                    img3.style.transform = `translate(${-(mx/12)}px, ${-(my/250)}px)`;
                    img4.style.transform = `translate(${-(mx/22)}px, ${-(my/300)}px)`;
                }
                window.onload = () => {
                    img1 = document.getElementById("sec6_plus__img1_moust");
                    img2 = document.getElementById("sec6_plus__img2_moust");
                    img3 = document.getElementById("sec6_plus__img3_moust");
                    img4 = document.getElementById("sec6_plus__img4_moust");

                    loop();
                    window.addEventListener("mousemove", mouseFunc);
                }
            }
        });

    <? } ?>
        