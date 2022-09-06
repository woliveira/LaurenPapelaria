<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lauren
 */

get_header();
?>
	<main id="content-wraper">
		<div class="container">
			<div id="painel-itens-welcome" class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-6">
						<i class="fa-solid fa-truck"></i>
						<h3>Rastreie seu Pedido</h3>
					</div>

					<div class="col-md-3 col-sm-6 col-6">
						<i class="fa-brands fa-whatsapp"></i>
						<h3><a href="https://wa.me/5519971145244" target="_blank" title="Whatsapp">Compre pelo Whatsapp</a></h3>
					</div>

					<div class="col-md-3 col-sm-6 col-6">
						<i class="fa-solid fa-star"></i>
						<h3>Lan&ccedil;amento</h3>
					</div>

					<div class="col-md-3 col-sm-6 col-6">
						<i class="fa-solid fa-gift"></i>
						<h3>Kits da Semana</h3>
					</div>
				</div>
			</div>

			<!-- <div class="row">
				<div class="col-lg-6">
					<div style="background:#ededed;margin-bottom:30px;">
						<?php
							$categoryLink = get_category_link(16);
							$img = wp_get_attachment_image_src(304, '');
						?>
						<a href="<?php echo esc_url($categoryLink); ?>" title=""><img src="<?php echo $img[0]; ?>" alt="image"></a>
					</div>
				</div>
				<div class="col-lg-6">
					<div style="background:#ededed;margin-bottom:30px;">
					<?php
							$categoryLink = get_category_link(16);
							$img = wp_get_attachment_image_src(305, '');
						?>
						<a href="<?php echo esc_url($categoryLink); ?>" title=""><img src="<?php echo $img[0]; ?>" alt="image"></a>
					</div>
				</div>
			</div> -->

			<div class="row">
				<h3 class="topics">Acabou de chegar</h3>
				<span class="topic-separator"></span>
			</div>

			<div class="row">
			<?php
				$args = [
					'orderby' => 'rand',
					'limit' => 20,
					'status' => 'publish'
				];

				$products = wc_get_products($args);

				foreach ($products as $product) {
					$priceProduto = $product->price;
					$regularPriceProduto = $product->regular_price;

					$valorDoDesconto = $regularPriceProduto - $priceProduto;
					$porcentagemDoDesconto = (($valorDoDesconto * 100) / $regularPriceProduto);
					?>

					<div class="col-lg-15 col-15">
						<div class="products">
							<a href="<?php print esc_url( get_permalink( $product->get_id() ) ); ?>">
								<?php print "<div class='image-product'>" . $product->get_image(['300', '300'], ["class" => "img-responsive"], '') . "</div>"; ?>

								<?php
									if ($porcentagemDoDesconto > 0) {
										print "<div class='desconto-product'>";
										print "-" . wc_format_decimal($porcentagemDoDesconto, 0) . "%";
										print "</div>";
									}
								?>
								<div class="title-product">
									<?php
										$nomeProduto = $product->name;

										if (strlen($product->name) > 50) {
											$nomeProduto = substr($product->name, 0, 50) . "...";
										}

										print "<h5>" . $nomeProduto . "</h5>";
									?>
								</div>
								<div class="price-product">
									<?php print $product->get_price_html(); ?>
								</div>
							</a>
						</div>
					</div>
				<?php
				} ?>
			</div>

			<!-- <div class="row">
				<div class="col-lg-6">
					<div style="background:#ededed;margin-bottom:30px;">
						<?php
							$categoryLink = get_category_link(16);
							$img = wp_get_attachment_image_src(306, '');
						?>
						<a href="<?php echo esc_url($categoryLink); ?>" title=""><img src="<?php echo $img[0]; ?>" alt="image"></a>
					</div>
				</div>
				<div class="col-lg-6">
					<div style="background:#ededed;margin-bottom:30px;">
					<?php
							$categoryLink = get_category_link(16);
							$img = wp_get_attachment_image_src(340, '');
						?>
						<a href="<?php echo esc_url($categoryLink); ?>" title=""><img src="<?php echo $img[0]; ?>" alt="image"></a>
					</div>
				</div>
			</div> -->

			<div class="row">
				<h3 class="topics">Os mais vendidos</h3>
				<span class="topic-separator"></span>
			</div>

			<div class="row">
			<?php
				$args = [
					'orderby' => 'rand',
					'limit' => 10,
					'status' => 'publish'
				];

				$products = wc_get_products($args);

				foreach ($products as $product) {					
					$priceProduto = $product->price;
					$regularPriceProduto = $product->regular_price;

					$valorDoDesconto = $regularPriceProduto - $priceProduto;
					$porcentagemDoDesconto = (($valorDoDesconto * 100) / $regularPriceProduto);
					?>

					<div class="col-lg-15 col-15">
						<div class="products">
							<a href="<?php print esc_url( get_permalink( $product->get_id() ) ); ?>">
								<?php print "<div class='image-product'>" . $product->get_image(['300', '300'], ["class" => "img-responsive"], '') . "</div>"; ?>

								<?php
									if ($porcentagemDoDesconto > 0) {
										print "<div class='desconto-product'>";
										print "-" . wc_format_decimal($porcentagemDoDesconto, 0) . "%";
										print "</div>";
									}
								?>
								<div class="title-product">
									<?php
										$nomeProduto = $product->name;

										if (strlen($product->name) > 55) {
											$nomeProduto = substr($product->name, 0, 55) . "...";
										}

										print $nomeProduto;
									?>
								</div>
								<div class="price-product">
									<?php print $product->get_price_html(); ?>
								</div>
							</a>
						</div>
					</div>
				<?php
				} ?>
			</div>

			<div class="row">
				<h3 class="topics">Promoções</h3>
				<span class="topic-separator"></span>
			</div>

			<div class="row">
			<?php
				$args = [
					'orderby' => 'rand',
					'limit' => 10,
					'status' => 'publish'
				];

				$products = wc_get_products($args);

				foreach ($products as $product) {
					$priceProduto = $product->price;
					$regularPriceProduto = $product->regular_price;

					$valorDoDesconto = $regularPriceProduto - $priceProduto;
					$porcentagemDoDesconto = (($valorDoDesconto * 100) / $regularPriceProduto);
					?>

					<div class="col-lg-15 col-15">
						<div class="products">
							<a href="<?php print esc_url( get_permalink( $product->get_id() ) ); ?>">
								<?php print "<div class='image-product'>" . $product->get_image(['300', '300'], ["class" => "img-responsive"], '') . "</div>"; ?>

								<?php
									if ($porcentagemDoDesconto > 0) {
										print "<div class='desconto-product'>";
										print "-" . wc_format_decimal($porcentagemDoDesconto, 0) . "%";
										print "</div>";
									}
								?>
								<div class="title-product">
									<?php
										$nomeProduto = $product->name;

										if (strlen($product->name) > 55) {
											$nomeProduto = substr($product->name, 0, 55) . "...";
										}

										print $nomeProduto;
									?>
								</div>
								<div class="price-product">
									<?php print $product->get_price_html(); ?>
								</div>
							</a>
						</div>
					</div>
				<?php
				} ?>
			</div>
		</div>
	</main>

<?php
get_footer();
