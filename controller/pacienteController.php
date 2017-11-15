<?php

$arquivo = $_SERVER['DOCUMENT_ROOT'] . '/clinic/model/Paciente.php';

include_once($arquivo);  // ----- CARREGA A CLASSE CONSULTA  ----- //

function Proc($Proc){
    
    switch($Proc){
    
        case 'incluir':
              
              global $linha;
              global $rs;

              $spaciente = new Paciente();
              $spaciente->consultar("select * from paciente");
              $linha = $spaciente->Linha;
              $rs = $spaciente->Result;

              if(isset($_POST['ok']) == 'true'){
                  $spaciente->incluir($_POST['nome'], $_POST['cpf'], $_POST['nacionalidade'], $_POST['sexo'], $_POST['rg'],
                   $_POST['estado_civil'], $_POST['email'], $_POST['rua'], $_POST['numero'], $_POST['bairro'], $_POST['cidade'],
                    $_POST['estado'], $_POST['complemento'], $_POST['profissao'], $_POST['data_nasc'], $_POST['tel_paciente']);
                    
                    echo '<script>alert("Cadastrado com sucesso !");</script>';
                    echo '<script>window.location="../view/cadastrarPaciente.php";</script>';
              }
              

              break;
              
              case 'consultar': 
              
                          global $linha; 
                          global $rs; 
              
                          $spaciente = new Paciente(); 
              
                          $filtro_sql = "";
              
                          if (isset($_POST['pesquisa']) != NULL) {
              
                              $filtro = $_POST['pesquisa'];
              
                              $filtro_sql = ("where nome like '%$filtro%' or id_paciente like '%$filtro%' or cpf like '%$filtro%' or rg like '%$filtro%'");
              
                          }
                              $spaciente->consultar("select * from paciente $filtro_sql"); // ----- REALIZA UMA CONSULTA E CARREGA PARA AS VARIAVEIS GLOBAIS ----- //
                              $linha = $spaciente->Linha;
                              $rs = $spaciente->Result;
              
                          if (isset($_REQUEST['ok']) == "excluir") {
                              $spaciente->excluir($_REQUEST['id_paciente']);
                              echo '<script>alert("Excluido com sucesso !");</script>'; // ===== ALERTA JAVA SCRIPT NA TELA DO USUARIO ===== //
                              echo '<script>window.location="../view/pesqPaciente.php";</script>'; // ===== REDIRECIONA O USUARIO DEPOIS DE FEITA A OPERAÇÃO DESEJADA ===== //
                          }
              
                          break;
              
              
                      case 'editar':
              
                          global $linha; // ----- VARIAVEL GLOBAL LINHA ----- //
                          global $rs; // ----- VARIALVEL GLOGAL RS, É NOSSO CONJUNTO DE DADOS OU RESULTADO ----- //
              
                          $spaciente = new Paciente(); // ----- CRIA O OBJETO DE USUARIO ----- //
              
                          $spaciente->consultar("select * from paciente where id_paciente=" . $_GET['id_paciente']); // ----- REALIZA UMA CONSULTA E CARREGA PARA AS VARIAVEIS GLOBAIS NESTE CASO UMA CONSULTA ESPECIFICA PARA O ID DE spaciente VEJA O WHERE----- //
                          $linha = $spaciente->Linha;
                          $rs = $spaciente->Result;
              
                          if (isset($_POST['ok']) == "true") {
                              
                              $spaciente->alterar($_POST['nome'], $_POST['cpf'], $_POST['nacionalidade'], $_POST['sexo'], $_POST['rg'],
                              $_POST['estado_civil'], $_POST['email'], $_POST['rua'], $_POST['numero'], $_POST['bairro'], $_POST['cidade'],
                               $_POST['estado'], $_POST['complemento'], $_POST['profissao'], $_POST['data_nasc'], $_POST['tel_paciente'], 
                               $_GET['id_paciente']);
              
                              echo '<script>alert("Alterado com sucesso !");</script>'; // ===== ALERTA JAVA SCRIPT NA TELA DO USUARIO ===== //
                              echo '<script>window.location="../view/pesqPaciente.php";</script>'; // ===== REDIRECIONA O USUARIO DEPOIS DE FEITA A OPERAÇÃO DESEJADA ===== //
                          }
                             
                          break;
            
              }
      }