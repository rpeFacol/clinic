<?php
include 'painel.php';
require_once '../controller/funcionarioController.php';
Proc2("editar");
?>

<form action="#" method="post">
<div class="container">
<div style="margin-left: auto;margin-right: auto; width: 400px;">
    <div class="row">
    <?php while ($objetoEdicao = mysqli_fetch_array($rs)) { ?>
           <input class="form-control" style="width:300px;" type="text" id="nome" name="nome" placeholder="Nome" maxlength="30" value="<?php echo $objetoEdicao['nome']; ?>">
           <br>
           <input class="form-control" style="width:150px;" type="date" id="dataNasc" name="dataNasc" placeholder="Data de Nasc." maxlength="11"value="<?php echo $objetoEdicao['dataNasc']; ?>" >                   
           <br>
           <input class="form-control" style="width:300px;" type="text" id="cargo" name="cargo" placeholder="Digite o Cargo" maxlength="30" value="<?php echo $objetoEdicao['cargo']; ?>">                   
           <br>Endereço:
           <input class="form-control" style="width:100px;" type="text" id="cep" name="cep" placeholder="CEP" maxlength="30"value="<?php echo $objetoEdicao['cep']; ?>" >                   
           <br>
           <input class="form-control" style="width:300px;" type="text" id="logradouro" name="logradouro" placeholder="Logradouro" maxlength="30" value="<?php echo $objetoEdicao['logradouro']; ?>">                   
           <br>
           <input class="form-control" style="width:130px;float:left;" type="text" id="bairro" name="bairro" placeholder="Bairro" maxlength="30" value="<?php echo $objetoEdicao['bairro']; ?>">                   
           <input class="form-control" style="width:50px;float:left;" type="number" id="numero" name="numero" placeholder="Nº" maxlength="30" value="<?php echo $objetoEdicao['numero']; ?>"> 
           <input class="form-control" style="width:115px;float:left;" type="text" id="complemento" name="complemento" placeholder="Complemento" maxlength="30" value="<?php echo $objetoEdicao['complemento']; ?>">                                     
           <br>
           <br>
           <input class="form-control" style="width:100px;float:left;" type="text" id="rg" name="rg" placeholder="RG" maxlength="09" value="<?php echo $objetoEdicao['rg']; ?>">
           <input class="form-control" style="width:100px;" type="text" id="orgaoEmissor" name="orgaoEmissor" placeholder="Orgão Emissor" maxlength="6" value="<?php echo $objetoEdicao['orgaoEmissor']; ?>">                   
           <br>
           <input class="form-control" style="width:200px;" type="text" id="cpf" name="cpf" placeholder="Digite o CPF" maxlength="15" value="<?php echo $objetoEdicao['cpf']; ?>">
           <br>
           <input class="form-control" style="width:150px;" type="text" id="tel_funcionario" name="tel_funcionario" placeholder="Telefone" maxlength="12" value="<?php echo $objetoEdicao['tel_funcionario']; ?>">  
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
           <br> <br> <br>  <br>
           <input type="hidden" name="ok" id="ok"/>     

    </div>
</div>
</form>
</div>



</body>
</html>