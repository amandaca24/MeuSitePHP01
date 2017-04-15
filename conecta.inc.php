<?php

	$conexao = mysqli_connect("localhost", "root", "");
	
	if($conexao){
		echo "Conexão feita com sucesso<br>";
	}else{
		echo "Conexão falhou";
	}
	
	// conectando ao BD selecionado 
	
	$db = mysqli_select_db($conexao, "meusite");
	
	if($db){
		echo "Banco selecionado com sucesso";
	}else{
		echo "Banco de dados não selecionado";
	}
	
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
		
	while($tabela = mysqli_fetch_array($query)){
		
		echo $tabela['nome'] ."<br>";
		echo $tabela['email']."<br>";
		echo $tabela['telefone']."<br>";
		echo $tabela['assunto']."<br>";
		echo $tabela['mensagem'];
		
	}
	

?>