<?php
include("database.php");

$sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];

$res = $conn->query($sql);
$row = $res->fetch_object();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Trabalho Gilmar</title>
</head>

<body>
  <header>
    <nav>
      <a class="logo" href="index.php">Login Data</a>
      <div class="mobileMenu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="navList">
        <li><a href="../LoginData/index.php">Início</a></li>
        <li><a href="../Logindata/index.php">Cadastrar</a></li>
        <li><a href="../Logindata/resultados.php">editar/excluir users</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <div class="formulario shadow-lg p-3 bg-body-tertiary rounded">
      <form action="cadastro.php" method="post">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print $row->id; ?>">
        <div class="form-group">
          <label for="exampleInputEmail1">Nome do Usuário</label>
          <input type="text" class="form-control required" name="nome" value="<?php print $row->nome; ?>" id="aluno_nome" aria-describedby="emailHelp" placeholder="Seu nome" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Endereço de email</label>
          <input type="email" class="form-control required" name="email" value="<?php print $row->email; ?> " id="aluno_email" aria-describedby="emailHelp" placeholder="Seu email" required>
          <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Senha</label>
          <input type="password" class="form-control required" name="senha" id="aluno_senha" placeholder="Senha" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Data de Nascimento</label>
          <input type="date" class="form-control required" name="data_nasc" value="<?php print $row->data_nasc; ?>" id="aluno_data" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
    <button class="btn btn-primary visualizar"><a href="resultados.php">Visualizar Cadastro</a> </button>
  </main>
  <footer>

  </footer>