 
<div class="container">
 
 <h3 class="text-center">Alterar Categoria</h3>
        <div class="col-md-12">
    			<table class="table table-striped">
            <thead>
              <tr>
                <th>Categoria</th>
                <th>Excluir</th>
                <th>Renomear</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($cat as $m ) { ?>
            <tr>
              <td><?= $m->nm_categoria ?></td>
              <td><a href='<?php echo  base_url('index.php/Controleadmin/deletarcat/'.$m->id_categoria); ?>'>excluir</a></td>
              <td><form method='POST' action='<?php echo base_url('index.php/Controleadmin/alterarcat/'.$m->id_categoria); ?>' class="form-inline"><input type='text' name='cat' class="form-control"> <input type="submit" value="renomear" class="btn btn-primary btn-sm" onclick="alterar()"></form></td>
            </tr>   
            <?php } ?>
            </tbody>
          </table>
        <br>
        </div>

</div>
</main>