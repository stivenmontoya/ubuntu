<?php
##############################################

// versión: 1.1
// caracteristicas

// - solucionado error de CONFPLAS
// - solucion error de mixins position-center
// - incluye imagenes de la firma plastimedia
// - nuevo menu para movil, mas amigable con el usuario y mejora la funcionalidad del sitio en navegadores menos optimos
// - slider movil

// --------- ARRAY DE CONFIGURACION ---------


$config = [
    // --> configuraciones
    'animaciones' => false, //animate.css y wow.js
    'carousel' => false, //splide.js 
    //--> boton de whatsapp
    'boton-whatsapp' => false,

    //--> menus
    'menu-redes' => true,
    'menu-redes-ancladas' => false,
    'menu-adicional' => false,

    //--> widgets
    'slider-escritorio' => true,
    'slider-mobil' => true,
    'texto-servicios' => false,
    'servicios' => false,
    'paralax' => false,
    'testimoniales' => false,
    'clientes' => false,
    'acreditacion' => false,
    'mapa' => false,
    'footer' => true,
    'contenido' => false,

    // custon type servicios
    'custom-type-servicio' => true,
    'mostrar-boton-ver-servicio' => true,
    'text-boton-ver-servicio' => 'Ver más',
    'mostrar-boton-ver-all-servicios' => true,
    'text-boton-ver-all-servicio' => 'Ver más',
    'mensaje-cuando-no-hay-servicios' => 'No hay servicios disponibles',
    
    // edicion de post
    'editor-clasico' => false,
    'multiples-imagenes-destacadas' => true,
    'categoria-de-entradas' => 'Novedades',
    'numero-de-entradas-en-el-home' => '4',
    'mostrar-boton-ver-all-categoria' => true,
    'mostrar-boton-ver-entrada' => false,
    'text-boton-ver-entrada' => 'Ver más',
    'mensaje-cuando-no-hay-entradas' => 'No hay entradas disponibles',

    // paginacion
    'paginacion-entradas-en-el-home' => true,
    'paginacion-entradas-en-categoria' => true,

    // css adicional en el server
    'css-adicional' => false,

    // responsive php
    'break-point-responsive' => 768,

    'mensaje-404' => 'La página a la que has intentado acceder no existe en nuestro sitio web.',
];

define('CONFPLAS', $config);
define('BASE_URL', $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);


##############################################

//                    |
//                    |
//                    |
//                    |
//                    |
//                    |
//                    |
//                    |
//                    |
//                    |
//                    |
//                    |
//                    |
//                    |
//                    |
//                    |
//                    |
//                    |
//                    |
//                    |
//                    |
//                    |
//                    |
//                    |
//                \   |   /
//                 \  |  /
//                  \ | /
//                   \|/
//                    ▼


// MENUS DE WORDPRESS
// ---------------------


// compatibilidad de la plantilla
add_theme_support( 'nav-menus' );
add_theme_support('post-thumbnails');
add_theme_support(
    'html5',
    array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    )
);
add_theme_support( 'responsive-embeds' );


// Función para agregar menús
function register_my_menus() {
    if ( function_exists( 'register_nav_menus' ) ) {

        //--> menu pincipal
        register_nav_menus(['main-menu' => __('Menú principal')]);

        //--> menu redes
        if (CONFPLAS['menu-redes']) {
            register_nav_menus(['menu-redes' => __('Redes')]);
        }

        //--> menu redes ancaldas
        if (CONFPLAS['menu-redes-ancladas']) {
            register_nav_menus(['menu-redes-ancladas' => __('Redes ancladas')]);
        }

        //--> menu adicional
        if (CONFPLAS['menu-adicional']) {
            register_nav_menus(['menu-adicional' => __('Menu adicional')]);
        }
    }
}
add_action( 'init', 'register_my_menus' );
// -----------------------


// WIDGETS

// ------------------------

