<?php
include 'painel.php';
require_once '../controller/funcionarioController.php';
Proc2("incluir");
?>


    <form action="#" method="post">
        <div class="container">
        <div style="margin-left: auto;margin-right: auto; width: 400px;">
            <div class="row">
                   <input class="form-control" style="width:300px;" type="text" id="nome" name="nome" placeholder="Nome" maxlength="30" >
                   <br>
                   <input class="form-control" style="width:150px;" type="date" id="dataNasc" name="dataNasc" placeholder="Data de Nasc." maxlength="11" >                   
                   <br>
                   <input class="form-control" style="width:300px;" type="text" id="cargo" name="cargo" placeholder="Digite o Cargo" maxlength="30" >                   
                   <br>Endereço:
                   <input class="form-control" style="width:100px;" type="text" id="cep" name="cep" placeholder="CEP" maxlength="30" >                   
                   <br>
                   <input class="form-control" style="width:300px;" type="text" id="logradouro" name="logradouro" placeholder="Logradouro" maxlength="30" >                   
                   <br>
                   <input class="form-control" style="width:130px;float:left;" type="text" id="bairro" name="bairro" placeholder="Bairro" maxlength="30" >                   
                   <input class="form-control" style="width:50px;float:left;" type="number" id="numero" name="numero" placeholder="Nº" maxlength="30" > 
                   <input class="form-control" style="width:115px;float:left;" type="text" id="complemento" name="complemento" placeholder="Complemento" maxlength="30" >                                     
                   <br>
                   <br>
                   <input class="form-control" style="width:100px;float:left;" type="text" id="rg" name="rg" placeholder="RG" maxlength="09" >
                   <input class="form-control" style="width:100px;" type="text" id="orgaoEmissor" name="orgaoEmissor" placeholder="Orgão Emissor" maxlength="6" >                   
                   <br>
                   <input class="form-control" style="width:200px;" type="text" id="cpf" name="cpf" placeholder="Digite o CPF" maxlength="15" >
                   <br>
                   <input class="form-control" style="width:150px;" type="text" id="tel_funcionario" name="tel_funcionario" placeholder="Telefone" maxlength="12" >  
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
                   <br><br>
                   <br>
                   <br>
                   <input type="hidden" name="ok" id="ok"/>     

            </div>
        </div>
    </form>
</div>


</body>
</html>
