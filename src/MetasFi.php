<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Físico</title>
    <link href="../dist/output.css" rel="stylesheet">
    <!-- CSS nesesario para que los input type radio funcionen -->
    <link href="../dist/radio.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="./year.js" defer></script>
</head>

<body>
    <form method="post" style="font-family: 'Inter', sans-serif;" class=" bg-gradient-to-b from-[#3068D8] to-[#000714] w-screen h-[180vh] ">
        <div class=" bg-gradient-to-b from-[#FF0000] via-[#ff0000] to-transparent flex flex-col justify-center items-center text-white h-[12%] w-full pb-8">
            <p class=" text-lg font-semibold">METAS</p>
            <p class=" text-lg font-semibold">FÍSICAS</p>
        </div>
        <div class="  flex flex-col text-white justify-start items-center h-[80%] w-full">
            <div class=" border rounded-full flex justify-between w-[80%]">
                <button onclick="leftY(event)" class="pl-4 pr-14 py-1 rounded-l-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </button>

                <input id="number" class="flex w-14 bg-transparent text-center" type="number" value="2023" disabled>


                <button onclick="rightY(event)" class="pr-4 pl-14 py-1 rounded-r-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
            <div class="mt-3 border rounded-2xl flex justify-around items-center w-[80%] h-16">
                <!-- input radio 01 'físico' -->
                <input type="radio" id="fisico" name="metasFi" value="fisico" checked />
                <!-- Tamaño del weight es 50% ya que son 2 botones -->
                <label class="flex flex-col rounded-l-2xl justify-center items-center w-[50%] " for="fisico">
                    FÍSICO</label>
                <!-- input radio 02 'hobbies' -->
                <input type="radio" id="hobbies" name="metasFi" value="hobbies" />
                <!-- Tamaño del weight es 50% ya que son 2 botones -->
                <label class="flex flex-col rounded-r-2xl justify-center items-center w-[50%]" for="hobbies">
                    <p>HOBBIES</p>
                </label>
            </div>
            <!-- Los id y los name llevan el nombre de MFiQ1 = (Metas Fisicas Question 1)
             intenta seguir ese mismo patron para las vistas por favor :3 -->
            <div class=" flex flex-col w-[80%]">
                <li class="mt-3 px-3 text-xl">
                    ¿Qué haré?
                </li>
                <input class="mt-3 rounded-full py-4 px-6 text-black" id="MFiQ1" name="MFiQ1" type="text" placeholder="Ingrese aquí">
            </div>
            <div class=" flex flex-col w-[80%]">
                <li class="mt-3 px-3 text-xl">
                    ¿Por qué lo hago?
                </li>
                <input class="mt-3 rounded-full py-4 px-6 text-black" id="MFiQ2" name="MFiQ2" type="text" placeholder="Ingrese aquí">
            </div>
            <div class=" flex flex-col w-[80%]">
                <li class="mt-3 px-3 text-xl">
                    ¿Cómo lo haré?
                </li>
                <input class="mt-3 rounded-full py-4 px-6 text-black" id="MFiQ3" name="MFiQ3" type="text" placeholder="Ingrese aquí">
            </div>
            <div class=" flex flex-col w-[80%]">
                <li class="mt-3 px-3 text-xl">
                    ¿Cuándo lo haré?
                </li>
                <input class="mt-3 rounded-full py-4 px-6 text-black" id="MFiQ4" name="MFiQ4" type="text" placeholder="Ingrese aquí">
            </div>
            <div class=" flex flex-col w-[80%]">
                <li class="mt-3 px-3 text-xl">
                    ¿Dónde lo haré?
                </li>
                <input class="mt-3 rounded-full py-4 px-6 text-black" id="MFiQ5" name="MFiQ5" type="text" placeholder="Ingrese aquí">
            </div>
            <div class=" flex flex-col w-[80%]">
                <li class="mt-3 px-3 text-xl">
                    ¿Con quien lo haré?
                </li>
                <input class="mt-3 rounded-full py-4 px-6 text-black" id="MFiQ6" name="MFiQ6" type="text" placeholder="Ingrese aquí">
            </div>
            <div class=" flex flex-col w-[80%]">
                <li class="mt-3 px-3 text-xl">
                    ¿Cuánto me costará?
                </li>
                <input class="mt-3 rounded-full py-4 px-6 text-black" id="MFiQ7" name="MFiQ7" type="text" placeholder="Ingrese aquí">
            </div>
        </div>
        <div class=" rounded-t-3xl px-8 flex bg-[#1f4590] text-white gap-10 justify-around items-center h-[8%] w-full">
            <a id="cancelar" href="./index.php" class=" hover:bg-[#f96f6f51] hover:text-[#f96f6f] hover:border-2 hover:border-[#f96f6f] bg-[#f96f6f] h-[60%] w-32 rounded-2xl flex justify-center items-center font-semibold">Cancelar</a>
            <button id="guardar" type="submit" class="hover:bg-[#0c8de974] hover:text-[#66baff] hover:border-2 hover:border-[#0c8ce9] bg-[#0c8ce9] h-[60%] w-32 rounded-2xl font-semibold">
                <p>Guardar</p>
                <p>Cambios</p>
            </button>
        </div>
    </form>
</body>

</html>