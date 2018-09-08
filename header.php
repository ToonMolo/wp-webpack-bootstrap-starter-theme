<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kredis-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
    <nav class="navbar navbar-main navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
          <?php echo esc_attr( get_bloginfo( 'name' ) ); ?>
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-main" aria-controls="menu-main" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i> Menu
        </button>

        <?php
          wp_nav_menu([
            'menu'            => 'Primary',
            'theme_location'  => 'menu-1',
            'container'       => 'div',
            'container_id'    => 'menu-main',
            'container_class' => 'collapse navbar-collapse',
            'menu_id'         => 'primary-menu',
            'menu_class'      => 'navbar-nav mr-auto',
            'depth'           => 2,
            'fallback_cb'     => 'bootstrapNavigation::fallback',
            'walker'          => new bootstrapNavigation()
          ]);
        ?>
      </div>
    </nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
