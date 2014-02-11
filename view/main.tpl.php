<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<head>
	<title>Nieri Engenharia Civil</title>

	<meta name="description" content="Nieri Engenharia Civil Londrina Paraná Brasil" />
	<meta name="keywords" content="nieri,engenharia,civil,londrina,parana,brasil" />
	<meta name="author" content="Rodrigo Costa / Diogo Novaes" />
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

	<link rel="stylesheet" type="text/css" href="<?=BASE_URL?>css/styles.css" />
	<?include_once("css/menu.css.php")?>
</head>

<body>

<div id="box">
	<div id="header" class="<?=$page?>">
		<?include_once("header.tpl.php")?>
		<div id="menu"><?include_once("menu.tpl.php")?></div>
	</div>

	<div id="content" class="<?=$page?>"><?include_once($ctrl_tpl . ".tpl.php")?></div>

	<div id="footer" class="<?=$page?>"><?include_once("footer.tpl.php")?></div>
</div>

</body>