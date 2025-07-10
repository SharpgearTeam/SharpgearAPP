<?php
require_once "src/php/auths/quickAuth.php";
require_once "src/php/auths/getUserInfo.php";
$user = getUser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SharpgearAPP - Tailwind + DaisyUI + Vite</title>
  <link rel="stylesheet" href="./public/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body class="bg-black font-poppins overflow-x-hidden flex flex-col items-start min-h-screen">
  <div class="navbar bg-black h-24 text-white flex justify-between items-center px-6">
    <a class="btn btn-ghost">
      <img class="h-14 -mt-1" src="public/sharpgear-files/Sharpgear Branding/Gearpunk.png">
    </a>

    <span class="flex-1 ">
      <a href="./index.php" class="link link-hover btn btn-ghost text-xl">
        Sobre
      </a>
      <a href="./loja.php" class="link link-hover btn btn-ghost text-xl ">
        Loja
      </a>
      <a href="./projetos.php" class="link link-hover btn btn-ghost text-xl ">
        Projetos
      </a>
    </span>

    <span>
       <?php if ($user): ?>
        <?php if ($user['is_admin'] == 1): ?>
          <a href="admindashboard.php" class="link 
          link-hover btn btn-ghost px-4 text-xl">
            Dashboard
          </a> <span class="px-4"></span>
        <?php endif; ?>
            <a href="profilepage.php?id=<?= urlencode($user["id"]) ?>" class="link link-hover btn btn-ghost text-xl">
            <?= htmlspecialchars($user["username"])?>
            </a>
            <span class="px-4"> </span>
            <a href="src/php/auths/logout.php" class="link link-hover btn btn-ghost text-xl">
              Logout
            </a>
       <?php else: ?>
        <a href="cadastro.php" class="link link-hover btn btn-ghost text-xl">
        Registrar
        </a>
      <?php endif; ?>
    </span>
  </div>  

  <section class="text-white items-center w-screen bg-gray-800 flex h-[70vh] justify-center">
    <form
      action="src/php/update_profile.php"
      method="POST"
      enctype="multipart/form-data"
      class="bg-gray-950 flex flex-col h-[80%] w-[20%] rounded-lg shadow-lg shadow-neutral-950"
    >

      <label class="pt-5 self-center place-self-center cursor-pointer">
        <img 
          class="lg:h-[200px] lg:w-[200px] md:w-[100px] md:h-[100px]" 
          src="<?php echo $user['avatar_url']; ?>"
          alt="Escolher imagem"
        >
        <input 
          type="file" 
          class="hidden" 
          name="imagem" 
          accept="image/*"
        >
      </label>

      <script>
        const input = document.querySelector('input[type="file"]');
        const img = document.querySelector('label img');
      
        input.addEventListener('change', (event) => {
          const file = event.target.files[0];
          if (file) {
            img.src = URL.createObjectURL(file);
          }
        });
      </script>
      

        <article class="justify-center items-center py-5 text-2xl text-wrap flex flex-col">
            <textarea name="username" class="bg-gray-900 outline-2 outline-white outline text-center text-white placeholder-gray-500 rounded-md h-[50%] w-[73%] resize-none overflow-hidden"  maxlength="16"><?php echo $user['username'];?></textarea>
          </article>

        <section class="justify-center items-center flex flex-col row-start-4 row-span-2 bg-gray-900 rounded-b-md  w-full h-full">
          <div class=" w-[92%] h-[82%] text-wrap text-center lg:text-xl md:text-xs flex flex-col items-center justify-center">
            <textarea name="description" class="bg-gray-900 outline-2 outline-white outline text-center text-white placeholder-gray-500 rounded-md w-[90%] h-[90%]" maxlength="207" placeholder="Escreva qualquer coisa aqui! Sua própria descrição!"
            ><?php echo $user['description'];?></textarea>
          </div>
        </section>
      
        <button type="submit" id="submit" class="bg-green-600 py-2 shadow-lg rounded-b-xl shadow-green-900">Salvar Alterações</button>
      </form>


  </section>

  <footer class="footer footer-horizontal footer-center text-base-content rounded bg-black">
    <div>
      <img class="h-[20vh]" src="public/sharpgear-files\Sharpgear Branding\Sharpgear Horizontal Logo.png">
    </div>

    <nav class="grid text-xl font-semibold grid-flow-col gap-4 text-white">
      <a class="link link-hover">Sobre</a>
      <p>|</p>
      <a href="./loja.html" class="link link-hover">Loja</a>
      <p>|</p>
      <a href="./projetos.html" class="link link-hover">Projetos</a>
      <p>|</p>
      <a class="link link-hover">Comunidade</a>
    </nav>
    <nav>
      <div class="grid grid-flow-col gap-4">
      </div>
    </nav>
    <aside>
      <p class="text-gray-600">
        2025 Sharpgear Studios • Todos os Direitos Reservados | Design por Adrian Barbosa</p>
    </aside>
  </footer>

</body>
</html>