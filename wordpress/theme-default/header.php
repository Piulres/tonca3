<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">

	<meta name="author" content="">

	<link rel="icon" href="../../favicon.ico">

	<!-- wp_head -->

	<?php wp_head(); ?>

	<?php include 'le_styles.php' ?>

	<?php include 'le_scripts.php' ?>

</head>

<body>

	<header>

		<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">

			<div class="container">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<!-- <a class="navbar-brand" href="<?php echo get_home_url(); ?>"> -->
					<!-- <?php // echo get_bloginfo(); ?> -->
					<!-- <img class="logo" src="<?php // echo get_bloginfo('template_directory');?>/img/logo.png" alt="Logo"> -->
				<!-- </a> -->

				<?php
				wp_nav_menu( array(
					'theme_location'    => 'menu-superior',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'bs-example-navbar-collapse-1',
					'menu_class'        => 'nav navbar-nav list-item',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				) );
				?>

				<?php get_search_form(); ?>

			</div>
		</nav>

	</header>