<?php
require_once('classes/content.class.php');

$content = new Content();
// get boxes
$arr_boxes = $content->getBoxes($page, $locale);