<?php

namespace App\models;

use App\models\Base;

class Event extends Base {
	public function index() {
		$query = $this->db->prepare("SELECT * FROM Event");
		$query->execute();
		return $query->fetchAll();
	}
}