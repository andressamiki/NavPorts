
<div class="container">
   <div class="row">
     <h3 class="text-center"><?php echo $perg[0]['nm_categoria']; ?></h3>
   </div>
		<div class="col-md-12">
  			<table class="table table-striped">
                <thead>
                  <tr>
                    <th class="col-md-6">Perguntas</th>
                    <th class="col-md-6">Renomear</th>
                    <th class="col-md-6">Alternativa Correta</th>
                    <th class="col-md-6">Renomear alternativa</th>
                    <th class="col-md-6">Alternativa Incorreta</th>
                    <th class="col-md-6">Renomear alternativa</th>
                    <th class="col-md-6">Alternativa Incorreta</th>
                    <th class="col-md-6">Renomear alternativa</th>
                    <th class="col-md-6">Alternativa Incorreta</th>
                    <th class="col-md-6">Renomear alternativa</th>
                    <th class="col-md-6">Excluir</th>
                  </tr>
                </thead>
                <tbody>
               
        		<?php foreach ($perg as $m ) { ?>
        		          
                    <tr>
                        <td class="col-md-3"><?= $m['nm_pergunta'] ?></td>
                        
                        
                        <td class="col-md-3">
                          <form method='POST' action='<?php echo  base_url('alterar-pergunta/'.$m['id_pergunta']); ?>'>
                            <input type='text' name='perg' class="form-control">
                            <input type="submit" class="btn btn-primary btn-sm pull-right" value="alterar">
                          </form>
                          
                          <br>
                          <br>
                          <br>
                       
                        <?php $id = $m['id_pergunta'] ?>
                        <?php foreach ($alter as $x ) { ?>
                        
                          <?php if($x->id_pergunta === $id){?>
                          
                            <td class="col-md-1"><?= $x->ds_alternativa ?></td>
                            <td class="col-md-1">
                              <form method='POST' action='<?php echo base_url('altera-alternativa/'.$x->id_alternativa); ?>'>
                                <input type='text' name='alter' class="form-control">
                                <input type="submit" class="btn btn-primary btn-sm pull-right" value="alterar">
                              </form>
                            </td>
                          <?php } ?>
                          
                        <?php } ?>
                        
                        <td class="col-md-1"><a href='<?php echo  base_url('deleta-pergunta/'.$x->id_pergunta); ?>'>excluir</a></td>
                        
                    </tr>
                <?php } ?>
                </tbody>
              </table>
    </div>
</div>
</main>