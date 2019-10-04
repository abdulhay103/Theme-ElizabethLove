<?php 

	function enqueue(){
		
		wp_enqueue_style( 'fontawesome-5.9.0',get_template_directory_uri(). '/fontawesome-5.9.0/css/all.min.css', array(), '1.0.0', 'all' );
		wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css', array(), '1.0.0', 'all' );
		wp_enqueue_style( 'owl_carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css', array(), '1.0.0', 'all' );
		wp_enqueue_style( 'bulma_min', 'https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css', array(), '1.0.0', 'all' );
		wp_enqueue_style( 'style', get_stylesheet_uri() );


		wp_enqueue_script( 'owl.carousel.min', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script( 'main.js', get_template_directory_uri(). '/js/main.js', array('jquery'), '1.0.0', true);
	}add_action( 'wp_enqueue_scripts', 'enqueue' );


	function ElizabethLove_setup(){
		add_theme_support( 'dashicon' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
		$logo = array(
	 					'height'      => 100,
	 					'width'       => 400,
	 					'flex-height' => true,
	 					'flex-width'  => true,
	 					'header-text' => array( 'site-title', 'site-description' ),
	 				);
	 	add_theme_support( 'custom-logo', $logo );
		register_nav_menus( 
				array(
					'top'    => __( 'Top Menu', 'ElizabethLove' ), 
					'social' => __( 'Social Links Menu', 'ElizabethLove' ),
				)
			);

	}
	add_action('after_setup_theme', 'ElizabethLove_setup');


	function custom_page() {

		$var_banner = array(
			"label" => __( "Banners", "ElizabethLove" ),
			"labels" => array(
							"name" => __( "Banners", "ElizabethLove" ),
							"singular_name" => __( "Banner", "ElizabethLove" )
						),
			"show_ui" => true,
			"supports" => array( "title", "editor", "thumbnail" ),
			"taxonomies" => array("category", "post_tag"),
			"menu_icon" => "dashicons-format-aside",
		); 
		register_post_type( "banner", $var_banner );


		$var_author = array(
			"label" => __( "authors", "ElizabethLove" ),
			"labels" => array(
							"name" => __( "Authors", "ElizabethLove" ),
							"singular_name" => __( "Author", "ElizabethLove" )
						),
			"show_ui" => true,
			"supports" => array( "title", "editor", "thumbnail" ),
			"taxonomies" => array("category", "post_tag"),
			"menu_icon" => "dashicons-buddicons-buddypress-logo",
		); 
		register_post_type( "author", $var_author );

		$var_section_title = array(
			"label" => __( "section_title", "ElizabethLove" ),
			"labels" => array(
							"name" => __( "Titles", "ElizabethLove" ),
							"singular_name" => __( "Title", "ElizabethLove" )
						),
			"show_ui" => true,
			"supports" => array( "title", "editor", "thumbnail"),
			"taxonomies" => array("category", "post_tag"),
			"menu_icon" => "dashicons-editor-paste-text",
		); 
		register_post_type( "section_title", $var_section_title );

		$var_category_item = array(
			"label" => __( "category_items", "ElizabethLove" ),
			"labels" => array(
							"name" => __( "Category_Items", "ElizabethLove" ),
							"singular_name" => __( "Category_Item", "ElizabethLove" )
						),
			"show_ui" => true,
			"supports" => array( "title", "editor", "thumbnail" ),
			"taxonomies" => array("category", "post_tag"),
			"menu_icon" => "dashicons-category",
		); 
		register_post_type( "category_items", $var_category_item );

		$var_testimonial = array(
			"label" => __( "testimonial", "ElizabethLove" ),
			"labels" => array(
							"name" => __( "Testimonials", "ElizabethLove" ),
							"singular_name" => __( "Testimonial", "ElizabethLove" )
						),
			"show_ui" => true,
			"supports" => array( "title", "editor", "thumbnail" ),
			"taxonomies" => array("category", "post_tag"),
			"menu_icon" => "dashicons-admin-comments",
		);
		register_post_type( "testimonial", $var_testimonial );

		$var_social_icon = array(
			"label" => __( "social_icon", "ElizabethLove" ),
			"labels" => array(
							"name" => __( "Social Icons", "ElizabethLove" ),
							"singular_name" => __( "Social Icon", "ElizabethLove" )
						),
			"show_ui" => true,
			"supports" => array( "title", "editor", "thumbnail" ),
			"taxonomies" => array("category", "post_tag"),
			"menu_icon" => "dashicons-networking",
		); 
		register_post_type( "social_icon", $var_social_icon );

		$var_copyright_text = array(
			"label" => __( "copyright", "ElizabethLove" ),
			"labels" => array(
							"name" => __( "Copyright Text", "ElizabethLove" ),
							"singular_name" => __( "copyright", "ElizabethLove" )
						),
			"show_ui" => true,
			"supports" => array( "title", "editor", "thumbnail" ),
			"taxonomies" => array("category", "post_tag"),
			"menu_icon" => "dashicons-pressthis",
		); 
		register_post_type( "copyright", $var_copyright_text );

		$var_btn = array(
			"label" => __( "btn", "ElizabethLove" ),
			"labels" => array(
							"name" => __( "News Button", "ElizabethLove" ),
							"singular_name" => __( "Button", "ElizabethLove" )
						),
			"show_ui" => true,
			"supports" => array( "title", "editor", "thumbnail" ),
			"taxonomies" => array("category", "post_tag"),
			"menu_icon" => "dashicons-album",
		); 
		register_post_type( "btn", $var_btn );
	} 
	add_action( 'init', 'custom_page' );



// 	// Custom fields

// 	if( function_exists('acf_add_local_field_group') ):

// acf_add_local_field_group(array(
// 	'key' => 'group_5d763bd94e035',
// 	'title' => 'Authors',
// 	'fields' => array(
// 		array(
// 			'key' => 'field_5d763c2c6d48d',
// 			'label' => 'Author Image',
// 			'name' => 'author_image',
// 			'type' => 'image',
// 			'instructions' => '',
// 			'required' => 1,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'return_format' => 'url',
// 			'preview_size' => 'full',
// 			'library' => 'all',
// 			'min_width' => '',
// 			'min_height' => '',
// 			'min_size' => '',
// 			'max_width' => '',
// 			'max_height' => '',
// 			'max_size' => '',
// 			'mime_types' => '',
// 		),
// 		array(
// 			'key' => 'field_5d763c8069c57',
// 			'label' => 'Heading',
// 			'name' => 'heading',
// 			'type' => 'text',
// 			'instructions' => '',
// 			'required' => 1,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => '',
// 			'prepend' => '',
// 			'append' => '',
// 			'maxlength' => '',
// 		),
// 		array(
// 			'key' => 'field_5d763cdc69c58',
// 			'label' => 'Content',
// 			'name' => 'content',
// 			'type' => 'text',
// 			'instructions' => '',
// 			'required' => 1,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => '',
// 			'prepend' => '',
// 			'append' => '',
// 			'maxlength' => '',
// 		),
// 		array(
// 			'key' => 'field_5d763cf069c59',
// 			'label' => 'Button',
// 			'name' => 'button',
// 			'type' => 'text',
// 			'instructions' => '',
// 			'required' => 1,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => '',
// 			'prepend' => '',
// 			'append' => '',
// 			'maxlength' => '',
// 		),
// 	),
// 	'location' => array(
// 		array(
// 			array(
// 				'param' => 'post_type',
// 				'operator' => '==',
// 				'value' => 'author',
// 			),
// 		),
// 	),
// 	'menu_order' => 0,
// 	'position' => 'normal',
// 	'style' => 'default',
// 	'label_placement' => 'top',
// 	'instruction_placement' => 'label',
// 	'hide_on_screen' => '',
// 	'active' => true,
// 	'description' => '',
// ));

// acf_add_local_field_group(array(
// 	'key' => 'group_5d7628392fa31',
// 	'title' => 'banner',
// 	'fields' => array(
// 		array(
// 			'key' => 'field_5d76283e60152',
// 			'label' => 'Heading',
// 			'name' => 'heading',
// 			'type' => 'text',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => '',
// 			'prepend' => '',
// 			'append' => '',
// 			'maxlength' => '',
// 		),
// 		array(
// 			'key' => 'field_5d762bf348bf7',
// 			'label' => 'sub_heading',
// 			'name' => 'sub_heading',
// 			'type' => 'text',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => '',
// 			'prepend' => '',
// 			'append' => '',
// 			'maxlength' => '',
// 		),
// 		array(
// 			'key' => 'field_5d76286660154',
// 			'label' => 'Content',
// 			'name' => 'content',
// 			'type' => 'text',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => '',
// 			'prepend' => '',
// 			'append' => '',
// 			'maxlength' => '',
// 		),
// 		array(
// 			'key' => 'field_5d762ce548bf8',
// 			'label' => 'Sub Content',
// 			'name' => 'sub_content',
// 			'type' => 'text',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => '',
// 			'prepend' => '',
// 			'append' => '',
// 			'maxlength' => '',
// 		),
// 	),
// 	'location' => array(
// 		array(
// 			array(
// 				'param' => 'post_type',
// 				'operator' => '==',
// 				'value' => 'banner',
// 			),
// 		),
// 	),
// 	'menu_order' => 0,
// 	'position' => 'normal',
// 	'style' => 'default',
// 	'label_placement' => 'top',
// 	'instruction_placement' => 'label',
// 	'hide_on_screen' => '',
// 	'active' => true,
// 	'description' => '',
// ));

// acf_add_local_field_group(array(
// 	'key' => 'group_5d77ed924c45a',
// 	'title' => 'Category',
// 	'fields' => array(
// 		array(
// 			'key' => 'field_5d77eda9b67a3',
// 			'label' => 'Category Image',
// 			'name' => 'category_image',
// 			'type' => 'image',
// 			'instructions' => '',
// 			'required' => 1,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'return_format' => 'url',
// 			'preview_size' => 'medium',
// 			'library' => 'all',
// 			'min_width' => '',
// 			'min_height' => '',
// 			'min_size' => '',
// 			'max_width' => '',
// 			'max_height' => '',
// 			'max_size' => '',
// 			'mime_types' => '',
// 		),
// 		array(
// 			'key' => 'field_5d77edd3b67a4',
// 			'label' => 'Reading Option',
// 			'name' => 'reading_option',
// 			'type' => 'text',
// 			'instructions' => '',
// 			'required' => 1,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => '',
// 			'prepend' => '',
// 			'append' => '',
// 			'maxlength' => '',
// 		),
// 		array(
// 			'key' => 'field_5d78b5daf984a',
// 			'label' => 'Font Awesome icon',
// 			'name' => 'font_awesome_icon',
// 			'type' => 'font-awesome',
// 			'instructions' => '',
// 			'required' => 1,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'icon_sets' => array(
// 				0 => 'far',
// 			),
// 			'custom_icon_set' => '',
// 			'default_label' => '&lt;i class="fas"&gt;&lt;/i&gt; play-circle',
// 			'default_value' => 'fas fa-play-circle',
// 			'save_format' => 'element',
// 			'allow_null' => 0,
// 			'show_preview' => 1,
// 			'enqueue_fa' => 0,
// 			'fa_live_preview' => '',
// 			'choices' => array(
// 			),
// 		),
// 	),
// 	'location' => array(
// 		array(
// 			array(
// 				'param' => 'post_type',
// 				'operator' => '==',
// 				'value' => 'category_items',
// 			),
// 		),
// 	),
// 	'menu_order' => 0,
// 	'position' => 'normal',
// 	'style' => 'default',
// 	'label_placement' => 'top',
// 	'instruction_placement' => 'label',
// 	'hide_on_screen' => '',
// 	'active' => true,
// 	'description' => '',
// ));

// acf_add_local_field_group(array(
// 	'key' => 'group_5d78e7f300a8b',
// 	'title' => 'Copyright post',
// 	'fields' => array(
// 		array(
// 			'key' => 'field_5d78e824e8832',
// 			'label' => 'Copyright Text',
// 			'name' => 'copyright_text',
// 			'type' => 'text',
// 			'instructions' => '',
// 			'required' => 1,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => 'Write your copy text..',
// 			'prepend' => '',
// 			'append' => '',
// 			'maxlength' => '',
// 		),
// 	),
// 	'location' => array(
// 		array(
// 			array(
// 				'param' => 'post_type',
// 				'operator' => '==',
// 				'value' => 'copyright',
// 			),
// 		),
// 	),
// 	'menu_order' => 0,
// 	'position' => 'normal',
// 	'style' => 'default',
// 	'label_placement' => 'top',
// 	'instruction_placement' => 'label',
// 	'hide_on_screen' => '',
// 	'active' => true,
// 	'description' => '',
// ));

// acf_add_local_field_group(array(
// 	'key' => 'group_5d794c786dd15',
// 	'title' => 'Red btn',
// 	'fields' => array(
// 		array(
// 			'key' => 'field_5d794ca37b874',
// 			'label' => 'Way to visit',
// 			'name' => 'way_to_visit',
// 			'type' => 'text',
// 			'instructions' => '',
// 			'required' => 1,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => 'How you want to visit .......',
// 			'prepend' => '',
// 			'append' => '',
// 			'maxlength' => '',
// 		),
// 		array(
// 			'key' => 'field_5d794e9a7b877',
// 			'label' => 'Arrow',
// 			'name' => 'arrow',
// 			'type' => 'font-awesome',
// 			'instructions' => '',
// 			'required' => 1,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'icon_sets' => array(
// 				0 => 'far',
// 			),
// 			'custom_icon_set' => '',
// 			'default_label' => '',
// 			'default_value' => '',
// 			'save_format' => 'element',
// 			'allow_null' => 0,
// 			'show_preview' => 1,
// 			'enqueue_fa' => 0,
// 			'fa_live_preview' => '',
// 			'choices' => array(
// 			),
// 		),
// 		array(
// 			'key' => 'field_5d7951adad154',
// 			'label' => 'Social Media Link',
// 			'name' => 'social_media_link',
// 			'type' => 'url',
// 			'instructions' => '',
// 			'required' => 1,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => '',
// 		),
// 	),
// 	'location' => array(
// 		array(
// 			array(
// 				'param' => 'post_type',
// 				'operator' => '==',
// 				'value' => 'btn',
// 			),
// 		),
// 	),
// 	'menu_order' => 0,
// 	'position' => 'normal',
// 	'style' => 'default',
// 	'label_placement' => 'top',
// 	'instruction_placement' => 'label',
// 	'hide_on_screen' => '',
// 	'active' => true,
// 	'description' => '',
// ));

// acf_add_local_field_group(array(
// 	'key' => 'group_5d77e835d3aaf',
// 	'title' => 'Section_title',
// 	'fields' => array(
// 		array(
// 			'key' => 'field_5d77e8489792d',
// 			'label' => 'Section Title',
// 			'name' => 'section_title',
// 			'type' => 'text',
// 			'instructions' => '',
// 			'required' => 1,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => '',
// 			'prepend' => '',
// 			'append' => '',
// 			'maxlength' => '',
// 		),
// 		array(
// 			'key' => 'field_5d77e86e9792e',
// 			'label' => 'Title Underscore',
// 			'name' => 'title_underscore',
// 			'type' => 'image',
// 			'instructions' => '',
// 			'required' => 1,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'return_format' => 'url',
// 			'preview_size' => 'medium',
// 			'library' => 'all',
// 			'min_width' => '',
// 			'min_height' => '',
// 			'min_size' => '',
// 			'max_width' => '',
// 			'max_height' => '',
// 			'max_size' => '',
// 			'mime_types' => '',
// 		),
// 	),
// 	'location' => array(
// 		array(
// 			array(
// 				'param' => 'post_type',
// 				'operator' => '==',
// 				'value' => 'section_title',
// 			),
// 		),
// 	),
// 	'menu_order' => 0,
// 	'position' => 'normal',
// 	'style' => 'default',
// 	'label_placement' => 'top',
// 	'instruction_placement' => 'label',
// 	'hide_on_screen' => '',
// 	'active' => true,
// 	'description' => '',
// ));

// acf_add_local_field_group(array(
// 	'key' => 'group_5d78bca25e7d6',
// 	'title' => 'Social Icon',
// 	'fields' => array(
// 		array(
// 			'key' => 'field_5d78bcbb9fd42',
// 			'label' => 'Social Media Icon',
// 			'name' => 'social_media_icon',
// 			'type' => 'font-awesome',
// 			'instructions' => '',
// 			'required' => 1,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'icon_sets' => array(
// 				0 => 'far',
// 			),
// 			'custom_icon_set' => '',
// 			'default_label' => '&lt;i class="fab"&gt;&lt;/i&gt; facebook-f',
// 			'default_value' => 'fab fa-facebook-f',
// 			'save_format' => 'element',
// 			'allow_null' => 0,
// 			'show_preview' => 1,
// 			'enqueue_fa' => 0,
// 			'fa_live_preview' => '',
// 			'choices' => array(
// 			),
// 		),
// 		array(
// 			'key' => 'field_5d78bcef9fd43',
// 			'label' => 'Social Media Link',
// 			'name' => 'social_media_link',
// 			'type' => 'url',
// 			'instructions' => '',
// 			'required' => 1,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => '',
// 		),
// 	),
// 	'location' => array(
// 		array(
// 			array(
// 				'param' => 'post_type',
// 				'operator' => '==',
// 				'value' => 'social_icon',
// 			),
// 		),
// 	),
// 	'menu_order' => 0,
// 	'position' => 'normal',
// 	'style' => 'default',
// 	'label_placement' => 'top',
// 	'instruction_placement' => 'label',
// 	'hide_on_screen' => '',
// 	'active' => true,
// 	'description' => '',
// ));

// acf_add_local_field_group(array(
// 	'key' => 'group_5d78a339e8e04',
// 	'title' => 'Testimonial',
// 	'fields' => array(
// 		array(
// 			'key' => 'field_5d78a35cd48a1',
// 			'label' => 'Image',
// 			'name' => 'image',
// 			'type' => 'image',
// 			'instructions' => '',
// 			'required' => 1,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'return_format' => 'url',
// 			'preview_size' => 'medium',
// 			'library' => 'all',
// 			'min_width' => '',
// 			'min_height' => '',
// 			'min_size' => '',
// 			'max_width' => '',
// 			'max_height' => '',
// 			'max_size' => '',
// 			'mime_types' => '',
// 		),
// 		array(
// 			'key' => 'field_5d78a396d48a2',
// 			'label' => 'Opinion',
// 			'name' => 'opinion',
// 			'type' => 'text',
// 			'instructions' => '',
// 			'required' => 1,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => '',
// 			'prepend' => '',
// 			'append' => '',
// 			'maxlength' => '',
// 		),
// 		array(
// 			'key' => 'field_5d78a456d48a3',
// 			'label' => 'End of voice',
// 			'name' => 'end_of_voice',
// 			'type' => 'text',
// 			'instructions' => '',
// 			'required' => 1,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => '',
// 			'prepend' => '',
// 			'append' => '',
// 			'maxlength' => '',
// 		),
// 	),
// 	'location' => array(
// 		array(
// 			array(
// 				'param' => 'post_type',
// 				'operator' => '==',
// 				'value' => 'testimonial',
// 			),
// 		),
// 	),
// 	'menu_order' => 0,
// 	'position' => 'normal',
// 	'style' => 'default',
// 	'label_placement' => 'top',
// 	'instruction_placement' => 'label',
// 	'hide_on_screen' => '',
// 	'active' => true,
// 	'description' => '',
// ));

// endif;


?>