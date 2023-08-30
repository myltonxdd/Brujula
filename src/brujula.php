<?php
session_start();
if (!isset($_SESSION["data"])) {
    header("Location: index.php");
    session_destroy();
}

$nombreCompleto = $_SESSION["data"]["nombreCompleto"];
$arr = explode(' ', trim($nombreCompleto));
$primerNombre = $arr[0];

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
</head>

<body>
    <main class="bg-[#3068D8] bg-gradient-to-br from-[#3068D8] to-[#000714] pt-5 w-[375px] h-screen">
        <div class="flex items-center justify-between p-5">
            <div>
                <p class=" text-xl font-bold text-white uppercase"> BIENVENIDO <?= $primerNombre ?>!</p>
            </div>
            <a href="logOut.php">
                <div class="flex items-center justify-between gap-2">
                    <div>
                        <img src="/src/imgs/bx-log-out.svg" alt="">
                    </div>
                    <div>
                        <p class="text-[#FEB1B1]">Salir</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex flex-col gap-10 mt-10">
            <a href="./profile.php">
                <div class="w-[290px] h-[100px] bg-[#D9D9D9] ml-[12%] rounded-b-[50px] rounded-r-[50px] flex items-center gap-5">
                    <div class="pl-12 w-[120px] text-[#577CBE] text-[18px] font-semibold">
                        <p>Modifica tu perfil</p>
                    </div>
                    <div class="pl-12">
                        <img class="" src="/src/imgs/perfil-home.svg" alt="">
                    </div>
                </div>
            </a>
            <a href="./metas.php">
                <div class="w-[290px] h-[100px] bg-[#577CBE] ml-[12%] rounded-b-[50px] rounded-r-[50px] flex items-center gap-5">
                    <div class="pl-12 w-[150px] text-white text-[18px] font-semibold">
                        <p>Planifica tus metas</p>
                    </div>
                    <div>
                        <img class="" src="/src/imgs/metas-home.svg" alt="">
                    </div>
                </div>
            </a>
            <a href="./progreso.php">
                <div class="w-[290px] h-[100px] bg-[#D9D9D9] ml-[12%] rounded-b-[50px] rounded-r-[50px] flex items-center gap-7">
                    <div class="pl-12 w-[150px] text-[#577CBE] text-[18px] font-semibold">
                        <p>Verifica tu progreso</p>
                    </div>
                    <div>
                        <img class="" src="/src/imgs/progreso-home.svg" alt="">
                    </div>
                </div>
            </a>
        </div>
        <div class="px-8 flex text-white justify-around items-center h-[10%] w-full mt-24">
            <a href="/src/metas.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M19 4h-3V2h-2v2h-4V2H8v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zM5 20V7h14V6l.002 14H5z" />
                    <path fill="currentColor" d="M7 9h10v2H7zm0 4h5v2H7z" />
                </svg>
            </a>
            <a href="/src/brujula.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 16 16">
                    <path fill="currentColor" d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5l5 5Z" />
                </svg>
            </a>
            <a href="/src/profile.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 15 15">
                    <path fill="currentColor" fill-rule="evenodd" d="M7.5.875a3.625 3.625 0 0 0-1.006 7.109c-1.194.145-2.218.567-2.99 1.328c-.982.967-1.479 2.408-1.479 4.288a.475.475 0 1 0 .95 0c0-1.72.453-2.88 1.196-3.612c.744-.733 1.856-1.113 3.329-1.113s2.585.38 3.33 1.113c.742.733 1.195 1.892 1.195 3.612a.475.475 0 1 0 .95 0c0-1.88-.497-3.32-1.48-4.288c-.77-.76-1.795-1.183-2.989-1.328A3.627 3.627 0 0 0 7.5.875ZM4.825 4.5a2.675 2.675 0 1 1 5.35 0a2.675 2.675 0 0 1-5.35 0Z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </main>
</body>