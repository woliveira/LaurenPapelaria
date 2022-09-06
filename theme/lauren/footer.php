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
			<div class="block-footer">
				<p class="text-center">&copy; Lauren Papelaria Criativa 2022<br />Lauren Papelaria Criativa ME - CNPJ: 45.991.457/0001-43 - Inscrição Estadual: 671.546.916.117</p>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>