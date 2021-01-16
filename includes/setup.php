<?php

function ud_setup(){

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custome-logo');

    // add menu
    add_theme_support('menus');
    register_nav_menu('primary', __('Primary Menu' , 'udemy'));
    register_nav_menu('secondary', __('Secondary Menu' , 'udemy'));

    // add ad
    if (function_exists('quads_register_ad')){
        quads_register_ad( array('location' => 'udemy_header', 'description' => 'Udemy Header position') );

    }

    // add rss feed links

    add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio' ) );

	// Define and register starter content to showcase the theme on new sites.
	$starter_content                =   array(
		'widgets'                   =>  array(
			// Place three core-defined widgets in the sidebar area.
			'ud_widget'            =>  array(
				'text_business_info',
				'search',
				'text_about',
			)
		),

		// Create the custom image attachments used as post thumbnails for pages.
		'attachments'               =>  array(
			'image-about'           =>  array(
				'post_title'        =>  __( 'About', 'udemy' ),
				'file'              =>  'assets/images/about/1.jpg', // URL relative to the template directory.
			),
		),

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts'                     => array(
			'home'                 =>  array(
				'thumbnail'         => '{{image-about}}',
			),
			'about'                 =>  array(
				'thumbnail'         => '{{image-about}}',
			),
			'contact'               => array(
				'thumbnail'         => '{{image-about}}',
			),
			'blog'                  => array(
				'thumbnail'         => '{{image-about}}',
			),
			'homepage-section'      => array(
				'thumbnail'         => '{{image-about}}',
			),
		),

		// Default to a static front page and assign the front and posts pages.
		'options'                   =>  array(
			'show_on_front'         => 'page',
			'page_on_front'         => '{{home}}',
			'page_for_posts'        => '{{blog}}',
		),

		// Set the front page section theme mods to the IDs of the core-registered pages.
		'theme_mods'                => array(
			'ud_facebook_handle'    =>  'udemy',
			'ud_twitter_handle'     =>  'udemy',
			'ud_instegram_handle'   =>  'udemy',
			'ud_mail_handle'        =>  'udemy',
			'ud_phone_handle'       =>  'udemy',
			'ud_top_search'         =>  'yes',
			'ud_cart'               =>  'yes',
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus'                 =>  array(
			// Assign a menu to the "top" location.
			'primary'               =>  array(
				'name'              =>  __( 'Primary Menu', 'udemy' ),
				'items'             =>  array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),

			// Assign a menu to the "social" location.
			'secondary'             =>  array(
				'name'              =>  __( 'Secondary Menu', 'udemy' ),
				'items'             =>  array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
		),
	);

	add_theme_support( 'starter-content', $starter_content );
}