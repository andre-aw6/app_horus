<?php
include 'aluno.class.php';
$aluno = new Aluno();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <title>Sistema - Horus Crossfit</title>
  <style>
    .text-centered {
      text-align: center;
    }
  </style>
</head>

<body>
  <!-- Barra de Navegação -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
    <img src="assets/img/logo-hc.png" style="width: auto; height: 60px" class="d-inline-block align-top"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastro.php">Cadastrar</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Relatórios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="relatorio_pagto.php">Pagamentos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="relatorio_planos.php">Planos a Vencer</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="relatorio_aniversario.php">Aniversários</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="relatorio_vencto.php">Datas de Vencto</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="relatorio_inativos.php">Inativos</a>
        </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sair</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- **** Fim da Barra de Navegação **** -->

<hr class="pt-5">
  <div class="row">
  <div class="col-md-12">


  <div class="container pt-5">
    <!-- form user info -->
    <div class="card card-outline-secondary">
        <div class="card-header">
          <div class="row">
            <div class="col-md-8">
                <h3 class="mb-0">Relatório de Aniversários - Hórus Crossfit</h3><br>
                <h6 class="mb-0">                    </h6>
            </div>
          </div>
        </div>

          <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">Aniversário</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
                <?php
                    $lista = $aluno->getAniversario();
                    foreach ($lista as $alunos):
                ?>
            <tbody>
              <tr>
                <td><?php echo $alunos['nome']; ?></td>
                <td><?php echo $alunos['fone']; ?></td>
                <td><?php echo $alunos['email']; ?></td>
                <td><?php echo $alunos['nascimento']; ?></td>
                <td><a href="editar.php?id=<?php echo $alunos['id']; ?>" class='btn btn-secondary btn-sm' role='button'>Editar</a></td>
                <td><a href="pagamentos.php?id=<?php echo $alunos['id']; ?>" class='btn btn-warning btn-sm' role='button'>Pagamentos</a></td>
                <td><a href="excluir.php?id=<?php echo $alunos['id']; ?>" class='btn btn-danger btn-sm' role='button'>Excluir</a></td>
              </tr>
                <?php endforeach; ?>
            </tbody>
          </table>
          </div>


  <script src="assets/js/jquery-3.3.1.js"></script>
  <script src="assets/js/tether.js"></script>
  <script src="assets/js/bootstrap.bundle.js"></script>
  <script src="assets/js/bootstrap.js"></script>
</body>

</html>
