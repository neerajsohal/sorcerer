<?php

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'header-right',
		'before_widget' => '',
		'after_widget' => '',
	));
	register_sidebar(array(
		'name' => 'sidebar-left',
		'before_widget' => '',
		'after_widget' => '',
	));
}
