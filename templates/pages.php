<?php
/**
 * UIX Admin Page Structures
 *
 * @package   uix
 * @author    David Cramer
 * @license   GPL-2.0+
 * @link
 * @copyright 2015 David Cramer
 */

return array(
	'uix-base'	=>	array(
		'page_title'	=>	__( 'UIX Admin', 'uix' ),
		'menu_title'	=>	__( 'UIX Admin', 'uix' ),
		'capability'	=>	'manage_options',
		'icon'			=>	'dashicons-welcome-widgets-menus',
		'position'		=>	null,
		'save_button'	=>  __('Update Settings', 'uix'),
		'saved_message'	=>	__('UIX Updated Successfully!', 'uix'),
		'styles'		=>	array(),
		'scripts'		=>	array(),
		'tabs'			=>	array(
			'main'		=>	array(
				'page_title'	=> 	__('General Settings and Options', 'uix'),
				'page_description'	=> 	__('setup requirements', 'uix'),
				'menu_title'	=> 	__('General', 'uix'),
				'default'		=>	true,
				'template'		=>	UIX_EX_PATH . 'templates/general-ui.php',
				'partials'		=>	array()
			),
			'extra'		=>	array(
				'page_title'	=> 	__('Extras', 'uix'),
				'page_description'	=> 	__('Additional settings', 'uix'),
				'menu_title'	=> 	__('Extras', 'uix'),
				
			),
		),
		'help'	=> array(
			'default-help' => array(
				'title'		=> 	esc_html__( 'Easy to add Help' , 'uix' ),
				'content'	=>	"Just add more items to this array with a unique slug/key."
			)
		),
		'help_sidebar' => 'This can be html or a path to a file'
	),
	'news_pages'	=>	array(
		'page_title'	=>	__( 'News System', 'uix' ),
		'menu_title'	=>	__( 'News System', 'uix' ),
		'parent'		=>	'uix-base',
		'capability'	=>	'manage_options',
		'icon'			=>	'dashicons-welcome-widgets-menus',
		'position'		=>	36,
		'styles'		=>	array(),
		'scripts'		=>	array(),
		'tabs'			=>	array(
			'news'		=>	array(
				'page_title'	=> 	__('News and Stuff', 'uix'),
				'menu_title'	=> 	__('News', 'uix'),
				'template'		=>	UIX_EX_PATH . 'templates/no-file.php'
			)
		),
	),
);