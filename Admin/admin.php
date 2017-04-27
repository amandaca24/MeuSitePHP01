<?php
include "config.inc.php";

	session_start();
	if (isset($_POST["sair"])) {
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		header('location:../index.php?pg=login');
	}
	if (!isset($_SESSION['login']) and !isset($_SESSION['senha'])) {
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		header('location:../index.php?pg=login');
	}
	$usuario = $_SESSION['login'];
?>


?>
<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Minha página PHP - Admin</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/modern-business.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

       <?php include "header.phtml"; ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Painel Admin </h1>
                <ol class="breadcrumb">
                    <li><a href="admin.php">Home</a>
                    </li>
                    <li class="active"><a href="?pg=admin/listar">Listar</a></li>
                    <li class="active"><a href="?pg=admin/inserir">Inserir Novo</a></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <?php
        // Declarando as variáveis de acesso as páginas
        $var = "admin/home.php";
        // o @ suprime avisos de erro do PHP.
        @$pg = $_GET['pg'];
    
        // Utilizando a variável Superglobal SERVER
        // Para testar se o parâmetro Query_String está
        // sendo utilizado.
    
        if(empty($_SERVER["QUERY_STRING"])) {
            include("$var");
        } else {
            include("$pg.php");
        }
    ?>
        

        <hr>

        <!-- Footer -->
        <?php include "footer.php"; ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
