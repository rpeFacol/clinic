<?php
include 'painel.php';
require_once '../controller/pacienteController.php';
Proc("editar");
?>

<form action="#" method="post">
	
<div class="container">
        <div style="margin-left: auto;margin-right: auto;width: 400px;">
	<div class="row">
        
        <?php while ($objetoEdicao = mysqli_fetch_array($rs)) { ?>
        
        <input class="form-control" style="width: 300px;" type="text"  id="nome" name="nome" value="<?php echo $objetoEdicao['nome']; ?>" placeholder="matricula">
        <br>
        <input class="form-control" style="width: 300px;" type="text" disabled  value="<?php echo $objetoEdicao['id_paciente']; ?>" placeholder="matricula">
	<br>
	<input class="form-control" style="width:200px;" type="text" id="cpf" name="cpf" placeholder="Digite o CPF" value="<?php echo $objetoEdicao['cpf']; ?>" maxlength="15">
        <br>
        <input class="form-control" style="width: 200px" type="text" id="nacionalidade" name="nacionalidade" value="<?php echo $objetoEdicao['nacionalidade']; ?>" placeholder="nacionalidade">
            <br>
           
            <?php
                echo "<select style='width: 300px;' class='form-control' id='sel' name='sexo'>";
	        echo "<option selected=''>Escolha o Sexo</option>";

		$array_sexo = array('masculino', 'feminino', 'Não Especificado');

		$value = $objetoEdicao['sexo'];

		foreach($array_sexo as $val1){
		if ($val1 == $value) {
			$sel = 'selected="selected"';
		}else {
			$sel = '';
		}
		        echo '<option value="'.$val1.'" '.$sel.'>'.$val1.'</option>';
		}
			echo "</select>";
		?> 	
         
            <br>
            
            <input class="form-control" style="width:100px;float:left;" type="text" id="rg" name="rg" placeholder="RG" maxlength="09" value="<?php echo $objetoEdicao['rg']; ?>">
            <br>
            <br>
            <br>
            
            <?php
                echo "<select style='width: 300px;' class='form-control' id='sel1' name='estado_civil'>";
                echo "<option selected=''>Estado Civil</option>";

                  $array_civil = array('Solteiro', 'Casado');

                  $value = $objetoEdicao['estado_civil'];

                  foreach($array_civil as $val2){
                          if ($val2 == $value) {
                                  $sel1 = 'selected="selected"';
                          }else {
                                  $sel1 = '';
                          }
                          echo '<option value="'.$val2.'" '.$sel1.'>'.$val2.'</option>';
                  }
                echo "</select>";
           ?>

            <br>
            <input class="form-control" style="width: 300px;" type="email" id="email" name="email" placeholder="email" value="<?php echo $objetoEdicao['email']; ?>">
            <br>
            <input class="form-control" style="width:130px;float:left;" type="text" id="rua" name="rua" placeholder="Rua" maxlength="30" value="<?php echo $objetoEdicao['rua']; ?>">                   
                   <input class="form-control" style="width:50px;float:left;" type="text" id="numero" name="numero" placeholder="Nº" maxlength="30" value="<?php echo $objetoEdicao['numero']; ?>">
                   <input class="form-control" style="width:150px;float:left;" type="text" id="bairro" name="bairro" placeholder="bairro" maxlength="30" value="<?php echo $objetoEdicao['bairro']; ?>"> 
            <br>
            <br>
            <br>
            <input class="form-control" style="width: 300px;" type="text" id="cidade" name="cidade" value="<?php echo $objetoEdicao['cidade']; ?>" placeholder="Cidade">
            <br>
      
            <?php
                echo "<select style='width: 300px;' class='form-control' id='sel2' name='estado'>";
                echo "<option selected=''>Selecione o seu Estado</option>";

                  $array_estado = array('Acre', 'Alagoas', 'Amapá', 'Amazonas', 'Bahia', 'Ceará', 'Distrito Federal', 'Espírito Santo',
                  'Goiás', 'Maranhão', 'Mato Grosso', 'Mato Grosso do Sul', 'Minas Gerais', 'Pará', 'Paraíba', 'Paraná', 'Pernambuco', 
                  'Piauí', 'Rio de Janeiro', 'Rio Grande do Norte', 'Rio Grande do Sul', 'Rondônia', 'Roraima', 'Santa Catarina', 'São Paulo', 
                  'Sergipe', 'Tocantins');

                  $value = $objetoEdicao['estado'];

                  foreach($array_estado as $val3){
                          if ($val3 == $value) {
                                  $sel2 = 'selected="selected"';
                          }else {
                                  $sel2 = '';
                          }
                          echo '<option value="'.$val3.'" '.$sel2.'>'.$val3.'</option>';
                  }
                echo "</select>";
           ?>
      <br>
      <input class="form-control" style="width: 300px;" id="complemento" type="text" name="complemento" value="<?php echo $objetoEdicao['complemento']; ?>" placeholder="Complemento">
      <br>
      <input class="form-control" style="width: 300px;" id="profissao" type="text" name="profissao" value="<?php echo $objetoEdicao['profissao']; ?>" placeholder="Profissao">
      <br>
      <input class="form-control" style="width:200px;" type="text" id="tel_paciente" name="tel_paciente" value="<?php echo $objetoEdicao['tel_paciente']; ?>" placeholder="Telefone">        
      <br>
      <input class="form-control" style="width: 200px;" type="date" id="data_nasc" name="data_nasc" value="<?php echo $objetoEdicao['data_nasc']; ?>" placeholder="Data de Nascimento">
      <br>
      <br>
      <?php }  ?>
       <div class="centro" style="margin-left: auto;margin-right: auto; width: 180px;">

                   <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-ok"></span>
                           Salvar
                    </button>
                    
                    <input type="hidden" name="ok" id="ok" />

                    <button type="reset" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span>
                            Reset
                    </button>
                    </div> 
</form>

</body>
</html>