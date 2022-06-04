<?php

add_action('cmb2_admin_init', 'cmb2_fields_about');

function cmb2_fields_about() {
  $cmb = new_cmb2_box([
    'id' => 'about_box',
    'title' => 'Quem Somos',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => ['page-about.php', 'page-home.php', 'index.php'],
    ],
  ]);

  $cmb->add_field([
    'name' => 'Título',
    'id' => 'titulo',
    'type' => 'text_medium'
  ]);

  $cmb->add_field([
	'name' => 'Primeiro Parágrafo',
	'id' => 'primeiro_paragrafo',
	'type' => 'textarea_small',
  ]);

  // $cmb->add_field([
	// 'name' => 'Segundo Parágrafo',
	// 'id' => 'segundo_paragrafo',
	// 'type' => 'textarea_small',
  // ]);

  // $cmb->add_field([
	// 'name' => 'Terceiro Parágrafo',
	// 'id' => 'terceiro_paragrafo',
	// 'type' => 'textarea_small',
  // ]);

  $cmb->add_field([
    'name' => 'Imagem',
    'id' => 'image_about_cafar',
    'type' => 'file',
    'options' => [
      'url' => false
    ],
  ]);
}

?>