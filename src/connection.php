<?php
class DB
{
    public $mysqli;
    public function __construct()
    {
        try {
            $this->mysqli = new mysqli("localhost", "root",  "", "pc_12");
        } catch (mysqli_sql_exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
