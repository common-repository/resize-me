<?php

/*-------------------------------------------------------------------------
OUTPUTS THE RESIZE ME GRAPHIC IN THE BOTTOM CORNER OF THE THEME
-------------------------------------------------------------------------*/

function vz_wp_resize_me () {

	global $resize_me_pluginroot;
	
	$output = '
	<div id="wp-resize-me" class="wp-resize-me" style="position:fixed; bottom: 0px; right: 0px; height: 80px; width:80px; background: url('.$resize_me_pluginroot.'/images/resize.png); z-index: 10000;"></div>
	';
	
	if (! preg_match('/iPhone|iPod|iPad|BlackBerry|Android/', $_SERVER['HTTP_USER_AGENT'])) {
	
	echo $output; //ECHOES THE CONTENTS OF THE $OUTPUT VARIABLE
	
	}

}

add_action('wp_footer','vz_wp_resize_me');

