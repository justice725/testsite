        $(document).ready(function() {
            var header = document.querySelector("#hd");
            var headerHeight = header.offsetHeight;

            window.onscroll = function() {
                var windowTop = window.scrollY;

                if (windowTop >= headerHeight - 50) {
                    header.classList.add("drop");
                } else {
                    header.classList.remove("drop");
                }
            };
            
            $("#hd, .hd_visual div").hover(function() {
                $("#hd").stop().addClass("on");
                $("nav .manu a").css("color", "#245984");
                $(".hd_logo a").addClass("on");
                $(".hd_visual").addClass("on");

            });
            $("#hd, .hd_visual div").mouseleave(function() {
                $("#hd").stop().removeClass("on");
                $("nav .manu a").css("color", "#fff");
                $(".hd_logo a").removeClass("on");
                $(".hd_visual").removeClass("on");

            });



            $(".nav_list1").hover(function() {
                $(".menu_sub__1 a").css("display", "block");
                $(".menu_sub__1").siblings().find("a").css("display", "none");
                $(".menu_sub__1").addClass("on");
                $(".menu_sub__1").siblings().removeClass("on");

                $(".menu_sub__1").css("padding", "15px 0");
                $(".menu_sub__1").siblings().css("padding", "0");
            });

            $(".nav_list2").hover(function() {
                $(".menu_sub__2 a").css("display", "block");
                $(".menu_sub__2").siblings().find("a").css("display", "none");
                $(".menu_sub__2").addClass("on");
                $(".menu_sub__2").siblings().removeClass("on");

                $(".menu_sub__2").css("padding", "15px 0");
                $(".menu_sub__2").siblings().css("padding", "0");
            });

            $(".nav_list3").hover(function() {
                $(".menu_sub__3 a").css("display", "block");
                $(".menu_sub__3").siblings().find("a").css("display", "none");
                $(".menu_sub__3").addClass("on");
                $(".menu_sub__3").siblings().removeClass("on");

                $(".menu_sub__3").css("padding", "15px 0");
                $(".menu_sub__3").siblings().css("padding", "0");
            });

            $(".nav_list4").hover(function() {
                $(".menu_sub__4 a").css("display", "block");
                $(".menu_sub__4").siblings().find("a").css("display", "none");
                $(".menu_sub__4").addClass("on");
                $(".menu_sub__4").siblings().removeClass("on");

                $(".menu_sub__4").css("padding", "15px 0");
                $(".menu_sub__4").siblings().css("padding", "0");
            });

            $(".nav_list5").hover(function() {
                $(".menu_sub__5 a").css("display", "block");
                $(".menu_sub__5").siblings().find("a").css("display", "none");
                $(".menu_sub__5").addClass("on");
                $(".menu_sub__5").siblings().removeClass("on");

                $(".menu_sub__5").css("padding", "15px 0");
                $(".menu_sub__5").siblings().css("padding", "0");
            });
        });

        // 메뉴 버튼 애니메이션
        $(function() {
            var a = "(",
                b = ")"
            str = true;

            $(".burger-icon").click(function() {
                $(this).toggleClass("active");
                $(".box").toggleClass("on");
                if (str) {
                    $(".bar1").animate({
                        top: "7.5px"
                    }, 100, function() {
                        $(".bar1").not(":animated").css({
                            transform: "rotate" + a + "45deg" + b
                        });
                    });
                    $(".bar3").animate({
                        top: "7.5px"
                    }, 100, function() {
                        $(".bar3").not(":animated").css({
                            transform: "rotate" + a + "135deg" + b
                        });
                    });
                    str = !str;
                } else {
                    $(".bar1").css({
                        transform: "rotate" + a + "0deg" + b,
                        top: "0px"
                    });
                    $(".bar3").css({
                        transform: "rotate" + a + "0deg" + b,
                        top: "15px"
                    });
                    str = !str;
                };
            });

            $(".fnb li a, .sub li a").hover(function() {
                $(this).removeClass();
                $(this).addClass("on");
            }, function() {
                $(this).removeClass();
                $(this).addClass("on1");
            });
        });

        $(document).ready(function() {
            var mql = window.matchMedia("screen and (max-width: 767px)");

            if (mql.matches) {

                $(".fnb li").click(function() {
                    $(this).siblings().find("a").removeClass();
                    $(this).children().first().toggleClass("moOpen");
                    $(this).siblings().find("ul").slideUp(600);
                    $(this).find(".sub").slideToggle(600);
                });
            }
        });