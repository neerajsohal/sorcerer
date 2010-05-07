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
			if(!($widget == '.' || $widget == '..')) {
				include $dir . $widget;
			}
		}
	}

	function get_options() {
		
	}

	function load_options() {
		
	}

}