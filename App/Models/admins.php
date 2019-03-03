<?php

namespace App\Models;


class Admins {

    protected $db;

    public function __construct (\PDO $db)
    {
        $this->db = $db;
    }
}