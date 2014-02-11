<?php
require_once("config/config.php");

$page = array_key_exists("page", $_GET) && in_array($_GET["page"], explode(",", PAGE_LIST)) ? $_GET["page"] : PAGE_DEFAULT;
$locale = array_key_exists("locale", $_GET) && in_array($_GET["locale"], explode(",", LOCALE_LIST)) ? $_GET["locale"] : LOCALE_DEFAULT;

// for about and clients pages use boxes controller and template
switch ($page) {
	case "about":
		$ctrl_tpl = "boxes";
		break;
	case "portfolio":
		$ctrl_tpl = "soon";
		break;
	default:
		$ctrl_tpl = $page;
}

require_once("controller/menu.ctrl.php");
require_once("controller/" . $ctrl_tpl . ".ctrl.php");
require_once("view/main.tpl.php");