<?php
/**
 * Single Product Up-Sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/up-sells.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $upsells ) : ?>

	<section id="related-products" class="up-sells upsells products">
		<?php
		$heading = apply_filters( 'woocommerce_product_upsells_products_heading', __( 'You may also like&hellip;', 'woocommerce' ) );

		if ( $heading ) :
			?>
			<h3><?php echo esc_html( $heading ); ?></h3>
		<?php endif; ?>

		<?php woocommerce_product_loop_start(); ?>

			<?php foreach ( $upsells as $upsell ) :

					$priceProduto = $upsell->price;
					$regularPriceProduto = $upsell->regular_price;

					$valorDoDesconto = $regularPriceProduto - $priceProduto;
					$porcentagemDoDesconto = (($valorDoDesconto * 100) / $regularPriceProduto);
					?>

					<div class="col-lg-15">
						<div class="products">
							<a href="<?php print esc_url( get_permalink( $upsell->get_id() ) ); ?>">
								<?php print "<div class='image-product'>" . $upsell->get_image(['700', '600'], ["class" => "img-responsive"], '') . "</div>"; ?>

								<?php
									if ($porcentagemDoDesconto > 0) {
										print "<div class='desconto-product'>";
										print "-" . wc_format_decimal($porcentagemDoDesconto, 0) . "%";
										print "</div>";
									}
								?>
								<div class="title-product">
									<?php
										$nomeProduto = $upsell->name;

										if (strlen($upsell->name) > 65) {
											$nomeProduto = substr($upsell->name, 0, 65) . "...";
										}

										print $nomeProduto;
									?>
								</div>
								<div class="price-product">
									<?php print $upsell->get_price_html(); ?>
								</div>
								<div class="parcelamento-product">
									<?php
										$valorParcelado = ($priceProduto / 6);
										print "6x de " . wc_price($valorParcelado) . " sem juros no cartao";
									?>
								</div>
							</a>
						</div>
					</div>
			
			<?php endforeach; ?>

		<?php woocommerce_product_loop_end(); ?>

	</section>

	<?php
endif;

wp_reset_postdata();
