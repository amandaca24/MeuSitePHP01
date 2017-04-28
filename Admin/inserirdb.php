<?php

$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$texto = $_POST['texto'];

$sql = "INSERT INTO admin VALUES 
('', '$titulo', '$subtitulo', '$texto')";

//echo $sql;

$insert = mysqli_query($conexao, $sql);

if(!$insert){
    echo "<h4 style='color: red;'>Ocorreu um erro ao cadastrar no banco de dados.</h4> <a href='?pg=inserir'>Tente Novamente</a>";
}else{
   echo "<h3 style='color: blue;'>Cadastro realizado com sucesso!</h3>";
}
?>