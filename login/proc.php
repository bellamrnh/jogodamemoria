<?php

include("conexao.php");
?>

<script language="JavaScript" src="filtros.js"></script>

<?php
#Recebe os dados
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
	

# Insere os dados na tabela fornecedor
$Query01 = "INSERT INTO cadastro (email,nome,senha) VALUES ('$email','$nome','$senha')";
if (mysqli_query($Conexao, $Query01)) {
    echo "<script> AbrirPagina('2','index.php','_top'); </script>";
} else {
    echo "Erro ao inserir: " . mysqli_error($Conexao);
}
	
	@mysqli_close($Conexao);

?>