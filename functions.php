<?php

	require_once(TEMPLATEPATH . '/control.php');
	
	function eth_getLogo(){
		$logo = get_option( 'eth_logo', 'eth_logo.jpg' );
		echo $logo;
	}

	function eth_show(){
		$show = get_option('eth_show','eth_show.jpg' );
		echo $show;
	}

?>