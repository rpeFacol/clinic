<?php

// ----- CARREGA A CLASSE DE CONEXÃO COM O BANCO DE DADOS
//  ----- //
require_once('conexao.php');

class Paciente {

    // ----- ATRIBUTOS NA NOSSA CLASSE ----- //

    private $nome;
    private $id_paciente;
    private $cpf;
    private $nacionalidade;
    private $sexo;
    private $rg;
    private $estado_civil;
    private $email;
    private $rua;
    private $numero;
    private $bairro;
    private $cidade;
    private $estado;
    private $complemento;
    private $profissao;
    private $tel_paciente;
    private $data_nasc;



    // ----- FUNÇÃO DE INCLUSÃO DE DADOS ----- //

    public function incluir($nome, $cpf, $nacionalidade, $sexo, $rg, $estado_civil, $email, $rua, $numero, $bairro, 
    $cidade, $estado, $complemento, $profissao, $data_nasc, $tel_paciente) {

        $insert = 'insert into paciente(nome, cpf, nacionalidade, sexo, rg, estado_civil, email, rua, numero, bairro, 
        cidade, estado, complemento, profissao, data_nasc, tel_paciente)values("' . $nome . '", "' . $cpf . '",
        "' . $nacionalidade . '", "' . $sexo . '", "' . $rg . '", "' . $estado_civil . '", "' . $email . '", "' . $rua . '",
         "' . $numero . '", "' . $bairro . '", "' . $cidade . '", "' . $estado . '", "' . $complemento . '", 
         "' . $profissao . '", "' . $data_nasc . '", "' . $tel_paciente . '")';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($insert);
    }
    // ----- FUNÇÃO DE CONSULTA DE DADOS ----- //

    public function consultar($sql) {

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($sql);

        $this->Linha = @mysqli_affected_rows($Acesso->result);

        $this->Result = $Acesso->result;
    }

    // ----- FUNÇÃO DE EXCLUSÃO DE DADOS ----- //

    public function excluir($id) {

        $delete = 'delete from paciente where id_paciente="' . $id . '"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($delete);
    }

    // ----- FUNÇÃO DE EDIÇÃO DE DADOS ----- //

    public function alterar($nome , $cpf, $nacionalidade, $sexo, $rg, $estado_civil, $email, $rua, $numero, $bairro, 
    $cidade, $estado, $complemento, $profissao, $data_nasc, $tel_paciente, $id) {

        $update = 'update paciente set nome="' . $nome . '", cpf="' . $cpf . '", nacionalidade="' . $nacionalidade . '", 
        sexo="' . $sexo . '", rg="' . $rg . '", estado_civil="' . $estado_civil . '", email="' . $email . '", rua="' . $rua . '", 
        numero="' . $numero . '", bairro="' . $bairro . '", cidade="' . $cidade . '", estado="' . $estado . '", 
        complemento="' . $complemento . '", profissao="' . $profissao . '", 
        data_nasc="' . $data_nasc . '", tel_paciente="' . $tel_paciente . '" where id_paciente="' . $id . '"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($update);

        $this->Linha = @mysqli_num_rows($Acesso->result);

        $this->Result = $Acesso->result;
    }
}
