<?php get_header(); ?>


<div class="head-image">
	<div class="img-sec">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fondo-full.jpg" alt="Banner">
	</div>
	<div class="page-heading">
		<h1><?php single_cat_title(); ?></h1>
	</div>
</div>

<main>
	<div class="ancho">
		<?php if ( have_posts() ) : ?>
			<div class="contenedor">
				<?php while ( have_posts() ) :
				    the_post();
				?>
					<article class="category-post">
						<div class="category-post-area">
							
							<div class="post-thumbnail">
								<a href="<?php the_permalink(); ?>">
									<?php ImagenDestacadaPlas('category','entrada') ?>
								</a>
							</div>
							<h2 class="post_title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<div class="post_body">
								<p><?php the_excerpt(); ?></p>

								<?php if (CONFPLAS['mostrar-boton-ver-entrada']) : ?>
									<p class="readmore">
										<a href="<?php the_permalink(); ?>"><?php echo CONFPLAS['text-boton-ver-entrada']; ?></a>
									</p>
								<?php endif; ?>
							</div>

						</div>
					</article>
				<?php endwhile; ?>
			</div>

				<?php 
				if(CONFPLAS['paginacion-entradas-en-categoria']) : 
					PginacionPlas();
				endif;
				?>

		<?php else : ?>
				<p class="nothing"><?php echo CONFPLAS['mensaje-cuando-no-hay-entradas']; ?></p>
		<?php
			endif;
			wp_reset_postdata();
		?>

	</div>
</main>
<?php get_footer(); ?>



