<?php

$arquivo = $_SERVER['DOCUMENT_ROOT'] . '/clinic/model/Funcionario.php';

include_once($arquivo);  // ----- CARREGA A CLASSE CONSULTA  ----- //

function Proc2($Proc2){
    
    switch($Proc2){
    
        case 'incluir':
              
              global $linha;
              global $rs;

              $sfuncionario = new Funcionario();
              $sfuncionario->consultar("select * from funcionario");
              $linha = $sfuncionario->Linha;
              $rs = $sfuncionario->Result;

              if(isset($_POST['ok']) == 'true'){
                  $sfuncionario->incluir($_POST['nome'], $_POST['dataNasc'], $_POST['cargo'], $_POST['cep'], $_POST['logradouro'],
                   $_POST['bairro'], $_POST['numero'], $_POST['complemento'], $_POST['rg'], $_POST['orgaoEmissor'], $_POST['cpf'], 
                   $_POST['tel_funcionario']);
                    
                    echo '<script>alert("Cadastrado com sucesso !");</script>';
                    echo '<script>window.location="../view/cadastrarFuncionario.php";</script>';
              }
              

              break;
              
              case 'consultar': 
              
                          global $linha; 
                          global $rs; 
              
                          $sfuncionario = new Funcionario(); 
              
                          $filtro_sql = "";
              
                          if (isset($_POST['pesquisa']) != NULL) {
              
                              $filtro = $_POST['pesquisa'];
              
                              $filtro_sql = ("where nome like '%$filtro%' or cargo like '%$filtro%' or cpf like '%$filtro%' or rg like '%$filtro%'");
              
                          }
                              $sfuncionario->consultar("select * from funcionario $filtro_sql"); // ----- REALIZA UMA CONSULTA E CARREGA PARA AS VARIAVEIS GLOBAIS ----- //
                              $linha = $sfuncionario->Linha;
                              $rs = $sfuncionario->Result;
              
                          if (isset($_REQUEST['ok']) == "excluir") {
                              $sfuncionario->excluir($_REQUEST['id_func']);
                              echo '<script>alert("Excluido com sucesso !");</script>'; // ===== ALERTA JAVA SCRIPT NA TELA DO USUARIO ===== //
                              echo '<script>window.location="../view/pesqFuncionario.php";</script>'; // ===== REDIRECIONA O USUARIO DEPOIS DE FEITA A OPERAÇÃO DESEJADA ===== //
                          }
              
                          break;
              
              
                      case 'editar':
              
                          global $linha; // ----- VARIAVEL GLOBAL LINHA ----- //
                          global $rs; // ----- VARIALVEL GLOGAL RS, É NOSSO CONJUNTO DE DADOS OU RESULTADO ----- //
              
                          $sfuncionario = new Funcionario(); // ----- CRIA O OBJETO DE USUARIO ----- //
              
                          $sfuncionario->consultar("select * from funcionario where id_func=" . $_GET['id_func']); // ----- REALIZA UMA CONSULTA E CARREGA PARA AS VARIAVEIS GLOBAIS NESTE CASO UMA CONSULTA ESPECIFICA PARA O ID DE spaciente VEJA O WHERE----- //
                          $linha = $sfuncionario->Linha;
                          $rs = $sfuncionario->Result;
              
                          if (isset($_POST['ok']) == "true") {
                              
                              $sfuncionario->alterar($_POST['nome'], $_POST['dataNasc'], $_POST['cargo'], $_POST['cep'], $_POST['logradouro'],
                              $_POST['bairro'], $_POST['numero'], $_POST['complemento'], $_POST['rg'], $_POST['orgaoEmissor'], $_POST['cpf'], 
                              $_POST['tel_funcionario'], $_GET['id_func']);
              
                              echo '<script>alert("Alterado com sucesso !");</script>'; // ===== ALERTA JAVA SCRIPT NA TELA DO USUARIO ===== //
                              echo '<script>window.location="../view/pesqFuncionario.php";</script>'; // ===== REDIRECIONA O USUARIO DEPOIS DE FEITA A OPERAÇÃO DESEJADA ===== //
                          }
                             
                          break;
            
              }
      }