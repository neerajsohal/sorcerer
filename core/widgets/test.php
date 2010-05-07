<?php

function widget_myHelloWorld() {
	echo "<p>Hello World!</p>";
}

register_sidebar_widget(__('Hello World'), 'widget_myHelloWorld');
