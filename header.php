<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arkus
 */
if ( is_page('paneles') ) {
	$menu = 'menu-paneles';
}elseif(is_page('radiadores-para-mineria') || is_page('tecnologia-inppa') || is_page('rse')){
	$menu = 'menu-mineria';
}elseif(is_page('intercambiadores-de-calor')){
	$menu = 'menu-intercambiadores';
}elseif(is_page('radiadores-flota')){
	$menu = 'menu-flota';
}
elseif(is_page('contacto')){
	$menu = 'menu-contacto';
}
else{
	$menu = 'menu-1';
}

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<section class="header-top d-none d-lg-block p-0" id="header-top">
	<div class="row" style="z-index: 99;position: relative;">
		<div class="container-fluid p-60">
			<div class="d-flex justify-content-between py-4 px-0">
				<div class="top-lend align-self-center">
					<span class="title"><?php echo get_bloginfo('description');?></span>
				</div>
				<div class="brand ml-auto">
					<a class="navbar-brand js-scroll-trigger" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ) , 'full' ); ?>"  style="height: 6vh;" class="img-fluid is-normal">
						<img src="<?php echo get_template_directory_uri().'/assets/images/logo_hover.svg';?>"  style="height: 6vh;" class="img-fluid is-hover d-none">
					</a>
				</div>
			</div>
			
		</div>
	</div>
</section>
<nav class="navbar navbar-expand-lg navbar-dark p-0" id="mainNav">
	<div class="container-fluid p-60">
		
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#primary-menu-wrap" aria-controls="primary-menu-wrap" aria-expanded="false" aria-label="Toggle navigation">
		Menu
		<i class="fas fa-bars"></i>
		</button>
		<div class="d-flex justify-content-between  w-100">

			
		
		<?php if ( !is_front_page() ) : 
			
			?>
		<div class="d-none d-md-block menu-shorthand mr-auto align-self-center">
			<div class="items-shorcut">
				<a href="<?php echo get_site_url().'/radiadores-para-mineria'; ?>" class="item-link-circle yellow"></a>
				<a href="<?php echo get_site_url().'/radiadores-flota'; ?>" class="item-link-circle darkblue"></a>
				<a href="<?php echo get_site_url().'/servicios'; ?>" class="item-link-circle orange"></a>
				<a href="<?php echo get_site_url().'/intercambiadores-de-calor'; ?>" class="item-link-circle blue"></a>
			</div>
		</div>
		<?php
				wp_nav_menu( array(
					'menu'  => $menu,
					'theme_location'  => 'menu-2',
					'menu_id'         => 'navbarResponsive',
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'primary-menu-wrap',
					'menu_class'      => 'navbar-nav text-uppercase ml-auto top-submenu',
					'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					'depth'           => 2,
					'walker'          => new WP_bootstrap_4_walker_nav_menu()
		) );
	?>
	<?php endif;?>
	</div>
</div>
</nav>


<div id="page" class="site">
	

	<div id="content" class="site-content">
