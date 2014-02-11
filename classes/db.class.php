<?php
class DB {
	private $server = DB_SERVER;
	private $user   = DB_USER;
	private $passwd = DB_PASSWD;
	private $dbname = DB_NAME;

	private $conn;
	private $rs;

	function __construct() {
		$this->conn = mysql_connect($this->server, $this->user, $this->passwd);
		mysql_select_db($this->dbname);

		// sets charset to utf8
		mysql_query("SET NAMES 'utf8'");
	}

	private function execute($sql) {
		$this->rs = mysql_query($sql);
	}

	private function getResult() {
		while ($row = mysql_fetch_array($this->rs, MYSQL_ASSOC)) {
			$result[] = $row;
		}
		return $result;
	}

	public function getCollection($sql) {
		$this->execute($sql);
		return $this->getResult();
	}

	public function getRow($sql) {
		$this->execute($sql);
		return mysql_fetch_array($this->rs, MYSQL_ASSOC);
	}
}