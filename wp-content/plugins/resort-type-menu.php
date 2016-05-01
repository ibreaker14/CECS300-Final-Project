<?php

/*
Plugin Name: Resort Type Menu
Description: This is a plugin for custom menu area for resort menu types
Author: Mingtau Li
Version: 1.0
*/

//register menu for user dashboard area
function register_ibreaker_menu(){
		/*	register_nav_menu('custom-menu',__('Custom Menu Area'));	//for only one menu area
		}
		add_action('init','register_ibreaker_menu');*/
	register_nav_menus(array('custom-menu-resorts'=>'Custom Resorts Menu Area'));	//for multiple menu areas
}
add_action('init','register_ibreaker_menu');
	
?>
