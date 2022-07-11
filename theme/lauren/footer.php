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
								<li><a href="#" title="">A Papelaria</a></li>
								<li><a href="#" title="">Como comprar</a></li>
								<li><a href="#" title="">Seguran&ccedil;a</a></li>
								<li><a href="#" title="">Devolu&ccedil;&otilde;es e trocas</a></li>
								<li><a href="#" title="">Termos e condi&ccedil;&otilde;es</a></li>
								<li><a href="#" title="">Contato</a></li>
							</ul>
						</div>
						<div class="col-lg-4">
							<h3>Minha Conta</h3>
							<ul>
								<li><a href="#" title="">Conta</a></li>
								<li><a href="#" title="">Meus pedidos</a></li>
								<li><a href="#" title="">Cadastrar</a></li>
								<li><a href="#" title="">Carrinho</a></li>
							</ul>
						</div>
						<div class="col-lg-4">
							<h3>Atendimento</h3>
							<ul>
								<li>Whatsapp: (19) 98211-1736</li>
								<li>vendas@laurenpapelaria.com.br</li>
								<li><strong>Hor&aacute;rio de atendimento:</strong>
								<br>Segunda &agrave; sexta das 9:00 &agrave;s 18:00 horas</li>
								<li class="social-midia">
									<a href="https://www.instagram.com/lauren.papelaria/" target="_blank" title=""><i class="fa-brands fa-instagram-square"></i></a>
									<a href="#" title=""><i class="fa-brands fa-facebook-square"></i></a>
									<a href="https://wa.me/5519971145244" target="_blank" title=""><i class="fa-brands fa-whatsapp-square"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="block-footer">
				<p class="text-center">&copy; Lauren Papelaria Criativa 2022<br />Lauren Papelaria Criativa ME - CNPJ: 00.776.574/0006-60 - Inscricao Estadual: 85.687.08-5</p>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>