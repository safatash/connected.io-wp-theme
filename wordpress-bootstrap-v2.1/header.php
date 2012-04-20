<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php bloginfo('title'); ?></title>
				
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		
		<!-- icons & favicons -->
		<!-- For iPhone 4 -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/h/apple-touch-icon.png">
		<!-- For iPad 1-->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/m/apple-touch-icon.png">
		<!-- For iPhone 3G, iPod Touch and Android -->
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon-precomposed.png">
		<!-- For Nokia -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon.png">
		<!-- For everything else -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		
		<!--<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">-->
		<link href="<?php echo get_template_directory_uri(); ?>/less/bootstrap.css" rel="stylesheet">
		<!--<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.min.css" rel="stylesheet/less">-->

		
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		
		<?php 

			// check wp user level
			get_currentuserinfo(); 
			// store to use later
			global $user_level; 
		
		?>
				
	</head>
	
	<body <?php body_class(); ?>>				
		<header role="banner">
		
			<div id="inner-header" class="clearfix">
				
				<div class="navbar navbar-top">
					<div class="navbar-inner">
						<div class="container nav-container">
							<nav role="navigation">
								<a class="brand" id="logo" title="<?php echo get_bloginfo('name'); ?>" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
								<p class="tagline"><?php bloginfo('description'); ?></p>
								
								<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
								</a>
								
								<div class="nav-collapse">
									<?php //bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
								</div>
							
							<?php if(of_get_option('search_bar', '1')) {?>
							<form class="navbar-search pull-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
								<input name="s" id="s" type="text" class="search-query" placeholder="<?php _e('Search','bonestheme'); ?>">
							</form>
							<?php } ?>
							
						</div>
					</div>
				</div>
			
			</div> <!-- end #inner-header -->
		
										</nav>

		</header> <!-- end header -->
		
		<div class="container">
			 <div class="subnav" style="margin-left:0">
          <?php wp_nav_menu(array('container' => 'false', 'menu_class' => 'nav nav-pills pull-left', 'menu' => 'Main Nav')); ?>   
          
          <?php wp_nav_menu(array('container' => 'false', 'menu_class' => 'nav nav-pills pull-right', 'menu' => 'Secondary Nav')); ?> 
         
        </div>
    </div>
    
    		
		<div class="container">
