<section class="post post-<?php the_ID(); ?>">

  <?php post_thumbnail(); ?>

	<?php if ( is_single() ) :
    the_title( '<h1 class="entry-title">', '</h1>' );
  else :
    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
  endif; ?>

  <div class="entry-meta-container">
    <div class="entry-meta date"><?php post_date(); ?></div>

    <?php if ( get_comments_number() > 0 ) : ?>
      <div class="entry-meta comments-exist"><?php comments_popup_link( '<!--No comments-->', '1', '%', 'comments-link', '<!--Comments are off for this post-->'); ?></div>
    <?php endif; ?>

    <div class="entry-meta categories">
      <span class="cat-links"><?php
        $cats=get_the_category();
        echo $cats[0]->cat_name;
      ?></span>
    </div>

    <?php if ( is_admin() ) {
      edit_post_link( __( 'Edit' ), '<div class="entry-meta edit-link">', '</div>' );
    } ?>
  </div><!--.entry-meta-container-->

	<?php if ( is_single() ) : ?>
    <div class="entry-content">
      <?php the_content(); ?>
      <?php wp_link_pages( array(
        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
        'after'       => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
      ) ); ?>
    </div><!-- .entry-content -->
	<?php else : ?>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
	<?php endif; ?>

  <div class="entry-meta-container">
    <?php the_tags( '<div class="entry-meta tags"><span class="tag-links">', ', ', '</span></div>' ); ?>
  </div><!--.entry-meta-container-->

</section><!--.post-#-->
