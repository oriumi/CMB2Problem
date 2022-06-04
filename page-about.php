<?php
// Template name: Quem somos
$imagem = wp_get_attachment_image_src(24, true)[0];
?>
    <!-- QUEM SOMOS-->
    <section class="section" id="about">
      <div class="container grid">
        <div class="image">

          <img src="<?php the_field('image_about_cafar'); ?>" alt="" class="paredecafar">
        </div>
        <div class="text">
          <h2 class="title">Quem somos</h2>
          <h1><?php the_field('primeiro_paragrafo'); ?></h1>
          <p>
            <?php get_field('primeiro_paragrafo'); ?>
          </p>          
          <a href="/estatuto" class="button">
            <i class="icon-edit-3"></i>
            Conheça o nosso estatuto
          </a>
        </div>
      </div>
    </section>

    <div class="divider-2"></div>
    