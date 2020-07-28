<?php
/*
	Template Name : header.php
	Description: powers the header to the Conditional_logic theme
	Author: Moses Mathenges
*/
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset ="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(); ?> </title>
	</head>

	<body>
		<div class="site_container">
	   		<header class="site_header">
				<h1><a href="<?php echo get_option('home'); ?>"> 
					<?php bloginfo('name'); ?></a>  </h1>
					
					<div class="description">
						<?php bloginfo('description') ?> 
					</div><!-- description -->

 					<?php wp_nav_menu();  ?> 
					<?php wp_head(); ?>
	   		</header><!-- site_header --> 

			<div class="below_header"> 