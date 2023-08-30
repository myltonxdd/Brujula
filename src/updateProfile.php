<?php
session_start();
require("connection.php");

$idUsuario = $_SESSION["data"]["id"];
$nombre = $_POST["nombre"];
$contra = $_POST["contra"];
$carrera = $_POST["carrera"];
$pais = $_POST["pais"];

$query = "UPDATE student_profile SET nombreCompleto='$nombre', contra='$contra', id_carrera='$carrera', id_pais='$pais' WHERE id='$idUsuario'; ";
$actualizarDatos = $mysqli->query($query);

header("Location: brujula.php");
