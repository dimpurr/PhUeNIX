<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<?php if ( is_user_logged_in() ) { // 适配 WordPress 顶部管理栏
		echo '<style type="text/css" media="screen"> #float { top: 32px; } </style>' ;
	} ?>
</head>

<body <?php body_class(); ?>>

<header>

<nav id="nav_small" class="nav_small" role="navigation">
	<?php wp_nav_menu( array( 'theme_location' => 'small' ) ); ?>
</nav>

<div class="header_logo">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?=get_template_directory_uri(); ?>/img/logo.png" /></a>
</div>

<nav id="nav_huge" class="nav_huge">
	<ul>
		<li><a href="#">
			<h3 class="nav_huge_h">EXPLORER</h3>
			<span class="nav_huge_desc">打开新世界的大门</span>
		</a></li>
		<li><a href="#">
			<h3 class="nav_huge_h">WIKI</h3>
			<span class="nav_huge_desc">技术与创造在北邮</span>
		</a></li>
		<li><a href="#">
			<h3 class="nav_huge_h">JOIN US</h3>
			<span class="nav_huge_desc">参与组织、讨论和活动</span>
		</a></li>
	</ul>
</nav>

<nav id="nav_main" class="nav_main" role="navigation">
	<?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
</nav>

</header>