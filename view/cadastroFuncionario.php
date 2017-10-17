<?php 
require 'painel.php';
?>
<div class="centro">
<button type="submit" class="btn btn-success" onclick="window.location.href='cadastroFuncionario.php'">
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
<br>
<br>
<div style="margin-left: auto;margin-right: auto;width: 400px;">
    <form action="" method="post">
        <div class="container">
            <div class="row">
                   <input class="form-control" style="width:300px;" type="text" id="nome" name="nome" placeholder="Digite seu nome" maxlength="30" >
                   <br>                   
                   <input class="form-control" style="width:200px;" type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" maxlength="15" >
                   <br>
                   <input class="form-control" style="width:150px;" type="text" id="telefone" name="telefone" placeholder="Digite seu Telefone" maxlength="12" >  
            </div>
        </div>
    </form>
</div>


</body>
</html>