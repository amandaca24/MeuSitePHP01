<?php

	$conexao = mysqli_connect("localhost", "root", "");
	
	
	// conectando ao BD selecionado 
	
	$db = mysqli_select_db($conexao, "meusite");
	
	/*
	$query = mysqli_query(
		$conexao, "CREATE TABLE faleconosco
		(id int PRIMARY KEY AUTO_INCREMENT,  
		nome VARCHAR (100),
		email VARCHAR (20),
		telefone int,
		assunto VARCHAR (100),
		mensagem text
		)"
	)*/
	/*
	$query = mysqli_query(
		$conexao, "INSERT INTO faleconosco
		(nome, email, telefone, assunto, mensagem) VALUES ('Amanda', 'amanda@email', 3797294842, 'Envio Fale Conosco', 'Envio via site')");
		*/
		
	$query = mysqli_query(
		$conexao, "SELECT * FROM faleconosco"
	);
	

?>