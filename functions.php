<?php

//удалить пустое пространство под панель
function remove_admin_login_header() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

//добавить пункт "меню" в админку
if (function_exists('register_nav_menus')) {
  register_nav_menus(array(
    'header_menu' => 'Главное меню'
  ));
  register_nav_menus(array(
    'footer_menu' => 'Нижнее меню'
  ));
}

add_theme_support( 'post-thumbnails' );