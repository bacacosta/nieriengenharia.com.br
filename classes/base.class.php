<?php
require_once("db.class.php");

class Base {
	protected $db;

	function __construct() {
		$this->db = new DB();
	}
}