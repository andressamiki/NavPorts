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
    
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>

    <!-- StyleSheet for this template -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/main.min.css">
    
    <link rel="shortcut icon" href="<?php echo base_url();?>static/img/favicon.png" type="image/x-icon">
    

    <!-- MyIcons / FlatIcons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/MyIcons/flaticon.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   <style>
   .blondor{
     background-color:#f00;
     
   }
   </style>
   
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
            <a href="home"><img src="<?php echo base_url();?>static/img/logo-1.png" height="120px" width="150px"></a>
        </div>
        <?php $dominio= parse_url($_SERVER['REQUEST_URI']); ?>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav ">
            <?php if($dominio['path'] === "/home"){ ?>
            
              <li <?php echo "id=active"; ?> ><a href="<?php echo base_url(); ?>home">home</a></li>
              <li><a href="<?php echo base_url(); ?>sobre">sobre</a></li>
              <li><a href="<?php echo base_url(); ?>contato">contato</a></li>
              
              <?php }else if($dominio['path'] === "/sobre"){?>
              
                <li ><a href="<?php echo base_url(); ?>home">home</a></li>
                <li  <?php echo "id=active"; ?>><a href="<?php echo base_url(); ?>sobre">sobre</a></li>
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
              
            <?php }else{ ?>
              <li><a href="<?php echo base_url(); ?>creditos">créditos</a></li>
            <?php }?>
            
            <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $usu[0]['nm_usuario']; ?> <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url(); ?>painel-user" class="text-center">início</a></li>
                    <li><a href="<?php echo base_url(); ?>logout" class="text-center">sair</a></li>
                  </ul>
                </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>  