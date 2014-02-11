<style type="text/css">
<?foreach ($arr_menu_collection as $item) {?>
a.<?=$item["href"]?> {
	background:url("<?=BASE_URL?>img/menu/<?=$item["href"]?>_<?=$locale?>_normal.png") no-repeat;
}

a.<?=$item["href"]?>:hover {
	background:url("<?=BASE_URL?>img/menu/<?=$item["href"]?>_<?=$locale?>_hover.png") no-repeat;
}

a.<?=$item["href"]?>.selected {
	background:url("<?=BASE_URL?>img/menu/<?=$item["href"]?>_<?=$locale?>_selected.png") no-repeat;
}
<?}?>
</style>