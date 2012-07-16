<?php if (!current_user_can('read')) {
	//header('Location: ./hello.html');
}
global $section;
global $post;
if (is_page('wiki') || $post->post_type == 'incsub_wiki') {
  $section = 'wiki';
}

?>
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
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png?v=3">

		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

    <style type="text/css">
    body.admin-bar {margin-top: 0!important}
    
    .sidebar .nav {
      margin-bottom: 8px;
    }
    
    .sidebar .nav-tabs a {
          font-size: 90%;
    }
    .sidebar .nav-tabs > .active > a, 
    .sidebar .nav-tabs > .active > a:hover {
      background: transparent;
      border-bottom: 1px solid whiteSmoke;
    }
    </style>

               <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://blog.connected.io/rss" />
		
		<!--<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">-->
		<link href="<?php echo get_template_directory_uri(); ?>/less/bootstrap.css?v=9" rel="stylesheet">
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
	
	<div class="navbar navbar-fixed-top" id="header">
	  <div class="navbar-inner">
		<div class="container" style="position:relative">
		  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <a class="brand" id="logo" href="<?php bloginfo('siteurl'); ?>"></a>
		  <span id="dot-something"></span>
		  <div class="nav-collapse">
			
			<?php if ($section == 'wiki') : ?>
    		<style type="text/css">
    		 .rpx_user_icon {
    		  width: 50px;
    		 }
    		 .rpx_user_icon .rpx_author {
    		  display: none;
    		 }
    		 #login {
    		  padding-top: 12px;
    		 }
    		 #login a {
    		  padding-left: 15px;
    		  padding-top: 7px;
    		  display:block;
    		  float: left;
    		 }
    		 </style>
		
			<div class="nav pull-right" id="login">
														 
		 

		 <?php if (is_user_logged_in()) : ?>

		 
		  <?php echo do_shortcode('[rpxavatar badge="true" name="false"]'); ?> 
		  
		 
		   <a class="username" href="<?php bloginfo('siteurl');?>/profile"><?php global $current_user; get_currentuserinfo(); echo $current_user->user_login; ?></a> 
		   <a class="logout" href="<?php echo wp_logout_url(); ?>">logout</a>
		 
		 <?php else : ?>
					 <a href="#" onclick="showRPX('rpxlogin', '', ''); return false;">login</a>				
	
		 <?php endif; ?>
		 
		</div>
		
		<?php else:  // not wiki ?>
		
		  <ul class="nav pull-right">
			  <?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
			</ul>


		<?php endif; // wiki?>


			
		  </div><!--/.nav-collapse -->
		</div>
	  </div>
	</div>
    
		<div class="container">
