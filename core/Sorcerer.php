<?php

class Sorcerer {

	var $ver = '0.1beta';
	var $root_dir = null;
	
	function Sorcerer($params = array()) {
		$this->register_core_widgets();
		$this->root_dir = dirname(__FILE__) . '/..';

	}

	function register_sidebars() {

	}

	function register_core_widgets() {
		$dir = $this->root_dir . '/widgets/';
		$widgets = scandir($dir);

		foreach ($widgets as $widget) {
			$widget_class = substr($widget, 0, -strlen('.php'));
			if(!($widget == '.' || $widget == '..')) {
				include $dir . $widget;
				$widget_obj = new $widget_class();
				register_sidebar_widget($widget_obj->name, array($widget_class, 'widget'));
				register_widget_control($widget_obj->name, array($widget_class, 'control'));
			}
		}
	}

	function get_options() {
		
	}

	function load_options() {
		
	}
	
	function load_template($name = '') {
		$core_dir = $this->root_dir . '/core/templates/';
		$child_dir = $this->root_dir . '/templates/';
		if(is_file($child_dir . $name . '.php')) {
			include_once $child_dir . $name . '.php';
		} else {
			if(is_file($core_dir . $name . '.php')) {
				include_once $core_dir . $name . '.php';
			} else {
				echo '<p class="error">Not Found!</p>';
			}
		}

	}

}
