

    <div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-md-6 col-xs-12">
                <a href="#" class="active" id="login-form-link">Logar</a>
              </div>
              <div class="col-md-6 col-xs-12">
                <a href="#" id="register-form-link">Cadastrar-se</a>
              </div>
            </div>
            <hr style="width:100%;">
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" action="valida-user" method="post" style="display: block;">
                  <div class="form-group">
                    <input type="email" name="email1" id="email1" class="form-control" placeholder="E-mail" required/>
                  </div>
                  <div class="form-group">
                    <input type="password" name="senha1" id="senha1" class="form-control" placeholder="Senha" required/>
                  </div>
                  
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <button type="submit" name="login-submit" id="login-submit" class="form-control btn3d btn btn-primary btn-block text-uppercase">Logar</button>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          <a href="" data-toggle="modal" data-target="#myModal" class="forgot-password">Esqueceu sua senha?</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Recuperar senha</h4>
                      </div>
                      <div class="modal-body">
                        <form class="form-inline" action="enviar-senha" method="post">
                          <label>Email:</label>
                          <input type="email" name="email" class="form-control"/> 
                          <input type="submit" value="enviar" class="btn btn-default"/>
                        </form>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <form id="register-form" action="cadastra-usuario" method="post" style="display: none;">
                  <div class="form-group">
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome (obrigatório)" required/>
                  </div>
                  
                  <div class="form-group">                  
                    <input type="text" name="empresa" id="empresa" class="form-control" placeholder="Empresa"/>
                  </div>
                  <div class="form-group">
                    <input type="email" name="email2" id="email2" class="form-control" placeholder="E-mail (obrigatório)" required/>
                  </div>
                  <div class="form-group">
                    <input type="password" name="senha2" id="senha2" class="form-control" placeholder="Senha (obrigatório)" required/>
                  </div>
                  <div class="form-group">
                    <input type="password" name="senha3" id="senha3" class="form-control" placeholder="Confirmar senha (obrigatório)" required/>
                    <span id="S"></span>
                  </div>
                  <span class="radio col-md-8 col-md-offset-2">
                    <!--<label>
                      <input type="radio" name="optradio" id="" value="feminino">
                      Feminino
                    </label>
                    <label class="pull-right">
                      <input type="radio" name="optradio" id="" value="masculino">
                      Masculino
                    </label>-->
                  </span>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <button type="submit" name="register-submit" id="register-submit" class="form-control btn3d btn btn-primary btn-block text-uppercase" onclick="register();">Cadastrar</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
 
<script>
  $(document).ready(function() {
 
    $('#register-submit').click(function() {
      if($('#senha').val()!=$('#senha3').val()){ 
        $('#S').html('As senhas estão diferentes');
       
      }
      
    });
    
  });
</script>
  </div>