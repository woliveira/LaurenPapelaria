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
		<div class="container slider container d-none d-sm-block">
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<a href="https://laurenpapelaria.com/produto-tag/acabou_de_chegar/" title="Conheça as novidades mais fofas da internet"><img src="https://laurenpapelaria.com/wp-content/uploads/2022/11/slider-02.png" class="d-block w-100"></a>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>

		<div class="container slider d-block d-sm-none">
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<a href="https://laurenpapelaria.com/produto-tag/acabou_de_chegar/" title="Conheça as novidades mais fofas da internet"><img src="https://laurenpapelaria.com/wp-content/uploads/2022/11/slider-1-mobile.png" class="d-block w-100"></a>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>

		<div class="container">
			<div id="painel-itens-welcome" class="container d-none d-sm-block">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-6">
						<h3><i class="fa-solid fa-truck"></i><div class="text-itens">Entregamos em todo o Brasil</div></h3>
					</div>

					<div class="col-md-3 col-sm-6 col-6">
						<h3><i class="fa-solid fa-star"></i><div class="text-itens">Aceitamos pagamentos via PIX</div></h3>
					</div>

					<div class="col-md-3 col-sm-6 col-6">
						<h3><i class="fa-solid fa-gift"></i><div class="text-itens">Sua compra com segurança</div></h3>
					</div>
					<div class="col-md-3 col-sm-6 col-6">
						<h3><i class="fa-brands fa-whatsapp"></i><div class="text-itens"><a href="https://wa.me/5519971145244" target="_blank" title="Whatsapp">Compre pelo Whatsapp</a></div></h3>
					</div>
				</div>
			</div>

			<!-- <div id="categorias">
				<h3>CATEGORIAS</h3>
				<ul>
					<li>
						<a href="#" title="">
							<div class="categoria-images"><img src="http://localhost:8000/wp-content/uploads/2022/11/cat.png" /></div>
							<div class="categoria-nome"><a href="" title="">Canetas</a></div>
						</a>
					</li>
					<li>
						<a href="#" title="">
							<div class="categoria-images"><img src="http://localhost:8000/wp-content/uploads/2022/11/cat.png" /></div>
							<div class="categoria-nome"><a href="" title="">Lapis</a></div>
						</a>
					</li>
					<li>
						<a href="#" title="">
							<div class="categoria-images"><img src="http://localhost:8000/wp-content/uploads/2022/11/cat.png" /></div>
							<div class="categoria-nome"><a href="" title="">Agenda</a></div>
						</a>
					</li>
					<li>
						<a href="#" title="">
							<div class="categoria-images"><img src="http://localhost:8000/wp-content/uploads/2022/11/cat.png" /></div>
							<div class="categoria-nome"><a href="" title="">Apontadores</a></div>
						</a>
					</li>
					<li>
						<a href="#" title="">
							<div class="categoria-images"><img src="http://localhost:8000/wp-content/uploads/2022/11/cat.png" /></div>
							<div class="categoria-nome"><a href="" title="">Corretivos</a></div>
						</a>
					</li>
					<li>
						<a href="#" title="">
							<div class="categoria-images"><img src="http://localhost:8000/wp-content/uploads/2022/11/cat.png" /></div>
							<div class="categoria-nome"><a href="" title="">Planners</a></div>
						</a>
					</li>
					<li>
						<a href="#" title="">
							<div class="categoria-images"><img src="http://localhost:8000/wp-content/uploads/2022/11/cat.png" /></div>
							<div class="categoria-nome"><a href="" title="">Blocos</a></div>
						</a>
					</li>
					<li>
						<a href="#" title="">
							<div class="categoria-images"><img src="http://localhost:8000/wp-content/uploads/2022/11/cat.png" /></div>
							<div class="categoria-nome"><a href="" title="">Estojos</a></div>
						</a>
					</li>
					<li>
						<a href="#" title="">
							<div class="categoria-images"><img src="http://localhost:8000/wp-content/uploads/2022/11/cat.png" /></div>
							<div class="categoria-nome"><a href="" title="">Tesouras</a></div>
						</a>
					</li>
					<li>
						<a href="#" title="">
							<div class="categoria-images"><img src="http://localhost:8000/wp-content/uploads/2022/11/cat.png" /></div>
							<div class="categoria-nome">Whashi Tapes</div>
						</a>
					</li>
				</ul>
			</div> -->

			<div id="call">
				<div class="row">
					<div class="slick-slider">
						<div class="col-md-4 col-sm-4 col-4">
							<a href="https://laurenpapelaria.com/categoria-produto/escrita/caneta/" title="As canetas mais fofas estão aqui !">
								<img src="https://laurenpapelaria.com/wp-content/uploads/2022/11/call-3.png" />
							</a>
						</div>
						<div class="col-md-4 col-sm-4 col-4">
							<a href="https://www.instagram.com/lauren.papelaria/" target="_blank" title="Receba novidades pelo Instagram">
								<img src="https://laurenpapelaria.com/wp-content/uploads/2022/11/call-1.png" />
							</a>
						</div>
						<div class="col-md-4 col-sm-4 col-4">
							<a href="https://laurenpapelaria.com/produto-tag/promocoes/" title="Super promoção da semana">
								<img src="https://laurenpapelaria.com/wp-content/uploads/2022/11/call-2.png" />
							</a>
						</div>
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
				<h3 class="topics">Produtos em destaque</h3>
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
				<h3 class="topics">Acabou de chegar</h3>
				<span class="topic-separator"></span>
			</div>

			<div class="row">
			<?php
				$args = [
					'orderby' => 'rand',
					'limit' => 20,
					'status' => 'publish',
					'product_tag' => 'acabou_de_chegar'
				];

				$products = wc_get_products($args);

				if ($products) {
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
					}
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
					'status' => 'publish',
					'product_tag' => 'os_mais_vendidos'
				];

				$products = wc_get_products($args);

				if ($products) {
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
					}
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
					'status' => 'publish',
					'product_tag' => 'promocoes'
				];

				$products = wc_get_products($args);

				if ($products) {
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
					}
				} ?>
			</div>
		</div>
	</main>

<?php
get_footer();
