<main class="container">

    <div class="col-md-10 col-md-offset-1">
      <div class="row" >
            <h2 class="text-center">Relatório final</h2>
  			    <hr>
      </div> <!--/.row-->

      <div class="row" >
            <h4>Quantidade de questões respondidas: <strong> <?= $qtdeRespondidas ?> </strong></h4>
            <h4>Quantidade de questões  <span class="text-success"> certas: <strong> <?= $certas ?> </strong></h4></span>
            <h4>Quantidade de questões <span class="text-danger">erradas: <strong> <?= $erradas ?> </strong></span></h4>
      </div> <!--/.row-->
      <br>
      <div class="row" >
            <h3 class="text-center rel-h3">Perguntas respondidas</h3><br>
            <?php foreach($perguntas as $p){ ?>
                  <h4 class="rel-h4"> <?= $p['nm_pergunta'] ?> </h4>
                  <?php if( $p['acerto'] ){ ?>
                        <p class="text-success text-uppercase rel-p"> certo </p>
                  <?php }else{ ?>
                        <p class="text-danger text-uppercase rel-p"> errado </p>
                  <?php } ?>
            <?php } ?>
      </div> <!--/.row-->

    </main> <!--/.container -->