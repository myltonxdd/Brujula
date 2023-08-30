<?php
session_start();
require("connection.php");

$matricula = $_POST["matricula"];
$contra = $_POST["contra"];

$query = "SELECT * FROM student_profile WHERE matricula='$matricula' AND contra='$contra';";

$resultado = $mysqli->query($query);

$numFilas = $resultado->num_rows;

if ($numFilas === 1) {
    $data = $resultado->fetch_assoc();
    $_SESSION["data"] = $data;
    header("location: brujula.php");
} else {
    header("location: index.php");
}
