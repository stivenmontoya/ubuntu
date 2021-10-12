<?php get_header(); ?>

<main class="padding-top">
  <div class="ancho">
    <h2 class="flecha"><span>Resultados de la búsqueda</span></h2>
    <?php if (have_posts()) :
      while (have_posts()) : the_post(); ?>

        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class="el-post">
            <?php
            if ( has_post_thumbnail() ) {
              echo '<div class="thumbnail-post">';
              the_post_thumbnail();
              echo '</div>';
            }
            ?>
          <?php the_excerpt(); ?>
          <p class="readmore"><a href="<?php the_permalink(); ?>">Ver más</a></p>
        </div>

      <?php endwhile; ?>
      <?php if (function_exists("pagination")) {
        pagination($additional_loop->max_num_pages);
      } ?>
    <?php  else: ?>
      <div class="entry">
        <?php _e('Lo sentimos, no hay resultados con este término de búsqueda.'); ?>
      </div>
    <?php endif; ?>
  </div>
</main> <!-- Fin de main -->

<?php  get_sidebar()?>

<?php get_footer(); ?>
