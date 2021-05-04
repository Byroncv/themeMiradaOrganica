<!DOCTYPE HTML>

<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="descriptions" content="">
	<title>Mirada Orgánica</title>

		 <?php 
      wp_head();
    ?>
	</head>
	<body>

		<!-- Header -->

			
		<header>			
		<nav id="navHeader">
			<a href="<?php echo site_url(); ?>" alt="logo de Mirada Orgánica" id="logo" role="img"  tabindex="0"></a>
			<div id="burger"  tabindex="0">		
				<span></span>
			</div>
			<ul id="menu">
				<?php	
	          	wp_nav_menu(
	          		array(
 					'theme_location' => 'headerMenuLocation',
 					'menu_class' => 'menu_class_nav'
	          		)
	          	);
          	?> 
				
			</ul>
		
				
		</nav>
			</header>