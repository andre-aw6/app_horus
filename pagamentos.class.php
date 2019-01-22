<?php
class Pagamentos {

    private $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:dbname=horus;host=localhost;charset=utf8","root","");
        $opcoes = array(
                            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
                        );


    }

    public function adicionarPagto($id_alunos, $forma_pagto ='', $data_pagto ='', $vencto_plano ='', $num_docto ='', $data_docto ='', $valor_docto ='', $situacao_pagto = ''){
            $sql = "INSERT INTO pagamentos (id_alunos, forma_pagto, data_pagto, vencto_plano, num_docto, data_docto, valor_docto, situacao_pagto) VALUES (:id_alunos, :forma_pagto, :data_pagto, :vencto_plano, :num_docto, :data_docto, :valor_docto, :situacao_pagto)";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':id_alunos',$id_alunos);
            $sql->bindValue(':forma_pagto',$forma_pagto);
            $sql->bindValue(':data_pagto', $data_pagto);
            $sql->bindValue(':vencto_plano',$vencto_plano);
            $sql->bindValue(':num_docto',$num_docto);
            $sql->bindValue(':data_docto',$data_docto);
            $sql->bindValue(':valor_docto',$valor_docto);
            $sql->bindValue(':situacao_pagto',$situacao_pagto);
            $sql->execute();
    }

    public function getInfoPagto($id_alunos) {
        $sql = "SELECT * FROM pagamentos WHERE id_alunos = :id_alunos";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id_alunos',$id_alunos);
        $sql->execute();

        if($sql->rowCount()>0) {
            return $sql->fetchAll();
        }else{
            return array();
        }
    }

    public function editPagto($id_pagamentos) {
        $sql = "SELECT * FROM pagamentos WHERE id_pagamentos = :id_pagamentos";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id_pagamentos',$id_pagamentos);
        $sql->execute();

        if($sql->rowCount()>0) {
            return $sql->fetch();
        }else{
            return array();
        }
    }

    public function getAllPagto(){
        $sql = "SELECT * FROM pagamentos";
        $sql = $this->pdo->query($sql);

        if($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return array();
        }
    }

    public function getPagtosJoin(){
      if(!empty($_POST['situacao_pagto'])) {
        $situacao_pagto = $_POST['situacao_pagto'];
        $sql = "SELECT * FROM pagamentos LEFT JOIN alunos ON pagamentos.id_alunos = alunos.id WHERE situacao_pagto = :situacao_pagto ORDER BY data_docto";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':situacao_pagto', $situacao_pagto);
        $sql->execute();
      } else {
        $sql = "SELECT * FROM pagamentos LEFT JOIN alunos ON pagamentos.id_alunos = alunos.id ORDER BY data_docto";
        $sql = $this->pdo->query($sql);
      }

        if($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return array();
        }
    }

    public function editarPagto($id_alunos, $forma_pagto, $data_pagto, $vencto_plano, $num_docto, $data_docto, $valor_docto, $situacao_pagto, $id_pagamentos){
        $sql = "UPDATE pagamentos SET id_alunos = :id_alunos, forma_pagto = :forma_pagto, data_pagto = :data_pagto, vencto_plano = :vencto_plano, num_docto = :num_docto, data_docto = :data_docto, valor_docto = :valor_docto, situacao_pagto = :situacao_pagto WHERE id_pagamentos = :id_pagamentos";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id_alunos',$id_alunos);
        $sql->bindValue(':forma_pagto',$forma_pagto);
        $sql->bindValue(':data_pagto', $data_pagto);
        $sql->bindValue(':vencto_plano',$vencto_plano);
        $sql->bindValue(':num_docto',$num_docto);
        $sql->bindValue(':data_docto',$data_docto);
        $sql->bindValue(':valor_docto',$valor_docto);
        $sql->bindValue(':situacao_pagto',$situacao_pagto);
        $sql->bindValue(':id_pagamentos', $id_pagamentos);
        $sql->execute();

    }

    public function excluirPagto($id_pagamentos){
            $sql = "DELETE FROM pagamentos WHERE id_pagamentos = :id_pagamentos";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':id_pagamentos', $id_pagamentos);
            $sql->execute();
    }
}
