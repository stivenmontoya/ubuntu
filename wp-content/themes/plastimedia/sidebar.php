<?php if (CONFPLAS['testimoniales']) : ?>
	<section class="testimonials">
		<div class="intestimonial">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Testimonials') ) : ?>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>

<?php if (CONFPLAS['clientes']) : ?>
	<section class="clientes">
		<div class="ancho">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Clientes') ) : ?>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>

<?php if (CONFPLAS['acreditacion']) : ?>
	<section class="acredita">
		<div class="ancho">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Acreditacion') ) : ?>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>


<?php if (CONFPLAS['mapa']) : ?>
	<section class="mapa">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Mapa') ) : ?>
		<?php endif; ?>
	</section>
<?php endif; ?>