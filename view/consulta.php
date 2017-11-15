<?php 
    require 'painel.php';
?>
<div class="centro">
<button type="submit" class="btn btn-success">
<span class="glyphicon glyphicon-plus"></span>
	Cadastrar
</button>


<button type="submit" class="btn btn-primary">
<span class="glyphicon glyphicon-pencil"></span>
	Editar
</button>

<button type="submit" class="btn btn-danger">
<span class="glyphicon glyphicon-trash"></span>
	Remover
</button>
</div>
<form action="" method="post">
        <div class="container">
        <div style="margin-left: auto;margin-right: auto; width: 400px;">
            <div class="row">
		<br>
                <input class="form-control" style="width:300px;" type="text" id="cpfPaciente" name="cpfPaciente" placeholder="CPF do Paciente" maxlength="30" >
                <br>
		<input class="form-control" style="width:300px;" type="text" id="nomePaciente" name="nomePaciente" placeholder="Nome do Paciente" maxlength="30" >                   
                   <br>
                   <input class="form-control" style="width:300px;" type="text" id="medicoDesejado" name="medicoDesejado" placeholder="Médico Desejado" maxlength="25" >                   
                   <br>
		   <select class="form-control"style="width:300px;" name="especialMedica">
                        <option selected="">Selecione uma Especialidade</option>
                        <option>Cardiologista</option>
                        <option>Neurologista</option>
                        <option>Psiquiatria</option>
                        <option>Pediatria</option>
                        <option>Ortopedia</option>
                        <option>Clinico Geral</option>
                        <option>Ginecologia</option>
                        <option>Urologia</option>
                        <option>Oftamologia</option>
                        <option>Obstetria</option>
                        <option>Oncologia</option>
                        <option>Psicologia</option>
		  </select>
                   <br>
		   <input class="form-control" style="width:300px;" type="text" id="queixaPaciente" name="queixaPaciente" placeholder="Queixa do Paciente" maxlength="45" >                   
                   <br>
			Dados da Consulta 
		   <br>
                   <input class="form-control" style="width:165px;float:left;" type="date" id="dataConsulta" name="dataConsulta" placeholder="Data da Consulta" maxlength="30" >                   
                   <input class="form-control" style="width:135px;" type="number" id="horaConsulta" name="horaConsulta" placeholder="Hora da Consulta" maxlength="5" >                   
                   <br>
		   <input class="form-control" style="width:165px;" type="text" id="telefoneConsulta" name="telefoneConsulta" placeholder="Telefone de Contato" maxlength="12" >  
                   <br> <br>
                   <div class="centro" style="margin-left: auto;margin-right: auto; width: 195px;">
                   <button type="reset" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span>
                            Reset
                    </button>
                   <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-ok"></span>
                            Cadastrar
                    </button>
                    </div>       
                   <br><br>
                   <br>
                   <br>



</body>
</html>