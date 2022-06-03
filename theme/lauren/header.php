<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lauren
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lauren' ); ?></a>

	<header id="masthead" class="site-header">
		<div id="header-content" class="container">
			<div class="row">
				<div class="col-lg-2 col-sm-7 col-5">
					<div class="site-branding">
						<?php the_custom_logo(); ?>
					</div>
				</div>
				<div class="col-lg-3 col-sm-5 d-block d-lg-none col-7">
					<div class="user-tool">
						<div class="user-my-account">
							<span class="icon">
								<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Conta','woothemes'); ?>">
									<i class="fa-solid fa-user"></i>
								</a>
							</span>
							<p class="message-login d-none .d-sm-block">
								<?php
									if ( is_user_logged_in() ) {
										global $current_user;
								?>
									<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="ola <?php print ucfirst($current_user->user_login); ?> minha conta">ola <?php print ucfirst($current_user->user_login); ?><br />minha conta</a></p>
								<?php } else { ?>
									<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="ola, faca seu login ou cadastre-se">ola, faca seu login ou cadastre-se</a></p>
								<?php } ?>
							</p>
						</div>
						<div class="user-my-cart">
							<?php echo do_shortcode("[woocommerce_cart_icon]"); ?>
						</div>
						<div class="menu-mobile">
							<nav class="navbar navbar-expand-lg">
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
								</button>
							</nav>
						</div>
					</div>
				</div>
				<div class="col-lg-7">					
					<form role="search" method="get" id="search-form" class="rounded" action= "<?php echo home_url( '/' ); ?>" >
						<div>
							<label class="screen-reader-text" for= "s" >Pesquisar por:</label>
							<span class="icon icon-search"></span>
							<input type="texto" name="s" id="s" class="form-control search" placeholder= '<?php echo $search_params[' placeholder ']; ?>' />
							<input type="hidden" name="post_type" value="product" >
						</div>
					</form>
				</div>
				<div class="col-lg-3 d-none d-lg-block">
					<div class="user-tool">
						<div class="user-my-account">
							<span class="icon">
								<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Conta','woothemes'); ?>">
									<i class="fa-solid fa-user"></i>
								</a>
							</span>
							<p class="message-login">
								<?php
									if ( is_user_logged_in() ) {
										global $current_user;
								?>
									<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="ola <?php print ucfirst($current_user->user_login); ?> minha conta">ola <?php print ucfirst($current_user->user_login); ?><br />minha conta</a></p>
								<?php } else { ?>
									<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="ola, faca seu login ou cadastre-se">ola, faca seu login ou cadastre-se</a></p>
								<?php } ?>
							</p>
						</div>
						<div class="user-my-cart">
							<?php echo do_shortcode("[woocommerce_cart_icon]"); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="menu-navigation">
			<div class="container">
				<div class="collapse navbar-collapse" id="navbarNav">
				<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu-mobile',
								'menu_class' => 'navbar-nav'
							)
						);
					?>
				</div>

				<nav id="site-navigation" class="main-navigation d-none d-lg-block">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'lauren' ); ?></button>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
					?>
				</nav>
			</div>
		</div>
	</header><!-- #masthead -->
