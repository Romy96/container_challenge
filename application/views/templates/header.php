<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Container challenge</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/modern-business.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

  </head>
      <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>index">Hoofdpagina</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <?php if(isset($_SESSION['employeeId']) && $_SESSION['role_id'] == 1): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>logout">Uitloggen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>container_ships">Containerschepen</a>
            </li>
            <?php ; elseif(isset($_SESSION['employeeId']) && $_SESSION['role_id'] == 2): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>logout">Uitloggen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>containers">Containers</a>
            </li>
            <?php ; elseif(isset($_SESSION['employeeId']) && $_SESSION['role_id'] == 3): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>logout">Uitloggen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>container_ships">Containerschepen</a>
            </li>
            <?php ; elseif(isset($_SESSION['employeeId']) && $_SESSION['role_id'] == 4): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>logout">Uitloggen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>routes">Routes</a>
            </li>
            <?php ; else: ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>login">Inloggen</a>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>

  <body>


    <div class="container">

      <?php 
          if (isset($_SESSION['ERROR'])): 
              echo '<div class="alert alert-danger" id="danger-alert" style="margin-top:50px; margin-bottom:-50px;">
                      <button type="button" class="close" data-dismiss="alert">x</button>
                      <strong>Error! </strong>
                      '. $_SESSION['ERROR'] . '
                  </div>'; 
          endif;
      ?> 