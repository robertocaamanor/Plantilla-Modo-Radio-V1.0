<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ModoRadio</title>
	<meta name="viewport" content="width-device-width">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/responsive.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700italic,700,500italic,500,400italic,300italic,300,100italic,100,900,900italic' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="<?php bloginfo('template_url')?>/js/jquery.slides.min.js"></script>
	<script>
    $(function(){
      $("#slideshow").slidesjs({
        height: 300,
        navigation: false
      });
    });
  </script>
  <?php wp_head(); ?>
  
</head>
<body>
	<header>
		<div id="logo"><img src="http://i.imgur.com/SSEAqum.png" /></div>
		<nav>
			<?php wp_nav_menu(
					array(
						'container' => false,
						'items_wrap' => '<ul id="menu-top">%3$s</ul>',
						'theme_location' => 'menu'
						));
				?>
		</nav>
	</header>