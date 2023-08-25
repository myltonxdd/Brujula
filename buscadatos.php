<?php

require("conection.php");
session_start();

extract($_GET);

$query2 = "INSERT INTO pedidos(producto, id_cliente) VALUES ('$pedido', '$id_cliente')";



try {
    $subedato = $mysqli->query($query2);
    echo "producto registrado";
    if($subedato){
        $query = "SELECT * FROM pedidos WHERE id_cliente = $id_cliente";
        $resultado = $mysqli->query($query);
        $_SESSION["resultado"] = $resultado->fetch_assoc();
    }
    
} catch (mysqli_sql_exception $e) {
    $_SESSION["resultado"] = "hubo un error en la busqueda, intenta de nuevo";
    echo $_SESSION["resultado"];
}

header("location: index.php")
?>