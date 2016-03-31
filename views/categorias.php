<main class="container">
            
		<ol class="breadcrumb" style="margin-bottom: 5px;margin-top: 35px;">
          <li><a href="modo-jogo">Modo de jogo</a></li>
          <li class="active">Categorias</li>
        </ol>
        
      <div class="row">
        <h2 class="text-center">Categorias</h2>
        <hr class="col-md-4 col-md-offset-4 cat-hr">
        </div>
      <div class="row">
        <p class="text-uppercase text-muted text-center">Escolha uma categoria para iniciar.</p>
      </div>
      
      <br>

       <div class="row">
        <?php foreach($cats as $cat)
        echo "<div class='col-md-3'><a href='escolha-pergunta/".$cat->id_categoria."' class='btn3d btn btn-primary btn-lg btn-block cat-btn'>".$cat->nm_categoria."</a> </div>";
        ?>
      </div>

      <br><br>

        <div class="row col-md-4 col-md-offset-4">
          <a href="modo-jogo" class="btn3d btn btn-default center-block"><span class="glyphicon glyphicon-chevron-left"></span> voltar ao modo de jogo</a>
        </div>

    </main> <!--/.container -->