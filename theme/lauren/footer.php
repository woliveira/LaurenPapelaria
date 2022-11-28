<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lauren
 */
?>
	<footer class="site-footer">
		<div class="container footer-bottom">
			<div id="newsletter">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="conteudo-newsletter">
								<h3>
									<div class="icon-newsletter d-none d-sm-block"><i class="fa-solid fa-envelope"></i></div>
									<div class="titulo-newsletter">Receba todas as novidades e promoções da papelaria</div>
								</h3>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="form-newsletter">
								<?php print do_shortcode("[mailpoet_form id='1']"); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<?php the_custom_logo(); ?>
				</div>

				<div class="col-lg-8">
					<div class="row">
						<div class="col-lg-4">
							<h3>A Papelaria</h3>
							<ul>
								<li><a href="https://laurenpapelaria.com/politica-de-reembolso/" title="Política de reembolso">Política de reembolso</a></li>
								<li><a href="https://laurenpapelaria.com/termos-de-uso/" title="Termos de uso">Termos de uso</a></li>
								<li><a href="https://laurenpapelaria.com/politica-de-troca/" title="Política de troca">Política de troca</a></li>
								<li><a href="https://laurenpapelaria.com/politica-de-privacidade/" title="Política de privacidade">Política de privacidade</a></li>
								<li><a href="https://wa.me/5519971145244" target="_blank" title="Contato">Entre em contato (via Whatsapp)</a></li>
							</ul>
						</div>
						<div class="col-lg-4">
							<h3>Minha Conta</h3>
							<ul>
								<li><a href="https://laurenpapelaria.com/minha-conta/" title="Conta">Conta</a></li>
								<li><a href="https://laurenpapelaria.com/minha-conta/" title="Cadastrar">Cadastrar</a></li>
								<li><a href="https://laurenpapelaria.com/minha-conta/orders/" title="Meus pedidos">Meus pedidos</a></li>
								<li><a href="https://laurenpapelaria.com/carrinho/" title="Carrinho">Carrinho</a></li>
							</ul>
						</div>
						<div class="col-lg-4">
							<h3>Atendimento</h3>
							<ul>
								<li>Whatsapp: (19) 97114-5244</li>
								<li>vendas@laurenpapelaria.com.br</li>
								<li><strong>Horário de atendimento:</strong>
								<br>Segunda à sexta das 9:00 às 18:00 horas</li>
								<li class="social-midia">
									<a href="https://www.instagram.com/lauren.papelaria/" target="_blank" title="Instagram"><i class="fa-brands fa-instagram-square"></i></a>
									<a href="https://www.facebook.com/lauren.papelaria/" target="_blank" title="Facebook"><i class="fa-brands fa-facebook-square"></i></a>
									<a href="https://wa.me/5519971145244" target="_blank" title="Whatsapp"><i class="fa-brands fa-whatsapp-square"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container footer-bottom">
			<div id="pagamento-seguranca">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-sm-12">
							<div class="pagamentos gateway-pagamentos">
								<div class="texto-pagamento">Formas de pagamento disponível</div>
								<ul class="pog-ui-logos-list pog-ui-logos-list--desktop">
									<li class="pog-ui-logos-list__item"><img decoding="async" src="https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/mercado-pago@2x--cbadd6b0.png" class="pog-ui-logos-list__image" alt="Mercado Pago" srcset="https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/mercado-pago@2x--cbadd6b0.png 360w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/mercado-pago@2x--cbadd6b0.png 768w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/mercado-pago@2x--cbadd6b0.png 1024w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/mercado-pago@2x--cbadd6b0.png 1280w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/mercado-pago@2x--cbadd6b0.png 1366w"></li>
									<li class="pog-ui-logos-list__item"><img decoding="async" src="https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/mercado-credito@2x--24a4cd50.png" class="pog-ui-logos-list__image" alt="Mercado Credito" srcset="https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/mercado-credito@2x--24a4cd50.png 360w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/mercado-credito@2x--24a4cd50.png 768w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/mercado-credito@2x--24a4cd50.png 1024w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/mercado-credito@2x--24a4cd50.png 1280w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/mercado-credito@2x--24a4cd50.png 1366w"></li>
									<li class="pog-ui-logos-list__item"><img decoding="async" src="https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/pix--ca60a6a0.png" class="pog-ui-logos-list__image" alt="Pix" srcset="https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/pix--ca60a6a0.png 360w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/pix--ca60a6a0.png 768w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/pix--ca60a6a0.png 1024w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/pix--ca60a6a0.png 1280w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/pix--ca60a6a0.png 1366w"></li>
									<li class="pog-ui-logos-list__item"><img decoding="async" src="https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/boleto--d55e5f20.png" class="pog-ui-logos-list__image" alt="Boleto" srcset="https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/boleto--d55e5f20.png 360w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/boleto--d55e5f20.png 768w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/boleto--d55e5f20.png 1024w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/boleto--d55e5f20.png 1280w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/boleto--d55e5f20.png 1366w"></li>
									<li class="pog-ui-logos-list__item"><img decoding="async" src="https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/paypal--e7174470.png" class="pog-ui-logos-list__image" alt="PayPal" srcset="https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/paypal--e7174470.png 360w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/paypal--e7174470.png 768w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/paypal--e7174470.png 1024w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/paypal--e7174470.png 1280w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/paypal--e7174470.png 1366w"></li>
									<li class="pog-ui-logos-list__item"><img decoding="async" src="https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/caixa--f9ae7bd0.png" class="pog-ui-logos-list__image" alt="Caixa" srcset="https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/caixa--f9ae7bd0.png 360w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/caixa--f9ae7bd0.png 768w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/caixa--f9ae7bd0.png 1024w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/caixa--f9ae7bd0.png 1280w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/caixa--f9ae7bd0.png 1366w"></li>
									<li class="pog-ui-logos-list__item"><img decoding="async" src="https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/lotericas--06a656a0.png" class="pog-ui-logos-list__image" alt="Lotericas" srcset="https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/lotericas--06a656a0.png 360w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/lotericas--06a656a0.png 768w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/lotericas--06a656a0.png 1024w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/lotericas--06a656a0.png 1280w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/lotericas--06a656a0.png 1366w"></li>
									<li class="pog-ui-logos-list__item"><img decoding="async" src="https://http2.mlstatic.com/resources/frontend/gsl-assets/visa-icon--c948b270.png" class="pog-ui-logos-list__image" alt="Visa" srcset="https://http2.mlstatic.com/resources/frontend/gsl-assets/visa-icon--c948b270.png 360w, https://http2.mlstatic.com/resources/frontend/gsl-assets/visa-icon--c948b270.png 768w, https://http2.mlstatic.com/resources/frontend/gsl-assets/visa-icon--c948b270.png 1024w, https://http2.mlstatic.com/resources/frontend/gsl-assets/visa-icon--c948b270.png 1280w, https://http2.mlstatic.com/resources/frontend/gsl-assets/visa-icon--c948b270.png 1366w"></li>
									<li class="pog-ui-logos-list__item"><img decoding="async" src="https://http2.mlstatic.com/resources/frontend/gsl-assets/master-icon--f02ed8c0.png" class="pog-ui-logos-list__image" alt="Mastercard" srcset="https://http2.mlstatic.com/resources/frontend/gsl-assets/master-icon--f02ed8c0.png 360w, https://http2.mlstatic.com/resources/frontend/gsl-assets/master-icon--f02ed8c0.png 768w, https://http2.mlstatic.com/resources/frontend/gsl-assets/master-icon--f02ed8c0.png 1024w, https://http2.mlstatic.com/resources/frontend/gsl-assets/master-icon--f02ed8c0.png 1280w, https://http2.mlstatic.com/resources/frontend/gsl-assets/master-icon--f02ed8c0.png 1366w"></li>
									<li class="pog-ui-logos-list__item"><img decoding="async" src="https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/hiper--a71046b0.png" class="pog-ui-logos-list__image" alt="Hipercard" srcset="https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/hiper--a71046b0.png 360w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/hiper--a71046b0.png 768w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/hiper--a71046b0.png 1024w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/hiper--a71046b0.png 1280w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/hiper--a71046b0.png 1366w"></li>
									<li class="pog-ui-logos-list__item"><img decoding="async" src="https://http2.mlstatic.com/resources/frontend/gsl-assets/amex-icon--2b8948f0.png" class="pog-ui-logos-list__image" alt="American Express" srcset="https://http2.mlstatic.com/resources/frontend/gsl-assets/amex-icon--2b8948f0.png 360w, https://http2.mlstatic.com/resources/frontend/gsl-assets/amex-icon--2b8948f0.png 768w, https://http2.mlstatic.com/resources/frontend/gsl-assets/amex-icon--2b8948f0.png 1024w, https://http2.mlstatic.com/resources/frontend/gsl-assets/amex-icon--2b8948f0.png 1280w, https://http2.mlstatic.com/resources/frontend/gsl-assets/amex-icon--2b8948f0.png 1366w"></li>
									<li class="pog-ui-logos-list__item"><img decoding="async" src="https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/elo--bc1e9890.png" class="pog-ui-logos-list__image" alt="Elo" srcset="https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/elo--bc1e9890.png 360w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/elo--bc1e9890.png 768w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/elo--bc1e9890.png 1024w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/elo--bc1e9890.png 1280w, https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/elo--bc1e9890.png 1366w"></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="block-footer">
				<p class="text-center">&copy; Lauren Papelaria Criativa 2022<br />Lauren Papelaria Criativa ME - CNPJ: 45.991.457/0001-43 - Inscrição Estadual: 671.546.916.117</p>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

<script type="text/javascript">
    $(document).ready(function(){
	  $('.slick-slider-mobile').slick({
			arrows: false,
			centerMode: true,
			centerPadding: '40px',
			slidesToShow: 1
		});

		$('.categorias-mobile').slick({
			arrows: false,
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 4,
		});
    });
  </script>

</body>
</html>