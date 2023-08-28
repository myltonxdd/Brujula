<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="/dist/output.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <main class="w-full h-screen bg-gradient-to-br from-[#3068D8] to-[#000714] flex flex-col justify-center items-center gap-[12px]">
        <div class="w-11/12 h-1/2 bg-[url('/imgs/brujula.png')] bg-contain bg-center flex flex-col justify-center items-center gap-[10px]">
            <div class="w-9/12 border-b-2 border-[#FFFFFF] p-[8px]">
                <img src="./imgs/logo-funval.png" />
            </div>
            <p class="font-[inter] text-[#FFFFFF] text-[24px] font-light">
                La Brújula
            </p>
            <p class="font-[inter] text-[#FFFFFF] text-[30px] font-semibold mt-[40px]">
                Iniciar Sesion
            </p>
        </div>
        <form class="w-11/12 flex flex-col justify-center items-center gap-[15px]">

            <div class="w-4/5 h-12 rounded-2xl border border-[#D9D9D9] flex justify-between items-center focus-within:border-2 focus-within:border-[#FFFFFF] p-[5px]">
                <input class="h-full w-4/5 outline-none bg-transparent p-[5px] text-[#FFFFFF]" type="text" placeholder="Ingresa tu matricula">
                <span class="material-symbols-outlined text-[#c9c3c3]">
                    person
                </span>
            </div>
            <div class="w-4/5 h-12 rounded-2xl border border-[#D9D9D9] flex justify-between items-center focus-within:border-2 focus-within:border-[#FFFFFF] p-[5px]">
                <input class="h-full w-4/5 outline-none bg-transparent p-[5px] text-[#FFFFFF]" type="password" placeholder="Ingresa tu contraseña">
                <span class="material-symbols-outlined text-[#c9c3c3]">
                    lock
                </span>
            </div>
            <input type="submit" value="Ingresar" class="w-4/5 h-12 rounded-2xl border border-[#D9D9D9] shadow-custom bg-transparent text-[#FFFFFF] font-[inter] font-semibold text-[18px]" >
        </form>
    </main>
</body>

</html>