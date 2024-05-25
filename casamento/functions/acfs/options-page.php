<?php 

add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
		'key' => 'group_6609b7774e860',
		'title' => 'Options Page',
		'fields' => array(
			array(
				'key' => 'field_6609b777b7a2d',
				'label' => 'Datas de confirmação',
				'name' => '',
				'aria-label' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_save_meta' => 0,
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_6609b78db7a2e',
				'label' => 'Data 1',
				'name' => 'attendace_date_1',
				'aria-label' => '',
				'type' => 'date_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_save_meta' => 0,
				'display_format' => 'd/m/Y',
				'return_format' => 'Y-m-d',
				'first_day' => 0,
			),
			array(
				'key' => 'field_6609b7eeb7a2f',
				'label' => 'Data 2',
				'name' => 'attendace_date_2',
				'aria-label' => '',
				'type' => 'date_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_save_meta' => 0,
				'display_format' => 'd/m/Y',
				'return_format' => 'Y-m-d',
				'first_day' => 0,
			),
			array(
				'key' => 'field_6609b7f1b7a30',
				'label' => 'Data 3',
				'name' => 'attendace_date_3',
				'aria-label' => '',
				'type' => 'date_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_save_meta' => 0,
				'display_format' => 'd/m/Y',
				'return_format' => 'Y-m-d',
				'first_day' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'settings',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'left',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
		'acfe_display_title' => '',
		'acfe_autosync' => '',
		'acfe_form' => 0,
		'acfe_meta' => '',
		'acfe_note' => '',
	) );
} );

