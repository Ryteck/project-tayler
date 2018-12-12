<?php
include '../cconexao/Conexao.php';
include '../classes/usuario/Cadastrar.php';

$cad = new Cadastrar();

$cadastrar = true;

if(isset($_POST['cadastrar'])){

$nome_1 = $_POST ['nome_1'];
$nome_2 = $_POST ['nome_2'];
$login = $_POST ['usuario'];
$nasc = $_POST ['nasc'];
$senha = sha1($_POST ['senha']);
$csenha = sha1($_POST ['csenha']);
$email = $_POST ['email'];

if(isset($_POST['prod'])){
$prod = 1;
}else{
$prod = 0;
}

if ($senha == $csenha) {

$cad->salvar($nome_1, $nome_2, $login, $nasc, $senha, $email, $prod);

}else{

$cadastrar = false;

}

}

?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cadastro</title>
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
  <link rel="stylesheet" type="text/css" href="../css/materialize.css">
  <link rel="shortcut icon" type="imagem/x-icon" href="../img/ico.ico" />

</head>

<body>

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">Project TAYLER</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="home.php">Home</a></li>
        <li><a href="termos.php">Termos</a></li>
        <li class="active"><a href="cadastrar.php">Cadastrsar</a></li>
      </ul>
    </div>
  </nav>

  <br><br><br><br>

  <div class="container">

    <?php

        if ($cadastrar == false) {
            echo "<p style='color:red;'> Senhas diferentes </p>";
        }

        ?>

    <div class="card-panel  blue-grey darken-4 opaca">

      <div class="row">

        <form class="col s12" action="" method="POST">
          <div class="row">
            <div class="input-field col s6">
              <input id="first_name" type="text" class="validate" name="nome_1" style='color: #ffffff' required>
              <label for="first_name">Primeiro nome</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate" name="nome_2" style='color: #ffffff' required>
              <label for="last_name">Ultimo nome</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="user" type="text" class="validate" name="usuario" style='color: #ffffff' required>
              <label for="user">Nickname</label>
            </div>
            <div class="input-field col s6">
              <input id="datanasc" type="text" class="datepicker" name="nasc" style='color: #ffffff'>
              <label for="datanasc">Data de nascimento</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="password" type="password" class="validate" name="senha" style='color: #ffffff' required>
              <label for="password">Senha</label>
            </div>
            <div class="input-field col s6">
              <input id="cpassword" type="password" class="validate" name="csenha" style='color: #ffffff' required>
              <label for="cpassword">Confirmar senha</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate" name="email" style='color: #ffffff'>
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <label>
              <input type="checkbox" name="termos" required />
              <span>Aceitar os <a href="termos.php" target="_blank">termos e condições?</a></span>
            </label>
          </div>
          <div class="switch">
            <label>Produtor musical?</label>
            <br>
            <label>
              Não
              <input type="checkbox" name="prod">
              <span class="lever"></span>
              Sim
            </label>
          </div>
          <br><br>
          <div class="row">
            <button class="btn waves-effect waves-light" type="submit" name="cadastrar">
              Cadastrar
            </button>
            <button class="btn waves-effect waves-light" type="reset">
              Limpar
            </button>
          </div>
        </form>
      </div>

      <div class="row">

<label>
<h6><span>
Ja possui conta?<br><br> Clique no botão <br> abaixo para logar:<br><br>
</span></h6>
</label>    
<a href="usuario/pagina_usuario.php"><button type="button" class="btn">Logar</button></a>
</div>

 </div>


  </div>

  </div>

  <br><br><br><br>

  <script type="text/javascript" src="../js/jquery.js"></script>

  <script type="text/javascript" src="../js/materialize.js"></script>

  <script>

    $(document).ready(function() {
    $('.datepicker').datepicker();
    });

  </script>

</body>

</html>