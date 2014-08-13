<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css" />
	<?php wp_head(); ?>

  <?php if (is_single()) {
		global $post;
		$cat='';
		$cats = get_the_category($post->ID);
		foreach ( $cats as $c ) {
			$cat .= $c->category_nicename.' ';
    }
  } ?>
</head>
<body <?php body_class($cat); ?>>
<div class="total-wrapper">
  <header class="container"><div class="inner">
    <div class="header-logo"><a href="/">Corry Frydlewicz</a></div>
    <?php if ( ! is_front_page() ) : ?>
    <div class="subsection-logo"></div>
    <?php endif; ?>
    <div class="search-container"><?php get_search_form(); ?></div>
  </div></header>