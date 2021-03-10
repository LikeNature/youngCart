<link rel="stylesheet" href="https://atobien.co.kr/theme/buzinga/css/mobile_shop.css?ver=200124">
<link rel="stylesheet" href="https://atobien.co.kr/js/font-awesome/css/font-awesome.min.css?ver=200124">
<link rel="stylesheet" href="https://atobien.co.kr/theme/buzinga/js/owl.carousel.css?ver=200124">
<link rel="stylesheet" href="https://atobien.co.kr/theme/buzinga/mobile/skin/latest/review/style.css?ver=200124">
<link rel="stylesheet" href="https://atobien.co.kr/js/owlcarousel/owl.carousel.min.css?ver=200124">
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "https://atobien.co.kr";
var g5_bbs_url   = "https://atobien.co.kr/bbs";
var g5_is_member = "";
var g5_is_admin  = "";
var g5_is_mobile = "1";
var g5_bo_table  = "";
var g5_sca       = "";
var g5_editor    = "";
var g5_cookie_domain = "";
var g5_theme_shop_url = "https://atobien.co.kr/theme/buzinga/shop";
var g5_shop_url = "https://atobien.co.kr/shop";
</script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://atobien.co.kr/theme/buzinga/css/font/SCDream.css?ver=200124"/>
<link rel="stylesheet" type="text/css" href="https://atobien.co.kr/theme/buzinga/css/react.css?ver=200124"/>
<link rel="stylesheet" type="text/css" href="https://atobien.co.kr/theme/buzinga/css/mk_mobile.css?ver=200124"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
<script src="https://atobien.co.kr/js/jquery-1.12.4.min.js?ver=200124"></script>
<script src="https://atobien.co.kr/js/jquery-migrate-1.4.1.min.js?ver=200124"></script>
<script src="https://atobien.co.kr/js/common.js?ver=200124"></script>
<script src="https://atobien.co.kr/js/wrest.js?ver=200124"></script>
<script src="https://atobien.co.kr/js/placeholders.min.js?ver=200124"></script>
<script src="https://atobien.co.kr/theme/buzinga/js/jquery.sidr.min.js?ver=200124"></script>
<script src="https://atobien.co.kr/js/modernizr.custom.70111.js?ver=200124"></script>
<script src="https://atobien.co.kr/theme/buzinga/js/owl.carousel.min.js?ver=200124"></script>
<script src="https://atobien.co.kr/theme/buzinga/js/unslider.min.js?ver=200124"></script>
<script src="https://atobien.co.kr/js/owlcarousel/owl.carousel.min.js?ver=200124"></script>
<script src="https://atobien.co.kr/theme/buzinga/mobile/skin/latest/review/latest.carousel.js?ver=200124"></script>
<!-- 슬라이드 -->
<link rel="stylesheet" type="text/css" href="https://atobien.co.kr/theme/buzinga/css/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://atobien.co.kr/theme/buzinga/css/slick-theme.css"/>
<script src="https://atobien.co.kr/theme/buzinga/js/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="https://atobien.co.kr/theme/buzinga/js/slick.min.js" type="text/javascript" charset="utf-8"></script>

<!-- 컬러박스 -->
<link rel="stylesheet" type="text/css" href="https://atobien.co.kr/theme/buzinga/css/colorbox.css"/>
<script src="https://atobien.co.kr/theme/buzinga/js/jquery.colorbox.js" type="text/javascript" charset="utf-8"></script>

<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/index.php');
    return;
}

define("_INDEX_", TRUE);

include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>

