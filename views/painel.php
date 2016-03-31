
   <br><br>
    <div class="container" >
      <div class="col-md-10 col-md-offset-1">
        <aside class="col-md-2">
          <img src="<?php echo base_url();?>static/img/avatares/1.jpg" class="img-responsive img-rounded">
          <h4 class="painel-h4">Bem-vindo, <?php echo $usu[0]['nm_usuario']; ?>!</h4>
          <ul class="list-unstyled">
            <li><span id="painel-active">início</span></li>
            <li><a href="configuracoes">configurações</a></li>
            <li><a href="ajuda">ajuda</a></li>
            <li><a href="logout">sair</a></li>
          </ul>
        </aside>

        <main class="col-md-10">
          <h2>Início</h2>
          <h3 class="painel-h3">Instruções rápidas</h3>
          <h4>Modo aleatório</h4>
          <p>Jogando no modo aleatório você irá responder o maior número de questões possíveis em um intervalo de 3 (três) minutos. Ao fim da rodada você receberá a relação de erros e acertos das questões respondidas.</p>
          <h4>Modo de estudos</h4>
          <p>No modo de estudos, você poderá escolher a categoria e qual questão quer responder, podendo voltar e trocar sempre que quiser. Não há limite de tempo ou de questões neste modo de jogo.</p>

          <br>

          <h3 class="text-center">Pronto para começar?</h3>
          
          <div class="col-md-offset-5">
            <a href="modo-jogo" class="btn3d btn btn-primary btn-lg" role="button">JOGUE AGORA</a>
          </div>
        </main>
      </div> <!--/.cols -->
    </div><!--/.container -->

    