<?php
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
        <a href="profilepage.php?id=<?= urlencode($user["id"]) ?>" class="link link-hover btn btn-ghost text-xl">
          <?= htmlspecialchars($user["username"])?>
        </a>
        <?php else: ?>
          <a href="cadastro.php" class="link link-hover btn btn-ghost text-xl">
            Registrar
          </a>
      <?php endif; ?>
    </span>

  </div>

  <div class="relative h-[50vh] w-screen bg-white overflow-hidden">
    <img src="./public/sharpgear-files/New Assets/Pg Projetos/SNLVbackground.png"
         class="grayscale absolute -top-[35%] left-0 w-full object-fill z-10">
  
    <div class="absolute inset-0 m-0 flex flex-1 justify-center flex-col items-center z-30">
      <h1 class="text-white text-3xl font-light text-center">
        Explore nossos jogos originais e milhares de outros títulos incríveis no
      </h1>
      <img class="h-[6.5vh] mt-2"
      src="./public/sharpgear-files/Sharpgear Branding/Sharpgear Launcher.png">
      <button class="rounded-lg bg-white text-black text-xl mt-6 h-[6vh] w-[25%] font-extrabold">INSTALE O SHARPGEARLAUNCHER</button>
    </div>
  
    <img class="absolute w-full h-full object-fill z-20" src="public/images/fadeOutBottom.png">
    <img class="absolute w-full h-full object-fill z-20 rotate-180" src="public/images/fadeOutBottom.png">
  </div>
  

  <section class="bg-black overflow-hidden grid grid-rows-12 grid-cols-1 h-[140vh] w-screen">
    <h1 class="text-white font-bold text-4xl row-start-1 col-start-1 self-center place-self-center">
        Explore alguns de nossos títulos
    </h1>
    <div class="bg-gray-950 bg-opacity-0 flex flex-row gap-4 row-start-2 row-span-4 col-start-1 self-center place-self-center h-[95%] w-[70%]">
        <div class="bg-white rounded-lg self-center h-[100%] w-[55%] z-10">
            <img src="./public/sharpgear-files/New Assets/Pg Projetos/SNLVbackground.png"
            class="rounded-lg shadow-md shadow-gray-800 object-cover h-[100%] w-[100%]">
        </div>

        <div class="bg-gray-900 rounded-lg self-center flex flex-col gap-2 h-[100%] w-[45%] z-10">
            <h1 class="text-white text-3xl self-start font-bold mt-[3%] ml-[2.5%]">
                Surv N Live
            </h1>

            <div class="h-[45%] w-[95%] self-center flex overflow-hidden gap-3 flex-row bg-white bg-opacity-0">
                <img src="./public/images/Captura de tela 2024-12-07 120113.png" 
                class="h-[90%] self-center place-self-start w-[50%]">

                <img src="./public/images/Captura de tela 2024-12-07 120149.png" 
                class="h-[90%] self-center place-self-end w-[50%]">
            </div>

            <h1 class="text-white text-lg text-wrap self-start font-light ml-[1.5%]">
              Surv N' Live é um jogo indie top down no qual você assume o papel de três jovens de um grupo de hackers que foram “convidados” de maneira curta e gentil a participar de uma série de desafios que valem sua liberdade... ou até mesmo sua vida.
            </h1>

            <div class="w-[100%] h-[12%] gap-12 flex flex-row">
              <h1 class="text-green-300 text-3xl self-start font-light ml-[2.5%]">
                R$20,99 <span class="text-white opacity-50 text-2xl"><sup><s>R$30,00</s></sup></span>
              </h1>
            </div>


        </div>
    </div>

    <div class="bg-gray-950 bg-opacity-0 flex flex-row gap-4 row-start-8 row-span-4 col-start-1 self-center place-self-center h-[95%] w-[70%]">
        <div class="bg-white rounded-lg self-center h-[100%] w-[55%] z-10">
            <img src="./public/sharpgear-files/Hell-O World/HELL-O WORLD GAME COVER.png"
            class="rounded-lg shadow-md shadow-gray-800 object-cover h-[100%] w-[100%]">
        </div>

        <div class="bg-gray-900 rounded-lg self-center flex flex-col gap-2 h-[100%] w-[45%] z-10">
            <h1 class="text-white text-3xl self-start font-bold mt-[3%] ml-[2.5%]">
                HELL-O WORLD
            </h1>

            <div class="h-[45%] w-[95%] self-center flex overflow-hidden gap-3 flex-row bg-white bg-opacity-0">
                <img src="./public/sharpgear-files/Assets/HWScreenshot01.webp" 
                class="h-[90%] self-center place-self-start w-[50%]">

                <img src="./public/sharpgear-files/Assets/HWScreenshot02.webp" 
                class="h-[90%] self-center place-self-end w-[50%]">
            </div>

            <h1 class="text-white text-lg text-wrap self-start font-light ml-[1.5%]">
            HELL-O WORLD é um jogo PvP para 2 a 4 jogadores, desenvolvido em menos de um mês por AdriN, utilizando o sistema Rollback do GameMaker Studio 2.
            Convide seus amigos (se você tiver algum) e desafie-os neste jogo rápido e sem compromisso.
            </h1>

            <div class="w-[100%] h-[12%] gap-12 flex flex-row">
              <h1 class="text-green-300 text-3xl self-start font-light ml-[2.5%]">
                R$20,99 <span class="text-white opacity-50 text-2xl"><sup><s>R$30,00</s></sup></span>
              </h1>
            </div>


        </div>
    </div>

  </section>

  <footer class="footer footer-horizontal footer-center text-base-content rounded bg-black">
    <div>
      <img class="h-[20vh]" src="public/sharpgear-files\Sharpgear Branding\Sharpgear Horizontal Logo.png">
    </div>

    <nav class="grid text-xl font-semibold grid-flow-col gap-4  text-white">
      <a href="./index.html" class="link link-hover">Sobre</a>
      <p>|</p>
      <a class="link link-hover">Loja</a>
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
