<ul>
	<?foreach ($arr_navigation as $item) {?>
		<li>
			<a href="<?=BASE_URL?><?=$locale?>/<?=$item["href"]?>/"
				class="<?=$item["href"]?><?if ($item["href"] == $page) {?> selected"<?} else {?>"<?}?>>
				<span><?=$item["description"]?></span>
			</a>
		</li>
	<?}?>
</ul>