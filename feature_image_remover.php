<?php

/*
Plugin Name: Featured Image Remover
Plugin URI: http://github.com/matiasnoriega/featured_image_remover
description: >-
plugin para dejar de mostrar la imagen destacada de AMP a hasta determinada fecha
Version: 1.0
Author: Matias Nicolas Noriega
Author URI: http://github.com/matiasnoriega/
License: GPL3
*/

add_filter('ampforwp_modify_featured_image','ampforwp_featured_image_date');

/**
 * @param $image
 * @return string
 */

function ampforwp_featured_image_date($image){
	# Fecha en formato YYYY-MM-DD
	$fecha = "2021-05-13";
	
	if (get_post_time() < strtotime($fecha)){
	
		$image = '';

	}
	
	return $image;
}

?>
