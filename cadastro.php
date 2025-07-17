<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>

<div class="VideoOverlay"></div>

<video autoplay muted loop class='BGVideo'>
	<source src="JogosSharpgear.mp4" type="video/mp4">
</video>
    
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form id="formSignUp">
  <h1>Crie sua conta</h1>

  <!-- Username -->
  <p id='registerUsernamemsg' style="height: 0%; width: 100%; padding: 0; margin: 0; text-align: start; font-size: small;visibility: hidden; padding-top: 2px;"></p>
  <input type="text" 
         id="regUser" 
         pattern="[a-zA-Z]{4,10}" 
         title="De 4 a 10 letras." 
         placeholder="Username" 
         name="Username" 
         required />

  <!-- Data de nascimento -->
  <p id="birthDateMsg" style="height: 0%; width: 100%; padding: 0; margin: 0; text-align: start; font-size: small;visibility: hidden; padding-top: 2px;"></p>
  <input type="date" placeholder="date" id="regBirthdate" name="dt_birth" required/>

  <!-- Email -->
  <p id='registerEmailmsg' style="height: 0%; width: 100%; padding: 0; margin: 0; text-align: start; font-size: small;visibility: hidden; padding-top: 2px;"></p>
  <input type="email" 
         id="regEmail" 
         pattern="[a-zA-Z0-9._%+\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,}"
         title="Digite um email válido." 
         placeholder="Email" 
         name="us_email" 
         required/>

  <!-- Senha -->
  <p id='registerPassmsg' style="height: 0%; width: 100%; padding: 0; margin: 0; text-align: start; font-size: small;visibility: hidden; padding-top: 2px;"></p>
  <input type="password" 
         id="regPass" 
         pattern="(?=.*[a-z])(?=.*[A-Z])[a-zA-Z].{8,}" 
         title="Senha com no mínimo 8 letras, com ao menos uma maiúscula e uma minúscula." 
         placeholder="Password" 
         name="us_password" 
         required/>

  <button type="submit">Registrar</button>
  <script>
      const container = document.getElementById("container");
      $("#formSignUp").submit(function(e) {
				e.preventDefault();

				var $form = $(this);
        var $inputs = $form.find('input, select, button, textarea');
        var serializedData = $form.serialize();

        $inputs.prop("disabled", true);
        
				request = $.ajax({
					url: './src/php/userRegister.php',
					type: 'POST',
					data: serializedData,
          dataType: "json"
				});

        request.done(function (response) {
          if (response.success) {
            $form[0].reset();
            container.classList.remove("right-panel-active");
          } else {
            alert("Erro: " + response.message);
          }
        })

        request.fail(function(jqXHR, textStatus, errorThrown){
          console.error("Erro na requisição AJAX:", textStatus, errorThrown);
          alert("Erro ao enviar o formulário.");
        })

        request.always(function(){
          $inputs.prop("disabled", false);
        })

			})	
  </script>
  <script>
	const is13OrOlder = (dateStr) => {
		const birthDate = new Date(dateStr);
		const today = new Date();
		
		const thirteenYearsAgo = new Date(
			today.getFullYear() - 13,
			today.getMonth(),
			today.getDate()
		);

		return birthDate <= thirteenYearsAgo;
	};

    const validateEmail = (email) => {
      return email.match(
        /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/i
      );
    };

    const validatePass = (pass) => {
      return pass.match(
        /^(?=.*[a-z])(?=.*[A-Z])[a-zA-Z].{8,}$/
      );
    };

    const validateUser = (user) => {
      return user.match(
        /^[a-zA-Z]{4,10}$/
      );
    };

	const vBirthdate = () => {
		const $birthInput = $('#regBirthdate');
		const $msg = $('#birthDateMsg');
		const birthVal = $birthInput.val();

		$msg.text('');
		$msg.css({ "visibility": "hidden", "height": "0%" });
		$birthInput.css("border-style", "hidden");

		if (!birthVal) return;

		if (is13OrOlder(birthVal)) {
			$birthInput.css({
				"border-style": "solid",
				"border-color": "green",
				"border-width": "2px"
			});
		} else {
			$birthInput.css({
				"border-style": "solid",
				"border-color": "red",
				"border-width": "2px"
			});
			$msg.css({ "visibility": "visible", "height": "8%", "color": "red" });
			$msg.text("Você precisa ter pelo menos 13 anos para se registrar.");
		}
	};

    const vPass = () => {
      const $validMsg = $('#registerPassmsg');
      const $pass = $('#regPass');
      $validMsg.text('');
      $validMsg.css({ "visibility": "hidden", "height": "0%" });
      $pass.css("border-style", "hidden");

      if (!$pass.val()) return;

      if (validatePass($pass.val())) {
        $pass.css({
          "border-style": "solid",
          "border-color": "green",
          "border-width": "2px"
        });
      } else {
        $pass.css({
          "border-style": "solid",
          "border-color": "red",
          "border-width": "2px"
        });
        $validMsg.css({ "visibility": "visible", "height": "5%", "color": "red" });
        $validMsg.text("Senha inválida!");
      }
    };

    const vEmail = () => {
      const $validMsg = $('#registerEmailmsg');
      const $email = $('#regEmail');
      $validMsg.text('');
      $validMsg.css({ "visibility": "hidden", "height": "0%" });
      $email.css("border-style", "hidden");

      if (!$email.val()) return;

      if (validateEmail($email.val())) {
        $email.css({
          "border-style": "solid",
          "border-color": "green",
          "border-width": "2px"
        });
      } else {
        $email.css({
          "border-style": "solid",
          "border-color": "red",
          "border-width": "2px"
        });
        $validMsg.css({ "visibility": "visible", "height": "5%", "color": "red" });
        $validMsg.text("Email inválido!");
      }
    };

    const vUser = () => {
      const $validMsg = $('#registerUsernamemsg');
      const $user = $('#regUser');
      $validMsg.text('');
      $validMsg.css({ "visibility": "hidden", "height": "0%" });
      $user.css("border-style", "hidden");

      if (!$user.val()) return;

      if (validateUser($user.val())) {
        $user.css({
          "border-style": "solid",
          "border-color": "green",
          "border-width": "2px"
        });
      } else {
        $user.css({
          "border-style": "solid",
          "border-color": "red",
          "border-width": "2px"
        });
        $validMsg.css({ "visibility": "visible", "height": "5%", "color": "red" });
        $validMsg.text("Usuário inválido!");
      }
    };

    $("#regEmail").on('input', vEmail);
    $("#regPass").on('input', vPass);
    $("#regUser").on('input', vUser);
	$("#regBirthdate").on('input', vBirthdate);
  </script>
