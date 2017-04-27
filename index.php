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

    <!-- Custom CSS -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
	
	<link href=css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#about">Projetos</a>
                    </li>
                    <li>
                        <a href="#services">Conteúdo</a>
                    </li>
                    <li>
                        <a href="#contact">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Full Width Image Header -->
    <header class="header-image">
        <div class="headline">
		<div class="container-fluid pagetop" style="background: url(topo.jpg) center;">
		<img class="img-responsive center-block" scr="Paisagem.jpg" heigth="100%" width="100%">
		</div>
            <div class="container">
                <h1>Minha Página PHP</h1>
                <h2>Amanda Carvalho</h2>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <hr class="featurette-divider">

        <!-- First Featurette -->
		
		// <? php 
		
			//include_once(projetos.php); 
		
		// ?>
        <div class="featurette" id="about">
            <img class="featurette-image img-circle img-responsive pull-right" src="passarinho.jpg" heigth="500" width="500">
            <h2 class="featurette-heading">Projetos
                <span class="text-muted">Os melhores projetos</span>
            </h2>
            <p class="lead">Mussum Ipsum, cacilds vidis litro abertis. Si num tem leite então bota uma pinga aí cumpadi! 
			Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. 
			Delegadis gente finis, bibendum egestas augue arcu ut est. Cevadis im ampola pa arma uma pindureta. 
			A ordem dos tratores não altera o pão duris. Mé faiz elementum girarzis, nisi eros vermeio. 
			Diuretics paradis num copo é motivis de denguis. Paisis, filhis, espiritis santis.</p>
        </div>

        <hr class="featurette-divider">

        <!-- Second Featurette -->
		
		<!-- include_once(conteudo.php); -->
        <div class="featurette" id="services">
            <img class="featurette-image img-circle img-responsive pull-left" src="passarinho.jpg" heigth="500" width="500">
            <h2 class="featurette-heading">Conteúdo
                <span class="text-muted">Encontre o conteúdo da Página aqui</span>
            </h2>
            <p class="lead">Mussum Ipsum, cacilds vidis litro abertis. 
			Suco de cevadiss deixa as pessoas mais interessantis. 
			Diuretics paradis num copo é motivis de denguis. Copo furadis é disculpa de bebadis, arcu quam euismod magna. 
			Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis..</p>
        </div>

        <hr class="featurette-divider">

        <!-- Third Featurette -->
		
		<!-- include_once(faleconosco.php); --> 
        <div class="featurette" id="contact">
            <h2 class="featurette-heading">Contato </br>
                <span class="text-muted">Mande para a gente a sua mensagem!</span>
            </h2>
            <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate="">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control" placeholder="Digite seu nome" id="name" required="" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" placeholder=" Digite seu email" id="email" required="" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="phone">Telefone</label>
                                <input type="tel" class="form-control" placeholder="Digite o seu telefone" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="assunto">Assunto</label>
                                <textarea rows="1" class="form-control" placeholder="Assunto" id="assunto" required="" data-validation-required-message="Por favor, informe o assunto."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="message">Menssage</label>
                                <textarea rows="5" class="form-control" placeholder="Escreva aqui a sua mensagem" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div> 

        <hr class="featurette-divider">

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
