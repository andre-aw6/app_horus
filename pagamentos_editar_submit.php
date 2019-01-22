<?php
include 'pagamentos.class.php';
$pagamentos = new Pagamentos();

$id_alunos = $_POST['id_alunos'];
$forma_pagto = $_POST['forma_pagto'];
$data_pagto = $_POST['data_pagto'];
$vencto_plano = $_POST['vencto_plano'];
$num_docto = $_POST['num_docto'];
$data_docto = $_POST['data_docto'];
$valor_docto = $_POST['valor_docto'];
$situacao_pagto = $_POST['situacao_pagto'];
$id_pagamentos = $_POST['id'];


$pagamentos->editarPagto($id_alunos, $forma_pagto, $data_pagto, $vencto_plano, $num_docto, $data_docto, $valor_docto, $situacao_pagto, $id_pagamentos);

$pagamentos->getInfoPagto($id_alunos);
$id = $id_alunos;

header("Location: pagamentos.php?id=".$id);