</form>
	</div>

	<div class="form-container sign-in-container">
		<form id="formSignIn">
			<h1>ENTRAR</h1>
			<p id='registerEmailmsg' style="height: 0%; width: 100%; padding: 0; margin: 0; text-align: start; font-size: small;visibility: hidden; padding-top: 2px;"></p>
			<input type="email" id="email" placeholder="Email" name="us_email"/>
			<input type="password" id="pass" placeholder="Password" name="us_password"/>
			<button>ENTRE</button>
      <script>
      $("#formSignIn").submit(function(e) {
				e.preventDefault();

				var $form = $(this);
        var $inputs = $form.find('input, select, button, textarea');
        var serializedData = $form.serialize();

        $inputs.prop("disabled", true);
        
				request = $.ajax({
					url: './src/php/userLogin.php',
					type: 'POST',
					data: serializedData,
          dataType: "json"
				});

        request.done(function(response) {
          if (response.success) {
            console.log(response);
            window.location.replace("./index.php")
          } else {
            alert("Erro: " + response.message);
          }
        })

        request.fail(function(jqXHR, textStatus, errorThrown){
          console.error("Erro na requisição AJAX:", textStatus, errorThrown);
          alert("Erro ao enviar o formulário.");
        })

        request.always(function(){
          $inputs.prop("disabled", false);
        })

			})	
  </script>
		</form>
		
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bem vindo de volta!</h1>
				<p>Para se manter conectado conosco , por favor insira seus dados pessoais </p>
				<button class="ghost" id="signIn">ENTRE</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>FALA, BROTHER!</h1>
				<p>Entre com seus dados pessoais e comece sua jornada conosco!</p>
				<button class="ghost" id="signUp">registre-se</button>
			</div>
		</div>
	</div>
</div>

<script>
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});

	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>
    
</body>
</html>