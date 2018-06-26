<?php

//удалить пустое пространство под панель
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

//добавить пункт "меню" в админку
if(function_exists('register_nav_menus')){
	register_nav_menus(
		array( // создаём любое количество областей
		  'header_menu' => 'Главное меню', // 'имя' => 'описание'
		)
	);
}
