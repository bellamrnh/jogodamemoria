<?php 
# Conecta com banco de dados
$servidor = "localhost";
$usuario = "root";       
$senha = "";
$banco = "jogo";

	$Conexao = @mysqli_connect("$servidor","$usuario","$senha");
	if(@mysqli_select_db($Conexao,"$banco")== true)
	{ echo "conectado";}
	
	else 
	
	{echo " nao conectado";}

?>