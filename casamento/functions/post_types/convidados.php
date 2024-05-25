<?php 
add_action( 'init', function() {
	register_post_type( 'guest', array(
		'labels' => array(
			'name' => 'Lista de Convidados',
			'singular_name' => 'Convidado',
			'menu_name' => 'Lista de Convidados',
			'all_items' => 'Todos os Convidados',
			'edit_item' => 'Editar Convidado',
			'view_item' => 'Ver Convidado',
			'view_items' => 'Ver Convidados',
			'add_new_item' => 'Adicionar novo Convidado',
			'add_new' => 'Adicionar novo Convidado',
			'new_item' => 'Novo Convidado',
			'parent_item_colon' => 'Ascendente do Convidado:',
			'search_items' => 'Buscar na Lista de Convidados',
			'not_found' => 'Nenhum convidado encontrado',
			'not_found_in_trash' => 'Nenhum convidado encontrado na lixeira',
			'archives' => 'Convidado Arquivados',
			'attributes' => 'Atributos dos Convidado',
			'featured_image' => 'Imagem de Destaque',
			'set_featured_image' => 'Definir imagem de destaque',
			'remove_featured_image' => 'Remover imagem de destaque',
			'use_featured_image' => 'Usar como imagem de destaque',
			'insert_into_item' => 'Inserir em convidado',
			'uploaded_to_this_item' => 'Uploaded para esse convidado',
			'filter_items_list' => 'Filtrar lista de convidados',
			'filter_by_date' => 'Filtrar lista de convidados por data',
			'items_list_navigation' => 'Lista de convidados',
			'items_list' => 'Lista de Convidados',
			'item_published' => 'Convidado publicado.',
			'item_published_privately' => 'Convidado publicado privativamente',
			'item_reverted_to_draft' => 'Convidado revertido do lixo',
			'item_scheduled' => 'Convidado agendado.',
			'item_updated' => 'Convidado atualizado.',
			'item_link' => 'Link do Convidado',
			'item_link_description' => 'Link para um convidado',
		),
		'description' => 'Lista de convidados do casamento',
		'public' => true,
		'show_in_rest' => true,
		'supports' => array(
			0 => 'title',
			1 => 'thumbnail',
			2 => 'custom-fields',
		),
		'delete_with_user' => false,
	) );
} );
