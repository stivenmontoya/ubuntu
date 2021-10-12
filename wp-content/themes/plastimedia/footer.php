<footer>

	<div class="ancho">
		<?php if (CONFPLAS['footer']) : ?>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) : ?>
			<?php endif; ?>
		<?php endif; ?>
	</div>
	
	<div class="marca">
		<div class="ancho">
			<span>Todos los derechos reservados</span>
			<span>&copy; <?php echo date("Y"); ?> - <?php bloginfo('name'); ?></span>
			<span class="slash"> / </span>
			<span>Desarrollado por 
				<a href="http://plastimedia.com">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/marca-plasti.png" alt="Marca plastimedia">
				</a>
			</span>
		</div>
	</div>
</footer>

</div> <!-- Fin de wrapper -->

<?php wp_footer(); ?>
</body>
</html>
