<?php

use \Mysqli;

class Mysql extends \Mysqli {
    protected $data = [
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'db' => 'uadeo',
        'port' => 3306,
    ];
}