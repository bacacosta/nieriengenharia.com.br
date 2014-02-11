<?php
require_once("classes/menu.class.php");

$menu = new Menu();
// get navigation bar items
$arr_navigation = $menu->getNavigationItems($locale);

// get all menu items to generate css classes
$arr_menu_collection = $menu->getCollection($locale);

// get other menu items
$menu_item_start = $menu->getItem('start', $locale);
$menu_item_mail = $menu->getItem('mail', $locale);