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
						<div class="col-lg-9 col-sm-9">
							<div class="pagamentos gateway-pagamentos">
								<!-- <div class="texto-pagamento">Formas de pagamento disponível</div>	 -->
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
						<div class="col-lg-3 col-sm-3">
							<div id="ssl-seguro">
								<ul>
									<li class="first">
										<img decoding="async" src="https://cdn.awsli.com.br/production/static/img/struct/stamp_encryptssl.png" class="pog-ui-logos-list__image" alt="Mercado Pago">
									</li>
									<li>
										<a href="https://transparencyreport.google.com/safe-browsing/search?url=https://www.laurenpapelaria.com" target="_blank">
											<svg xmlns="http://www.w3.org/2000/svg" width="146.021" height="37" viewBox="0 0 146.021 37">
												<g transform="translate(-1143.5 -3851)">
													<path class="icon-text" d="M6.589-32.724a12.6,12.6,0,0,1-3.781-9.4,12.572,12.572,0,0,1,3.8-9.4,12.816,12.816,0,0,1,9.3-3.707A13.254,13.254,0,0,1,23.345-53.1a11.684,11.684,0,0,1,4.643,5.983h-6.2a6.062,6.062,0,0,0-5.873-3.377,7.476,7.476,0,0,0-5.671,2.294A8.471,8.471,0,0,0,8.057-42.1a8.471,8.471,0,0,0,2.184,6.093A7.111,7.111,0,0,0,15.6-33.715a7.415,7.415,0,0,0,4.992-1.56,6.806,6.806,0,0,0,2.257-4.2H14.334V-43.4H28.392v3.927a12.335,12.335,0,0,1-4.111,7.323A12.411,12.411,0,0,1,15.6-29.016,12.425,12.425,0,0,1,6.589-32.724Zm31.626.04a4.254,4.254,0,0,0,3.152-1.351,5.238,5.238,0,0,0,1.32-3.82,5.22,5.22,0,0,0-1.3-3.8A4.245,4.245,0,0,0,38.23-43a4.146,4.146,0,0,0-3.121,1.336,5.321,5.321,0,0,0-1.273,3.82,5.321,5.321,0,0,0,1.273,3.82A4.128,4.128,0,0,0,38.215-32.684Zm-6.3,1.242a8.577,8.577,0,0,1-2.516-6.429,8.421,8.421,0,0,1,2.547-6.4,8.815,8.815,0,0,1,6.32-2.423,8.815,8.815,0,0,1,6.32,2.423,8.421,8.421,0,0,1,2.547,6.4,8.5,8.5,0,0,1-2.562,6.429,8.827,8.827,0,0,1-6.351,2.454A8.667,8.667,0,0,1,31.91-31.442ZM57-32.684a4.254,4.254,0,0,0,3.152-1.351,5.238,5.238,0,0,0,1.32-3.82,5.22,5.22,0,0,0-1.3-3.8A4.245,4.245,0,0,0,57.021-43,4.146,4.146,0,0,0,53.9-41.66a5.321,5.321,0,0,0-1.273,3.82A5.321,5.321,0,0,0,53.9-34.02,4.128,4.128,0,0,0,57-32.684Zm-6.3,1.242a8.577,8.577,0,0,1-2.516-6.429,8.421,8.421,0,0,1,2.547-6.4,8.815,8.815,0,0,1,6.32-2.423,8.815,8.815,0,0,1,6.32,2.423,8.421,8.421,0,0,1,2.547,6.4,8.5,8.5,0,0,1-2.562,6.429A8.827,8.827,0,0,1,57-28.988,8.667,8.667,0,0,1,50.7-31.442Zm18.557-.047a9.028,9.028,0,0,1-2.314-6.383,8.951,8.951,0,0,1,2.3-6.351,7.629,7.629,0,0,1,5.839-2.469,6.025,6.025,0,0,1,5.4,2.919v-2.671h4.348v17.331a8.533,8.533,0,0,1-2.174,6.041,7.91,7.91,0,0,1-6.1,2.345,10.651,10.651,0,0,1-6.243-1.631A6.169,6.169,0,0,1,67.689-27h4.286a3.356,3.356,0,0,0,1.553,1.817,5.679,5.679,0,0,0,2.888.668,3.969,3.969,0,0,0,2.9-1.149,4.644,4.644,0,0,0,1.165-3.447v-3.013a6.1,6.1,0,0,1-5.435,3.137A7.563,7.563,0,0,1,69.258-31.488Zm9.861-2.64a4.983,4.983,0,0,0,1.367-3.711,4.983,4.983,0,0,0-1.367-3.711,4.406,4.406,0,0,0-3.2-1.351,4.38,4.38,0,0,0-3.183,1.336,4.962,4.962,0,0,0-1.351,3.7,5.036,5.036,0,0,0,1.367,3.727,4.365,4.365,0,0,0,3.183,1.367A4.389,4.389,0,0,0,79.119-34.128Zm9.131,4.892V-52.22h4.379v22.983Zm15.063.248a8.137,8.137,0,0,1-6.118-2.438,8.872,8.872,0,0,1-2.36-6.445,8.732,8.732,0,0,1,2.376-6.414,8.263,8.263,0,0,1,6.15-2.407,8.541,8.541,0,0,1,6.2,2.345,8.309,8.309,0,0,1,2.423,6.258,10.632,10.632,0,0,1-.124,1.677H99.307a4.088,4.088,0,0,0,1.242,2.7,3.868,3.868,0,0,0,2.764,1.025,3.618,3.618,0,0,0,3.354-1.864h4.721a7.553,7.553,0,0,1-2.888,4.007A8.6,8.6,0,0,1,103.313-28.988Zm4.131-10.249a3.75,3.75,0,0,0-1.258-2.733A4.108,4.108,0,0,0,103.375-43a3.882,3.882,0,0,0-2.749,1.025,4.341,4.341,0,0,0-1.32,2.733Z" transform="translate(1177.542 3908.001)"></path>
													<path class="icon-text" d="M2.428-9.168a.694.694,0,0,0-.451.142.477.477,0,0,0-.175.392.562.562,0,0,0,.128.392.824.824,0,0,0,.339.217,4.288,4.288,0,0,0,.461.135q.25.059.5.145a2.46,2.46,0,0,1,.461.211.913.913,0,0,1,.339.366,1.223,1.223,0,0,1,.128.583,1.272,1.272,0,0,1-.451.975,1.719,1.719,0,0,1-1.2.408A1.938,1.938,0,0,1,1.3-5.554,1.176,1.176,0,0,1,.84-6.545h.988a.607.607,0,0,0,.692.606.724.724,0,0,0,.5-.165.559.559,0,0,0,.184-.438.49.49,0,0,0-.244-.432,1.821,1.821,0,0,0-.59-.237q-.346-.079-.7-.191a1.3,1.3,0,0,1-.593-.392A1.089,1.089,0,0,1,.84-8.535a1.233,1.233,0,0,1,.455-1,1.775,1.775,0,0,1,1.169-.376,1.869,1.869,0,0,1,1.15.326,1.26,1.26,0,0,1,.474.992H3.073a.624.624,0,0,0-.2-.418A.643.643,0,0,0,2.428-9.168Zm5.639,3.92-.3-.863H5.979l-.3.863H4.7L6.328-9.859h1.1L9.049-5.248ZM6.223-6.822H7.534L6.875-8.739ZM9.694-5.248v-4.6h2.846v.712H10.623v1.206h1.463v.712H10.623v1.97Zm6.232-4.612v.712H14.2v1.206h1.528v.712H14.2v1.272h1.726v.712H13.272V-9.859Zm2.925.013h1.864a1.666,1.666,0,0,1,1.11.343,1.089,1.089,0,0,1,.405.87,1.05,1.05,0,0,1-.9,1.034,1.124,1.124,0,0,1,.728.392,1.139,1.139,0,0,1,.273.754,1.071,1.071,0,0,1-.408.873,1.7,1.7,0,0,1-1.107.333h-1.97Zm.929.712v1.192h.837a.731.731,0,0,0,.491-.155.545.545,0,0,0,.181-.438.555.555,0,0,0-.181-.441.721.721,0,0,0-.491-.158Zm0,3.175h.936a.718.718,0,0,0,.5-.168.591.591,0,0,0,.188-.464.6.6,0,0,0-.191-.468.722.722,0,0,0-.5-.171h-.929Zm4.282-1.12v1.832h-.929v-4.6h1.693a1.745,1.745,0,0,1,1.229.4,1.287,1.287,0,0,1,.432.985,1.383,1.383,0,0,1-.264.81,1.359,1.359,0,0,1-.83.514l1.173,1.891h-1.1l-1.1-1.832Zm0-2.056v1.344h.764a.73.73,0,0,0,.534-.181.657.657,0,0,0,.184-.491.657.657,0,0,0-.184-.491.73.73,0,0,0-.534-.181ZM30.52-6.463a1.533,1.533,0,0,0,.389-1.1,1.521,1.521,0,0,0-.389-1.094,1.337,1.337,0,0,0-1.015-.408,1.342,1.342,0,0,0-1.018.412A1.52,1.52,0,0,0,28.1-7.557a1.52,1.52,0,0,0,.392,1.094,1.342,1.342,0,0,0,1.018.412A1.331,1.331,0,0,0,30.52-6.463ZM29.505-5.2a2.3,2.3,0,0,1-1.673-.665,2.266,2.266,0,0,1-.679-1.69,2.26,2.26,0,0,1,.682-1.69,2.3,2.3,0,0,1,1.673-.665,2.293,2.293,0,0,1,1.67.665,2.266,2.266,0,0,1,.679,1.69,2.266,2.266,0,0,1-.679,1.69A2.3,2.3,0,0,1,29.505-5.2Zm8.229-4.645h.995L37.4-5.248H36.344l-.889-3.208-.916,3.208H33.484l-1.3-4.6h.988L34.051-6.3l.929-3.551h1.048L36.9-6.328Zm3.063.679a.694.694,0,0,0-.451.142.477.477,0,0,0-.175.392.562.562,0,0,0,.128.392.824.824,0,0,0,.339.217,4.288,4.288,0,0,0,.461.135q.25.059.5.145a2.46,2.46,0,0,1,.461.211.913.913,0,0,1,.339.366,1.223,1.223,0,0,1,.128.583,1.272,1.272,0,0,1-.451.975,1.719,1.719,0,0,1-1.2.408,1.938,1.938,0,0,1-1.209-.352,1.176,1.176,0,0,1-.461-.992H40.2a.607.607,0,0,0,.692.606.724.724,0,0,0,.5-.165.559.559,0,0,0,.184-.438.49.49,0,0,0-.244-.432,1.821,1.821,0,0,0-.59-.237q-.346-.079-.7-.191a1.3,1.3,0,0,1-.593-.392,1.089,1.089,0,0,1-.244-.741,1.233,1.233,0,0,1,.455-1,1.775,1.775,0,0,1,1.169-.376,1.869,1.869,0,0,1,1.15.326,1.26,1.26,0,0,1,.474.992H41.443a.624.624,0,0,0-.2-.418A.642.642,0,0,0,40.8-9.168Zm2.622,3.92v-4.6h.929v4.6Zm4.928-4.612h.929v4.612h-.929L46.265-8.436v3.189h-.929V-9.859h.929l2.082,3.189Zm2.339,3.986a2.262,2.262,0,0,1-.679-1.687,2.256,2.256,0,0,1,.682-1.687,2.3,2.3,0,0,1,1.67-.665,2.379,2.379,0,0,1,1.334.382,2.1,2.1,0,0,1,.833,1.074H53.413a1.088,1.088,0,0,0-1.054-.606,1.342,1.342,0,0,0-1.018.412,1.52,1.52,0,0,0-.392,1.094,1.52,1.52,0,0,0,.392,1.094,1.276,1.276,0,0,0,.962.412,1.331,1.331,0,0,0,.9-.28,1.222,1.222,0,0,0,.405-.754H52.076v-.7H54.6v.7a2.214,2.214,0,0,1-.738,1.314,2.228,2.228,0,0,1-1.558.563A2.23,2.23,0,0,1,50.686-5.873Z" transform="translate(1207.76 3863.777)"></path>
													<path class="icon-safe" d="M16.074,37h0v-.1A24.037,24.037,0,0,1,12.5,35.511a24.739,24.739,0,0,1-5.432-3.5,19.959,19.959,0,0,1-4.944-6.248A21.005,21.005,0,0,1,.006,16.129c0-.06-.013-6.037,0-8.871,0-.379,0-.706,0-1C-.01,4.375-.01,4.339,1.243,4.032c.363-.089,1.333-.381,2.675-.786C7.592,2.138,13.743.284,16.044.029V0c.07,0,.145,0,.224.009S16.426,0,16.494,0V.03c2.285.256,8.382,2.11,12.026,3.218,1.329.4,2.29.7,2.649.785,1.242.306,1.242.342,1.229,2.23,0,.29,0,.617,0,1,.013,2.846,0,8.811,0,8.871a21.153,21.153,0,0,1-2.1,9.634,19.932,19.932,0,0,1-4.9,6.247,24.505,24.505,0,0,1-5.385,3.5,23.69,23.69,0,0,1-3.552,1.386V37c-.008,0-.075-.017-.195-.05-.126.035-.193.051-.193.051ZM9.4,15.446a.8.8,0,0,0-.56.226L7.1,17.353a.806.806,0,0,0-.02,1.14l4.751,4.92.01.01,1.681,1.741a.806.806,0,0,0,1.14.02L25.4,14.821a.806.806,0,0,0,.02-1.14l-1.681-1.74a.806.806,0,0,0-1.14-.02l-8.412,8.123-4.2-4.351A.8.8,0,0,0,9.4,15.446Z" transform="translate(1143.5 3851)"></path>
												</g>
											</svg>
										</a>
									</li>
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
			arrows: true,
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3,
		});
    });
  </script>

</body>
</html>