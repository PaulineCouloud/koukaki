<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <h1>Fleurs d’oranger & chats errants</h1>
            <div class="menu_burger"></div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

    <div id="menu">
		<div class="menu_main">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/png/logo.png" alt="Logo Fleurs d'oranger & chats errants" class="menu_logo" />
		<ul class="menu_ul">
			<li><a href="#story">Histoire</a></li>
			<li><a href="#characters">Personnages</a></li>
			<li><a href="#place">Lieu</a></li>
			<li><a href="#studio">Studio Koukaki</a></li>
        </ul>
		</div>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/Studio Koukaki.svg" alt="Studio Koukaki" class="studio_logo" />
    <div class="menu_decor">
		<div class="orchid_violet"></div>
		<div class="cat_blue"></div>
		<div class="marguerite"></div>
		<div class="cat_grey"></div>
		<div class="cat_orange"></div>
		<div class="flower_orange"></div>
		<div class="flower_violet"></div>
		<div class="flower_blur"></div>
	</div>
	</div>

