  <?php
  // Template Name: Home
  get_header();
  ?>

  <!-- CORPO -->
  <main>
  
  <?php include(TEMPLATEPATH . "/page-apresentacao.php"); ?>
  <?php include(TEMPLATEPATH . "/page-about.php"); ?>
  <?php include(TEMPLATEPATH . "/page-slack.php"); ?>
  <?php include(TEMPLATEPATH . "/page-conheca.php"); ?>
  <?php include(TEMPLATEPATH . "/page-contato.php"); ?>

  </main>

<?php get_footer(); ?>