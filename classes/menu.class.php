<?php
require_once("base.class.php");

class Menu extends Base {
	public function getCollection($locale) {
		$sql = "
			SELECT m.description, m2c.href
			FROM menu AS m
			INNER JOIN menu2content AS m2c ON m2c.id = m.id_menu2content
			WHERE m.locale = '" . $locale . "'
			ORDER BY m.pos
		";

		return $this->db->getCollection($sql);
	}

	public function getNavigationItems($locale) {
		$navigation_items = explode(",", NAVIGATION_ITEMS);
		$sql = "
			SELECT m.description, m2c.href
			FROM menu AS m
			INNER JOIN menu2content AS m2c ON m2c.id = m.id_menu2content
			WHERE m.locale = '" . $locale . "'
			AND m2c.href IN ('" . implode("','", $navigation_items) . "')
			ORDER BY m.pos
		";

		return $this->db->getCollection($sql);
	}

	public function getItem($href, $locale) {
		$sql = "
			SELECT m.description, m2c.href
			FROM menu AS m
			INNER JOIN menu2content AS m2c ON m2c.id = m.id_menu2content
			WHERE m.locale = '" . $locale . "'
			AND m2c.href = '" . $href . "'
		";

		return $this->db->getRow($sql);
	}
}