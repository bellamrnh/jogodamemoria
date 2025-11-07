<?php

include("../conexao/conexao.php");


?>

<script language="JavaScript" src="filtros.js"></script>

<?php

#Recebe os dados
$id = $_GET["id"];
$email = $_POST["email"];
$senha = $_POST["senha"];
	

# Insere os dados na tabela fornecedor
$Query02 = "SELECT * FROM cadastro WHERE email='$email' AND senha='$senha'";
$QueryExec02 = @mysqli_query($Conexao,$Query02);

if (@mysqli_num_rows($QueryExec02) > 0)
{
    header("Location: ../login/inicio.php");
	
}
else
{
    echo "<script>
            alert('E-mail ou senha incorretos!');
            window.history.back();
          </script>";
}
 
 



	@mysqli_close($Conexao);

?>