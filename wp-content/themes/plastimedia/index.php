<?php get_header(); ?>
  
  <?php if (CONFPLAS['slider-escritorio'] || CONFPLAS['slider-mobil']) :?>
    <div class="head-image">
      <!-- valido si solo habilitaron el de escritorio -->
      <?php if (CONFPLAS['slider-escritorio'] && !(CONFPLAS['slider-mobil'])) :?>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Slider') ) : ?>
        <?php endif; ?>

      <?php endif; ?>

      <!-- valido si los dos estan activos -->
      <?php if (CONFPLAS['slider-escritorio'] && CONFPLAS['slider-mobil']) :?>
        <!-- valido si está en el breakpoint -->
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Slider') ) : ?>
        <?php endif; ?>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Slider movil') ) : ?>
        <?php endif; ?>

        
      <?php endif; ?>
    </div>
  <?php endif; ?>
  
<!-- comienzo del main -->
<main>
  
  <?php if (CONFPLAS['texto-servicios'] || CONFPLAS['servicios'] || CONFPLAS['custom-type-servicio']) :?>
  <!-- SERVBICIO -->
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
          <?php ServiciosPlas(); ?>
        <?php endif; ?>
      
      </div>

    </section>
  <?php endif; ?>


<!-- novedades -->
  <section class="novedades">
    <div class="ancho">
      <h2>Novedades</h2>
      <?php
      // Filtro las entradas que pertenecen a la categoria actualidad
      $args = array(
          'category_name' => CONFPLAS['categoria-de-entradas'],
          'showposts'     => CONFPLAS['numero-de-entradas-en-el-home']
        );
        $wp_query = new WP_Query($args);
      ?>
      <?php
      // Muestro los posts
      if (have_posts()) : ?>
        <div class="the-posts">
          <?php while (have_posts()) : the_post(); ?>
            <div class="post-content">
              <div class="post-area">
                <div class="thumbnail">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>">
                      <?php ImagenDestacadaPlas('home','entrada') ?>
                    </a>
                  <?php endif; ?>
                </div>
                <?php

                ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                <?php the_excerpt(); ?>
                
                <?php if (CONFPLAS['mostrar-boton-ver-entrada']) :?>
                  <p class="readmore"><a href="<?php the_permalink(); ?>"><?php echo CONFPLAS['text-boton-ver-entrada']; ?></a></p>
                <?php endif; ?>

              </div>
            </div>
          <?php endwhile; ?>

          <?php
            if (CONFPLAS['mostrar-boton-ver-all-categoria']) {
              // Codigo para obtener el link de la categoria
              // -------------------------------------------
              $category_id = get_cat_ID( 'Novedades' );
              $category_link = get_category_link( $category_id );
            }
          ?>

          <?php wp_reset_postdata(); ?>
          

          <?php 
            if ( CONFPLAS['contenido'] ) :
              if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Contenido') ) :
              endif;
            endif;
          ?>
        </div> 
          <?php if (CONFPLAS['mostrar-boton-ver-all-categoria']) : ?>
             <a class="ver-mas" href="<?php echo $category_link; ?>">Ver más</a>
          <?php endif; ?>
      <?php else: ?>
        <p class="nothig"><?php echo CONFPLAS['mensaje-cuando-no-hay-entradas']; ?></p>
      <?php endif; ?>
    </div>
  </section> 


  <?php if (CONFPLAS['paralax']) :?>
    <!-- seccion del paralax -->
    <section class="paralax">
      <div class="img-paralax"></div>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Paralax') ) : ?>
      <?php endif; ?>
    </section>
  <?php endif; ?>

</main>
<!-- Fin de main -->

  <?php 
    // Sidebar va a mostrar los testimoniales, clientes y el mapa
    get_sidebar();
  ?>

  <?php get_footer(); ?>
