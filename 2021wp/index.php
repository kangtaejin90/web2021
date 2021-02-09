<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<link rel="stylesheet" href="<? echo G5_THEME_CSS_URL ?>/jquery.bxslider.css">
<style>
    .gnuSliderWrap{width: 100%;height: 500px;margin-bottom: 20px;}
    .gnuSliderWrap .bx-wrapper{-moz-box-shadow: none;-webkit-box-shadow: none;box-shadow: none;border: 0 none;margin-bottom: 0;
}
    .gnuSliderWrap .bx-wrapper .bx-pager, .bx-wrapper .bx-controls-auto {bottom: 30px;}
</style>
<script>
    $(document).ready(function(){
        $(".gnuSlider").bxSlider({auto:true});
    });
</script>
<div class="gnuSliderWrap">
    <ul class="gnuSlider">
        <li><img src="<? echo G5_THEME_IMG_URL ?>/pc01.jpg" alt=""></li>
        <li><img src="<? echo G5_THEME_IMG_URL ?>/pc02.jpg" alt=""></li>
        <li><img src="<? echo G5_THEME_IMG_URL ?>/pc03.jpg" alt=""></li>
    </ul>
</div>
<div>
    <!-- 공지사항1 { -->
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('theme/basic', 'notice', 3, 30);      // 최소설치시 자동생성되는 갤러리게시판
    ?>
    <!-- } 공지사항1 끝 -->
</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
