<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Minha página PHP</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<link href="css/one-page-wonder.css" rel="stylesheet">
	
	<link href="css/style.css" rel="stylesheet">
	
	

</head>

<body>

	<?php
			include_once("topo.php");
			include_once("menu.php");
		
			
			if(empty($_SERVER["QUERY_STRING"])){
					$var="index.php";
					include_once("$var");
			}else{
					$pg= $_GET['pg'];
					include_once("$pg.php"); 
			}
		
			
		?>

    <!-- Page Content -->
    <div class="container">

        

        <!-- First Featurette -->
		
         <?php 
		
			include_once("projetos.php"); 
			
		
		?>
		

        <hr class="featurette-divider">

        <!-- Second Featurette -->
		
		<?php
		
		include_once("conteudo.php"); 
		
		?>
        
        <hr class="featurette-divider">

        <!-- Third Featurette -->
		
		<?php 
		
		include_once("faleconosco.php"); 

		?>
</div> 

        <hr class="featurette-divider">
		<?php
		
		include_once("rodape.php");
		
		?>
       
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
