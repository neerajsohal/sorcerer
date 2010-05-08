<?php

class Sorcerer {
	function Sorcerer($params = array()) {
		$this->register_core_widgets();
	}

	function register_sidebars() {

	}

	function register_core_widgets() {
		$dir = dirname(__FILE__) . '/widgets/';
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

}