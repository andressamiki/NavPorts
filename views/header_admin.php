<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>NavePorts - Navegando pelo porto de Santos</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/bootstrap.min.css">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="<?php echo base_url();?>static/js/jquery-1.11.3.min.js"></script>
    
    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="<?php echo base_url();?>static/js/bootstrap.min.js"></script>

    <!-- JS for this template -->
    <script type="text/javascript" src="<?php echo base_url();?>static/js/script.js"></script>
     

    <!-- Normalize StyleSheet for default values -->
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/normalize.min.css">

    <!-- tamanho do h1 -->
    <link rel="stylesheet" href="<?php echo base_url();?>static/css3/bootstrap.min.css">
    
    <link rel="shortcut icon" href="<?php echo base_url();?>static/img/favicon.png" type="image/x-icon">

    <!-- StyleSheet only for this page -->
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/login.css">

    <!-- StyleSheet for this template -->
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/main.css">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

<div id="geral">

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
            <img src="<?php echo base_url();?>static/img/logo-3.png" height="120px" width="150px">
        </div>
        
      </div>
    </nav> 

  <?php $dominio= parse_url($_SERVER['REQUEST_URI']); ?>
      <main class="container">
        <h2 class="text-center">Área administrativa</h2>
        <br>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav nav-tabs nav-justified">
          <?php if($dominio['path'] === "/painel-admin"){?>
            <li <?php echo "id=active2"; ?> ><a href="<?php echo base_url(); ?>painel-admin">cadastrar administrador</a></li>
            <li><a href="<?php echo base_url(); ?>cadastra-categoria">cadastrar categoria</a></li>
            <li><a href="<?php echo base_url(); ?>cadastra-pergunta">cadastrar pergunta</a></li>
            <li><a href="<?php echo base_url(); ?>altera-categoria">alterar categoria</a></li>
            <li><a href="<?php echo base_url(); ?>escolha-categoria">alterar pergunta</a></li>
            <li><a href="<?php echo base_url(); ?>logout-admin"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> sair</a></li>
          
            <?php }else if($dominio['path'] === "/cadastra-categoria"){ ?>
              <li><a href="<?php echo base_url(); ?>painel-admin">cadastrar administrador</a></li>
              <li <?php echo "id=active2"; ?> ><a href="<?php echo base_url(); ?><?php echo base_url(); ?>cadastra-categoria">cadastrar categoria</a></li>
              <li><a href="<?php echo base_url(); ?>cadastra-pergunta">cadastrar pergunta</a></li>
              <li><a href="<?php echo base_url(); ?>altera-categoria">alterar categoria</a></li>
              <li><a href="<?php echo base_url(); ?>escolha-categoria">alterar pergunta</a></li>
              <li><a href="<?php echo base_url(); ?>logout-admin"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> sair</a></li>
              
              <?php }else if($dominio['path'] === "/cadastra-pergunta"){ ?>
                <li><a href="<?php echo base_url(); ?>painel-admin">cadastrar administrador</a></li>
                <li><a href="<?php echo base_url(); ?>cadastra-categoria">cadastrar categoria</a></li>
                <li <?php echo "id=active2"; ?> ><a href="<?php echo base_url(); ?><?php echo base_url(); ?>cadastra-pergunta">cadastrar pergunta</a></li>
                <li><a href="<?php echo base_url(); ?>altera-categoria">alterar categoria</a></li>
                <li><a href="<?php echo base_url(); ?>escolha-categoria">alterar pergunta</a></li>
                <li><a href="<?php echo base_url(); ?>logout-admin"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> sair</a></li>
                
                <?php }else if($dominio['path'] === "/altera-categoria"){ ?>
                  <li><a href="<?php echo base_url(); ?>painel-admin">cadastrar administrador</a></li>
                  <li><a href="<?php echo base_url(); ?>cadastra-categoria">cadastrar categoria</a></li>
                  <li><a href="<?php echo base_url(); ?>cadastra-pergunta">cadastrar pergunta</a></li>
                  <li <?php echo "id=active2"; ?> ><a href="<?php echo base_url(); ?>altera-categoria">alterar categoria</a></li>
                  <li><a href="<?php echo base_url(); ?>escolha-categoria">alterar pergunta</a></li>
                  <li><a href="<?php echo base_url(); ?>logout-admin"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> sair</a></li>
                  
                  <?php }else if($dominio['path'] === "/escolha-categoria"){ ?>
                    <li><a href="<?php echo base_url(); ?>painel-admin">cadastrar administrador</a></li>
                    <li><a href="<?php echo base_url(); ?>cadastra-categoria">cadastrar categoria</a></li>
                    <li><a href="<?php echo base_url(); ?>cadastra-pergunta">cadastrar pergunta</a></li>
                    <li><a href="<?php echo base_url(); ?>altera-categoria">alterar categoria</a></li>
                    <li <?php echo "id=active2"; ?> ><a href="<?php echo base_url(); ?>escolha-categoria">alterar pergunta</a></li>
                    <li><a href="<?php echo base_url(); ?>logout-admin"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> sair</a></li>
                    
                    <?php }else if($dominio['path'] === "/altera-pergunta"){ ?>
                    <li><a href="<?php echo base_url(); ?>painel-admin">cadastrar administrador</a></li>
                    <li><a href="<?php echo base_url(); ?>cadastra-categoria">cadastrar categoria</a></li>
                    <li><a href="<?php echo base_url(); ?>cadastra-pergunta">cadastrar pergunta</a></li>
                    <li><a href="<?php echo base_url(); ?>altera-categoria">alterar categoria</a></li>
                    <li <?php echo "id=active2"; ?> ><a href="<?php echo base_url(); ?>escolha-categoria">alterar pergunta</a></li>
                    <li><a href="<?php echo base_url(); ?>logout-admin"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> sair</a></li>
                    
                    <?php }else{ ?>
                      <li><a href="<?php echo base_url(); ?>painel-admin">cadastrar administrador</a></li>
                      <li><a href="<?php echo base_url(); ?>cadastra-categoria">cadastrar categoria</a></li>
                      <li><a href="<?php echo base_url(); ?>cadastra-pergunta">cadastrar pergunta</a></li>
                      <li><a href="<?php echo base_url(); ?>altera-categoria">alterar categoria</a></li>
                      <li><a href="<?php echo base_url(); ?>escolha-categoria">alterar pergunta</a></li>
                      <li><a href="<?php echo base_url(); ?>logout-admin"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> sair</a></li>
                      <?php } ?>
          
        </ul>
        </div><!--/.nav-collapse -->
    