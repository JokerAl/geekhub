<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<title><?php bloginfo( 'name' ); ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div class="wrapper">
	<header class="h-page">
		<div class="container-fluid">
			<h1 class="logotype"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?><span>.</span></a></h1>
			<button class="hamburger">&#9776;</button>
			<button class="cross">&#735;</button>
				<?php
				$args = [ 'theme_location' => 'primary' ];
				wp_nav_menu( $args ); ?>
		</div>
	</header>