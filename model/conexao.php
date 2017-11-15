<?php

// ----- CLASSE QUE IRÁ REALIZAR A CONEXÃO COM O BANCO DE DADOS ----- //

class Acesso {

    // ----- FUNÇÃO QUE VAI ABRIR A CONEXÃO COM O BANCO ----- //

    public function Conexao() {
    // Colocar 1 - qual o localhost; 2 - usuario do banco; 3 - senha do banco e 4 - nome do banco.
        $this->cnx = mysqli_connect("localhost", "root", "123", "clinica"); 

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }

    // ----- REALIZA A QUERY NO BANCO ----- //

    public function Query($sql) {
        $this->result = mysqli_query($this->cnx,$sql, MYSQLI_STORE_RESULT);
    }

    // ----- FECHA A CONEXÃO COM O BANCO DE DADOS ----- //

    public function __destruct() {
        mysqli_close($this->cnx);
    }

}
?>
