<?php 
    include 'painel.php';
?>
<?php  
		date_default_timezone_set('America/Sao_Paulo');
		$hora = date('G');
		if (($hora >= 0) AND ($hora < 6)) 
		{
			$mensagem  = "<center><h2>Boa Madrugada, Seja Bem Vindo!</h2></center>";
		}else if (($hora >= 6) AND ($hora < 12)) 
		{
			$mensagem = "<center><h2>Bom Dia, Seja Bem Vindo!</h2></center>";
		}else if (($hora >=12) AND ($hora < 18)) 
		{
			$mensagem = "<center><h2>Boa Tarde, Seja Bem vindo!</h2></center>";
		}else 
		{
			$mensagem = "<center><h2>Boa Noite, Seja Bem Vindo! <h2></center>";
		}
		echo $mensagem;
	?>

</body>
</html>    