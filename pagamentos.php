<?php
include 'aluno.class.php';
$aluno = new Aluno();

include 'pagamentos.class.php';
$pagamentos = new Pagamentos();

$id = $_GET['id'];

$info = $aluno->getInfo($id);

$id_alunos = $id;

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
  <div class="col-md-8 offset-md-2">

  <div class="container pt-5">
    <!-- form user info -->
 <div class="card card-outline-secondary">
        <div class="card-header">
          <h3 class="mb-0">Informações de Pagamento</h3>
        </div>
          <div class="card-body">
            <form method="post" class="form-row mt-4">


              <div class="col-sm-12 pb-3">
                  <label for="nome">Nome do Aluno</label>
                  <input type="text" class="form-control" id="disablediInput" placeholder="<?php echo $info['nome']; ?>" disabled>
              </div>

              <div class="col-lg-9">
                <a href="pagamentos_add.php?id=<?php echo $info['id']; ?>" class='btn btn-warning' role='button'>Adicionar</a>
                <a href="home.php" class='btn btn-secondary' role='button'>Voltar</a>
              </div>

              <hr class="pt-5">

            <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Forma de Pagto</th>
                <th scope="col">Nº do Docto</th>
                <th scope="col">Valor</th>
                <th scope="col">Data</th>
                <th scope="col">Situação</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <?php
                $listagem = $pagamentos->getInfoPagto($id_alunos);
                foreach ($listagem as $pagamento):
            ?>
            <tbody>
              <tr>
                <td><?php echo $pagamento['id_alunos']; ?></td>
                <td><?php echo $pagamento['forma_pagto']; ?></td>
                <td><?php echo $pagamento['num_docto']; ?></td>
                <td><?php echo $pagamento['valor_docto']; ?></td>
                <td><?php echo $pagamento['data_docto']; ?></td>
                <td><?php echo $pagamento['situacao_pagto']; ?></td>
                <td><a href="pagamentos_editar.php?id=<?php echo $pagamento['id_pagamentos']; ?>" class='btn btn-secondary btn-sm' role='button'>Editar</a></td>
                <td><a href="pagamentos_excluir.php?id=<?php echo $pagamento['id_pagamentos']; ?>" class='btn btn-danger btn-sm' role='button'>Excluir</a></td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
      </div>
    </div>
    </div>
  </div>

    <script src="assets/js/jquery-3.3.1.js"></script>
  <script src="assets/js/tether.js"></script>
  <script src="assets/js/bootstrap.bundle.js"></script>
  <script src="assets/js/bootstrap.js"></script>
</body>

</html>
