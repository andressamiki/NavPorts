 
        <div class="container">
          
        <h3 class="text-center">Cadastrar Pergunta</h3>
  			<form class="form-horizontal container admin-form" method="post" action="pergunta-cadastrada" enctype="multipart/form-data">
          <div class="form-group">
            <label for="pergunta" class="col-md-2 control-label">Pergunta:</label>
            
            <div class="col-md-7">
              <input type="text" name="nome" class="form-control" id="pergunta" required>
              <input type="file" name="img_perg" id="img_perg">
            </div>
          </div>
          
          
          <div class="form-group">
            <label for="fonte" class="col-md-2 control-label">Fonte:</label>
            
            <div class="col-md-7">
              <input type="text" name="fonte" class="form-control" id="fonte">
            </div>
          </div>
          
          

          <div class="form-group">
            <label for="categoria" class="col-md-2 control-label">Categoria:</label>
            <div class="col-md-7">
              <select  class="form-control" name="categoria" id="categoria">
                <?php foreach($cats as $cat){ echo "<option value=".$cat->id_categoria.">".$cat->nm_categoria."</option>"; } ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="correta" class="col-md-2 control-label">Alternativa <span class="bg-success">certa</span>:</label>
            <div class="col-md-7">
              <input type="text" name="correta" class="form-control" id="correta" placeholder="" required>
              
            </div>
          </div>

          <div class="form-group">
            <label for="incorreta1" class="col-md-2 control-label">Alternativa <span class="bg-danger">errada 1</span>:</label>
            <div class="col-md-7">
              <input type="text" name="incorreta1" class="form-control" id="incorreta1" placeholder="" required>
              
            </div>
          </div>

          <div class="form-group">
            <label for="incorreta2" class="col-md-2 control-label">Alternativa <span class="bg-danger">errada 2</span>:</label>
            <div class="col-md-7">
              <input type="text" name="incorreta2" class="form-control" id="incorreta2" placeholder="" required>
              
            </div>
          </div>

          <div class="form-group">
            <label for="incorreta3" class="col-md-2 control-label">Alternativa <span class="bg-danger">errada 3</span>:</label>
            <div class="col-md-7">
              <input type="text" name="incorreta3" class="form-control" id="incorreta3" placeholder="" required>
              
            </div>
          </div>

            <div class="col-md-offset-8">
               <button class="btn btn-primary" type="submit">cadastrar</button>
            </div>
        </form>
        
        </div>
        </main>


<script>
    function cadastrar () {
      var pergunta = (document.getElementById('pergunta').innerHTML);
      var categoria = (document.getElementById('categoria').innerHTML);
      var correta = (document.getElementById('correta').innerHTML);
      var incorreta1 = (document.getElementById('incorreta1').innerHTML);
      var incorreta2 = (document.getElementById('incorreta2').innerHTML);
      var incorreta3 = (document.getElementById('incorreta3').innerHTML);
      if (pergunta == "" || correta == "" || categoria == "" || correta == "" || incorreta1 == "" || incorreta2 == "" || incorreta3 == "") {
        alert ("Preencha todos os campos");
      } else {
        alert ("Cadastro efetuado com sucesso!");
      }
    }
  </script>

