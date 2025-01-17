	<link rel="stylesheet" type="text/css" href="<?=base_static?>/svc/css/jquery.bxslider.css" />
<!--
	<script src="http://www.youtube.com/player_api"></script>
	-->
	<script type="text/javascript" src="<?=base_static?>/svc/js/init.js"></script>
	<script type="text/javascript" src="<?=base_static?>/svc/js/init_vid.js"></script>
	<script type="text/javascript" src="<?=base_static?>/svc/js/init_player.js"></script>


	<div class="body"></div>
    <br class="br_sub">

    <div class="main">
		<script>
			$(function() {
				var nx = 54;
				var ny = 125;
				var dust_area = "중산동";

				$.ajax({
					type	:	"POST",
					data	:	{"nx":nx, "ny":ny, "dust_area":dust_area},
					url		:	"/common/weather_new.php",
					success	:	function(data) {
						$('.weather').html(data);
					}
				});
			});
		</script>
        <!-- 190917 날씨 추가 (190905 전달본) : 멀티클래스 추가 -->
        <div class="weather vid">            
        </div>
        <!-- //.weather -->

        <!-- 190917 영상 추가 -->
        <!-- <video id="vidM" playsinline="" webkit-playsinline="" preload="" autoplay="" muted="">
            <source src="<?=base_img?>/svc/img/main/seabay_mobile.mp4" type="video/mp4" />
        </video> -->
        <!-- <div class="vid-wrap">
            <div class="vid-bg"></div>
            <section class="vid-area m">
                <div class="vid-box">
                </div>
            </section>
            <section class="vid-area pc">
                <section class="vid-box"></section>
            </section>

            <div class="vid-txt-box">
                <a href="javascript:;" class="vid-txt"><img src="<?=base_img?>/svc/img/main/bg_main_txt.png" alt="에어스카이호텔 자세한 정보 보기" /></a>
            </div>

        </div> -->
        <!-- //.vid-wrap -->

        <!-- <section class="slider_section vid-wrap"> -->
        <!-- <div class="main_info">
                <p>A Home away from Home</p>
            </div> -->
        <section class="slider_section main-visual">
            <div id="slider_main" class="slider_container smain">
                <div data-u="slides" class="slides">
                    <div><img data-u="image" class="main-visibility" src="<?=base_img?>/svc/img/main/bg_01.jpg" alt="에어스카이호텔사진" /></div>
                    <div><img data-u="image" class="main-visibility" src="<?=base_img?>/svc/img/main/bg_02.jpg" alt="에어스카이호텔사진" /></div>
                    <div><img data-u="image" class="main-visibility" src="<?=base_img?>/svc/img/main/bg_03.jpg" alt="에어스카이호텔사진" /></div>
                    <div><img data-u="image" class="main-visibility" src="<?=base_img?>/svc/img/main/bg_04.jpg" alt="에어스카이호텔사진" /></div>
                    <div><img data-u="image" class="main-visibility" src="<?=base_img?>/svc/img/main/bg_05.jpg" alt="에어스카이호텔사진" /></div>
                </div>
                <span u="arrowleft" class="jssor-sprite arow-left" style="width: 21px; height: 32px; top: 200px; left: 20px;"></span>
                <span u="arrowright" class="jssor-sprite arow-right" style="width: 21px; height: 32px; top: 200px; right: 20px"></span>
            </div>
            <div id="slider_mmain" class="slider_container mob">
                <div data-u="slides" class="slides">
                    <div><img data-u="image" class="main-visibility" src="<?=base_img?>/svc/img/m/main/bg_01.jpg" alt="에어스카이호텔사진" /></div>
                    <div><img data-u="image" class="main-visibility" src="<?=base_img?>/svc/img/m/main/bg_02.jpg" alt="에어스카이호텔사진" /></div>
                    <div><img data-u="image" class="main-visibility" src="<?=base_img?>/svc/img/m/main/bg_03.jpg" alt="에어스카이호텔사진" /></div>
                    <div><img data-u="image" class="main-visibility" src="<?=base_img?>/svc/img/m/main/bg_04.jpg" alt="에어스카이호텔사진" /></div>
                    <div><img data-u="image" class="main-visibility" src="<?=base_img?>/svc/img/m/main/bg_05.jpg" alt="에어스카이호텔사진" /></div>
                </div>
                <span u="arrowleft" class="jssor-sprite arow-left" style="width: 21px; height: 32px; top: 200px; left: 20px;"></span>
                <span u="arrowright" class="jssor-sprite arow-right" style="width: 21px; height: 32px; top: 200px; right: 20px"></span>
            </div>

            <div class="vid-txt-box">
                <a href="javascript:;" class="vid-txt"><img src="<?=base_img?>/svc/img/main/bg_main_txt.png" alt="에어스카이호텔 자세한 정보 보기" /></a>
            </div>
        </section>

        <section id="mainRest" class="body_section">
            <div class="main_reservation">
                <div class="container">
                    <ul class="inputs ">
                        <li>
                            <span>실시간 객실예약</span>
                        </li>
                        <li>
                            <div class="date_input">
                                <input type="input" name="checkIn" value="2019-06-18" placeholder="Check in" readonly />
                                <i class="icon-12"></i>
                            </div>
                        </li>
                        <li>
                            <div class="date_input">
                                <input type="input" name="checkOut" value="2019-06-19" placeholder="Check out" readonly />
                                <i class="icon-12"></i>
                            </div>
                        </li>
                        <!-- <li>
                            <div class="date_input">
                                <input type="number" name="rooms" value="1" min="1" onKeyup="number_check(this)"
                                    placeholder="Check out" />
                                <p class="ad_form_label">객실</p>
                            </div>
                            <input type="hidden" name="adults" value="1" />
                            <input type="hidden" name="children" value="" />
                        </li> -->
                        <li>
                            <button type="button" onclick="on_submit()">객실 알아보기</button>
                        </li>
                        <!-- <li>
                            <div class="temp_data" title="오늘의 날씨">
                                <div class="temp">
                                    <span class="do">24</span>
                                    <div class="tmx">↑<span>25</span> ↓<span></span></div>
                                    <div class="day">Tue 18</div>
                                </div>
                                <div class="sky">
                                    <i class="icon-16"></i>
                                    <span class="today">TODAY</span>
                                </div>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </section>

        <section class="notice-sec">
            <h1 class="sr-only">에어스카이호텔 토픽 및 공지사항</h1>
            <div class="group">
                <div class="topic-wrap">
                    <div class="topic-header">
                        <div class="title">
                            <a href="#none" class="link nope">
                                <span class="c-theme fw-b">AIRSKY TOPIC</span>
                                <span class="hidden-smxs c-black">
                                    <img src="<?=base_img?>/svc/img/icon/ico_sb.png" alt="설명" class="ico-sb">
                                    <span class="sm">따뜻한 하늘과 드넓은 오션뷰, 수려한 주변경관을 만나보세요.</span>
                                </span>
                                <div class="ico-plus-cont theme">
                                    <div class="ico-wrap">
                                        <div class="ico-container">
                                            <div class="ico-body">
                                                <span class="ico-bar"></span>
                                                <span class="ico-bar"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="topic-body">
                        <div class="title hidden-mdlg">
                            <a href="#none" class="nope c-theme">
                                <img src="<?=base_img?>/svc/img/icon/ico_sb.png" alt="설명" class="ico-sb">
                                <span class="sm">매일 아침을 아름다운 동해의 일출로 시작하세요.</span>
                            </a>
                        </div>
                        <div class="bx-box">
                            <ul class="bx-s fnBxSlider">
                                <li class="item"><a href="javascript:;" class="nope"><img src="<?=base_img?>/svc/img/main/topic_01.jpg" alt="호텔사진"></a></li>
                                <li class="item"><a href="javascript:;" class="nope"><img src="<?=base_img?>/svc/img/main/topic_02.jpg" alt="호텔사진"></a></li>
                                <li class="item"><a href="javascript:;" class="nope"><img src="<?=base_img?>/svc/img/main/topic_03.jpg" alt="호텔사진"></a></li>
                                <li class="item"><a href="javascript:;" class="nope"><img src="<?=base_img?>/svc/img/main/topic_04.jpg" alt="호텔사진"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="notice-wrap">
                    <div class="notice-header">
                        <div class="title c-theme fw-b">
                            <a href="http://seabay.co.kr/brd/lists/notice.php" class="link">
                                <span class="c-theme fw-b">NOTICE</span>
                                <div class="ico-plus-cont theme">
                                    <div class="ico-wrap">
                                        <div class="ico-container">
                                            <div class="ico-body">
                                                <span class="ico-bar"></span>
                                                <span class="ico-bar"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="notice-body">
                        <ul class="notice-list">
                            <!-- <li><a href="brd/view/notice/1550.php">[알림] 객실정비 품질 향상 및 개선 안내</a></li> -->
                            <li><a href="">[알림] 에어스카이호텔 공식홈페이지 오픈</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="rooms-sec child-ft-ntss">
            <div class="sec-header sec-header-type1">
                <h1 class="title c-theme">ACCOMMODATION</h1>
                <p class="subtitle">호텔의 품격이 완벽하게 조화된 품격 있는 휴식 공간</p>
            </div>
            <div class="group">
                <div class="rooms-wrap">
                    <ul class="rooms-list">
                        <li class="rooms-item">
                            <a href="./rooms/detail_new/std_db.php" class="link">
                                <div class="content">
                                    <figure><img src="<?=base_img?>/svc/img/main/room_01.jpg" alt="스탠다드룸"></figure>
                                </div>
                                <div class="title cf">
                                    <span class="lg">스탠다드룸</span>
                                    <span class="sm c-gray">STANDARD</span>
                                    <div class="desc">
                                        합리적이면서 아늑한 휴식 공간<br class="hidden-mdlg"> - 더블 / 트윈
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="rooms-item">
                            <a href="./rooms/detail_new/dx_oc_db.php" class="link">
                                <div class="content">
                                    <figure><img src="<?=base_img?>/svc/img/main/room_02.jpg" alt="디럭스룸"></figure>
                                </div>
                                <div class="title cf">
                                    <span class="lg">디럭스룸</span>
                                    <span class="sm c-gray">DELUXE</span>
                                    <div class="desc">
                                        실용적이면서도 안락하고 편안한 공간<br class="hidden-mdlg"> - 트윈 / 더블 / 온돌
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="rooms-item">
                            <a href="./rooms/detail_new/std_db.php" class="link">
                                <div class="content">
                                    <figure><img src="<?=base_img?>/svc/img/main/room_03.jpg" alt="프리미어룸"></figure>
                                </div>
                                <div class="title cf">
                                    <span class="lg">프리미어룸</span>
                                    <span class="sm c-gray">PREMIER</span>
                                    <div class="desc">
                                        인테리어 조화를 이루는 프리미엄<br class="hidden-mdlg"> - 트윈 / 더블 / 패밀리
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="rooms-item">
                            <a href="./rooms/detail_new/dx_oc_db.php" class="link">
                                <div class="content">
                                    <figure><img src="<?=base_img?>/svc/img/main/room_04.jpg" alt="스위트룸"></figure>
                                </div>
                                <div class="title cf">
                                    <span class="lg">스위트룸</span>
                                    <span class="sm c-gray">SUITE</span>
                                    <div class="desc">
                                        현대적인 감각과 품격의 쾌적한<br class="hidden-mdlg"> 스위트 공간
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sec-header sec-header-type1">
                <h1 class="title c-theme">DINING &amp; FACILITY</h1>
                <p class="subtitle">프리미엄 레스토랑, 다양한 시설에서 편안함을 더해드립니다.</p>
            </div>
            <div class="group">
                <div class="facil-wrap">
                    <ul class="rooms-list">
                        <li class="rooms-item">
                            <a href="./rooms/detail_new/std_db.php" class="link">
                                <div class="content">
                                    <figure><img src="<?=base_img?>/svc/img/main/room_01.jpg" alt=""></figure>
                                </div>
                                <div class="title cf">
                                    <span class="lg">레스토랑</span>
                                    <span class="sm c-gray">Restaurant</span>
                                </div>
                            </a>
                        </li>
                        <li class="rooms-item">
                            <a href="./rooms/detail_new/dx_oc_db.php" class="link">
                                <div class="content">
                                    <figure><img src="<?=base_img?>/svc/img/main/room_02.jpg" alt=""></figure>
                                </div>
                                <div class="title cf">
                                    <span class="lg">컨퍼런스룸</span>
                                    <span class="sm c-gray">Conference Room</span>
                                </div>
                            </a>
                        </li>
                        <li class="rooms-item">
                            <a href="./rooms/detail_new/std_db.php" class="link">
                                <div class="content">
                                    <figure><img src="<?=base_img?>/svc/img/main/room_03.jpg" alt=""></figure>
                                </div>
                                <div class="title cf">
                                    <span class="lg">세미나룸</span>
                                    <span class="sm c-gray">Seminar Room</span>
                                </div>
                            </a>
                        </li>
                        <li class="rooms-item">
                            <a href="./rooms/detail_new/dx_oc_db.php" class="link">
                                <div class="content">
                                    <figure><img src="<?=base_img?>/svc/img/main/room_04.jpg" alt=""></figure>
                                </div>
                                <div class="title cf">
                                    <span class="lg">편의점</span>
                                    <span class="sm c-gray">Convenience Store</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="surroundings-content">
                <div class="sec-header sec-header-type1">
                    <h1 class="title c-theme">SURROUNDINGS</h1>
                    <p class="subtitle">호텔과 인접한 주요 관광지와 문화 시설입니다.</p>
                </div>
                <div class="group">
                    <div class="facil-wrap surroundings-wrap">
                        <ul class="rooms-list">
                            <li class="rooms-item">
                                <a href="./rooms/detail_new/std_db.php" class="link">
                                    <div class="content">
                                        <figure><img src="<?=base_img?>/svc/img/main/surround_01.jpg" alt=""></figure>
                                    </div>
                                    <div class="text">
                                        월미테마파크<br>
                                        차량30분 소요 (2.5km 거리)
                                    </div>
                                </a>
                            </li>
                            <li class="rooms-item">
                                <a href="./rooms/detail_new/dx_oc_db.php" class="link">
                                    <div class="content">
                                        <figure><img src="<?=base_img?>/svc/img/main/surround_02.jpg" alt=""></figure>
                                    </div>
                                    <div class="text">
                                        영종씨사이드파크<br>
                                        도보4분 소요 (400m 거리)
                                    </div>
                                </a>
                            </li>
                            <li class="rooms-item">
                                <a href="./rooms/detail_new/std_db.php" class="link">
                                    <div class="content">
                                        <figure><img src="<?=base_img?>/svc/img/main/surround_03.jpg" alt=""></figure>
                                    </div>
                                    <div class="text">
                                        BMW 드라이빙센터<br>
                                        차량15분 소요 (11km 거리)
                                    </div>
                                </a>
                            </li>
                            <li class="rooms-item">
                                <a href="./rooms/detail_new/dx_oc_db.php" class="link">
                                    <div class="content">
                                        <figure><img src="<?=base_img?>/svc/img/main/surround_04.jpg" alt=""></figure>
                                    </div>
                                    <div class="text">
                                        스카이72 골프<br>
                                        차량22분 소요 (9km 거리)
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </div>