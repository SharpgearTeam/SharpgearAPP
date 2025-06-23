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
      <a class="link link-hover btn btn-ghost text-xl">
        Comunidade
      </a>
      <a class="link link-hover btn btn-ghost text-xl">
        Membros
      </a>
      <a class="link link-hover btn btn-ghost text-xl">
        Biblioteca
      </a>
    </span>

    <span>
      <?php if ($user): ?>
          <a href="#" class="link link-hover btn btn-ghost text-xl">
            <?= htmlspecialchars($user["username"])?>
          </a>
        <?php else: ?>
          <a href="cadastro.php" class="link link-hover btn btn-ghost text-xl">
            Registrar
          </a>
      <?php endif; ?>
    </span>
  </div>  

  <section class="flex text-white flex-row h-[90vh] bg-gray-900 overflow-x-hidden w-screen">
            
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