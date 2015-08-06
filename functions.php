<?php
/***
 * 개발 모드인지 아닌지 확인
 */
function is_dev(){
	return true;
}

/***
 * 
 */

/**
 *  Menus
 *  main menu - 최상단에 보여줄 메뉴
 *  sidebar menu - 카테고리를 보여줄 메뉴
 */
register_nav_menus ( array (
		'main_menu' => 'Main Menu',
// 		'sub_menu' => 'Sub Menu' 
) );


// /*
// * 게시물 미리보기 이미지 활성화 코드
// */
// add_theme_support ( 'post-thumbnails' );
// function jg_get_homepage_now_title() {
// return 'Hello world';
// }
// ;
?>