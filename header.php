<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css" />
	<?php wp_head(); ?>
</head>
<body>
<div class="total-wrapper">
  <header class="container"><div class="inner">
    <div class="header-logo"><a href="/">Corry Frydlewicz</a></div>
    <?php if ( ! is_front_page() ) : ?>
    <div class="subsection-logo"></div>
    <?php endif; ?>
    <div class="search-container"><?php get_search_form(); ?></div>
  </div></header>