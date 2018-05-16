<!DOCTYPE html>
<html lang="zh-cn">

<head>

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php if (get_option('clrs_opct') == "no") { ?>
	<link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/style.opacity.css">
	<?php $bg = get_option('clrs_opbg'); if ( !empty( $bg ) ) { ?>
	<style>body { background-image: url("<?=$bg;?>"); };</style>
<?php }; }; ?>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" type="image/x-icon" href="<?=get_option( 'clrs_favi', 'favicon.ico' );?>" />

<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="author" content="dimpurr" />
<meta name="application-name" content="<?php bloginfo('name' ); ?>"/>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<link rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url')?>" />
<link rel="alternate" type="application/rdf+xml" title="RSS 1.0" href="<?php bloginfo('rss_url')?>" />
<link rel="alternate" type="application/atom+xml" title="ATOM 1.0" href="<?php bloginfo('atom_url')?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php

if ( is_user_logged_in() ) { // 适配 WordPress 顶部管理栏
	echo '<style type="text/css" media="screen"> #float { top: 32px; } </style>' ;
}

$clrs_style = get_option("clrs_style");
if ( !empty($clrs_style) ) {
	echo "<style>" . $clrs_style . "</style>";
}

?>

<?php wp_head(); ?>

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