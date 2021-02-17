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


add_filter( 
	'amp_post_template_data', 
	function ( $data ) {

		$post = get_post();

		/* Fecha del Post en formato Time */
		$post_date = strtotime($post->post_date);
		
		/* Fecha límite (en formato YYYY-MM-DD) que se pasa a formato Time */
		$date = strtotime("2021-02-10");

		if($post_date < $date){

			$data['featured_image'] = false;

		}
		return $data;
	} 
);
?>
