<?php
include 'painel.php';
require_once '../controller/pacienteController.php';
Proc("incluir");
?>

<form action="#" method="post">
	
<div class="container">
        <div style="margin-left: auto;margin-right: auto;width: 400px;">
	<div class="row">
	
        <input class="form-control" style="width: 350px;" type="text" id="nome" name="nome" placeholder="Nome">
	<br>
	<input class="form-control" style="width:200px;" type="text" id="cpf" name="cpf" placeholder="Digite o CPF" maxlength="15">
        <br>
        <input class="form-control" style="width: 200px" type="text" id="nacionalidade" name="nacionalidade" placeholder="nacionalidade">
            <br>
            <select class="form-control" style="width: 300px;" id="sexo" name="sexo">
            	<option>Escolha o Sexo</option>
            	<option>Masculino</option>
            	<option>Feminino</option>
            	<option>Não Especificado</option>
            </select>
            <br>
            <input class="form-control" style="width:100px;float:left;" type="text" id="rg" name="rg" placeholder="RG" maxlength="09" >
            <br>
            <br>
            <br>
            <select class="form-control" style="width: 300px;" id="estado_civil" name="estado_civil">
            	<option>Escolha o Estado Civil</option>
            	<option value="solteiro">Solteiro</option> 
            	<option value="casado">Casado</option>
            </select>
            <br>
            <input class="form-control" style="width: 300px;" type="email" id="email" name="email" placeholder="email">
            <br>
            <input class="form-control" style="width:130px;float:left;" type="text" id="rua" name="rua" placeholder="Rua" maxlength="30" >                   
                   <input class="form-control" style="width:50px;float:left;" type="text" id="numero" name="numero" placeholder="Nº" maxlength="30" >
                   <input class="form-control" style="width:150px;float:left;" type="text" id="bairro" name="bairro" placeholder="bairro" maxlength="30" > 
            <br>
            <br>
            <br>
            <input class="form-control" style="width: 300px;" type="text" id="cidade" name="cidade" placeholder="Cidade">
            <br>
      
      <select class="form-control" style="width: 300px;" id="estado" name="estado">
     
      <option>Selecione o Estado</option>
      <option>Acre</option>
      <option>Alagoas</option>
      <option>Amapá</option>
      <option>Amazonas</option>
      <option>Bahia</option>
      <option>Ceará</option>
      <option>Distrito Federal</option>
      <option>Espírito Santo</option>
      <option>Goiás</option>
      <option>Maranhão</option>
      <option>Mato Grosso</option>
      <option>Mato Grosso do Sul</option>
      <option>Minas Gerais</option>
      <option>Pará</option>
      <option>Paraíba</option>
      <option>Paraná</option>
      <option>Pernambuco</option>
      <option>Piauí</option>
      <option>Rio de Janeiro</option>
      <option>Rio Grande do Norte</option>
      <option>Rio Grande do Sul</option>
      <option>Rondônia</option>
      <option>Roraima</option>
      <option>Santa Catarina</option>
      <option>São Paulo</option>
      <option>Sergipe</option>
      <option>Tocantins</option>
</select>
<br>
      <input class="form-control" style="width: 300px;" id="complemento" type="text" name="complemento" placeholder="Complemento">
      <br>
      <input class="form-control" style="width: 300px;" id="profissao" type="text" name="profissao" placeholder="Profissao">
      <br>
      <input class="form-control" style="width:200px;" type="text" id="tel_paciente" name="tel_paciente" placeholder="Telefone">        
      <br>
      <input class="form-control" style="width: 200px;" type="date" id="data_nasc" name="data_nasc" placeholder="Data de Nascimento">
      <br>
      <br>
     
       <div class="centro" style="margin-left: auto;margin-right: auto; width: 180px;">
                   <button type="reset" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span>
                            Reset
                    </button>
                   <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-ok"></span>
                            Enviar
                    </button>
                    </div> 
                    <input type="hidden" name="ok" id="ok"/>     

</form>

</body>
</html>