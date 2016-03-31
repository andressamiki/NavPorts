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

    <!-- MyIcons / FlatIcons -->
    <link rel="stylesheet" href="<?php echo base_url();?>static/MyIcons/flaticon.css">

    <!-- StyleSheet for this template -->
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/login.css">
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/main.min.css">
    
    <link rel="shortcut icon" href="<?php echo base_url();?>static/img/favicon.png" type="image/x-icon">
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
    
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
            <a href="home"><img src="<?php echo base_url(); ?>static/img/logo-1.png" style="height:120px; width:150px;"></a>
        </div>
        
        <div class="visible-xs">
          <h4>NavePorts - Navegando pelo porto de Santos</h4>
        </div>
          <?php $dominio= parse_url($_SERVER['REQUEST_URI']); ?>
              
          
        
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav ">
            <?php if($dominio['path'] === "/home"){ ?>
            
              <li <?php echo "id=active"; ?> ><a href="<?php echo base_url(); ?>home">home</a></li>
              <li><a href="<?php echo base_url(); ?>sobre">sobre</a></li>
              <li><a href="<?php echo base_url(); ?>contato">contato</a></li>
              
              <?php }else if($dominio['path'] === "/sobre"){?>
              
                <li><a href="<?php echo base_url(); ?>home">home</a></li>
                <li <?php echo "id=active"; ?>><a href="<?php echo base_url(); ?>sobre">sobre</a></li>
                <li><a href="<?php echo base_url(); ?>contato">contato</a></li>
                
                <?php }else if($dominio['path'] === "/contato"){?>
                
                <li><a href="<?php echo base_url(); ?>home">home</a></li>
                <li><a href="<?php echo base_url(); ?>sobre">sobre</a></li>
                <li <?php echo "id=active";?>><a href="<?php echo base_url(); ?>contato">contato</a></li>
                
                <?php }else{?>
                  <li><a href="<?php echo base_url(); ?>home">home</a></li>
                  <li><a href="<?php echo base_url(); ?>sobre">sobre</a></li>
                  <li><a href="<?php echo base_url(); ?>contato">contato</a></li>
                <?php }?>
                
          </ul>

          <ul class="nav navbar-nav navbar-right ">
            
            <li><a href="#">patrocinadores</a></li>
            
            <?php if($dominio['path'] === "/creditos"){?>
            
              <li <?php echo "id=active";?> ><a href="<?php echo base_url(); ?>creditos">créditos</a></li>
              <li><a href="<?php echo base_url(); ?>login">cadastre-se | login</a></li>
              
            <?php }else if($dominio['path'] === "/login"){?>
              <li><a href="<?php echo base_url(); ?>creditos">créditos</a></li>
              <li <?php echo "id=active";?> ><a href="<?php echo base_url(); ?>login">cadastre-se | login</a></li>
            <?php }else{ ?>
              <li><a href="<?php echo base_url(); ?>creditos">créditos</a></li>
              <li><a href="<?php echo base_url(); ?>login">cadastre-se | login</a></li>
              <?php }?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 