<?php
include 'aluno.class.php';
$aluno = new Aluno();

if (!empty($_GET['id'])) {

  $id = $_GET['id'];

  $aluno->excluir($id);
}

  header("Location: home.php");
