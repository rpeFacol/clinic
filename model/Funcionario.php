<?php

// ----- CARREGA A CLASSE DE CONEXÃO COM O BANCO DE DADOS
//  ----- //
require_once('conexao.php');

class Funcionario {

    // ----- ATRIBUTOS NA NOSSA CLASSE ----- //

    private $id_func;
    private $nome;
    private $dataNasc;
    private $cargo;
    private $cep;
    private $logradouro;
    private $bairro;
    private $numero;
    private $complemento;
    private $rg;
    private $orgaoEmissor;
    private $cpf;
    private $tel_funcionario;



    // ----- FUNÇÃO DE INCLUSÃO DE DADOS ----- //

    public function incluir($nome, $dataNasc, $cargo, $cep, $logradouro, $bairro, $numero, $complemento, $rg, $orgaoEmissor, 
    $cpf, $tel_funcionario) {

        $insert = 'insert into funcionario(nome, dataNasc, cargo, cep, logradouro, bairro, numero, complemento, rg, orgaoEmissor, 
        cpf, tel_funcionario)values("' . $nome . '", "' . $dataNasc . '", "' . $cargo . '", "' . $cep . '", "' . $logradouro . '", 
        "' . $bairro . '", "' . $numero . '", "' . $complemento . '", "' . $rg . '", "' . $orgaoEmissor .'", "' . $cpf . '",
        "' . $tel_funcionario .'")';

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

        $delete = 'delete from funcionario where id_func="' . $id . '"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($delete);
    }

    // ----- FUNÇÃO DE EDIÇÃO DE DADOS ----- //

    public function alterar($nome, $dataNasc, $cargo, $cep, $logradouro, $bairro, $numero, $complemento, $rg, $orgaoEmissor, 
    $cpf, $tel_funcionario,$id) {

        $update = 'update funcionario set nome="' . $nome . '", dataNasc="' . $dataNasc . '", cargo="' . $cargo . '", 
        cep="' . $cep . '", logradouro="' . $logradouro . '", bairro="' . $bairro . '", numero="' . $numero . '", 
        complemento="' . $complemento . '", rg="' . $rg . '", orgaoEmissor="' . $orgaoEmissor . '" 
        , cpf="' . $cpf . '", tel_funcionario="' . $tel_funcionario . '" where id_func="' . $id . '"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($update);

        $this->Linha = @mysqli_num_rows($Acesso->result);

        $this->Result = $Acesso->result;
    }
}
