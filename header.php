<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- FAVICON -->
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/favicon.ico" type="image/x-icon">

  <title>CAFAR</title>

  <!-- ICONES -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>./assets/icons/style.css">

  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>./style.css">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- WP-HEADER -->
  <?php wp_head(); ?>
</head>

<body>

  <!-- HEADER -->
  <header id="header">
    <nav class="container">
      <a class="logo" href="#home"><img class="imgindex" src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/cafartext.png" alt="Texto estilizado CaFar"></a>

      <!-- menu -->
      <div class="menu">
        <ul class="grid">
          <li><a class="title" href="#home">Início</a></li>
          <li><a class="title" href="#about">Sobre</a></li>
          <li><a class="title" href="#slack">Slack</a></li>
          <li><a class="title" href="#partners">Conheça</a></li>
          <!-- <li><a class="title" href="#guide">Guia do Calouro</a></li> -->
          <li><a class="title" href="#contact">Contato</a></li>
        </ul>
      </div>

      <div class="toggle icon-menu"></div>
      <div class="toggle icon-close"></div>
    </nav>
  </header>