<?php

namespace App\models;

class Base {
    protected $db;

    public function __construct($db) {
        $this->db = $db;
    }
}
