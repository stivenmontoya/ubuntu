<?php 
/*
* Template Name: Página servicios
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

		<?php $id = get_the_ID(); ?>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>


		<main>		
			
			<?php if (CONFPLAS['texto-servicios'] || CONFPLAS['servicios'] || CONFPLAS['custom-type-servicio']) :?>
				<section class="servicios-section">
					<div class="ancho">
				        <?php if (CONFPLAS['texto-servicios']) :?>
				          <section class="texto-servicios">
				            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Texto servicios') ) : ?>
				            <?php endif; ?>
				          </section>
				        <?php endif; ?>
				        
				        <?php if (CONFPLAS['servicios']) :?>
				          <section class="servicios">
				            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Servicios') ) : ?>
				            <?php endif; ?>
				          </section>
				        <?php endif; ?>

				        <?php if (CONFPLAS['custom-type-servicio']) :?>
				          <?php ServiciosInPagePlas(); ?>
				        <?php endif; ?>
				      </div>
				</section>
			<?php endif; ?>

			<?php if ( $id <> null ) : ?>
				<div class="ancho">
					<div class="contenido">
						<?php ContenidoPlas($id); ?>
					</div>
				</div>
			<?php endif; ?>
		</main>

<?php get_footer(); ?>

	