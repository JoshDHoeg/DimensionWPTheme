<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Awesome Theme</title>
		<?php wp_head(); ?>
	</head>

	<?php

		if( is_front_page() ):
			$awesome_classes = array( 'awesome-class', 'my-class' );
		else:
			$awesome_classes = array( 'no-awesome-class' );
		endif;

	?>

	<body <?php body_class( $awesome_classes ); ?>>

		<!--desktop navbar-->
		<div class="left-nav">
			<nav class="sidenav" id="sidenav">
				<div class="sidenav-menu">
					<?php
						wp_nav_menu(array(
							'theme_location' => 'primary',
							'container' => false,
							'menu_class' => 'nav navbar-nav '
							)
						);
					?>
				</div>
				<div class="sidenav-social">
					<?php	if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
					<div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
						<?php dynamic_sidebar( 'custom-header-widget' ); ?>
					</div>
					<?php endif; ?>
				</div>
			</nav>
			<div class="sidenav-brand">
				<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				?>
				<a class="sidenav-brand-logo" href=""><img src="<?php echo $image[0]; ?>"></a>
			</div>
			<div class="sidenav-toggle" onclick="navclose()" id="navclose">
					<span>&#8918;</span>
			</div>
			<div class="sidenav-toggle" onclick="navopen()" id="navopen">
					<span>&#8919;</span>
			</div>
		</div>


		<!--mobile nav-->


			<!-- </nav>
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Awesome Theme</a>
						</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?php
							wp_nav_menu(array(
								'theme_location' => 'primary',
								'container' => false,
								'menu_class' => 'nav navbar-nav navbar-right'
								)
							);
						?>
					</div>
				</div>
			</nav>
		</div>-->


		<div class="container-fluid">

			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
