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
					<a class="logo visible-sm" href="{{ page.url }}">
						<img width="280" src="{{ page.header | img_tag }}" />
					</a>
					<p>
						&nbsp;&nbsp;//&nbsp;&nbsp;{{ primary.email }}
						<a href="{{ primary.linked-in }}" target="_blank" class="linked-in"><img src="{{ page.header | img_tag.linked-in }}
							" alt="LinkedIn Logo" /></a>
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
			      <a class="logo hidden-sm" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			      	<img src="{{ page.header | img_tag.linked-in }}" />
			      </a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" role="navigation">
						<div class="inner-nav-text">
							<!-- navigation menu -->
			      	{{ mini-navigation area }}
						</div>
			    </div><!-- /.navbar-collapse -->
				</div>
			</nav>
	</header><!-- #masthead -->
