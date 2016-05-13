<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bt-informational
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="application/xhtml+xml">
<link rel="icon" type="image/png" href="/wp-content/themes/bt-informational/assets/images/favicon.png">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" type="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bt-informational' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="little-nav">
			<div class="container">
				<p>
					24 hour Sales/Customer Service&nbsp;&nbsp;<strong><?php echo preg_replace('/^(\d{3})(\d{3})(\d{4})$/i', '($1) $2-$3', get_field( 'phone', 'options' )); ?></strong>
				</p>
			</div>
		</div>

			<nav class="navbar navbar-default">
				<div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			      	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/new-logo.png" width="100" height="100"/>
							<span class="title-headers">
								<h1>Buckeye Mats, LLC</h1>
								<h2>A Division of Buckeye Pacific, founded 1946</h2>
							</span>
			      </a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" role="navigation">
						<div class="inner-nav-text">
			      	<?php bt_main_nav(); ?>
						</div>
			    </div><!-- /.navbar-collapse -->
				</div>
			</nav>
	</header><!-- #masthead -->