if ( function_exists('register_sidebar') ) {

    if (CONFPLAS['slider-escritorio']) {
        register_sidebar( array(
            'name'=>'Slider',
            'before_widget' => '<div class="contenedor-slide">', 'after_widget' => '</div>',
        ));
    }

    if (CONFPLAS['slider-mobil']) {
        register_sidebar( array(
            'name'=>'Slider movil',
            'before_widget' => '<div class="contenedor-slide-mobil">', 'after_widget' => '</div>',
        ));
    }

    if (CONFPLAS['texto-servicios']) {
        register_sidebar( array(
            'name'=>'Texto servicios',
            'before_widget' => '<div>', 'after_widget' => '</div>',
            'before_title' => '<h2>', 'after_title' => '</h2>',
        ));
    }

    if (CONFPLAS['servicios']) {
        register_sidebar( array(
            'name'=>'Servicios',
            'before_widget' => '<div class="wg-servicio">', 'after_widget' => '</div>',
        ));
    }

    if (CONFPLAS['paralax']) {
        register_sidebar( array(
            'name'=>'Paralax',
            'before_widget' => '<div class="texto-paralax"><div class="texto">', 'after_widget' => '</div></div>',
        ));
    }

    if (CONFPLAS['testimoniales']) {
        register_sidebar( array(
            'name'=>'Testimonials',
            'before_widget' => '<div>', 'after_widget' => '</div>',
        ));
    }

    if (CONFPLAS['clientes']) {
        register_sidebar( array(
            'name'=>'Clientes',
            'before_widget' => '<div class="under-content">', 'after_widget' => '</div>',
        ));
    }

    if (CONFPLAS['acreditacion']) {
        register_sidebar( array(
            'name'=>'Acreditacion',
            'before_widget' => '<div class="under-content">', 'after_widget' => '</div>',
        ));
    }

    if (CONFPLAS['mapa']) {
        register_sidebar( array(
            'name'=>'Mapa',
            'before_widget' => '<div>', 'after_widget' => '</div>',
        ));
    }

    if (CONFPLAS['footer']) {
        register_sidebar( array(
            'name'=>'Footer',
            'before_widget' => '<div>', 'after_widget' => '</div>',
        ));
    }

    if (CONFPLAS['contenido']) {
        register_sidebar( array(
            'name'=>'Contenido',
            'before_widget' => '<div class="more-news">', 'after_widget' => '</div>',
        ));
    }
}
// ---------------------



// IMAGENES DESTACADAS

// -----------------------
if (CONFPLAS['custom-type-servicio'] || CONFPLAS['multiples-imagenes-destacadas']) {
    require 'include/multi-post-thumbnails.php';
    if (CONFPLAS['multiples-imagenes-destacadas']) {
        // si hay multiples imagenes destacadas
        if (class_exists('MultiPostThumbnails')) {
          new MultiPostThumbnails(array('label' => 'Imagen destacada en categoria','id' => 'two-image','post_type' => 'post'));
          new MultiPostThumbnails(array('label' => 'Imagen destacada en vista completa','id' => 'three-image','post_type' => 'post'));
        }   
    }
}

function ImagenDestacadaPlas($view = 'home', $postType = 'entrada')
{
    if ($postType == 'entrada') {
        switch ($view) {
            case 'home':
                the_post_thumbnail();
            break;
            case 'category':
                if (class_exists('MultiPostThumbnails')) {
                    MultiPostThumbnails::the_post_thumbnail(get_post_type(),'two-image');
                }else {the_post_thumbnail();}
            break;
            case 'single':
                if (class_exists('MultiPostThumbnails')) {
                    MultiPostThumbnails::the_post_thumbnail(get_post_type(),'three-image');
                }else {the_post_thumbnail('large');}
            break;
            default:
                the_post_thumbnail('large');
            break;
        }       
    }

    if ($postType == 'servicios') {
        switch ($view) {
            case 'home':
                if (class_exists('MultiPostThumbnails')) {
                    MultiPostThumbnails::the_post_thumbnail('servicios','icon-serv');
                }else {the_post_thumbnail( 'full' );}
            break;
            case 'category':
                if (class_exists('MultiPostThumbnails')) {
                    MultiPostThumbnails::the_post_thumbnail('servicios','two-image-serv');
                }else {the_post_thumbnail('full');}
            break;
            case 'single':
                the_post_thumbnail('large');
            break;
            default:
                the_post_thumbnail('large');
            break;
        }  
    }
}
// ------------------------



// CUSTOM POST TYPE DE SERVICIO

// --------------------------------

