<?php 
    include 'painel.php';
    require_once '../controller/usuariosController.php';
    Processo("incluir");
?>

<form action="#" method="post">
	<div class="container">
        <fieldset>
            <legend><b>Cadastro de Usuario</b></legend>

	    <div style="margin-left: auto;margin-right: auto;width: 400px;">
	
		<div class="row">
			<input class="form-control" style="width: 300px;" type="text" id="login" name="login" placeholder="Nome de usuario">
			<br>
			<input class="form-control" style="width:200px;" type="password" id="senha" name="senha" placeholder="Digite sua senha">
            <br>
            <br>
            <br>
       <div class="centro" style="margin-left: auto;margin-right: auto; width: 180px;">
          
            <button type="reset" class="btn btn-danger">
                <span class="glyphicon glyphicon-trash"></span>
                Limpar
            </button>
          
            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-ok"></span>
                Enviar
            </button>
            <input type="hidden" name="ok" id="ok" />
        </div> 

</form>

</body>
</html>