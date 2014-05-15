<?php
	
	function eth_getLogo(){
		$logo = get_option( 'eth_logo', 'eth_logo.jpg' );
		echo get_stylesheet_directory_uri().'/images/'.$logo;
	}

	function eth_show(){
		$show = get_option('eth_show','eth_show.jpg' );
		echo get_stylesheet_directory_uri().'/images/'.$show;
	}

?>