<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php wp_head(); ?>
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<script src="/js/myscript.js"></script>
	</head>
	<body id="blog" <?php body_class(); ?>>

		<?php get_template_part( 'template-part', 'topnav' ); ?>

		<?php get_template_part( 'template-part', 'head' ); ?>