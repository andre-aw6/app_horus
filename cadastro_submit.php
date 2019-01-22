<?php
include 'aluno.class.php';
$aluno = new Aluno();

  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $rg = $_POST['rg'];
  $nascimento = $_POST['nascimento'];
  $sexo = $_POST['sexo'];
  $fone = $_POST['fone'];
  $email = $_POST['email'];
  $endereco = $_POST['endereco'];
  $bairro = $_POST['bairro'];
  $cep = $_POST['cep'];
  $estado = $_POST['estado'];
  $cidade = $_POST['cidade'];
  $situacao_aluno = $_POST['situacao_aluno'];
  $matricula = $_POST['matricula'];
  $vencto_plano = $_POST['vencto_plano'];
  $plano = $_POST['plano'];
  $data_vencto = $_POST['data_vencto'];
  $cpf_amigo = $_POST['cpf_amigo'];

  $aluno->adicionar($nome, $cpf, $rg, $nascimento, $sexo, $fone, $email, $endereco, $bairro, $cep, $estado, $cidade, $situacao_aluno, $matricula, $vencto_plano, $plano, $data_vencto, $cpf_amigo);

  header("Location: home.php");
