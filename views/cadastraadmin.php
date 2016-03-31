

      <div class="container">

        <h3 class="text-center">Cadastrar Administrador</h3>
  			<form class="form-horizontal container admin-form" method="post" action="cadastra-admin">
          <div class="form-group">
              <label for="nome" class="col-md-2 control-label">Nome:</label>
              <div class="col-md-7">
                <input type="text" name="nome" class="form-control" id="nome" placeholder="" required>
              </div>
            </div>

            <div class="form-group">
              <label for="tel" class="col-md-2 control-label">Telefone:</label>
              <div class="col-md-7">
                <input type="text" name="telefone" class="form-control" id="tel" placeholder="" required>
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="col-md-2 control-label">E-mail:</label>
              <div class="col-md-7">
                <input type="email" name="email" class="form-control" id="email" placeholder="" required>
              </div>
            </div>

            <div class="form-group">
              <label for="senha" class="col-md-2 control-label">Senha:</label>
              <div class="col-md-7">
                <input type="password" name="senha" class="form-control" id="senha" placeholder="" required>
              </div>
            </div>

            <div class="col-md-offset-8">
              <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
        </form>
        
        </div>
      </main>
		  <script>
    function cadastrar () {
      var nome = (document.getElementById('nome').innerHTML);
      var tel = (document.getElementById('tel').innerHTML);
      var email = (document.getElementById('email').innerHTML);
      var senha = (document.getElementById('senha').innerHTML);
      if (nome == "" || email == "" || senha == "" || tel == "") {
        alert ("Preencha todos os campos");
      } else {
        alert ("Cadastro efetuado com sucesso!");
      }
    }
  </script>