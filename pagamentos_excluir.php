<?php
include 'pagamentos.class.php';
$pagamentos = new Pagamentos();

$id = $_GET['id'];
$id_pagamentos = $id;

$lista = $pagamentos->getAllPagto();
    foreach ($lista as $pagamento):

$pagamento['id_alunos'];

$id_alunos = $pagamento['id_alunos'];
endforeach;

if (!empty($_GET['id'])) {

  $id = $_GET['id'];

  $pagamentos->excluirPagto($id_pagamentos);
}



header("Location: pagamentos.php?id=".$id_alunos);
