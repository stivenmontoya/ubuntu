<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(); ?></title>

	<!-- Definir viewport para dispositivos web móviles -->
	<meta name="viewport" content="width=device-width, minimum-scale=1">

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<?php if (CONFPLAS['animaciones']) : ?>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/animate.css" type="text/css" media="all" />
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/wow.min.js"></script>
	<?php endif; ?>
	<?php if (CONFPLAS['carousel']) : ?>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/splide.css" type="text/css" media="all" />
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/splide.js"></script>
	<?php endif; ?>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/estilos.css" type="text/css" media="all" />

	<?php if (CONFPLAS['css-adicional']) : ?>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/adicionales.css" type="text/css" media="all" />
	<?php endif; ?>


	<!-- Fuente de google -->
	<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto:400,700" rel="stylesheet">

	<!-- jquery y plastimedia.js -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-3.2.1.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.sticky.js"></script>

	

  	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/respond.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/plastimedia.js"></script>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- -------------------------- -->
</head>
<body>


	<!-- boton de whatsapp -->
	<?php if (CONFPLAS['boton-whatsapp']) : ?>
		<a 	href="https://api.whatsapp.com/send?phone=57Numero-De-Telefono"
			target="_blank"
			rel="noopener noreferrer"
			class="btn-wapp icon-whatsapp">
		</a>
	<?php endif; ?>


	<div class="wrapper">
		<!-- ir arriba -->
		<span id="ir-arriba">Arriba</span>

		<header class="header">
			<nav class="el-menu">
				<input type="checkbox" id="menu_chk" />
				<label for="menu_chk" class="label_menu">
					<?php wp_nav_menu( array('theme_location' => 'main-menu', 'container_class' => 'menu-ppl')); ?>
					<div id="btn_menu" class="">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</label>
			</nav>
		</header>