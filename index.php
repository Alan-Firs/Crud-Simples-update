<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Cadastro</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
  
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Página Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo Usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Usuários</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="rox">
    <div class="col mt-5">
      <?php
        include("config-BD.php");
        switch(@$_REQUEST["page"]){
          case "novo":
            include("novo-usuario.php");
          break;
          case "listar":
            include("listar-usuarios.php");
          break;
          case "salvar":
            include("salvar-usuario.php");
          break;
          case "editar":
            include("editar-usuario.php");
          break;
          case "excluir":
            include("excluir-usuario.php");
          break;
          default:
            print "<h1>Bem vindo!</h1>";
        }
      ?>
    </div>
  </div>
</div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="scripts.js"></script>
  </body>
</html>