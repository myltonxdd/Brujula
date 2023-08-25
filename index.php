<?php
require("conection.php");
session_start();
$resultado = $mysqli->query("SELECT * FROM clientes")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>HomeWork 25</title>
</head>
<body>
    <div class="flex flex-col justify-star mt-8 h-screen items-center gap-3">
        <h1 class="text-2xl">Pedidos</h1>
        <form action="buscadatos.php" method="get" class="flex flex-col gap-3 w-1/2 border rounded-lg p-4">
            <label for="persona">Seleciona el nombre del cliente</label>
            <select name="id_cliente" id="persona" class="border-2 rounded-lg">
                <?php
                    while($fila = $resultado->fetch_assoc()){
                        $nombre = $fila["nombre"];
                        $id = $fila["id"];
                        echo "<option value='$id'>$nombre</option>";
                    }?>
            </select>
            <label for="pedido">Escribe tu pedido</label>
            <input id="pedido" name="pedido" type="text" class="border rounded-lg p-3 h-20">

            <button type="submit" class="border p-3 rounded-lg bg-sky-400">Haz tu pedido</button>
        </form>
                    
        <section class="border p-3 rounded-lg">
            <h1>Pedido data</h1>
            <hr>
            <?php
                if (isset($_SESSION["resultado"])) {
                    $resultDB= ($_SESSION["resultado"]["producto"]);
                    echo "<p> Producto: $resultDB</p>";
                    $result_id= ($_SESSION["resultado"]["id_cliente"]);
                    echo "<p> con el id: $result_id</p>";
                }
            ?>
        </section>
    </div>
</body>
</html>