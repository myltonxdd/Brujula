<?php
try {
    $mysqli = new mysqli("localhost", "root", "", "homework");
    
} catch (mysqli_sql_exception $e) {
    echo "Error:". $e->getMessage();
}