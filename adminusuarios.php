<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./tailwindcss/output.css">
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
          <a href="./admindashboard.php" class="h-[8%] w-[90%] py-[5%]">
            <h1 class="text-center hover:bg-blue-900 bg-gray-800 shadow-md text-gray-100 shadow-gray-500 rounded-xl py-[5%] font-poppins font-bold">
                Dashboard
            </h1>
        </a>

        <a href="./adminusuarios.php" class="h-[8%] w-[90%] py-[5%]">
            <h1 class="text-center hover:bg-blue-900 bg-gray-800 shadow-md text-gray-100 shadow-gray-500 rounded-xl py-[5%] font-poppins font-bold">
                Usuários
            </h1>
        </a>

        <a href="./index.php" class="h-[8%] w-[90%] py-[5%]">
            <h1 class="text-center hover:bg-red-900 bg-red-800 shadow-md text-gray-100 shadow-gray-500 rounded-xl py-[5%] font-poppins font-bold">
                SAIR
            </h1>
        </a>
      </section>

        <div class="py-[2%]"></div>

        <section class="bg-gray-100 text-center rounded-lg flex flex-row justify-center items-center outline outline-1 h-[6%] w-[90%]">
            <img src="./public/images/PLACEHOLDER.webp" class="rounded-full outline outline-1 overflow-hidden w-[42px] h-[42px]">
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
          <div id="userCardsContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Card Exemplo -->
            <div id="userCardTemplate" class="hidden">
              <div
                class="bg-gray-700 rounded-lg p-4 flex items-center gap-4 shadow transition user-card"
              >
                <img src="" alt="Avatar" class="w-16 h-16 rounded-full object-cover border-2 border-white avatar">
                <div class="flex-1">
                  <h2 class="text-lg font-semibold username">Nome</h2>
                  <p class="text-sm text-gray-300 role-email">Cargo — email</p>
                  <p class="text-sm text-gray-400 birth">Nasc.: ??/??/????</p>
                </div>
                <div class="flex flex-col gap-2">
                  <button class="bg-blue-500 hover:bg-blue-600 px-3 py-1 rounded editar">Editar</button>
                  <button class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded remover">Remover</button>
                  <button class="bg-green-500 hover:bg-green-600 px-3 py-1 rounded copy-id">Copiar ID</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Formulário de adicionar/editar usuário -->
          <form class="mt-6 bg-gray-700 rounded-lg p-6 grid grid-cols-1 md:grid-cols-2 gap-4 items-start">
            
            <!-- Imagem + Upload -->
            <div class="flex flex-col gap-2 items-center md:items-start">
              <label class="text-sm mb-1">Avatar do Usuário</label>
              <img id="avatarPreview" src="./public/images/PLACEHOLDER.webp" alt="Preview" class="w-[50%] h-[50%] object-cover rounded-full border-2 border-white">
              <input id="avatarInput" type="file" name="avatar" accept="image/*" class="mt-2 file:bg-gray-900 file:text-white file:border-none file:px-4 file:py-2 file:rounded-md file:cursor-pointer text-sm">
            </div>
      
            <!-- Campos de texto -->
            <div class="flex flex-col gap-4">
              <div>
                <label class="block text-sm mb-1">Nome de Usuário</label>
                <input type="text" id="inp_username" name="username" class="w-full bg-gray-800 border border-gray-600 rounded p-2" required>
              </div>
      
              <div>
                <label class="block text-sm mb-1">Email</label>
                <input type="email" id="inp_email" name="email" class="w-full bg-gray-800 border border-gray-600 rounded p-2" required>
              </div>
      
              <div>
                <label class="block text-sm mb-1">Senha</label>
                <input type="password" id="inp_senha" disabled name="password" class="w-full disabled:bg-gray-600 disabled:border-gray-300 bg-gray-800 border border-gray-600 rounded p-2" required>
              </div>
      
              <div>
                <label class="block text-sm mb-1">Data de Nascimento</label>
                <input type="date" id="inp_nasc" name="birth_date" class="w-full bg-gray-800 border border-gray-600 rounded p-2">
              </div>
      
              <div>
                <label class="block text-sm mb-1">Cargo</label>
                <select name="role" id="inp_cargo" class="w-full bg-gray-800 border border-gray-600 rounded p-2">
                  <option value="membro">Membro</option>
                  <option value="vip">VIP</option>
                  <option value="admin">Admin</option>
                </select>
              </div>
      
              <div>
                <label class="block text-sm mb-1">Descrição</label>
                <textarea name="description" rows="2" id="inp_desc" class="w-full bg-gray-800 border border-gray-600 rounded p-2" placeholder="Olá Sharpgear!"></textarea>
              </div>
            </div>
      
            <div class="md:col-span-2 flex justify-end mt-4">
              <button type="submit" id="salvar" disabled class="bg-green-600 hover:bg-green-700 disabled:bg-gray-600 disabled:text-gray-900 px-6 py-2 rounded font-semibold">Salvar</button>
            </div>
      
          </form>
        </div>
      </section>
      
      <script>
  let usuarioEditando = null;

  fetch('src/php/getUsersInfo.php')
    .then(res => res.json())
    .then(users => {
      const container = document.getElementById('userCardsContainer');
      const template = document.querySelector('#userCardTemplate > .user-card');

      users.forEach(user => {
        const clone = template.cloneNode(true);

        // Preencher dados
        clone.dataset.id = user.id;
        clone.dataset.name = user.username;
        clone.querySelector('.avatar').src = user.avatar_url || './public/images/PLACEHOLDER.webp';
        clone.querySelector('.username').textContent = user.username;
        clone.querySelector('.role-email').textContent = `${capitalize(user.role)} — ${user.email}`;
        clone.querySelector('.birth').textContent = `Nasc.: ${formatDate(user.birth_date)}`;

        // Certifique-se que os botões existam na cópia e têm essas classes
        const btnRemover = clone.querySelector('.remover');
        const btnEditar = clone.querySelector('.editar');

        if (btnRemover) {
          btnRemover.addEventListener('click', () => {
            if (!confirm(`Deseja remover o usuário ${user.username} (${user.id})? AÇÃO PERMANENTE`)) return;
            if (!confirm(`SEGUNDA CONFIRMAÇÃO, DESEJA REALMENTE REMOVER O USUÁRIO ${user.username} (${user.id})?`)) return;

            fetch("src/php/removeUser.php", {
              method: 'POST',
              headers: { 'Content-Type': 'application/json' },
              body: JSON.stringify({ id: user.id })
            })
              .then(res => res.json())
              .then(response => {
                if (response.success) {
                  clone.remove();
                  alert(`Usuário ${user.username} removido com sucesso!`);
                } else {
                  alert(`Erro: ${response.error}`);
                }
              })
              .catch(err => {
                console.log(err);
                alert("Erro ao tentar remover o usuário");
              });
          });
        }

        if (btnEditar) {
          btnEditar.addEventListener('click', () => {
            // Inputs
            const input_user = document.getElementById("inp_username");
            const input_pass = document.getElementById("inp_senha");
            const input_email = document.getElementById("inp_email");
            const input_birth = document.getElementById("inp_nasc");
            const input_image = document.getElementById("avatarInput");
            const input_cargo = document.getElementById("inp_cargo");
            const input_desc = document.getElementById("inp_desc");
            const preview = document.getElementById("avatarPreview");
            const salvarbtn = document.getElementById("salvar");

            // Preenche os dados
            input_user.value = user.username;
            input_pass.value = ''; // não preencher senha por segurança
            input_email.value = user.email;
            input_birth.value = user.birth_date;
            input_desc.value = user.description;
            input_image.value = '';
            preview.src = user.avatar_url || './public/images/PLACEHOLDER.webp';

            // Converte cargo para o valor do select
            input_cargo.value = (() => {
              if (user.role === 'user') return 'membro';
              if (user.role === 'vip') return 'vip';
              if (user.role === 'admin') return 'admin';
              return user.role;
            })();

            usuarioEditando = user.id;
            salvarbtn.disabled = false;

            // Remove event listeners antigos para evitar múltiplos handlers
            input_image.replaceWith(input_image.cloneNode(true));
            const novoInputImage = document.getElementById("avatarInput");

            novoInputImage.addEventListener('change', (event) => {
              const file = event.target.files[0];
              if (file) {
                preview.src = URL.createObjectURL(file);
              }
            });
          });
        }

        container.appendChild(clone);
      });
    });

      document.getElementById("salvar").addEventListener("click", () => {
        if (!usuarioEditando) {
          alert("Nenhum usuário selecionado.");
          return;
        }

        const input_user = document.getElementById("inp_username");
        const input_pass = document.getElementById("inp_senha");
        const input_email = document.getElementById("inp_email");
        const input_birth = document.getElementById("inp_nasc");
        const input_image = document.getElementById("avatarInput");
        const input_cargo = document.getElementById("inp_cargo");
        const input_desc = document.getElementById("inp_desc");
        const preview = document.getElementById("avatarPreview");

        const cargoValor = input_cargo.value.toLowerCase();
        const cargoBanco = (cargoValor === 'membro') ? 'user' : cargoValor;

        const enviarDados = (avatar_url) => {
          const dados = {
            id: usuarioEditando,
            username: input_user.value,
            email: input_email.value,
            role: cargoBanco,
            birth_date: input_birth.value,
            description: input_desc.value,
            avatar_url: avatar_url
          };

          console.log("Enviando dados:", dados);

          fetch('/SharpgearAPP/src/php/adminchangeprofiles.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(dados)
          })
            .then(async res => {
              const text = await res.text();
              try {
                const json = JSON.parse(text);
                if (!res.ok) throw new Error(json.error || text);
                return json;
              } catch (err) {
                console.error("Erro ao interpretar JSON:", text);
                throw new Error("Resposta malformada: " + err.message);
              }
            })
            .then(resp => {
              if (resp.success) {
                alert("Usuário atualizado com sucesso!");
                location.reload();
              } else {
                alert("Erro ao atualizar: " + resp.error);
              }
            })
            .catch(err => {
              console.error("Erro na requisição:", err);
              alert("Erro na requisição: " + err.message);
            });
        };

        if (input_image.files.length > 0) {
          const formData = new FormData();
          formData.append('imagem', input_image.files[0]);

          fetch('src/php/uploadAvatar.php', {
            method: 'POST',
            body: formData
          })
            .then(async res => {
              const text = await res.text();
              try {
                const json = JSON.parse(text);
                if (!res.ok) throw new Error(json.error || text);
                return json;
              } catch (err) {
                console.error("Erro ao interpretar JSON (upload):", text);
                throw new Error("Resposta malformada no upload: " + err.message);
              }
            })
            .then(data => {
              if (data.success) {
                console.log("Avatar atualizado:", data.avatar_url);
                enviarDados(data.avatar_url);
              } else {
                alert("Erro no upload da imagem: " + data.error);
              }
            })
            .catch(err => {
              console.error("Erro ao enviar imagem:", err);
              alert("Erro ao enviar imagem: " + err.message);
            });
        } else {
          enviarDados(preview.src);
        }});


      function capitalize(str) {
        return str.charAt(0).toUpperCase() + str.slice(1);
      }

      function formatDate(dateStr) {
        const date = new Date(dateStr);
        const day = String(date.getDate()).padStart(2, '0');
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const year = date.getFullYear();
        return `${day}/${month}/${year}`;
      }
    </script>

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
      
        const userSearch = document.getElementById("userSearch");

        userSearch.addEventListener("input", function () {
          const search = this.value.trim().toLowerCase();
          const userCards = document.querySelectorAll(".user-card"); // agora pega os cards ATUALIZADOS
          userCards.forEach(card => {
            const name = card.dataset.name?.toLowerCase() || "";
            const id = card.dataset.id?.toLowerCase() || "";
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