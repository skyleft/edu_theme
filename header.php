<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen" />
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
<div id="header" style="border-bottom:1px dotted #DDDDDD;margin-bottom:10px">
    <div class="inner">
                <div class="logo"> 
                    <img src="<?php eth_getLogo();?>"/>
                </div> 
            
               
                        <div class="menu-main-container">
<?php
                    $data = wp_list_categories('show_count=0&echo=0&title_li=&depth=1&hide_empty=0&orderby=ID');
                    $data = preg_replace('/\<\/a\> \((.*)\)/',' <span>$1</span></a>',$data);
                    echo $data;
                  ?>                      
                    
                
                <div class="clear" style="clear:both;display:block;height:10px;width:100%;"></div> 
        
    </div>
</div>
</div>

