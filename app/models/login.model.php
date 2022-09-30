<?php
class LogInModel{
    private $db;
    function __construct()
    {
        $this->db = new PDO(
            'mysql:host=localhost;'
                . 'dbname=trabajoespecial;charset=utf8',
            'root',
            ''
        );
    }
}