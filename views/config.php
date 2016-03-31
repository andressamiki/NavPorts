

    <br><br>
    <div class="container" >
      <div class="col-md-10 col-md-offset-1">
        <aside class="col-md-2">
          <img src="<?php echo base_url();?>static/img/avatares/1.jpg" class="img-responsive img-rounded">
          <h4 class="painel-h4">Bem-vindo, <?php echo $usu[0]['nm_usuario']; ?>!</h4>
          <ul class="list-unstyled">
            <li><a href="painel-user">início</a></li>
            <li><span id="painel-active" class="">configurações</span></li>
            <li><a href="ajuda">ajuda</a></li>
            <li><a href="logout">sair</a></li>
          </ul>
        </aside>

        <main class="col-md-10">
          <h2>Configurações</h2>

          <h3>Alterar senha</h3>
          <form method="POST" action="altera-senha">
            <div class="row">
              <div class="form-group col-md-8">
                <label for="senha-antiga">Senha atual:</label>
                <input type="password" name="senha_antiga" class="form-control" id="senha-antiga" placeholder="Digite sua senha atual">
              </div><br>
              <div class="form-group col-md-8">
                <label for="senha-nova">Nova senha:</label>
                <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite a nova senha">
              </div><br>
              <div class="form-group col-md-8">
                <label for="senha-nova">Digite novamente:</label>
                <input type="password" class="form-control" id="senha-nova" placeholder="Digite a senha novamente">
                
              </div>
            </div><!--/.row-->

            <div class="row">
              <div class="col-md-8">
                <button type="submit" class="btn3d btn btn-primary btn-md pull-right">Alterar</button>
              </div><!--/.cols-->
            </div><!--/.row-->
          </form>

          <span class="row"><hr class="config-hr"></span>

          <h3>Alterar e-mail</h3>
          <form method="POST" action="altera-email">
            <div class="row">
              <div class="form-group col-md-8">
                <label for="email-antigo">E-mail atual:</label>
                <input type="text" name="email_antigo" class="form-control" id="email_antigo" placeholder="Digite seu e-mail">
              </div><br>
              <div class="form-group col-md-8">
                <label for="email-novo">Novo e-mail:</label>
                <input type="text" name="email_novo" class="form-control" id="email_novo" placeholder="Digite o novo e-mail">
              </div><br>
            </div><!--/.row-->

            <div class="row">
              <div class="col-md-8">
                <button type="submit" class="btn3d btn btn-primary btn-md pull-right">Alterar</button>
              </div><!--/.cols-->
            </div><!--/.row-->
          </form>

          <span class="row"><hr class="config-hr"></span>

          <h3>Alterar empresa</h3>
          <form method="POST" action="altera-empresa">
            <div class="row">
              <div class="form-group col-md-8">
                <label for="empresa-antiga">Empresa atual:</label>
                <input type="text" name="empresa_antiga" class="form-control" id="empresa-antiga" placeholder="Digite sua empresa">
              </div><br>
              <div class="form-group col-md-8">
                <label for="empresa-nova">Novo empresa:</label>
                <input type="text" name="empresa_nova" class="form-control" id="empresa-nova" placeholder="Digite a novo empresa">
              </div><br>
            </div><!--/.row-->

            <div class="row">
              <div class="col-md-8">
                <button type="submit" class="btn3d btn btn-primary btn-md pull-right">Alterar</button>
              </div><!--/.cols-->
            </div><!--/.row-->
          </form>
        </main>
      </div> <!--/.cols -->
    </div><!--/.container -->