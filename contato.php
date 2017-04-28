<?php

include_once("conecta.inc.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];


$sqli = "INSERT INTO faleconosco VALUES 
('', '$nome', '$email', '$telefone', '$assunto', '$mensagem')";
	
$insert = mysqli_query($conexao, $sqli);

	if(!$insert){
		echo "<h4 style='color: red;'>Ocorreu um erro ao cadastrar no banco de dados.
		</h4> <a href='?pg=faleconosco'>Tente Novamente</a>";
	}else{
		echo "<script language='javascript' TYPE='text/javascript'>
			alert ('Sua mensagem foi enviada com sucesso!') 
			</script>";
}
?>	