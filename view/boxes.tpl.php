<?foreach ($arr_boxes as $box) {?>
	<div>
		<h1 style="background:url('<?=BASE_URL?>img/<?=$page?>/<?=$box["content_name"]?>_<?=$locale?>_h1.jpg') no-repeat;">
			<span><?=$box["content_title"]?></span>
		</h1>
		<div class="box_body"><?=$box["content_data"]?></div>
		<div class="box_footer"></div>
	</div>
<?}?>