<?php
   /*
   Plugin Name: Feature Image Remover
   Plugin URI: http://my-awesomeness-emporium.com
   description: >-
  a plugin to create awesomeness and spread joy
   Version: 1.2
   Author: Mr. Awesome
   Author URI: http://mrtotallyawesome.com
   License: GPL2
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
