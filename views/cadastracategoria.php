 
  <div class="container">
    <h3 class="text-center">Cadastrar Categoria</h3>
  			<form class="form-horizontal container admin-form" method="post" action="cad_cat">
          <div class="form-group">
              <label for="nome" class="col-md-2 control-label">Nome:</label>
              <div class="col-md-7">
                <input type="text" name="nome" class="form-control" id="nome" placeholder="" required>
              </div>
            </div>

            <div class="col-md-offset-8">
              <!--<p><a href="#" class="btn btn-primary" onclick="cadastrar()">cadastrar</a></p>-->
              <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
        </form>

    </div>
		</main>
		<script>
    function cadastrar () {
      var nome = (document.getElementById('nome').innerHTML);      
      if (nome !== "") {
        alert ("Cadastro efetuado com sucesso!");
      } else {
        alert ("Preencha todos os campos");
      }
    }
    </script>