<?php
/*
* Template Name: Contacto
*/
?>
<?php get_header(); ?>

	<?php while ( have_posts() ) : ?>
		
		<?php  the_post(); ?>

		<div class="head-image">
			<div class="img-sec">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'large' );
				}else{ ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fondo-full.jpg" alt="portada">
				<?php } ?>
			</div>
			<div class="page-heading">
				<h1>
					<?php the_title(); ?>
				</h1>
			</div>
		</div>
		<main>
			<div class="ancho">
				<div class="contenido">
					<?php the_content(); ?>
				</div>
			</div>
		</main>
	<?php endwhile; ?>

	<section class="mapa">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('mapa') ) : ?>
		<?php endif; ?>
	</section>

<?php get_footer(); ?>
