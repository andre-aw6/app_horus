<?php

class Aluno {

    private $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:dbname=horus;host=localhost;charset=utf8","root","");
        $opcoes = array(
                            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
                        );


    }

    public function adicionar($nome, $cpf ='', $rg ='', $nascimento ='', $sexo ='', $fone ='', $email ='', $endereco ='', $bairro ='', $cep ='', $estado ='', $cidade ='',
     $situacao_aluno ='', $matricula ='', $vencto_plano ='', $plano ='', $data_vencto ='', $cpf_amigo){
            $sql = "INSERT INTO alunos (nome, cpf, rg, nascimento, sexo, fone, email, endereco, bairro, cep, estado, cidade, situacao_aluno, matricula, vencto_plano, plano, data_vencto, cpf_amigo)
                    VALUES (:nome, :cpf, :rg, :nascimento, :sexo, :fone, :email, :endereco, :bairro, :cep, :estado, :cidade, :situacao_aluno, :matricula, :vencto_plano, :plano, :data_vencto, :cpf_amigo)";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':cpf', $cpf);
            $sql->bindValue(':rg', $rg);
            $sql->bindValue(':nascimento', $nascimento);
            $sql->bindValue(':sexo', $sexo);
            $sql->bindValue(':fone', $fone);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':endereco', $endereco);
            $sql->bindValue(':bairro', $bairro);
            $sql->bindValue(':cep', $cep);
            $sql->bindValue(':estado', $estado);
            $sql->bindValue(':cidade', $cidade);
            $sql->bindValue(':situacao_aluno', $situacao_aluno);
            $sql->bindValue(':matricula', $matricula);
            $sql->bindValue(':vencto_plano', $vencto_plano);
            $sql->bindValue(':plano', $plano);
            $sql->bindValue(':data_vencto', $data_vencto);
            $sql->bindValue(':cpf_amigo', $cpf_amigo);
            $sql->execute();
    }

    public function getInfo($id) {
        $sql = "SELECT * FROM alunos WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount()>0) {
            return $sql->fetch();
        }else{
            return array();
        }
    }

    public function getAll(){
        $sql = "SELECT * FROM alunos WHERE situacao_aluno = 'Ativo' ORDER BY nome";
        $sql = $this->pdo->query($sql);

        if($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return array();
        }
    }

    public function getPlanos(){
        $sql = "SELECT * FROM alunos WHERE situacao_aluno = 'Ativo' ORDER BY vencto_plano";
        $sql = $this->pdo->query($sql);

        if($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return array();
        }
    }

    public function getAniversario(){
        $sql = "SELECT * FROM alunos WHERE situacao_aluno = 'Ativo' ORDER BY nascimento";
        $sql = $this->pdo->query($sql);

        if($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return array();
        }
    }

    public function getInativos(){
      if(!empty($_POST['situacao_aluno'])) {
        $situacao_aluno = $_POST['situacao_aluno'];
        $sql = "SELECT * FROM alunos WHERE situacao_aluno = :situacao_aluno ORDER BY nome";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':situacao_aluno', $situacao_aluno);
        $sql->execute();
      } else {
        $sql = "SELECT * FROM alunos ORDER BY nome";
        $sql = $this->pdo->query($sql);
      }

        if($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return array();
        }
    }

    public function getVenctos(){
      if(!empty($_POST['data_vencto'])) {
        $data_vencto = $_POST['data_vencto'];
        $sql = "SELECT * FROM alunos WHERE data_vencto = :data_vencto AND situacao_aluno = 'Ativo' ORDER BY data_vencto";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':data_vencto', $data_vencto);
        $sql->execute();
      } else {
        $sql = "SELECT * FROM alunos WHERE situacao_aluno = 'Ativo' ORDER BY data_vencto";
        $sql = $this->pdo->query($sql);
      }

        if($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return array();
        }
    }

    public function pesquisa(){
        $campo = (isset($_GET['campo'])) ? $_GET['campo'] : '';

        $sql = "SELECT * FROM alunos WHERE nome LIKE :nome ORDER BY nome";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':nome', '%'.$campo.'%');
        $sql->execute();

        if($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return array();
        }
    }

    public function editar($nome, $cpf, $rg, $nascimento, $sexo, $fone, $email, $endereco, $bairro, $cep, $estado, $cidade, $situacao_aluno,
    $matricula, $vencto_plano, $plano, $data_vencto, $cpf_amigo, $id){
        $sql = "UPDATE alunos SET nome = :nome, cpf = :cpf, rg = :rg, nascimento = :nascimento, sexo = :sexo, fone = :fone, email = :email,
        endereco = :endereco, bairro = :bairro, cep = :cep, estado = :estado, cidade = :cidade, situacao_aluno = :situacao_aluno,
        matricula = :matricula, vencto_plano = :vencto_plano, plano = :plano, data_vencto = :data_vencto, cpf_amigo = :cpf_amigo WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':rg', $rg);
        $sql->bindValue(':nascimento', $nascimento);
        $sql->bindValue(':sexo', $sexo);
        $sql->bindValue(':fone', $fone);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':endereco', $endereco);
        $sql->bindValue(':bairro', $bairro);
        $sql->bindValue(':cep', $cep);
        $sql->bindValue(':estado', $estado);
        $sql->bindValue(':cidade', $cidade);
        $sql->bindValue(':situacao_aluno', $situacao_aluno);
        $sql->bindValue(':matricula', $matricula);
        $sql->bindValue(':vencto_plano', $vencto_plano);
        $sql->bindValue(':plano', $plano);
        $sql->bindValue(':data_vencto', $data_vencto);
        $sql->bindValue(':cpf_amigo', $cpf_amigo);
        $sql->bindValue(':id', $id);
        $sql->execute();

    }

    public function excluir($id){
            $sql = "DELETE FROM alunos WHERE id = :id";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();
    }

    private function existeEmail($email) {
        $sql = "SELECT * FROM alunos WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() > 0) {
            return true;
        }else{
            return false;
        }
    }

}
