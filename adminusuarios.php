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

    <section class="w-full h-full flex items-center justify-center overflow-hidden">
        <div class="bg-gray-800 outline outline-2 outline-white w-full h-full flex flex-col p-6 gap-6 text-white overflow-y-auto">
      
          <!-- Título -->
          <h1 class="text-3xl font-bold">Gerenciar Usuários</h1>
      
          <!-- Botão para adicionar novo -->
          <div class="flex justify-end mb-4">
            <button class="bg-green-600 hover:bg-green-700 px-6 py-2 rounded font-semibold">
              + Novo Usuário
            </button>
          </div>

          <!-- Campo de busca -->
          <div class="mb-4 flex justify-between items-center">
            <label for="userSearch" class="text-lg font-medium">Buscar Usuário:</label>
            <input
              type="text"
              id="userSearch"
              placeholder="Digite o nome ou ID"
              class="bg-gray-900 text-white border border-gray-600 rounded px-4 py-2 w-[300px] focus:outline-none focus:ring focus:ring-blue-500"
            >
          </div>
      
          <!-- Cards de usuários -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Card Exemplo -->
            <div
            class="bg-gray-700 rounded-lg p-4 flex items-center gap-4 shadow transition user-card"
            data-id="1"
            data-name="NightlyOneV"
            >
              <img src="https://via.placeholder.com/64" alt="Avatar" class="w-16 h-16 rounded-full object-cover border-2 border-white">
              <div class="flex-1">
                <h2 class="text-lg font-semibold">NightlyOneV</h2>
                <p class="text-sm text-gray-300">Admin — exemplo@email.com</p>
                <p class="text-sm text-gray-400">Nasc.: 08/02/2008</p>
              </div>
              <div class="flex flex-col gap-2">
                <button class="bg-blue-500 hover:bg-blue-600 px-3 py-1 rounded">Editar</button>
                <button class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded">Remover</button>
                <button class="bg-green-500 hover:bg-green-600 px-3 py-1 rounded">Copiar ID</button>
              </div>
            </div>
          </div>
      
          <!-- Formulário de adicionar/editar usuário -->
          <form class="mt-6 bg-gray-700 rounded-lg p-6 grid grid-cols-1 md:grid-cols-2 gap-4 items-start">
            
            <!-- Imagem + Upload -->
            <div class="flex flex-col gap-2 items-center md:items-start">
              <label class="text-sm mb-1">Avatar do Usuário</label>
              <img id="avatarPreview" src="https://via.placeholder.com/128" alt="Preview" class="w-[50%] h-[50%] object-cover rounded-full border-2 border-white">
              <input id="avatarInput" type="file" name="avatar" accept="image/*" class="mt-2 file:bg-gray-900 file:text-white file:border-none file:px-4 file:py-2 file:rounded-md file:cursor-pointer text-sm">
            </div>
      
            <!-- Campos de texto -->
            <div class="flex flex-col gap-4">
              <div>
                <label class="block text-sm mb-1">Nome de Usuário</label>
                <input type="text" name="username" class="w-full bg-gray-800 border border-gray-600 rounded p-2" required>
              </div>
      
              <div>
                <label class="block text-sm mb-1">Email</label>
                <input type="email" name="email" class="w-full bg-gray-800 border border-gray-600 rounded p-2" required>
              </div>
      
              <div>
                <label class="block text-sm mb-1">Senha</label>
                <input type="password" name="password" class="w-full bg-gray-800 border border-gray-600 rounded p-2" required>
              </div>
      
              <div>
                <label class="block text-sm mb-1">Data de Nascimento</label>
                <input type="date" name="birth_date" class="w-full bg-gray-800 border border-gray-600 rounded p-2">
              </div>
      
              <div>
                <label class="block text-sm mb-1">Cargo</label>
                <select name="role" class="w-full bg-gray-800 border border-gray-600 rounded p-2">
                  <option value="membro">Membro</option>
                  <option value="vip">VIP</option>
                  <option value="admin">Admin</option>
                </select>
              </div>
      
              <div>
                <label class="block text-sm mb-1">Descrição</label>
                <textarea name="description" rows="2" class="w-full bg-gray-800 border border-gray-600 rounded p-2" placeholder="Olá Sharpgear!"></textarea>
              </div>
            </div>
      
            <div class="md:col-span-2 flex justify-end mt-4">
              <button type="submit" class="bg-green-600 hover:bg-green-700 px-6 py-2 rounded font-semibold">Salvar</button>
            </div>
      
          </form>
        </div>
      </section>
      
      <script>
        const avatarInput = document.getElementById("avatarInput");
        const avatarPreview = document.getElementById("avatarPreview");
      
        avatarInput.addEventListener("change", function () {
          const file = this.files[0];
          if (file) {
            const reader = new FileReader();
            reader.addEventListener("load", function () {
              avatarPreview.setAttribute("src", this.result);
            });
            reader.readAsDataURL(file);
          }
        });
      
        // Filtro por nome ou ID
        const userSearch = document.getElementById("userSearch");
        const userCards = document.querySelectorAll(".user-card");
      
        userSearch.addEventListener("input", function () {
          const search = this.value.trim().toLowerCase();
          userCards.forEach(card => {
            const name = card.dataset.name.toLowerCase();
            const id = card.dataset.id.toLowerCase();
            if (name.includes(search) || id.includes(search)) {
              card.style.display = "flex";
            } else {
              card.style.display = "none";
            }
          });
        });
      </script>
      

</body>
</html>