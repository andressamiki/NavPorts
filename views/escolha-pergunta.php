<main class="container" >
        
		<ol class="breadcrumb" style="margin-bottom: 5px;margin-top: 35px;">
          <li><a href="<?php echo base_url(); ?>modo-jogo">Modo de jogo</a></li>
          <li><a href="<?php echo base_url(); ?>categorias">Categorias</a></li>
          <li class="active">Escolha a pergunta</li>
        </ol>
        
      <div class="col-md-10 col-md-offset-1">
        <div class="row">
          <h2 class="text-center"><?php foreach ($cat as $m ) { ?>
            <?=$m->nm_categoria ?></h2>
            <?php } ?>
          <hr class="col-md-4 col-md-offset-4">
          </div>
        <div class="row">
          <p class="text-uppercase text-muted text-center">Escolha uma pergunta para começar o jogo.</p>
          </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <?php $i = 1;
        
          //echo "<pre>";
          //var_dump($perg);
          //echo "</pre>";
          
           //echo "<pre>";
          //var_dump($certo);
          //echo "</pre>";
          
          $kk = array();
          
          foreach ($certo as $xa)
          {
            $kk[]= $xa['Pergunta_id_pergunta'];
          }
          
          
          foreach ($perg as $pergunta){
              
            $url = base_url('questao/'.$pergunta['id_pergunta'].'/'.$pergunta['id_categoria']);
            
            if(in_array($pergunta['id_pergunta'],$kk)){
              
              echo "<span class='col-md-2'><a href='$url' class='btn3d btn btn-primary btn-lg center-block' style='background-color:#bbb;box-shadow:0 0 0 1px #bbb inset,0 0 0 2px rgba(255,255,255,.15) inset,0 8px 0 0 #aaa,0 8px 8px 1px rgba(0,0,0,.5)'>$i</a> <br></span>";
            
            }else{
              
              echo "<span class='col-md-2'><a href='$url' class='btn3d btn btn-primary btn-lg center-block'>$i</a> <br></span>";
              
            }
                
              
              
              $i++;
          }
        
        ?>
      
        </div>
      </div>
    </div>

        <div class="row col-md-4 col-md-offset-4">
          <a href="<?php echo base_url(); ?>categorias" class="btn3d btn btn-default center-block"><span class="glyphicon glyphicon-chevron-left"></span> voltar às categorias</a>
        </div>
    </main><!--/.container -->