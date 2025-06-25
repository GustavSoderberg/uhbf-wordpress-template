<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
	    <meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php bloginfo( 'name' ); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head() ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Nav -->
						<nav id="nav">
							<!-- Code for old centered logo above menu 
							<ul>
								<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/uhbflogo-160x300.png" width="40" height="75"></li>							
							</ul> -->
							<?php //wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
							<?php 
							if ( has_nav_menu( 'header-menu' ) ) {   
								$defaults = array(
									'theme_location'  => 'header-menu',
									'menu'            => 'header-menu',
									'container'       => '',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => '',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'header-menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul><li><img src="https://www.uhbf.se/wp-content/uploads/2025/06/uhbflogo-160x300-1.png" width="40" height="75"></li>%3$s</ul>',
									'depth'           => 0,
									'walker'          => ''
								);

								wp_nav_menu( $defaults );
							}
							?>
						</nav>

				</div>
				<?php if ( is_page( array( 'startsida' ) ) ) : ?>
				<?php else : ?>
			
			<!-- Hero -->
				<section id="banner-cropped">
				</section>
				
			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-narrower">
								<div id="sidebar">

									<!-- Sidebar -->

										<section>
											<?php if ( is_page( array( 'belgotraffen' ) ) || 46 == $post->post_parent ) : ?>
											
											<?php //wp_nav_menu( array( 'theme_location' => 'belgotraffen-menu' ) ); ?>
											<?php 
											if ( has_nav_menu( 'header-menu' ) ) {   
												$defaults = array(
													'theme_location'  => 'belgotraffen-menu',
													'menu'            => 'belgotraffen-menu',
													'container'       => '',
													'container_class' => '',
													'container_id'    => '',
													'menu_class'      => '',
													'menu_id'         => '',
													'echo'            => true,
													'fallback_cb'     => 'belgotraffen-menu',
													'before'          => '',
													'after'           => '',
													'link_before'     => '',
													'link_after'      => '',
													'items_wrap'      => '<ul class="links">%3$s</ul>',
													'depth'           => 0,
													'walker'          => ''
												);

												wp_nav_menu( $defaults );
											}
											?>
											
											<?php elseif ( is_page( array( 'surolstraffen' ) ) || 661 == $post->post_parent ) : ?>
											
											<?php //wp_nav_menu( array( 'theme_location' => 'surolstraffen-menu' ) ); ?>
											<?php 
											if ( has_nav_menu( 'header-menu' ) ) {   
												$defaults = array(
													'theme_location'  => 'surolstraffen-menu',
													'menu'            => 'surolstraffen-menu',
													'container'       => '',
													'container_class' => '',
													'container_id'    => '',
													'menu_class'      => '',
													'menu_id'         => '',
													'echo'            => true,
													'fallback_cb'     => 'surolstraffen-menu',
													'before'          => '',
													'after'           => '',
													'link_before'     => '',
													'link_after'      => '',
													'items_wrap'      => '<ul class="links">%3$s</ul>',
													'depth'           => 0,
													'walker'          => ''
												);

												wp_nav_menu( $defaults );
											}
											?>
											
											<?php elseif ( is_page( array( 'fler-evenemang' ) ) || 65 == $post->post_parent ) : ?>
											
											<?php //wp_nav_menu( array( 'theme_location' => 'fler-evenemang-menu' ) ); ?>
											<?php 
											if ( has_nav_menu( 'header-menu' ) ) {   
												$defaults = array(
													'theme_location'  => 'fler-evenemang-menu',
													'menu'            => 'fler-evenemang-menu',
													'container'       => '',
													'container_class' => '',
													'container_id'    => '',
													'menu_class'      => '',
													'menu_id'         => '',
													'echo'            => true,
													'fallback_cb'     => 'fler-evenemang-menu',
													'before'          => '',
													'after'           => '',
													'link_before'     => '',
													'link_after'      => '',
													'items_wrap'      => '<ul class="links">%3$s</ul>',
													'depth'           => 0,
													'walker'          => ''
												);

												wp_nav_menu( $defaults );
											}
											?>
											
											<?php elseif ( is_page( array( 'for-medlemmar' ) ) || 662 == $post->post_parent ) : ?>
											
											<?php //wp_nav_menu( array( 'theme_location' => 'for-medlemmar-menu' ) ); ?>
											<?php 
											if ( has_nav_menu( 'header-menu' ) ) {   
												$defaults = array(
													'theme_location'  => 'for-medlemmar-menu',
													'menu'            => 'for-medlemmar-menu',
													'container'       => '',
													'container_class' => '',
													'container_id'    => '',
													'menu_class'      => '',
													'menu_id'         => '',
													'echo'            => true,
													'fallback_cb'     => 'for-medlemmar-menu',
													'before'          => '',
													'after'           => '',
													'link_before'     => '',
													'link_after'      => '',
													'items_wrap'      => '<ul class="links">%3$s</ul>',
													'depth'           => 0,
													'walker'          => ''
												);

												wp_nav_menu( $defaults );
											}
											?>
											
											<?php elseif ( is_page( array( 'bli-medlem' ) ) || 663 == $post->post_parent ) : ?>
											
											<?php //wp_nav_menu( array( 'theme_location' => 'bli-medlem-menu' ) ); ?>
											<?php 
											if ( has_nav_menu( 'header-menu' ) ) {   
												$defaults = array(
													'theme_location'  => 'bli-medlem-menu',
													'menu'            => 'bli-medlem-menu',
													'container'       => '',
													'container_class' => '',
													'container_id'    => '',
													'menu_class'      => '',
													'menu_id'         => '',
													'echo'            => true,
													'fallback_cb'     => 'bli-medlem-menu',
													'before'          => '',
													'after'           => '',
													'link_before'     => '',
													'link_after'      => '',
													'items_wrap'      => '<ul class="links">%3$s</ul>',
													'depth'           => 0,
													'walker'          => ''
												);

												wp_nav_menu( $defaults );
											}
											?>
											
											<?php elseif ( is_page( array( 'om-oss' ) ) || 72 == $post->post_parent ) : ?>
											
											<?php //wp_nav_menu( array( 'theme_location' => 'om-oss-menu' ) ); ?>
											<?php 
											if ( has_nav_menu( 'header-menu' ) ) {   
												$defaults = array(
													'theme_location'  => 'om-oss-menu',
													'menu'            => 'om-oss-menu',
													'container'       => '',
													'container_class' => '',
													'container_id'    => '',
													'menu_class'      => '',
													'menu_id'         => '',
													'echo'            => true,
													'fallback_cb'     => 'om-oss-menu',
													'before'          => '',
													'after'           => '',
													'link_before'     => '',
													'link_after'      => '',
													'items_wrap'      => '<ul class="links">%3$s</ul>',
													'depth'           => 0,
													'walker'          => ''
												);

												wp_nav_menu( $defaults );
											}
											?>
											
											<?php else : ?>
											
											<?php endif; ?>
										</section>

								</div>
							</div>
							<div class="col-8  col-12-narrower imp-narrower">
								<div id="content">

									<!-- Content -->

										<article>
											<header>
												<h2><?php single_post_title(); ?></h2>
											</header>
				<?php endif; ?>