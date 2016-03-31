<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NavePorts - Navegando pelo porto de Santos</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/bootstrap.min.css">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery-1.11.3.min.js"></script>
    
    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>static/js/bootstrap.min.js"></script>

    <!-- Normalize StyleSheet for default values -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/normalize.min.css">

    <!-- tamanho do h1 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css3/bootstrap.min.css">

    <!-- StyleSheet only for this page -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/pergunta.css">

    <!-- StyleSheet for this template -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/main.css">

    <!-- contador de tempo -->
    <script type="text/javascript" src="<?php echo base_url(); ?>static/js/cronometro.js"></script>

    <!-- certo / errado -->
    <script type="text/javascript" src="<?php echo base_url(); ?>static/js/pergunta.js"></script>


    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body onload="iniciaTempo()">

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div id="oval" class="hidden-xs"> 
            <a href="index.html"><img src="<?php echo base_url(); ?>static/img/logo-3.png" height="120px" width="150px"></a>
        </div>
        
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav ">
            <li><a href="index.html">home</a></li>
            <li><a href="sobre.html">sobre</a></li>
            <li><a href="contato.html">contato</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right ">
            <li><a href="login.html">cadastre-se | login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>  

<div id="geral">

    <main class="container" >
                
		<ol class="breadcrumb" style="margin-bottom: 20px;margin-top: 35px;">
          <li><a href="modo-jogo.html">Modo de jogo</a></li>
          <li class="active">Pergunta</li>
        </ol>
        
      <div class="col-md-10 col-md-offset-1">  
        <div class="row">
          <span class="col-md-2 pull-right">
            <p><strong id="contador"><span id="min">02</span>:<span id="seg">59</span></strong></p>
          </span>
          <span class="col-md-12">
            <h2 class="text-center text-uppercase ">comércio exterior</h2>
          </span>
        </div>

	      <hr/>
        <h3 class="text-center">Cabotagem é:</h3>
        
	      <div class="row">
          <img src="http://placehold.it/350x200" alt="" class="img-responsive img-thumbnail center-block">
        </div>
        <br>

        <ul class="list-group">
          <div class="radio">            
            <li class="list-group-item">
              <label><input type="radio" name="optradio" value="1">A navegação realizada entre os portos interiores do país, pelo litoral ou vias fluviais</label>
            </li>
          </div>
          <div class="radio">
            <li class="list-group-item">            
              <label><input type="radio" name="optradio" value="2">A lona utilizada nos navios Open-Top para proteção de carga</label>   
            </li> 
          </div>
          <div class="radio">
            <li class="list-group-item">         
                <label><input type="radio" name="optradio" value="3">O acessório para a proteção do navio e da acostagem durante as manobras de atracação e desatracação</label>      
            </li> 
          </div>
          <div class="radio">
            <li class="list-group-item">            
                <label><input type="radio" name="optradio" value="4">A parte externa do casco aproximadamente vertical, acima da linha de flutuação</label>         
            </li> 
          </div>
        </ul><!--/.list-group -->        

      </div><!--/.cols -->

    </main><!--/.container -->
    
</div>