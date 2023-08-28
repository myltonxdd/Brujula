<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <main class="w-full min-h-screen bg-gradient-to-br from-[#3068D8] to-[#000714] flex flex-col items-center justify-between">

        <form class="w-full min-h-screen bg-gradient-to-br from-[#3068D8] to-[#000714] flex flex-col items-center justify-between">

            <div class="w-full h-24 bg-gradient-to-b from-green-500 to-transparent flex justify-center items-center border-none">
                <h1 class="font-[inter] font-extrabold text-[#FFFFFF] text-[26px]">
                    MI PERFIL
                </h1>
            </div>

            <div class="flex flex-col justify-evenly items-start w-3/4">

                <label class="font-[inter] font-light italic text-[24px] text-[#FFFFFF]" for="matricula">
                    • Matrícula
                </label>
                <input value="ep00069" disabled class="w-full rounded-3xl h-14 bg-[#D9D9D9] font-[inter] font-light italic text-[24px] p-[10px]" id="matricula" name="matricula" />

                <label class="font-[inter] font-light italic text-[24px] text-[#FFFFFF]" for="nombre">
                    • Nombre y Apellido
                </label>
                <input placeholder="Ingresa tu nombre..." type="text" class="w-full rounded-3xl h-14 bg-[#D9D9D9] font-[inter] font-light italic text-[24px] p-[10px]" id="nombre" name="nombre" />

                <label class="font-[inter] font-light italic text-[24px] text-[#FFFFFF]" for="email">
                    • Correo electrónico
                </label>
                <input placeholder="Ingresa tu correo..." type="email" class="w-full rounded-3xl h-14 bg-[#D9D9D9] font-[inter] font-light italic text-[24px] p-[10px]" id="email" name="email" />

                <label class="font-[inter] font-light italic text-[24px] text-[#FFFFFF]" for="carrera">
                    • Carrera
                </label>
                <select class="w-full rounded-3xl h-14 bg-[#D9D9D9] font-[inter] font-light italic text-[24px] p-[10px]" id="carrera" name="carrera">
                    <option value="opcion1">
                        Carrera 1
                    </option>
                </select>

                <label class="font-[inter] font-light italic text-[24px] text-[#FFFFFF]" for="pais">
                    • País
                </label>
                <select class="w-full rounded-3xl h-14 bg-[#D9D9D9] font-[inter] font-light italic text-[24px] p-[10px]" id="pais" name="pais">
                    <option value="opcion1">
                        País 1
                    </option>
                </select>
            </div>

            <div class="w-full h-[72px] bg-[#1F4590] rounded-tl-3xl rounded-tr-3xl flex flex-row items-center justify-around">
                <a href="#" class="w-[140px] h-[50px] bg-[#F96F6F] rounded-2xl text-[#FFFFFF] flex justify-center items-center font-[inter] text-[16px] font-normal" type="button">
                    Cancelar
                </a>

                <button href="#" class="w-[140px] h-[50px] bg-[#0C8CE9] rounded-2xl flex flex-col justify-center items-center font-[inter] " type="submit">
                    <p class="text-[16px] font-normal text-[#FFFFFF] ">Guardar</p>
                    <p class="text-[16px] font-normal text-[#FFFFFF] ">Cambios</p>
                </button>

            </div>
        </form>

    </main>
</body>

</html>