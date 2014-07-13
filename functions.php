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

	function eth_custom_login_logo(){
		echo '<style type="text/css">
        h1 a { background-image:url('.get_bloginfo('template_directory').'/images/eth_logo.png) !important; }
    </style>';
	}

	add_action( 'login_head', eth_custom_login_logo);

	add_filter('login_headerurl', create_function(false,"return get_bloginfo('url');"));


?>