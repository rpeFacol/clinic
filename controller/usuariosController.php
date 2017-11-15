<?php

$arquivo = $_SERVER['DOCUMENT_ROOT'] . '/clinica/model/Usuarios.php';

include_once($arquivo);  // ----- CARREGA A CLASSE CONSULTA  ----- //

function Processo($Processo) {

    switch ($Processo) { // ----- A PARTIR DESTE PONTO TESTA O PROCESSO PASSADO PELA CAMADA DE VISÃO ----- //

        case 'incluir': // ----- PROCESSO DE INCLUIR PASSADO NA VISÃO INCLUIR USUARIO ----- //
        
                    global $linha; // ----- VARIAVEL GLOBAL LINHA ----- //
                    global $rs; // ----- VARIALVEL GLOGAL RS, É NOSSO CONJUNTO DE DADOS OU RESULTADO ----- //
        
                    $usuarios = new Usuarios(); // ----- CRIA O OBJETO DE USUARIO ----- //
        
                    $usuarios->consultar("select * from usuarios"); // ----- REALIZA UMA CONSULTA E CARREGA PARA AS VARIAVEIS GLOBAIS ----- //
                    $linha = $usuarios->Linha;
                    $rs = $usuarios->Result;
        
                    if (isset($_POST['ok']) == 'true') {
                        $usuarios->incluir($_POST['login'], $_POST['senha']);
                        echo '<script>alert("Cadastrado com sucesso !");</script>'; // ===== ALERTA JAVA SCRIPT NA TELA DO USUARIO ===== //
                        echo '<script>window.location="../view/cadastrarUsuario.php";</script>'; // ===== REDIRECIONA O USUARIO DEPOIS DE FEITA A OPERAÇÃO DESEJADA ===== //
                    }
        
                    break;
        
                case 'consultar': // ----- PROCESSO DE INCLUIR PASSADO NA VISÃO CONSULTAR USUARIO ----- //
        
                    global $linha; // ----- VARIAVEL GLOBAL LINHA ----- //
                    global $rs; // ----- VARIALVEL GLOGAL RS, É NOSSO CONJUNTO DE DADOS OU RESULTADO ----- //
        
                    $usuarios = new Usuarios(); // ----- CRIA O OBJETO DE USUARIO ----- //
        
                    $filtro_sql = "";
        
                    if (isset($_POST['pesquisa']) != NULL) {
        
                        $filtro = $_POST['pesquisa'];
        
                        $filtro_sql = ("where login like '%$filtro%' or senha like '%$filtro%'");
        
                    }
                        $usuarios->consultar("select * from usuarios $filtro_sql"); // ----- REALIZA UMA CONSULTA E CARREGA PARA AS VARIAVEIS GLOBAIS ----- //
                        $linha = $usuarios->Linha;
                        $rs = $usuarios->Result;
        
                    if (isset($_REQUEST['ok']) == "excluir") {
                        $usuarios->excluir($_REQUEST['id']);
                        echo '<script>alert("Excluido com sucesso !");</script>'; // ===== ALERTA JAVA SCRIPT NA TELA DO USUARIO ===== //
                        echo '<script>window.location="../view/pesqUsuario.php";</script>'; // ===== REDIRECIONA O USUARIO DEPOIS DE FEITA A OPERAÇÃO DESEJADA ===== //
                    }
        
                    break;
        
        
                case 'editar':
        
                    global $linha; // ----- VARIAVEL GLOBAL LINHA ----- //
                    global $rs; // ----- VARIALVEL GLOGAL RS, É NOSSO CONJUNTO DE DADOS OU RESULTADO ----- //
        
                    $usuarios = new Usuarios(); // ----- CRIA O OBJETO DE USUARIO ----- //
        
                    $usuarios->consultar("select * from usuarios where id=" . $_GET['id']); // ----- REALIZA UMA CONSULTA E CARREGA PARA AS VARIAVEIS GLOBAIS NESTE CASO UMA CONSULTA ESPECIFICA PARA O ID DE usuarios VEJA O WHERE----- //
                    $linha = $usuarios->Linha;
                    $rs = $usuarios->Result;
        
                    if (isset($_POST['ok']) == "true") {
                        $usuarios->alterar($_POST['login'], $_POST['senha'], $_GET['id']);
        
                        echo '<script>alert("Alterado com sucesso !");</script>'; // ===== ALERTA JAVA SCRIPT NA TELA DO USUARIO ===== //
                        echo '<script>window.location="../view/pesqUsuario.php";</script>'; // ===== REDIRECIONA O USUARIO DEPOIS DE FEITA A OPERAÇÃO DESEJADA ===== //
                    }
        
                    break;
                
                case 'autenticar':
                    
                    global $linha;
                    global $rs;

                    $usuarios = new Usuarios();

                if( isset($_POST['login']) && isset($_POST['senha']) != NULL){
                   $login = $_POST['login'];
                   $senha = $_POST['senha'];
                   $usuarios->consultar("SELECT * FROM  usuarios WHERE login = '$login' and senha = '$senha'");
                   $linha = $usuarios->Linha;
                   $rs = $usuarios->Result;
                   $result = mysqli_num_rows($rs);
                   
                    if($result > 0){
                            session_start();
                            $_SESSION['login'] = $_POST['login'];
                            $_SESSION['senha'] = $_POST['senha'];
                            echo "<center><h1>Aguarde um instante</h1></center>";
                            echo "<script>setTimeout(function(){window.location='view/painel.php'}, 3000);</script>";
                        }else{
                            echo "<center><h1 style='color:red;'>Nome de Usuário ou Senha Inválidos</h1></center>";
                            echo "<script>setTimeout(function(){window.location='index.php'}, 3000);</script>";
                        }
                }
                    break;
                 
                 case 'redirecionamento':
                 
                 session_start();
                 if (!isset($_SESSION["login"]) || !isset($_SESSION["senha"])){
                    header("location: ../index.php");
                    exit;
                 }
                 break;
        }
}
