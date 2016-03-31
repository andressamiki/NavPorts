    <div class="container" >
      <div class="col-md-10 col-md-offset-1">  
        <div class="row">
          <span class="col-md-8 col-md-offset-2">
            <h2 class="text-center">
              <?php foreach ($cat as $m ) { ?>
                <?php $idcat = $m->id_categoria;?>
                <?=$m->nm_categoria ?></h2>
              <?php } ?>
          </span>
        </div>

	      <hr/>
        <?php foreach ($perg as $m ) { ?>
        
        <h3 class="text-center"><?= $m->nm_pergunta ?></h3>
        <?php } ?>
        <br>

      
        <ul class="list-group">
           
          <?php  srand((float)microtime()*1000000); ?>
          <?php shuffle($alt); ?>
          <?php foreach ($alt as $m ) { ?>
          <div class=""> 
          <a href="<?php echo base_url();?>verifica-escolha/<?php echo $m['tipo'];?>/<?php echo $m['id_pergunta'];?>/<?php echo $idcat;?>">
            <li class="list-group-item" style="margin-bottom:1%;">
              <label>
                <p class="text-info" style="margin-bottom:0;font-weight:normal;"><?= $m['ds_alternativa'] ?></p>
              </label>
            </li>
            </a>
          </div><!--/.radio-->
          <?php } ?>
        </ul><!--/.list-group -->
  
      </div><!--/.cols -->
    </div><!--/.container -->

    