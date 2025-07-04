<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="/src/main.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Dashboard</title>
</head>
<body class="flex flex-row bg-gray-950 overflow-hidden w-screen h-screen gap-0">
    <aside class="h-screen w-[15%] bg-gray-200 overflow-hidden justify-items-center">
        <h1 class="text-center font-poppins font-bold py-[5%] text-2xl">
            PAINEL SHARPGEAR
            <hr>
        </h1>

        <section class="h-[85%] w-[90%] flex flex-col bg-gray-100 items-center shadow-lg rounded-lg outline outline-1">
            <a href="./admindashboard.html" class="h-[8%] w-[90%] py-[5%]">
                <h1 class="text-center hover:bg-blue-900 bg-gray-800 shadow-md text-gray-100 shadow-gray-500 rounded-xl py-[5%] font-poppins font-bold">
                    Dashboard
                </h1>
            </a>

            <a href="./adminusuarios.html" class="h-[8%] w-[90%] py-[5%]">
                <h1 class="text-center hover:bg-blue-900 bg-gray-800 shadow-md text-gray-100 shadow-gray-500 rounded-xl py-[5%] font-poppins font-bold">
                    Usuários
                </h1>
            </a>

            <a href="./adminusuarios.html" class="h-[8%] w-[90%] py-[5%]">
                <h1 class="text-center hover:bg-red-900 bg-red-800 shadow-md text-gray-100 shadow-gray-500 rounded-xl py-[5%] font-poppins font-bold">
                    SAIR
                </h1>
            </a>
        </section>

        <div class="py-[2%]"></div>

        <section class="bg-gray-100 text-center rounded-lg flex flex-row justify-center items-center outline outline-1 h-[6%] w-[90%]">
            <img src="./src/images/PLACEHOLDER.webp" class="rounded-full outline outline-1 overflow-hidden w-[42px] h-[42px]">
            <h1 class="px-[3%]">
                |
            </h1>
            <h1>
                JohnDoe
            </h1>
        </section>

    </aside>

    <section class="w-[100%] h-[100%] items-center overflow-hidden justify-center flex flex-col">
        <section class="w-full h-full flex items-center justify-center overflow-hidden">
            <div class="bg-gray-800 outline outline-2 outline-white rounded-xl w-[95%] h-[90%] flex flex-col p-6 gap-6 text-white">
              
              <!-- Título do Dashboard -->
              <h1 class="text-3xl font-bold">Dashboard Administrativo</h1>
          
              <!-- Estatísticas principais -->
              <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6 h-[30%] w-full">
                <!-- Card: Usuários -->
                <div class="bg-gray-700 rounded-lg p-4 shadow-md hover:scale-[1.02] hover:shadow-green-900 transition">
                  <h2 class="text-xl font-semibold">Usuários</h2>
                  <p class="text-4xl font-bold text-green-400 mt-2">0</p>
                </div>

                <!-- Card: Vendas -->
                <div class="bg-gray-700 rounded-lg p-4 shadow-md hover:scale-[1.02] hover:shadow-blue-900 transition">
                  <h2 class="text-xl font-semibold">Jogos</h2>
                  <p class="text-4xl font-bold text-blue-400 mt-2">0</p>
                </div>

              </section>
          
              <!-- Placeholder para mais conteúdo abaixo -->
              <div class="flex-1 bg-gray-700 rounded-lg p-4 text-gray-300">
                <p class="text-center">PLACEHOLDER</p>
              </div>
          
            </div>
          </section>
          
    </section>

</body>
</html>