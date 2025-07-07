
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./tailwindcss/output.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Admin Page</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        .font-poppins {
        font-family: 'Poppins', sans-serif;
        }
    </style>

</head>
<body class="bg-gray-900 flex items-center flex-row overflow-hidden font-poppins">
    <aside class="bg-gray-300 flex flex-col w-[20%] h-screen items-center md:w-[20%] sm:w-[40%]">
        <h1 class="text-gray-900  font-bold py-[5%] text-center text-3xl">
            ADMIN PANEL
        </h1>
        <div class="bg-gray-100 outline-2 rounded-xl h-[70%] w-[80%]">

        </div>
        
        <p class="text-gray-500 pt-[5%] text-center">
            Sharpgear 2025<br>
            Páinel de Administrador
        </p>
        
        <a class="py-[2%]">
            <a href="#" class="w-[80%] bg-red-600 text-2xl text-center py-[2%] rounded-full text-white font-bold hover:scale-[1.02] transition hover:bg-red-500 shadow shadow-md shadow-red-800 hover:shadow-lg ">
                SAIR
            </a>  
        </a>

        
    </aside>

    <section class="w-screen items-center flex flex-col overflow-hidden h-screen">
        
        <section class="rounded-lg w-[80%] h-[20%] flex md:flex-col md:flex-wrap items-center justify-center bg-gray-800 mt-[5%]">
            <section class="w-[90%] h-[80%] grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-[5%]">
                <div class="bg-gray-700 rounded-lg p-4 shadow-md shadow-black transition hover:scale-[1.01]">
                    <h2 class="text-xl text-green-100 font-semibold">Usuários</h2>
                    <p class="text-4xl font-bold text-green-400 mt-2">1.245</p>
                    <p class="text-sm text-gray-300 mt-1">+5% desde ontem</p>
                </div>
                <div class="bg-gray-700 rounded-lg p-4 shadow-md shadow-black transition hover:scale-[1.01]">
                    <h2 class="text-xl text-green-100 font-semibold">Usuários</h2>
                    <p class="text-4xl font-bold text-green-400 mt-2">1.245</p>
                    <p class="text-sm text-gray-300 mt-1">+5% desde ontem</p>
                </div>
            </section>
        </section>

    </section>

</body>

</html>