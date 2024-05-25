<?php 

acf_add_options_page(array(
  'menu_slug' => 'settings',
  'page_title' => 'Configurações',
  'active' => true,
  'menu_title' => 'Configurações Gerais',
  'capability' => 'edit_posts',
  'parent_slug' => '',
  'position' => '',
  'icon_url' => '',
  'redirect' => true,
  'post_id' => 'options',
  'autoload' => false,
  'update_button' => 'Atualizar',
  'updated_message' => 'Configurações Atualizadas',
));

