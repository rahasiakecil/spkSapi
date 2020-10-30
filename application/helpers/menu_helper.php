<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed'); 
	if(!function_exists('active_link')) { 
		function activate_menu($function,$segment) { 
			$CI = get_instance();
			//$class = $CI->router->fetch_class();
			$class = $CI->uri->segment($segment);
			$active = "";
			if($class == $function){
				$active = "active";
			}
			return $active;
		} 
	}
?>