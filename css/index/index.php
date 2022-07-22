<?
header("Content-type: text/css");
$load_check = $_GET['load_check'];
$_load_check = sha1(date('d m A s i'));

    if($load_check == $_load_check){
?>
           /* 첸노 로딩 스타일 start */
            .loading_main {
            position: fixed;
            top: -100%;
            left: 0;
            width: 100%;
            height: 100%;
            background: #bdc3c7;

            background: -webkit-linear-gradient(to bottom, #bdc3c7, #2c3e50);

            background: linear-gradient(to bottom, #bdc3c7, #2c3e50);

            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            transition-timing-function: ease-out;
            transition-duration: .655s;
            opacity: 1;
            z-index: 999999999;
        }

        .load_logo {
            display: block;
            margin: 30px auto;
        }

        .load_txt {
            display: block;
            font-size: 15px;
            color: #fff;
            text-align: center;
            font-family: 'NotoSansKR-Thin';
            font-weight: bold;
        }

        .load_txt p {
            display: inline-block;
            text-align: left;
        }

        .load_line {
            display: block;
            width: auto;
            height: 8px;
            border: 1px solid #fff;
            position: relative;
            margin: 30px auto;
            overflow: hidden;
        }

        .load_line p {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 0%;
            background-color: #fff;
            transition-timing-function: ease-out;
            transition-duration: 1s;
        }
        /* 첸노 로딩 스타일 end */
        
        /* index 공통섹션 start */
        #main {
            height: auto;
            width: 100%;
        }

        #main_vs {}

        .section {
            width: 100%;
            position: relative;
        }

        #section1 {
            background-color: rgba(36, 89, 132, 0.9);
            overflow: hidden;
            height: 100vh;
        }

        #section2 {
            background-color: #fff;
            height: auto;
            padding-bottom: 150px;
        }

        #section3 {
            background-color: #fff;
            height: auto;
            padding-bottom: 150px;
            display: none;
        }

        #section4 {
            background-color: rgba(1, 140, 213, .9);
            overflow: hidden;
            height: 400px;
        }

        #section5 {
            height: auto;
            background-color: #fff;
            padding: 150px 0;
            display: none;
        }

        #section6 {
            background: rgb(235, 238, 242);
            background: linear-gradient(115deg, rgba(235, 238, 242, 1) 8%, rgba(143, 151, 170, 1) 100%);
            overflow: hidden;
            height: auto;
            position: relative;
        }

        #sec6_plus1 {
            background: rgb(67, 122, 163);
            background: linear-gradient(90deg, rgba(67, 122, 163, 1) 0%, rgba(79, 160, 180, 1) 51%, rgba(74, 108, 150, 1) 100%);

            overflow: hidden;
            height: auto;
            position: relative;
        }

        #sec6_plus2 {
            background: rgb(253, 255, 244);
            background: linear-gradient(90deg, rgba(253, 255, 244, 1) 0%, rgba(83, 99, 111, 1) 100%);
            overflow: hidden;
            height: auto;
            position: relative;
        }

        #sec6_plus3 {
            background: rgb(230, 103, 116);
            background: linear-gradient(157deg, rgba(230, 103, 116, 1) 10%, rgba(255, 210, 188, 1) 100%);
            overflow: hidden;
            height: auto;
            position: relative;
        }

        #section7 {
            height: auto;
            background-color: #f9f9f9;
            padding: 150px 0;
        }

        #section8 {
            height: 70vh;
            background-image: url("../../img/sec6_bg.png");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: bottom;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .section_in {
            width: 1200px;
            height: 500px;
            margin: 0px auto;
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-between;
            align-items: center;
        }

        #background {
            z-index: -1;
        }

        .section_txt {
            position: absolute;
            bottom: 100px;
            left: 150px;
            text-align: left;
            color: #ffffff;
            width: calc(50% - 200px);
            padding-bottom: 50px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.4);
            overflow: hidden;
        }

        .sec_tit {
            font-family: 'NanumGothicLight';
            font-size: 2.5em;
            line-height: 1.5;
            font-weight: 100;
        }

        .section_txt p {
            display: inline-block
        }

        .sec_txt {
            font-family: 'NanumGothicBold';
            font-size: 3.2em;
            font-weight: bold;
            line-height: 1.5;
        }

        .scroll_icon {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translate(-50%, -0%);
            animation-name: scroll_icon;
            animation-duration: .7s;
            animation-iteration-count: infinite;
            animation-direction: alternate;
        }

        @-webkit-keyframes scroll_icon {
            0% {
                opacity: 1;
                bottom: 75px;
            }

            100% {
                opacity: .4;
                bottom: 85px;
            }
        }

        .cont_tit__box {
            display: block;
            text-align: center;
            width: 100%;
            color: #018cd5;
            font-family: 'NotoSansKR-r';
            font-weight: bold;
        }

        .cont_tit__box h1 {
            display: block;
            font-size: 2em;
        }

        .cont_tit__box p {
            display: block;
            font-weight: 100;
            padding: 15px;
            font-size: 1em;
        }
        /* index 공통섹션 end */
        
        /* section2 */
        .sec2_content__box {
            display: block;
            width: 1200px;
            margin: 0 auto;
            height: auto;
            box-sizing: border-box;
            position: relative;
            padding: 150px 0;
            padding-bottom: 0;
        }

        .sec2_table {
            display: flex;
            flex-wrap: wrap;
            padding-top: 50px;
        }

        .sec2_table div.sec2_ta__box {
            width: 300px;
            height: 300px;
            box-sizing: border-box;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .sec2_table div.sec2_ta__full {
            width: 600px;
        }

        .sec2_ta__box1 {
            background-color: #fff;
            box-shadow: 2px 5px 12px rgba(0, 0, 0, 0.2);
        }

        .sec2_ta__box2 {
            background-color: rgba(36, 89, 132, 1);
        }

        .sec2_ta__box3 {
            background-color: #1b1f28;
        }

        .sec2_ta__box4 {
            background-color: #3e424d;
            box-shadow: 2px 5px 12px rgba(0, 0, 0, 0.2);

        }

        .sec2_ta__box5 {
            background-image: url("../../img/sec2_cont5__bg.png");
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            box-shadow: 2px 5px 12px rgba(0, 0, 0, 0.2);

        }

        .sec2_ta__box6 {
            background-color: #fff;
            box-shadow: 2px 5px 12px rgba(0, 0, 0, 0.2);

        }

        .sec2_ta__txtbox {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .sec2_cont__tit {
            display: block;
            text-align: center;
            color: #fff;
            font-size: 25px;
            font-weight: 100;
            width: 100%;
        }

        .sec2_cont__line {
            display: block;
            width: 20px;
            height: 1px;
            background-color: #fff;
            display: block;
            margin: 20px auto;
        }

        .sec2_cont__txt {
            width: 100%;
            height: auto;
            text-align: center;
            color: #fff;
            line-height: 1.5;
        }

        .sec2_ta__box6 .sec2_cont__tit,
        .sec2_ta__box6 .sec2_cont__txt {
            color: rgba(36, 89, 132, 1);
        }

        .sec2_ta__box6 .sec2_cont__line {
            background-color: rgba(36, 89, 132, 1);
        }

        .sec2_link1 {
            display: block;
            padding: 15px;
            margin: 20px auto;
            margin-bottom: 0;
            border: 1px solid #fff;
            border-radius: 40px;
            color: #fff;
            width: 200px;
            text-align: center;
            transition: .2s;
        }

        .sec2_link1:hover {
            background-color: #fff;
            color: rgba(36, 89, 132, 1);
        }

        .sec2_link2 {
            display: block;
            padding: 15px;
            margin: 20px auto;
            margin-bottom: 0;
            border: 1px solid #fff;
            border-radius: 40px;
            color: #fff;
            width: 200px;
            text-align: center;
            transition: .2s;
        }

        .sec2_link2:hover {
            background-color: #fff;
            color: #333;
        }

        .sec2_link3 {
            display: block;
            padding: 15px;
            margin: 20px auto;
            margin-bottom: 0;
            border: 1px solid rgba(36, 89, 132, 1);
            border-radius: 40px;
            color: rgba(36, 89, 132, 1);
            width: 200px;
            text-align: center;
            transition: .2s;
        }

        .sec2_link3:hover {
            background-color: rgba(36, 89, 132, 1);
            color: #fff;
        }

        .board {
            width: 100%;
            padding: 40px;
        }

        .board_tit {
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-between;
            border-bottom: 1px solid rgba(36, 89, 132, 0.4);
            padding: 20px 0;
            font-family: 'NanumGothic';
            color: rgba(36, 89, 132, 1);
        }

        .board_list {
            padding: 00px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .bo_list__box {
            width: 100%;
            height: auto;
            padding: 10px 0;
            font-size: .8em;
            display: flex;
            flex-wrap: wrap;
            border-bottom: 1px solid rgba(36, 89, 132, 0.4);

        }

        .bo_list__box:nth-last-child(1) {
            border-bottom: 0;
        }

        .bo_list__con {
            width: 100%;
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-between;
            align-items: center;
        }

        .bo_list__con p {
            opacity: 0.4;
            font-size: .5em;
            font-weight: 100;

        }

        .bo_list__con span {
            display: inline-block;
            width: 350px;
            padding: 5px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .video_tit__box {
            width: 100%;
            height: auto;

            position: absolute;
            bottom: 0;
            left: 0;
        }

        .video_tit__box a {
            display: block;
            text-align: center;
            color: #fff;
            font-family: 'NanumGothicLight';
            width: 100%;
            height: 100%;
            padding: 20px;
            background-color: rgba(36, 89, 132, 0.7);
            transition: .2s;
        }

        .video_tit__box a:hover {
            color: #fff;
            background-color: rgba(36, 89, 132, 1);
        }

        iframe {
            width: 100%;
            height: 100%;
            display: block;
            opacity: 1;
        }
        
        /* section3 */
        .sec3_content__main {
            width: 1200px;
            height: auto;
            margin: 0 auto;
            padding-top: 50px;
        }

        .sec3_menu {
            width: 600px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .sec3_menu button {
            display: flex;
            align-items: center;
            justify-content: center;
            background: none;
            border: 0;
            font-size: 1em;
            cursor: pointer;
            color: rgba(36, 89, 132, .7);
            font-family: 'NotoSansKR-Thin';
            padding: 6px 20px;
            box-sizing: border-box;
            width: 150px;
            border-left: 1px solid #eee;
            text-align: center;
            position: relative;
            transition: .4s;
        }

        .sec3_menu button:nth-child(1) {
            border: 0;
        }

        .sec3_menu button.active p {
            position: absolute;
            width: 70%;
            left: 50%;
            bottom: 0;
            transform: translate(-50%, 0%);
            height: 0.2px;
            background-color: rgba(36, 89, 132, 1);
            transition: .4s;
        }

        .sec3_menu button.active {
            font-family: 'NotoSansKR-m';
            transition-timing-function: ease;
            color: rgba(36, 89, 132, 1);
        }

        .sec3_con__box {
            width: 1200px;
            margin: 0 auto;
            margin-top: 50px;
            height: 420px;
            display: flex;
            flex-wrap: nowrap;
            position: relative;
            overflow: hidden;

        }

        .sec3_left {
            width: 420px;
            height: 420px;
            background-color: #018cd5;
            padding: 50px;
            background-image: url("../../img/sec3_content1.png");
            transition: .5s;
        }

        .sec3_left__box {
            position: absolute;
            top: 50px;
            left: -100%;
        }

        .sec3_left__box.active {
            left: 50px;
        }

        .sec3_left h1 {
            color: #fff;
            font-size: 2em;
            padding-top: 10px;
        }

        .sec3_left span {
            color: #fff;
            display: block;
            padding-top: 10px;
            opacity: .4;
            font-size: .7em;
            font-family: 'NanumGothicLight';
        }

        .sec3_left p {
            color: #fff;
            display: block;
            padding-top: 10px;
            font-size: 1.5em;
            font-family: 'NanumGothicLight';
        }

        .sec3_left h1 {
            transform: translate3d(-100px, 0, 0);
            transition-duration: 1s;
            opacity: 0;
        }

        .sec3_left span {
            transform: translate3d(-100px, 0, 0);
            transition-duration: 1.3s;
            opacity: 0;
        }

        .sec3_left p {
            transform: translate3d(-100px, 0, 0);
            transition-duration: 1.6s;
            opacity: 0;
        }

        .sec3_left h1.active {
            opacity: 1;
            transform: translateZ(0);
            transition-timing-function: ease;
            transition-property: opacity, transform;
        }

        .sec3_left span.active {
            opacity: .6;
            transform: translateZ(0);
            transition-timing-function: ease;
            transition-property: opacity, transform;
        }

        .sec3_left p.active {
            opacity: 1;
            transform: translateZ(0);
            transition-timing-function: ease;
            transition-property: opacity, transform;
        }



        .sec3_right {
            width: 780px;
            display: flex;
            flex-wrap: wrap;
            position: absolute;
            right: -100%;
            bottom: 0;
        }

        .sec3_right.active {
            right: 0;
        }

        .sec3_right__content {
            width: 390px;
            height: 210px;
            border: 1px solid #eee;
        }

        .sec3_right__content a {
            display: block;
            width: 100%;
            height: 100%;
            padding: 35px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        .sec3_right__content h2 {
            display: block;
            color: #018cd5;
            font-size: 1.4em;
            font-family: 'NotoSansKR-Thin';
            width: 100%;
            padding-bottom: 10px;
            transform: translate3d(100px, 0, 0);
            transition-duration: 1s;
            opacity: 0;
        }

        .sec3_right__content h2.start {
            transform: translate3d(100px, 0, 0);
            transition-duration: 1s;
            opacity: 0;
        }

        .sec3_right__content h1.start {
            transform: translate3d(0, 100px, 0);
            transition-duration: 1.2s;
            opacity: 0;
        }

        .sec3_right__content span.start {
            transform: translate3d(0, 100px, 0);
            transition-duration: 1.4s;
            opacity: 0;
        }

        .sec3_right__content:nth-child(2) h2 {
            transform: translate3d(0, 100px, 0);
            transition-duration: 1s;
            opacity: 0;
        }

        .sec3_right__content:nth-child(3) h2 {
            transform: translate3d(0, 100px, 0);
            transition-duration: 1s;
            opacity: 0;
        }

        .sec3_right__content h2.active {
            opacity: 1;
            transform: translateZ(0);
            transition-timing-function: ease;
            transition-property: opacity, transform;
        }

        .sec3_right__content h1 {
            display: block;
            font-size: 1.5em;
            font-family: 'NotoSansKR-m';
            width: 100%;
            padding-bottom: 10px;
            transform: translate3d(100px, 0, 0);
            transition-duration: 1.2s;
            opacity: 0;
        }

        .sec3_right__content:nth-child(2) h1 {
            transform: translate3d(0, 100px, 0);
            transition-duration: 1.2s;
            opacity: 0;
        }

        .sec3_right__content:nth-child(3) h1 {
            transform: translate3d(0, 100px, 0);
            transition-duration: 1.2s;
            opacity: 0;
        }

        .sec3_right__content h1.active {
            opacity: 1;
            transform: translateZ(0);
            transition-timing-function: ease;
            transition-property: opacity, transform;
        }

        .sec3_right__content span {
            display: block;
            font-family: 'NotoSansKR-Thin';
            color: #333;
            opacity: .8;
            line-height: 1.4;
            width: 100%;
            padding-bottom: 10px;
            transform: translate3d(100px, 0, 0);
            transition-duration: 1.4s;
            opacity: 0;
        }

        .sec3_right__content:nth-child(2) span {
            transform: translate3d(0, 100px, 0);
            transition-duration: 1.4s;
            opacity: 0;
        }

        .sec3_right__content:nth-child(3) span {
            transform: translate3d(0, 100px, 0);
            transition-duration: 1.4s;
            opacity: 0;
        }

        .sec3_right__content span.active {
            opacity: 1;
            transform: translateZ(0);
            transition-timing-function: ease;
            transition-property: opacity, transform;
        }

        .sec3_right__top {
            width: 780px;
            border-bottom: 0;
        }

        .sec3_right__content:nth-child(2) {
            border-right: 0;
        }
        
        /* section4 */
        .sec4_box {
            width: 1200px;
            height: 100%;
            margin: 0 auto;
        }

        .sec4_main__visual {
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .sec4_main__visual div {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            border-right: 1px solid rgba(255, 255, 255, .15);
            width: 300px;
            height: 250px;
            text-align: center;
            padding: 25px;
            color: #fff;
            align-content: flex-start;
        }

        .sec4_main__visual div:nth-last-child(1) {
            border: 0;
        }

        .sec4_main__visual div span {
            display: block;
            margin: 0px auto;
            margin-top: 0;
            color: #20556d;
            font-size: 2.3em;
            width: 100%;
        }

        .sec4_main__visual div h1 {
            width: 100%;
            text-align: center;
            margin: 35px auto;
            font-weight: bold;
            font-size: 18px;
            opacity: .5;
            color: #20556d;
            font-family: 'NanumGothicExtraBold';
        }

        .sec4_main__visual div h2 {
            line-height: 22px;
            font-size: 13px;
            width: 100%;
            text-align: center;
            font-weight: 100;
            font-family: 'NotoSansKR-Thin';
        }
        
        /* section5 슬라이드섹션 */
        .sec5_visual__tit {
            width: 800px;

        }

        .sec5_visual__tit {
            display: flex;
            padding: 25px 0;
            border-bottom: 1px solid #018cd5;
            flex-wrap: nowrap;
            justify-content: flex-start;
            align-items: center;
            align-content: center;
            color: #018cd5;
        }

        .sec5_visual__tit p {
            margin-right: 25px;
            font-weight: bold;
            font-size: 1.3em;
        }

        .sec5_visual__tit h1 {
            font-family: 'NanumGothicLight';
            font-weight: 100;
            font-size: 1.4em;
        }

        .sec5_visual__txt {
            width: 630px;
            height: auto;
        }

        .sec5_visual__txt h2 {
            font-weight: bold;
            font-family: 'NotoSansKR-m';
            font-size: 2.5em;
            color: #018cd5;
            line-height: 1.2;
            margin: 50px 0px;
        }

        .sec5_visual__txt span {
            display: block;
            line-height: 2;
            font-size: 1.2em;
            font-family: 'NotoSansKR-Thin';
            text-align: justify;
            color: #333;
        }

        .sec5_video__box {
            width: 400px;
            height: 100%;
        }

        .sec5_video__box iframe {
            display: block;
            width: 100%;
            height: 100%;
        }



        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            object-fit: cover;
        }

        .swiper {
            margin-left: auto;
            margin-right: auto;
        }

        .swiper_btn__box {
            width: 1200px;
            margin: 0 auto;
            margin-top: 25px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        .sw_arw {
            display: flex;
        }

        .swiper_btn__box .sw_arw div {
            margin-right: 20px;
            z-index: 9999;
        }

        .swiper_btn__box div:after {
            font-size: 1em;
            font-weight: bold;
            color: #018cd5;
        }

        .swiper-button-next,
        .swiper-button-prev,
        .swiper-pagination,
        .swiper-pagination-bullets.swiper-pagination-horizontal {
            position: relative;
            left: inherit;
            right: inherit;
            top: inherit;
            bottom: inherit;
            width: auto;
            height: auto;
            margin: 0;
        }

        .swiper-button-next,
        .swiper-button-prev {
            width: 25px;
            height: 25px;
        }

        .swiper-pagination-bullets.swiper-pagination-horizontal {}

        .swiper_btn__page {
            display: flex;
            align-content: center;
            align-items: center;
            justify-content: space-between;
            width: 400px;
        }

        .swiper_line {
            display: block;
            width: 200px;
            height: 1px;
            background-color: #018cd5;
        }

        .swiper-pagination-bullet-active {
            color: #018cd5;
            background-color: #018cd5;
            width: 10px;
            height: 10px;
        }
        
        /* section6 */
        .sec6_box {
            width: 1200px;
            height: auto;
            margin: 0 auto;
            padding: 150px 0;
            display: flex;
            flex-wrap: nowrap;
            justify-content: flex-end;
        }

        #sec6_plus1 .sec6_box,
        #sec6_plus3 .sec6_box {
            justify-content: flex-start;
        }

        .sec6_bg__img {
            position: absolute;
            bottom: -5px;
            left: 100px;
        }

        #sec6_plus1 .sec6_bg__img,
        #sec6_plus3 .sec6_bg__img {
            position: absolute;
            bottom: 100px;
            left: inherit;
            right: 0;
        }

        #sec6_plus3 .sec6_bg__img3 {
            left: 150px;
        }

        #sec6_plus3 .sec6_bg__img4 {
            bottom: -5px;
            left: inherit;
            right: 20px;
        }

        .sec6_text {
            display: block;
        }

        .sec6_text h1 {
            font-size: 50px;
            text-align: right;
            letter-spacing: -4.64px;
            color: #FFFFFF;
            font-weight: bold;
            font-family: 'NotoSansKR-m';
            line-height: 1.2;
        }

        #sec6_plus1 .sec6_text h1,
        #sec6_plus3 .sec6_text h1 {
            text-align: left;
        }

        .sec6_text h1 strong {
            font-weight: bold;
            font-family: 'NotoSansKR-r';
        }

        .sec6_text p {
            font-size: 20px;
            text-align: right;
            letter-spacing: -1.84px;
            color: #FFFFFF;
            line-height: 40px;
            font-weight: 400;
            font-family: 'NotoSansKR-Thin';
        }

        #sec6_plus1 .sec6_text p,
        #sec6_plus3 .sec6_text p {
            text-align: left;
        }

        .sec6_more {
            display: block;
            padding: 20px;
            background: none;
            border: 2px solid #fff;
            width: 200px;
            border-radius: 50px;
            color: #fff;
            text-align: center;
            float: right;
            margin-top: 50px;
            position: relative;
            transition: .2s;
        }

        .sec6_more.on {
            color: #3a4147;
            background: #fff;
        }

        #sec6_plus1 .sec6_more,
        #sec6_plus3 .sec6_more {
            float: left;
        }

        /* 파트너사 */
        .partners {
            display: block;
            width: 1200px;
            margin: 0 auto;
        }

        .partners ul {
            width: 100%;
            height: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .partners ul li {
            width: auto;
            text-align: center;

        }

        .partners ul li img {
            display: block;
            box-sizing: border-box;
            margin: 0 auto;
            height: auto;
            width: auto;
            margin-top: 50px;
            border: 1px solid #b7dced;
        }

        .partners ul li p {
            color: #353b3d;
            opacity: .5;
            font-family: 'NanumGothic';
            font-weight: bold;
            padding-top: 15px;
        }

    /* 인재채용 */
        #section8 {
            display: flex;
            align-content: center;
            align-items: center;
            flex-wrap: wrap;
            justify-content: center;
        }

        .sec8_content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .sec8_tit {
            width: 100%;
            text-align: center;
            color: #fff;
            font-size: 2em;
            font-weight: 100;
            font-family: 'NotoSansKR-m';
            line-height: 1.4;
            padding: 50px;
            padding-top: 0;
        }

        .sec8_link {
            display: flex;
            flex-wrap: nowrap;

        }

        .sec8_link a {
            display: inline-block;
            margin: 0px 25px;
            margin-bottom: 0;
            border: 1px solid #fff;
            padding: 15px 50px;
            text-align: center;
            color: #fff;
            transition: .2s;
        }

        .sec8_link a:hover {
            background-color: #fff;
            color: #333;
        }

    /* 반응형 쿼리 start */
        /*모바일 */
        @media (max-width: 879px) {

            /* 헤더 */
            #hd,
            #hd.drop {
                height: 75px;
            }

            .manu {
                display: none;
            }

            #nav {
                padding: 0 25px;
            }

            .hd_logo a {
                width: 100px;
                height: 30px;
                background-size: 100% auto;
            }

            /* 공통 타이틀 */
            .cont_tit__box h1 {
                font-size: 1.2em;
            }

            .cont_tit__box p {
                font-size: .67em;
            }

            /* section1 */
            .section_txt {
                width: 100%;
                left: 50%;
                bottom: inherit;
                top: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
                border: 0;
            }

            .sec_tit {
                font-size: 1.5em;
            }

            .sec_txt {
                font-size: 2em;
            }

            /* section2 */
            #section2 {
                padding-bottom: 0;
            }

            .sec2_content__box {
                width: 100%;
                padding: 75px 0px;
            }

            .sec2_table {
                justify-content: center;
            }

            .sec2_table div.sec2_ta__full,
            .sec2_table div.sec2_ta__box {
                width: 100%;
            }

            /* section4 */
            #section4 {
                height: auto;
            }

            .sec4_box {
                width: 100%;
                padding: 20px;
            }

            .sec4_main__visual {
                flex-wrap: wrap;
            }

            .sec4_main__visual div {
                width: 100%;
                border: 0;
            }

            .sec4_main__visual div:nth-child(1),
            .sec4_main__visual div:nth-child(3) {
                border-left: 0;
            }

            .sec4_main__visual div:nth-last-child(1) {
                border-right: 0;
            }

            /*사업분류 레이아웃 */
            #section6 {
                background: linear-gradient(15deg, rgba(235, 238, 242, 1) 8%, rgba(143, 151, 170, 1) 100%);
            }

            .sec6_box {
                width: 100%;
                flex-wrap: wrap-reverse;
                justify-content: space-between;
                padding-bottom: 0;
                padding-top: 50px;
            }

            #sec6_plus1 .sec6_box,
            #sec6_plus3 .sec6_box {
                flex-wrap: wrap;
                justify-content: space-between;
                padding-bottom: 0;
            }

            .sec6_text {
                width: 100%;
            }

            .sec6_text h1 {
                font-size: 30px;
                letter-spacing: -2.5px;
                padding-bottom: 20px;

            }

            .sec6_text p {
                width: 100%;
                font-size: 18px;
                line-height: 25px;
            }

            .sec6_text h1,
            .sec6_text p,
            #sec6_plus1 .sec6_text h1,
            #sec6_plus3 .sec6_text h1,
            #sec6_plus1 .sec6_text p,
            #sec6_plus3 .sec6_text p {
                text-align: center;
            }

            .media_br {
                display: block;
            }

            .sec6_more,
            #sec6_plus1 .sec6_more,
            #sec6_plus3 .sec6_more {
                margin: 50px auto;
                float: inherit;
                padding: 15px;
            }

            .sec6_bg__img,
            #sec6_plus1 .sec6_bg__img,
            #sec6_plus3 .sec6_bg__img {
                position: inherit;
                left: 0;
                width: 100%;
            }

            .sec6_bg__img img {
                display: block;
                width: 100%;
            }

            #sec6_plus1 .sec6_bg__img,
            #sec6_plus3 .sec6_bg__img {}

            #sec6_plus3 .sec6_bg__img4 {
                right: 0;
            }

            /* 파트너사 레이아웃 */
            #section7 {
                padding: 75px 0;
            }

            .partners {
                width: 90%;
                margin: 0 auto;
            }

            .partners ul li {
                width: 30.33%;
                height: auto;
            }

            .partners ul li p {
                font-size: 10px;
            }

            .partners ul li img {
                display: block;
                width: 100%;
                height: auto;
                margin-top: 20px;
            }

            /* 채용공고 */
            #section8 {
                height: auto;
                padding: 75px 0;
                background-attachment: inherit;
                background-position: right;
                background-size: cover;
            }

            .sec8_tit {
                font-size: 1em;
                font-family: 'NanumGothic';
            }

            .sec8_link {
                width: 80%;
                margin: 0 auto;
                flex-wrap: wrap;
            }

            .sec8_link a {
                width: 100%;
                margin-top: 15px;
            }

            /* 푸터 */
            .ft_top {
                padding: 15px 5%;
            }

            .ft_bottom {
                width: 100%;
            }

            .ft_top__in {
                flex-wrap: wrap;
            }

            .ft_menu {
                width: 100%;
                padding: 15px 0px;
                padding-top: 0;
            }

            .ft_sns {
                margin: 15px auto;
            }

            .ft_bottom {
                flex-wrap: wrap;
            }

            .ft_text {
                text-align: left;
                margin: 0 auto;
            }

            .ft_bottom__left,
            .ft_bottom__right {
                padding-left: 20px !important;
                padding-right: 20px !important;
            }

            .ft_bottom__left .logo {
                display: block;
                margin: 0 auto;
                width: 100%;
            }

            .ft_bottom__left .logo img {
                display: block;

            }

            .ft_bottom__right {
                border: 0;
                width: 100%;
                padding: 0;
                padding-bottom: 25px;

                padding-top: 20px;
            }

            .ft_right__tit span {
                margin-bottom: 20px;
                letter-spacing: -1px;
            }

            .copyright {
                position: absolute;
                bottom: 35px;
            }

            .ft_txt3 .mobile {
                display: block;
            }




        }

        /* 테블릿 큰사이즈 */
        @media (min-width: 880px) and (max-width: 1199px) {
            .manu {
                display: none;
            }

            #nav {
                padding: 0 50px;
            }

            .section_txt {
                padding-bottom: 20px;
                left: 50px;
                width: calc(50% - 100px);
            }

            .sec_tit {
                font-size: 1.1em;
            }

            .sec_txt {
                font-size: 2.0em;
            }

            .sec2_content__box {
                width: 100%;
            }

            .sec2_table {
                justify-content: center;
            }

            #section4 {
                height: auto;
            }

            .sec4_box {
                width: 100%;
                padding: 50px 150px;
            }

            .sec4_main__visual {
                flex-wrap: wrap;
            }

            .sec4_main__visual div {
                width: 50%;
            }

            .sec4_main__visual div:nth-child(1),
            .sec4_main__visual div:nth-child(3) {
                border-left: 1px solid rgba(255, 255, 255, .15);
            }

            .sec4_main__visual div:nth-last-child(1) {
                border-right: 1px solid rgba(255, 255, 255, .15);
            }

            /* 사업분류 레이아웃 */
            .sec6_box {
                width: 100%;
                flex-wrap: wrap-reverse;
                justify-content: space-between;
                padding-bottom: 0;
            }

            #sec6_plus1 .sec6_box,
            #sec6_plus3 .sec6_box {
                flex-wrap: wrap;
                justify-content: space-between;
                padding-bottom: 0;
            }

            .sec6_text {
                width: 100%;
            }

            .sec6_text h1,
            .sec6_text p,
            #sec6_plus1 .sec6_text h1,
            #sec6_plus3 .sec6_text h1,
            #sec6_plus1 .sec6_text p,
            #sec6_plus3 .sec6_text p {
                text-align: center;
            }

            .media_br {
                display: none;
            }

            .sec6_more,
            #sec6_plus1 .sec6_more,
            #sec6_plus3 .sec6_more {
                margin: 25px auto;
                float: inherit;
                padding: 15px;
            }

            .sec6_bg__img,
            #sec6_plus1 .sec6_bg__img,
            #sec6_plus3 .sec6_bg__img {
                position: inherit;
                left: 0;
                width: 100%;
            }

            .sec6_bg__img img {
                display: block;
                width: 100%;
            }

            #sec6_plus1 .sec6_bg__img,
            #sec6_plus3 .sec6_bg__img {}

            #sec6_plus3 .sec6_bg__img4 {
                right: 0;
            }

            /* 파트너사 레이아웃 */
            .partners {
                width: 90%;
                margin: 0 auto;
            }

            .partners ul li {
                width: 23%;
                height: auto;
            }

            .partners ul li img {
                display: block;
                width: 100%;
                height: auto;
            }

            /* 푸터 */
            .ft_top {
                padding: 15px 5%;
            }

            .ft_bottom {
                width: 90%;
            }
        }

        /* 노트북 작은 사이즈 */
        @media (min-width: 1200px) and (max-width: 1399px) {
            .manu {
                display: none;
            }

            #nav {
                padding: 0 50px;
            }

            .section_txt {
                padding-bottom: 20px;
                left: 50px;
                width: calc(50% - 100px);
            }

            .sec_tit {
                font-size: 2em;
            }

            .sec_txt {
                font-size: 3em;
            }

            /* 사업분류 레이아웃 */
            .sec6_box {
                flex-wrap: wrap-reverse;
                justify-content: space-between;
                padding-bottom: 0;
            }

            #sec6_plus1 .sec6_box,
            #sec6_plus3 .sec6_box {
                flex-wrap: wrap;
                justify-content: space-between;
                padding-bottom: 0;
            }

            .sec6_text {
                width: 100%;
            }

            .sec6_text h1,
            .sec6_text p,
            #sec6_plus1 .sec6_text h1,
            #sec6_plus3 .sec6_text h1,
            #sec6_plus1 .sec6_text p,
            #sec6_plus3 .sec6_text p {
                text-align: center;
            }

            .media_br {
                display: none;
            }

            .sec6_more,
            #sec6_plus1 .sec6_more,
            #sec6_plus3 .sec6_more {
                margin: 25px auto;
                float: inherit;
                padding: 15px;
            }

            .sec6_bg__img,
            #sec6_plus1 .sec6_bg__img,
            #sec6_plus3 .sec6_bg__img {
                position: inherit;
                left: 0;
                width: 100%;
            }

            .sec6_bg__img img {
                display: block;
                width: 100%;
            }

            #sec6_plus1 .sec6_bg__img,
            #sec6_plus3 .sec6_bg__img {}

            #sec6_plus3 .sec6_bg__img4 {
                right: 0;
            }
        }

        /* 노트북 */
        @media (min-width: 1400px) and (max-width: 1600px) {
            .section_txt {
                padding-bottom: 20px;
            }

            .sec_tit {
                font-size: 1.5em;
            }

            .sec_txt {
                font-size: 2.5em;
            }

            /* 사업분류 레이아웃 */
            .sec6_bg__img {
                left: 0;
            }

            #sec6_plus1 .sec6_bg__img,
            #sec6_plus3 .sec6_bg__img {
                top: 50%;
                right: -5vw;
                transform: translate(0%, -47.5%);
            }

            #sec6_plus3 .sec6_bg__img4 {
                right: 0;
            }
        }
    /* 반응형 쿼리 end */

    <? } ?>
        