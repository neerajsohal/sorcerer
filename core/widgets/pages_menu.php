<?php

class Pages_menu {
	var $name = 'Sorcerer Page Menu';
	
	function control(){
		$data = get_option('sr_pages_menu');
		echo "<p>Use This Widget to create dynamic menus</p>";
		echo "<p><label>Include Pages with ids: <input name='sr_pages_menu_include'";
		echo 'type="text" value="'. $data['sr_pages_menu_include'].'" /></label></p>';
		echo "<p><label>Exclude Pages with ids: <input name='sr_pages_menu_exclude'";
		echo 'type="text" value="'.$data['sr_pages_menu_exclude'].'" /></label></p>';
		echo "<p><label>Class Name: <input name='sr_pages_menu_class_name'";
		echo 'type="text" value="'.$data['sr_pages_menu_class_name'].'" /></label></p>';

		if (isset($_POST['sr_pages_menu_include'])) {
			$data['sr_pages_menu_include'] = attribute_escape($_POST['sr_pages_menu_include']);
			$data['sr_pages_menu_exclude'] = attribute_escape($_POST['sr_pages_menu_exclude']);
			$data['sr_pages_menu_class_name'] = attribute_escape($_POST['sr_pages_menu_class_name']);

			update_option('sr_pages_menu', $data);
		}
	}

	function widget($args) {
		$options = get_option('sr_pages_menu');
		echo '<ul class="'.$options['sr_pages_menu_class_name'].'">';
		wp_list_pages('title_li=&include=' . $options['sr_pages_menu_include'] . '&exclude=' . $options['sr_pages_menu_include']);
		echo "</ul>";
	}
	
}