<!-- 메인이미지 시작 { -->
<?php echo display_banner('메인', 'mainbanner.10.skin.php'); ?>
<div class="main_visual">
        <a class="survey_btn">
          <div class="container_1200">
            <div class="text">
              <em>설문조사</em>
              <strong>나에게 딱 맞는
              <b>아토피 제품</b>을 찾고 있다면?</strong>
              <span class="a_btn"><img src="https://atobien.co.kr/theme/buzinga/img/main_visual_ic.svg"><span class="font21">제품추천 받기</span><i class="xi-arrow-right font25"></i></span>
            </div>
            <div class="img"><img class="m_view" src="https://atobien.co.kr/theme/buzinga/img/m_main_visual.svg"></div>
          </div>
        </a>
      </div>
      <div class="pop_wrap survey_pop">
	<a class="survey_close"><i class="xi-close-thin"></i></a>
	<div class="t_c font21">설문조사</div>
	<div class="content_in">
		<form name="fitemqa" method="post" action="./index.php" onsubmit="return fitemqa_submit(this);" autocomplete="off">
		<input type="hidden" name="w" value="s">

		<div class="input_div">

			<h5 class="tit02">나이</h5>
			<!-- SELECT BOX EDIT  -->

			<div class="input_wrap">
                            <select name="sm_age" style="max-width:200px" class="select">
                                <option value="" selected="">연령대 선택</option>
                                <option value="30">30대 이하</option>
                                <option value="40">40대</option>
                                <option value="50">50대</option>
                                <option value="60">60대</option>
                                <option value="70">70대</option>
                                <option value="80">80대 이상</option>
                            </select>
      </div>

			<!--
			<div class="input_wrap">
				<input class="input_st t_r" type="text" name="sm_age" required placeholder=""><span>세</span>
			</div>
		  -->

		</div>


		<div class="input_div">
			<h5 class="tit02">증상이 있는 부위</h5>

						<div class="btn_radio">
				<input type="radio" id="sec_1_1" name="sm_id1" value="1">
				<label for="sec_1_1">머리</label>
			</div>
						<div class="btn_radio">
				<input type="radio" id="sec_1_2" name="sm_id1" value="2">
				<label for="sec_1_2">상지</label>
			</div>
						<div class="btn_radio">
				<input type="radio" id="sec_1_3" name="sm_id1" value="3">
				<label for="sec_1_3">몸통</label>
			</div>
						<div class="btn_radio">
				<input type="radio" id="sec_1_4" name="sm_id1" value="4">
				<label for="sec_1_4">하지</label>
			</div>
			
			<!--
			<div class="btn_radio">
				<input type="radio" id="sec1" name="sm_id1" value="1">
				<label for="sec1">머리</label>
			</div>
			<div class="btn_radio">
				<input type="radio" id="sec2" name="sm_id1" value="2">
				<label for="sec2">상지</label>
			</div>
			<div class="btn_radio">
				<input type="radio" id="sec3" name="sm_id1" value="3">
				<label for="sec3">몸통</label>
			</div>
			<div class="btn_radio">
				<input type="radio" id="sec4" name="sm_id1" value="4">
				<label for="sec4">하지</label>
			</div>
		  -->
		</div>





		<div class="input_div" >
			<h5 class="tit02">아토피 고민</h5>

			<!-- 클릭시 Ajax로 데이터 가져올수 있도록 수정 작업 ...-->


			<div id="sm_id_2_con">

				<!--
				<div class="btn_radio big">
					<input type="radio" id="sec5" name="sm_id2" value="1">
					<label for="sec5">붉은기<br>(홍반)</label>
				</div>
				<div class="btn_radio big">
					<input type="radio" id="sec6" name="sm_id2" value="2">
					<label for="sec6">주름<br>(태선화)</label>
				</div>

				<div class="btn_radio big">
					<input type="radio" id="sec7" name="sm_id2" value="3">
					<label for="sec7">찰상</label>
				</div>

				<div class="btn_radio big">
					<input type="radio" id="sec8" name="sm_id2" value="4">
					<label for="sec8">부종</label>
				</div>
			  -->
			</div>




		</div>

		<button type="submit" class="btn btn03">작성완료</button>
		</form>
</div>     
<!-- } 메인이미지 끝 -->






<?php if($default['de_type1_list_use']) { ?>
<!-- 히트상품 시작 { -->
<section class="sct_wrap">
    <header>
        <h2><a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=1">히트상품</a></h2>
    </header>
    <?php
    $list = new item_list();
    $list->set_type(1);
    $list->set_view('it_img', true);
    $list->set_view('it_id', false);
    $list->set_view('it_name', true);
    $list->set_view('it_basic', true);
    $list->set_view('it_cust_price', true);
    $list->set_view('it_price', true);
    $list->set_view('it_icon', true);
    $list->set_view('sns', true);
    echo $list->run();
    ?>
</section>
<!-- } 히트상품 끝 -->
<?php } ?>

<?php if($default['de_type2_list_use']) { ?>
<!-- 추천상품 시작 { -->
<section class="sct_wrap">
    <header>
        <h2><a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=2">추천상품</a></h2>
    </header>
    <?php
    $list = new item_list();
    $list->set_type(2);
    $list->set_view('it_id', false);
    $list->set_view('it_name', true);
    $list->set_view('it_basic', true);
    $list->set_view('it_cust_price', true);
    $list->set_view('it_price', true);
    $list->set_view('it_icon', true);
    $list->set_view('sns', true);
    echo $list->run();
    ?>
</section>
<!-- } 추천상품 끝 -->
<?php } ?>

<?php include_once(G5_SHOP_SKIN_PATH.'/boxevent.skin.php'); // 이벤트 ?>

<?php if($default['de_type3_list_use']) { ?>
<!-- 최신상품 시작 { -->
<section class="sct_wrap">
    <header>
        <h2><a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=3">최신상품</a></h2>
    </header>
    <?php
    $list = new item_list();
    $list->set_type(3);
    $list->set_view('it_id', false);
    $list->set_view('it_name', true);
    $list->set_view('it_basic', true);
    $list->set_view('it_cust_price', true);
    $list->set_view('it_price', true);
    $list->set_view('it_icon', true);
    $list->set_view('sns', true);
    echo $list->run();
    ?>
</section>
<!-- } 최신상품 끝 -->
<?php } ?>

<?php if($default['de_type5_list_use']) { ?>
<!-- 할인상품 시작 { -->
<section class="sct_wrap">
    <header>
        <h2><a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=5">할인상품</a></h2>
    </header>
    <?php
    $list = new item_list();
    $list->set_type(5);
    $list->set_view('it_id', false);
    $list->set_view('it_name', true);
    $list->set_view('it_basic', true);
    $list->set_view('it_cust_price', true);
    $list->set_view('it_price', true);
    $list->set_view('it_icon', true);
    $list->set_view('sns', true);
    echo $list->run();
    ?>
</section>
<!-- } 할인상품 끝 -->
<?php } ?>



<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
?>