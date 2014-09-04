<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic|Oxygen:300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css" />
  <script type="text/javascript" src="<?php bloginfo('template_url');?>/scripts.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="total-wrapper">
  <header class="container"><div class="inner">
    <div class="header-logo">
      <a href="/">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 251 103" enable-background="new 0 0 251 103" xml:space="preserve"><g><path class="corry-c" d="M28.3 68.8c-7.6 0-14-2.7-19.3-7.9c-5.3-5.3-8-11.7-8-19.3V28.8c0-7.5 2.7-14 8-19.3 c5.3-5.3 11.8-7.9 19.3-7.9c7.6 0 14 2.7 19.3 8c5.1 5.1 7.7 11.1 8 18.2c-4 0-8.8 0-12.8 0c-0.2-3.5-1.6-6.6-4.2-9.2 c-2.8-2.8-6.2-4.2-10.3-4.2c-4 0-7.5 1.4-10.3 4.2c-2.8 2.8-4.2 6.2-4.2 10.2v12.8c0 4 1.4 7.4 4.2 10.2c2.8 2.8 6.2 4.2 10.3 4.2 c4 0 7.4-1.5 10.3-4.4c2.5-2.6 3.9-5.8 4.2-9.6c2.9 0 10.1 0 12.8 0c-0.3 7.4-2.9 13.6-7.9 18.7C42.3 66.1 35.9 68.8 28.3 68.8z" /><path class="corry-o" d="M88.9 68.8c-7.6 0-14-2.7-19.3-7.9c-5.3-5.3-8-11.7-8-19.3V28.5c0-7.4 2.7-13.8 8-19.1 C74.9 4 81.3 1.3 88.9 1.3c7.6 0 14 2.7 19.3 8.1c5.3 5.4 8 11.8 8 19.1v13.1c0 7.6-2.7 14-8 19.3C102.9 66.2 96.4 68.8 88.9 68.8z M103.4 28.5c0-3.8-1.4-7.2-4.2-10.1c-2.8-2.9-6.2-4.3-10.3-4.3c-4 0-7.5 1.4-10.3 4.3c-2.8 2.9-4.2 6.3-4.2 10.1v13.1 c0 3.8 1.4 7.2 4.2 10.1c2.8 2.9 6.2 4.3 10.3 4.3c4 0 7.4-1.4 10.3-4.3c2.8-2.9 4.2-6.3 4.2-10.1V28.5z" /><path class="corry-r1" d="M149.5 14.1c-4 0-7.5 1.4-10.3 4.2c-2.8 2.8-4.2 6.2-4.2 10.3v40.2h-12.8V28.8c0-7.5 2.7-14 8-19.4 c5.3-5.4 11.7-8.1 19.3-8.1h9.2v12.8H149.5z"/><path class="corry-r2" d="M186.8 14.1c-4 0-7.4 1.4-10.3 4.2c-2.8 2.8-4.2 6.2-4.2 10.3v40.2h-12.8V28.8c0-7.5 2.7-14 8-19.4 c5.3-5.4 11.8-8.1 19.3-8.1h9.2v12.8H186.8z"/><path class="corry-y" d="M250.3 74.9c0 7.6-2.7 14-8.2 19.3c-5.5 5.3-12.2 8-20.3 8V89.4c4.5 0 8.3-1.4 11.2-4.3 c3-2.8 4.5-6.3 4.5-10.4v-6h-8.7c-7.6 0-14-2.7-19.3-8.1c-5.3-5.4-8-11.8-8-19.2V1.3h12.8v40.5c0 3.9 1.4 7.2 4.2 10 c2.8 2.8 6.2 4.2 10.3 4.2h8.7V1.3h12.8V74.9z"/></g></svg>
        <img src="<?php bloginfo('template_url');?>/images/logo-header.png" />
      </a>
    </div>
    <div class="subsection-logo"></div>
    <div class="search-container"><?php get_search_form(); ?></div>
    <div class="menu-container"><div class="inner-menu"><?php wp_nav_menu(); ?></div></div>
  </div></header>