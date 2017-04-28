<div class="featurette" id="contact">
            <h2 class="featurette-heading">Contato </br>
                <span class="text-muted">Mande para a gente a sua mensagem!</span>
            </h2>
<div class="col-lg-8 col-lg-offset-2">
    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
    <form name="sentMessage" id="contactForm" novalidate="" action="?pg=contato" method="post">
        <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="name">Nome</label>
            <input type="text" class="form-control" placeholder="Digite seu nome" id="nome" name="nome" 
			required="" data-validation-required-message="Por favor, digite o seu nome.">
            <p class="help-block text-danger"></p>
        </div>
        </div>
        <div class="row control-group"> 
		<div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="email">Email</label>
            <input type="email" class="form-control" placeholder=" Digite seu email" id="email" name="email" 
			required="" data-validation-required-message="Por favor, digite o seu email.">
            <p class="help-block text-danger"></p>
        </div>
        </div>
        <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="phone">Telefone</label>
            <input type="tel" class="form-control" placeholder="Digite o seu telefone" id="telefone" name="telefone" 
			required="" data-validation-required-message="Por favor, digite o seu telefone.">
            <p class="help-block text-danger"></p>
        </div>
        </div>
		<div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="assunto">Assunto</label>
            <textarea rows="1" class="form-control" placeholder="Assunto" id="assunto" name="assunto" required="" data-validation-required-message="Por favor, informe o assunto."></textarea>
            <p class="help-block text-danger"></p>
        </div>
        <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="message">Menssage</label>
            <textarea rows="5" class="form-control" placeholder="Escreva aqui a sua mensagem" id="mensagem" name="mensagem" required="" data-validation-required-message="Por favor, digite a sua mensagem."></textarea>
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
		