if(CONFPLAS['custom-type-servicio']) {
    function crear_custom_type_servicio() {
        $labels = array(
            'name'               => _x( 'Servicios', 'post type general name', 'text-domain' ),
            'singular_name'      => _x( 'Servicio', 'post type singular name', 'text-domain' ),
            'menu_name'          => _x( 'Servicios', 'admin menu', 'text-domain' ),
            'add_new'            => _x( 'Añadir nuevo', 'servicio', 'text-domain' ),
            'add_new_item'       => __( 'Añadir nuevo servicio', 'text-domain' ),
            'new_item'           => __( 'Nuevo servicio', 'text-domain' ),
            'edit_item'          => __( 'Editar servicio', 'text-domain' ),
            'view_item'          => __( 'Ver servicio', 'text-domain' ),
            'all_items'          => __( 'Todos los servicios', 'text-domain' ),
            'search_items'       => __( 'Buscar servicios', 'text-domain' ),
            'not_found'          => __( 'No hay servicios.', 'text-domain' ),
            'not_found_in_trash' => __( 'No hay servicios en la papelera.', 'text-domain' ),
        );
        $args = array(
            'labels'             => $labels,
            'description'        => __( 'Descripción.', 'text-domain' ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'servicios' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => true,
            'menu_position'      => 4,
            'public'             => true,
            'menu_icon'          => 'dashicons-hammer',
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        );
        register_post_type( 'servicios', $args );
    }
    if (class_exists('MultiPostThumbnails')) {
      new MultiPostThumbnails(array('label' => 'Icono del servicio','id' => 'icon-serv','post_type' => 'servicios'));
      new MultiPostThumbnails(array('label' => 'Imagen destacada en categoria','id' => 'two-image-serv','post_type' => 'servicios'));
    }
    add_action( 'init', 'crear_custom_type_servicio' );

    function ServiciosPlas($numero = 4)
    {
            $args = array(
              'post_type' => 'servicios',
              'post_status' => 'publish',
              'showposts'     => $numero
            );

            query_posts( $args );

            // html de la entrada de servicio
        ?>

        <?php if (have_posts()) : ?>
            
            <section class="servicios">
            
            <?php while (have_posts()) : the_post(); ?>
                <!-- loop -->
                <div class="wg-servicio">
                        <?php if ( has_post_thumbnail() ): ?>
                            <div class="imagen-servicio"> 
                                <?php ImagenDestacadaPlas('home', 'servicios')?>
                            </div>
                        <?php endif; ?>

                        <div class="text-servicio">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php the_excerpt(); ?>

                            <?php if (CONFPLAS['mostrar-boton-ver-servicio']): ?>
                                <p class="readmore"><a href="<?php the_permalink(); ?>"><?php echo CONFPLAS['text-boton-ver-servicio']; ?></a></p>
                            <?php endif; ?>
                        </div>
                </div>
                <!-- fin loop -->
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

            <?php if (CONFPLAS['mostrar-boton-ver-all-servicios']): ?>
                <a href="<?php echo get_post_type_archive_link( 'servicios' ); ?>"><?php echo CONFPLAS['text-boton-ver-all-servicio']; ?></a>
            <?php endif; ?>
        
            </section>

        <?php else: ?>

            <p class="nothing"><?php echo CONFPLAS['mensaje-cuando-no-hay-servicios']; ?></p>

        <?php endif; 
    }
    
    function ServiciosInPagePlas()
    {
            $args = array(
              'post_type' => 'servicios',
              'post_status' => 'publish',
            );
            query_posts( $args );
            // html de la entrada de servicio
        ?>

        <?php if (have_posts()) : ?>   
            <section class="servicios">
            <?php while (have_posts()) : the_post(); ?>
                <!-- loop -->
                <div class="wg-servicio">
                        <?php if ( has_post_thumbnail() ): ?>
                            <div class="imagen-servicio"> 
                                <?php ImagenDestacadaPlas('home', 'servicios')?>
                            </div>
                        <?php endif; ?>

                        <div class="text-servicio">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </div>
                </div>
                <!-- fin loop -->
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            </section>
        <?php endif; 
    }
}


// --------------------------------


if (CONFPLAS['editor-clasico']) {
    add_filter('use_block_editor_for_post', '__return_false', 10);
}


// OBTENER EL CONTENIDO POR UN ID
function ContenidoPlas($id)
{
   $ids = array($id); // en este caso solo listo solo los post de tipo 'page' con 'id': 1562 y 789
    query_posts(array(
        'post_type' => 'page',
        'post_id' => $ids,
        'showposts' => 1
    ));
    if (have_posts()) :
        while (have_posts()) : the_post();    
            return the_content();
        endwhile;
    endif;       
}




// ------------------------------------


function PginacionPlas()
{
    if ($wp_query->max_num_pages > 1) {
        echo '<div class="paginacion">';
        global $wp_query;
        $big = 999999999; // need an unlikely integer
        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
        ) );
        echo "</div>";
    }
    ?>
    <div class="navigation">
        <div class="alignleft"><?php next_posts_link('Previous entries') ?></div>
        <div class="alignright"><?php previous_posts_link('Next entries') ?></div>
    </div>
    <?php 
}


// Permitir comentarios encadenados
// function enable_threaded_comments(){
//   if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
//     wp_enqueue_script('comment-reply');
//   }
// }
// add_action('get_header', 'enable_threaded_comments');

/* Si el usuario actual no es administrador o superadministrador,
eliminamos la barra */
/*if (!current_user_can ('activate_plugins')){
    add_filter ('show_admin_bar' ,  '__return_false');
    add_action('get_header', 'galussothemes_remove_admin_bar');
}*/

add_filter( 'show_admin_bar', '__return_false' );
function galussothemes_remove_admin_bar(){
    remove_action('wp_head', '_admin_bar_bump_cb');
}