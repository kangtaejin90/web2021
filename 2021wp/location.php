<?php
include_once("./_common.php");
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$co_id = "testpage";
$menuNum = "1";
$menuNum2 = "2";
$g5['title'] = "오시는길";

include_once(G5_THEME_PATH.'/head.php');
?>
<script>
$(document).ready(function(){
   $('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
   $('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
   });
</script>
<p class="title">하이미디어컴퓨터학원 구로점</p>
<!-- * 카카오맵 - 지도퍼가기 -->
<!-- 1. 지도 노드 -->
<div id="daumRoughmapContainer1612328493812" class="root_daum_roughmap root_daum_roughmap_landing"></div>

<!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1612328493812",
		"key" : "249o5",
		"mapWidth" : "930",
		"mapHeight" : "500"
	}).render();
</script>

<p>서울 구로구 경인로 557 4층</p>
<p>(우) 08216(지번) 구로동 606-4</p>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
