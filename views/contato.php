

      <main class="container">
            <h2 class="text-center">Contato</h2>
			<hr>
			<section class="col-md-10 col-md-offset-1">
				<h4 class="text-center">Se você gostou, tem dúvidas ou sugestões para melhorar o NavePorts envie um e-mail para entrar em contato com o Professor <a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4204297E5" target=_blank>Júlio Raymundo</a>.</h4>
			</section>
			
			<form class="form-horizontal col-md-10 col-md-offset-1 contato-form" method="POST" action="/index.php/Controle/InsCont">
			  <div class="form-group">
  				<label for="nome" class="col-md-2 control-label">(*) Nome:</label>
  				<div class="col-md-9">
  				  <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome" required />
  				</div>
			  </div>

			  <div class="form-group">
  				<label for="email" class="col-md-2 control-label">(*) E-mail:</label>
  				<div class="col-md-9">
  				  <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu e-mail" required />
  				</div>
			  </div>
			  
			  <div class="form-group">
  				<label for="assunto" class="col-md-2 control-label">Assunto:</label>
  				<div class="col-md-9">
  				  <input type="text" name="assunto" class="form-control" id="assunto" placeholder="Digite o assunto da mensagem" />
  				</div>
			  </div>
			  
			  <div class="form-group ">
  				<label for="mensagem" class="col-md-2 control-label">(*) Mensagem:</label>
  				<div class="col-md-9">
  					<textarea name="msg" class="form-control" rows="3" placeholder="Digite sua mensagem" required></textarea>
  				</div>
			  </div>
			  
				<p class="text-left">(*) São campos obrigatórios</p>

			  <div class="col-md-2 pull-right">
  				<button type="submit" class="btn3d btn btn-primary">Enviar</button>
			  </div>
			</form>       
        

      </main> <!--/.container -->

    