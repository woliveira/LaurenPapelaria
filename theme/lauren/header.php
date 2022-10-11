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

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-FKQH61WEN5"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-FKQH61WEN5');
	</script>
	<script src="//code.jivosite.com/widget/tRXLVORb2R" async></script>
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
				<div class="collapse navbar-collapse navbar-mobile" id="navbarNav">
				<?php
					$useragent=$_SERVER['HTTP_USER_AGENT'];
					if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
					{ 
						do_action('woocommerce_sidebar');
					}
						// wp_nav_menu(
						// 	array(
						// 		'theme_location' => 'menu-1',
						// 		'menu_id'        => 'primary-menu-mobile',
						// 		'menu_class' => 'navbar-nav'
						// 	)
						// );
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
