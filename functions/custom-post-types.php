<?php
/* ----------------------------------------------------- */
/* Post Types */
/* ----------------------------------------------------- */
/* Criando um Post Type Personalizado*/
add_action('init', 'produtos_register');
function produtos_register() {
	 $labels = array(
			'name' => 'Trabalhos',
			'singular_name' => 'Trabalho',
			'all_items' => 'Todos Trabalhos',
			'add_new' => 'Adicionar Trabalho',
			'add_new_item' => 'Adicionar Trabalho',
			'edit_item' => 'Editar Trabalho',
			'new_item' => 'Novo Trabalho',
			'view_item' => 'Ver Trabalho',
			'search_items' => 'Procurar Trabalho',
			'not_found' =>  'Nada encontrado',
			'not_found_in_trash' => 'Nada encontrado no lixo',
			'parent_item_colon' => '',
			'menu_icon'   => 'teste',
	);
	$args = array(
 			'menu_icon' => 'dashicons-portfolio',
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'capability_type' => 'post',
			'hierarchical' => true,
			'has_archive' => true,
			'taxonomy' => array('categoria-trabalho'),
			'menu_position' => 6,
			'supports' => array('title','editor','comments','thumbnail','category','gallery','page-attributes'),
			'rewrite' => array('slug' => 'trabalho')
	  );
	register_post_type('trabalho',$args);
}


/* -----------------------------------------------------
/* Taxonomias */
/* -----------------------------------------------------
/* Criando uma Taxonomia Personalizada*/
register_taxonomy("categoria-trabalho", array("trabalho"),
	array(
		"hierarchical" => true,
		"label" => "categoria",
		"singular_label" => "categoria Trabalho",
		'rewrite' => array( 'slug' => 'categoria-trabalho' )
	)
);
