<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section class="related products">
		<?php
			$heading = "Aproveite e compre junto";
		?>
		<h2 class="title"><?php echo esc_html( $heading ); ?></h2>
		<?php

			$args = array(
				'post_type'      => 'product',
				'posts_per_page' => 5,
				'product_cat'    => 'home',
				'orderby'        => 'rand'
			);

			$loop = new WP_Query( $args );
			print "<div class='wc-block-grid wp-block-product-category wc-block-product-category has-5-columns has-multiple-rows has-aligned-buttons produtos'><ul class='wc-block-grid__products'>";
			while ( $loop->have_posts() ) : $loop->the_post();
				global $product;

				$price = wc_price($product->price);
				$regularPrice = wc_price($product->regular_price);
				
				?>
				
					<li class='wc-block-grid__product'>
						<a href="<?php print get_permalink(); ?>">
							<div class='wc-block-grid__product-image'>
								<?php print woocommerce_get_product_thumbnail(); ?>
							</div>
							<div class='wc-block-grid__product-title'>
								<?php print get_the_title(); ?>
							</div>
						</a>

						<div class="wc-block-grid__product-price price">
							<?php if($regularPrice) : ?>
								<del aria-hidden="true">
									<span class="woocommerce-Price-amount amount">
										<?php print $regularPrice; ?>
									</span>
								</del>
							<?php endif; ?>
							
							<ins>
								<span class="woocommerce-Price-amount amount">
									<?php print $price; ?>
								</span>
							</ins>
						</div>
					</li>
			<?php
				endwhile;
				print "</ul></div>";
				wp_reset_query();
			?>	
	</section>
	<?php
endif;

wp_reset_postdata();
