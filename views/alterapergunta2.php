
<div class="container">
 
 <h3 class="text-center">Selecione a Categoria onde a pergunta se encontra</h3>
 
		<div class="col-md-12">
  				<form class="form-horizontal container" method="POST" action='altera-pergunta'>
          <div class="form-group">
            <label for="categoria" class="col-md-2 control-label">Categoria:</label>
            <div class="col-md-7">
              <select  class="form-control" name="categoria" id="categoria">
                <?php foreach($cats as $cat)
                {
                  echo "<option value=".$cat->id_categoria.">".$cat->nm_categoria."</option>"; 
                } 
                ?>
                
              </select>
            </div>
          </div>
            <div class="col-md-offset-8">
               <button class="btn btn-primary" type="submit" style="margin-left:5%;">Enviar</button>
            </div>
        </form>
    </div>
        	
</div>
</main>