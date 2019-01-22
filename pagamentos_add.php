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
              <div class="col-sm-4 pb-3">
                <input type="hidden" class="form-control" name="id_alunos" value="<?php echo $id_alunos; ?>" >
                <label for="forma_pagto">Forma de Pagamento</label>
                <select class="form-control" id="forma_pagto" name="forma_pagto">
                    <option>Dinheiro</option>
                    <option>Caução</option>
                    <option>Cheque</option>
                    <option>Transferência</option>
                    <option>Cartão</option>
                </select>
              </div>
              <div class="col-sm-4 pb-3">
                  <label for="data_pagto">Data de Pagamento</label>
                  <input type="date" class="form-control" id="data_pagto" name="data_pagto">
              </div>
              <div class="col-sm-4 pb-3">
                  <label for="vencto_plano">Vencimento do Plano</label>
                  <input type="date" class="form-control" id="vencto_plano" name="vencto_plano">
              </div>
              <div class="col-sm-6 pb-3">
                  <label for="num_docto">Número do Documento</label>
                  <input type="text" class="form-control" id="num_docto" name="num_docto">
              </div>
              <div class="col-sm-6 pb-3">
                  <label for="data_docto">Data do Docto</label>
                  <input type="date" class="form-control" id="data_docto" name="data_docto">
              </div>
              <div class="col-sm-6 pb-3">
                  <label for="valor_docto">Valor do Docto</label>
                  <input type="text" class="form-control" id="valor_docto" name="valor_docto">
              </div>
              <div class="col-sm-6 pb-3">
                <label for="situacao_pagto">Situação do Pagamento</label>
                <select class="form-control" id="situacao_pagto" name="situacao_pagto">
                    <option>Não Pago</option>
                    <option>Pago</option>
                </select>
              </div>

              <div class="col-lg-9">
                <a href="pagamentos.php?id=<?php echo $info['id']; ?>" class='btn btn-secondary' role='button'>Voltar</a>
                <input type="submit" class="btn btn-warning" value="Adicionar">
              </div>

              <?php  if (!empty($_POST['valor_docto'])) {
                $id_alunos = $_POST['id_alunos'];
                $forma_pagto = $_POST['forma_pagto'];
                $data_pagto = $_POST['data_pagto'];
                $vencto_plano = $_POST['vencto_plano'];
                $num_docto = $_POST['num_docto'];
                $data_docto = $_POST['data_docto'];
                $valor_docto = $_POST['valor_docto'];
                $situacao_pagto = $_POST['situacao_pagto'];

                $pagamentos->adicionarPagto($id_alunos, $forma_pagto, $data_pagto, $vencto_plano, $num_docto, $data_docto, $valor_docto, $situacao_pagto);
              } ?>



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
