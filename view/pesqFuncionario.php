<?php 
    include 'painel.php';
    require_once '../controller/funcionarioController.php';
    Proc2("consultar");
?>

<div class="container">

    <form action="#" method="post">
        <fieldset>
            <legend><b>Pesquisar Funcionario</b></legend>

            <div class="form-group col-md-10">
                    <input type="text" style="width: 900px;" class="form-control" id="pesquisa" name="pesquisa" placeholder="Digite o que deseja pesquisar de acordo com a(s) coluna(s) abaixo." value="<?php if(isset($_POST['pesquisa']) != NULL){ echo $_POST['pesquisa']; } ?>">
            </div>

                <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-search"></span>
                        Pesquisar
                </button>

        </fieldset>
     </form>
</div> <!-- fim .container 1 -->

<div class="container">
    <br /> <br />
</div> <!-- fim .container 2 -->


<div >

</div>



<div class="container">
  <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title"><b>Lista de usuarios cadastradas</b></h2>
        </div><!-- fim .panel-heading -->

        <div class="panel-body">
            <table class="table table-hover">
                <tr>
                        <th>Nome</th>
                        <th>cargo</th>
                        <th>cpf</th>
                        <th>RG</th>
                        <th></th>
                </tr>
                <?php while ($objetoConsulta = mysqli_fetch_array($rs)) { ?>

                    <td class="col-md-2"><?php echo $objetoConsulta['nome']; ?></td>
                    <td class="col-md-1"><?php echo $objetoConsulta['cargo']; ?></td>
                    <td class="col-md-1"><?php echo $objetoConsulta['cpf']; ?></td>
                    <td class="col-md-1"><?php echo $objetoConsulta['rg']; ?></td>
                    <td class="col-md-2">
                    <a class="btn btn-primary" href="editFuncionario.php?id_func=<?php echo $objetoConsulta['id_func']; ?>" role="button">Editar</a>
                    <a class="btn btn-danger" href="javascript: if(confirm('Tem certeza que deseja excluir o Funcionario <?php echo $objetoConsulta['nome']; ?> ?'))
                        location.href='pesqFuncionario.php?ok=excluir&id_func=<?php echo $objetoConsulta['id_func']; ?>';" role="button">Excluir</a>
                </td>
                    </tr>
                        <?php }  ?>
            </table>

        </div><!-- fim .panel-body -->
    </div><!-- fim .panel -->
</div><!-- fim .container 3 -->



  </body>
</html>
