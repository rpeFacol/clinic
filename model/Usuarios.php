<?php

// ----- CARREGA A CLASSE DE CONEXÃO COM O BANCO DE DADOS
//  ----- //
require_once('conexao.php');

class Usuarios {

    // ----- ATRIBUTOS NA NOSSA CLASSE ----- //

    private $login;
    private $senha;

    // ----- FUNÇÃO DE INCLUSÃO DE DADOS ----- //

    public function incluir($login, $senha) {

        $insert = 'insert into usuarios(login, senha)values("' . $login . '","' . $senha . '")';

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

        $delete = 'delete from usuarios where id="' . $id . '"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($delete);
    }

    // ----- FUNÇÃO DE EDIÇÃO DE DADOS ----- //

    public function alterar($login, $senha, $id) {

        $update = 'update usuarios set login="' . $login . '", senha="' . $senha . '" where id="' . $id . '"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($update);

        $this->Linha = @mysqli_num_rows($Acesso->result);

        $this->Result = $Acesso->result;
    }
}
