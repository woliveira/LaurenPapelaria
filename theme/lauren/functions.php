<?php
/**
 * lauren functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lauren
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lauren_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on lauren, use a find and replace
		* to change 'lauren' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'lauren', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'lauren' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'lauren_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'lauren_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lauren_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lauren_content_width', 640 );
}
add_action( 'after_setup_theme', 'lauren_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lauren_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'lauren' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'lauren' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'lauren_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lauren_scripts() {
	wp_enqueue_style( 'lauren-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendors/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css');
	wp_enqueue_style( 'bootstrap-custom', get_template_directory_uri() . '/vendors/bootstrap-5.2.0-beta1-dist/css/bootstrap.custom.css');
	wp_enqueue_style( 'fonts-awasome', get_template_directory_uri() . '/vendors/fontawesome-free-6.1.1-web/css/all.min.css');
	wp_style_add_data( 'lauren-style', 'rtl', 'replace' );

	wp_enqueue_script( 'lauren-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendors/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js');
	wp_enqueue_script( 'fonts-awasome', get_template_directory_uri() . '/vendors/fontawesome-free-6.1.1-web/js/all.min.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lauren_scripts' );

function lauren_scripts_js() {
	wp_enqueue_script( 'lauren-script', get_template_directory_uri() . '/js/scripts.js', NULL, NULL, true);
}

add_action( 'wp_enqueue_scripts', 'lauren_scripts_js', 20, 1);


/**
 * Custom Fonts
 * font-family: 'Pacifico', cursive
 */
function lauren_fonts() {
	if (!is_admin()) {
		wp_register_style('pacifico', 'https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
		wp_enqueue_style('pacifico');
	}
}
add_action('wp_enqueue_scripts', 'lauren_fonts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_shortcode ('woocommerce_cart_icon', 'woo_cart_icon' );

function woo_cart_icon() {
    ob_start();
 
        $cart_count = WC()->cart->cart_contents_count; // Set variable for cart item count
        $cart_url = wc_get_cart_url();  // Set variable for Cart URL
  
        echo '<a class="menu-item cart-contents" href="'.$cart_url.'" title="Cart"><i class="fa-solid fa-basket-shopping"></i>';
        
        if ( $cart_count > 0 ) {
            echo '<span class="cart-contents-count">'.$cart_count.'</span>';
        }
        
        echo '</a>';
        
            
    return ob_get_clean();
}

function lauren_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'lauren_add_woocommerce_support' );

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');	
remove_action( 'woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title', 10 );

add_action('woocommerce_shop_loop_item_title', 'lauren_mudar_titulo_produto_loop', 10 );

function lauren_mudar_titulo_produto_loop() {

	$nomeProduto = get_the_title();

	if (strlen($nomeProduto) > 50) {
		$nomeProduto = substr($nomeProduto, 0, 50) . "...";
	}

    echo '<div class="title-product"><h5 class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '">' . $nomeProduto . '</h5></div>';
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_data_price', 'woocommerce_template_single_price', 10 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation', 10 );

function calculo_parcelamento_produto()
{
	print "pague em at&#xE9; 12x no cart&#xE3;o de cr&#xE9;dito";
}

add_action( 'woocommerce_single_product_data_price', 'calculo_parcelamento_produto', 11 );

function calculo_cep_melhor_envio()
{
	$product = wc_get_product(get_the_ID());

	if ($product->is_in_stock()) {
		print do_shortcode("[calculadora_melhor_envio product_id='" . get_the_ID() . "']");
	}
}

add_action( 'woocommerce_single_product_data_price', 'calculo_cep_melhor_envio', 12);

add_action( 'woocommerce_single_product_data_price', 'woocommerce_template_single_add_to_cart', 13 );

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);
remove_action( 'woocommerce_checkout_terms_and_conditions', 'wc_checkout_privacy_policy_text', 20 );
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form');
add_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_coupon_form' );

add_filter( 'woocommerce_billing_fields', 'wc_unrequire_neighborhood_field');

function wc_unrequire_neighborhood_field( $fields ) {
	$fields['billing_neighborhood']['required'] = true;
	return $fields;
}