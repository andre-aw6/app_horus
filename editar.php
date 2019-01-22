<?php
include 'aluno.class.php';
$aluno = new Aluno();

$id = $_GET['id'];

$info = $aluno->getInfo($id);

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
          <h3 class="mb-0">Informações do Aluno</h3>
        </div>
          <div class="card-body">
              <form action="editar_submit.php" method="post" class="form-row mt-4">
                <input type="hidden" name="id" value="<?php echo $info['id']; ?>">



              <div class="col-sm-12 pb-3">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $info['nome']; ?>">
              </div>
              <div class="col-sm-6 pb-3">
                  <label for="rg">RG</label>
                  <input type="text" class="form-control" id="rg" name="rg" value="<?php echo $info['rg']; ?>">
              </div>
              <div class="col-sm-6 pb-3">
                  <label for="cpf">CPF</label>
                  <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $info['cpf']; ?>">
              </div>
              <div class="col-sm-6 pb-3">
                  <label for="nascimento">Data de Nascimento</label>
                  <input type="date" class="form-control" id="nascimento" name="nascimento" value="<?php echo $info['nascimento']; ?>">
              </div>
              <div class="col-sm-6 pb-3">
                 <label for="genero">Gênero</label>
                 <select class="form-control" id="sexo" name="sexo">
                   <option style="visibility:hidden" selected="selected" value="<?php echo $info['sexo']; ?>"> <?php echo $info['sexo']; ?> </option>
                     <option>Masculino</option>
                     <option>Feminino</option>
                 </select>
              </div>
              <div class="col-sm-6 pb-3">
                  <label for="telefone">Telefone</label>
                  <input type="text" class="form-control" id="fone" name="fone" value="<?php echo $info['fone']; ?>">
              </div>
              <div class="col-sm-6 pb-3">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" name="email" value="<?php echo $info['email']; ?>">
              </div>
              <div class="col-sm-12 pb-3">
                  <label for="endereco">Endereço</label>
                  <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $info['endereco']; ?>">
              </div>
              <div class="col-sm-12 pb-3">
                  <label for="bairro">Bairro</label>
                  <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $info['bairro']; ?>">
              </div>
              <div class="col-sm-6 pb-3">
                  <label for="cidade">Cidade</label>
                  <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $info['cidade']; ?>">
              </div>
              <div class="col-sm-3 pb-3">
                 <label for="estado">Estado</label>
                 <select class="form-control" id="estado" name="estado">
                    <option style="visibility:hidden" selected="selected" value="<?php echo $info['estado']; ?>"> <?php echo $info['estado']; ?> </option>
                    <option>AC</option>
                    <option>AL</option>
                    <option>AM</option>
                    <option>AP</option>
                    <option>BA</option>
                    <option>CE</option>
                    <option>DF</option>
                    <option>ES</option>
                    <option>GO</option>
                    <option>MA</option>
                    <option>MG</option>
                    <option>MS</option>
                    <option>MT</option>
                    <option>PA</option>
                    <option>PE</option>
                    <option>PI</option>
                    <option>PR</option>
                    <option>RJ</option>
                    <option>RN</option>
                    <option>RO</option>
                    <option>RR</option>
                    <option>RS</option>
                    <option>SC</option>
                    <option>SE</option>
                    <option>SP</option>
                    <option>TO</option>
                 </select>
              </div>
              <div class="col-sm-3 pb-3">
                  <label for="cep">CEP</label>
                  <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $info['cep']; ?>">
              </div>
              <div class="col-sm-4 pb-3">
                <label for="situacao_aluno">Situação do Aluno</label>
                <select class="form-control" id="situacao_aluno" name="situacao_aluno">
                    <option style="visibility:hidden" selected="selected" value="<?php echo $info['situacao_aluno']; ?>"> <?php echo $info['situacao_aluno']; ?> </option>
                    <option>Ativo</option>
                    <option>Inativo</option>
                </select>
              </div>
              <div class="col-sm-4 pb-3">
                  <label for="matricula">Data de Matrícula</label>
                  <input type="date" class="form-control" id="matricula" name="matricula" value="<?php echo $info['matricula']; ?>">
              </div>
              <div class="col-sm-4 pb-3">
                  <label for="vencto_plano">Validade do Plano</label>
                  <input type="date" class="form-control" id="vencto_plano" name="vencto_plano" value="<?php echo $info['vencto_plano']; ?>">
              </div>
              <div class="col-md-6 col-sm-3 pb-3">
                 <label for="plano">Plano</label>
                 <select class="form-control" id="plano" name="plano">
                     <option style="visibility:hidden" selected="selected" value="<?php echo $info['plano']; ?>"> <?php echo $info['plano']; ?> </option>
                     <option>Convênio - R$ 175,00</option>
                     <option>Básico - R$ 240,00</option>
                     <option>Mensal - R$ 420,00</option>
                     <option>Único 1 - R$ 320,00</option>
                     <option>Único 2 - R$ 285,00</option>
                     <option>Único 3 - R$ 250,00</option>
                 </select>
              </div>
              <div class="col-md-6 col-sm-3 pb-3">
                 <label for="data_vencto">Data de Vencimento</label>
                 <select class="form-control" id="data_vencto" name="data_vencto">
                     <option style="visibility:hidden" selected="selected" value="<?php echo $info['data_vencto']; ?>"> <?php echo $info['data_vencto']; ?> </option>
                     <option>07</option>
                     <option>14</option>
                     <option>21</option>
                     <option>28</option>
                 </select>
              </div>
              <div class="col-sm-12 pb-3">
                  <label for="cpf_amigo">CPF do Amigo (Plano Único 3)</label>
                  <input type="text" class="form-control" id="cpf_amigo" name="cpf_amigo" value="<?php echo $info['cpf_amigo']; ?>">
              </div>
              <hr>

              <div class="input-field col-lg-9">
                <input type="submit" class="btn btn-warning" value="Salvar">
                <a href="home.php" class='btn btn-secondary' role='button'>Voltar</a>
              </div>
              </form>
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
