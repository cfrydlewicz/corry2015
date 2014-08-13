<?php get_header(); ?>

  <article class="container"><div class="inner">

    <?php if ( have_posts() ) :

      if ( ! is_single() ) : ?>
        <div class="time-nav">
          <?php posts_nav_link('&nbsp;','<div class="newer">Newer Posts</div>','<div class="older">Older Posts</div>'); ?>
        </div><!--.time-nav-->
      <?php endif;
      
      while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
      endwhile;
    ?>
      
      <div class="time-nav">

    <?php
      if ( is_single() ) :
        // prev/next single post
        previous_post();
        next_post();
      else :
        // prev/next page
        posts_nav_link('&nbsp;','<div class="newer">Newer Posts</div>','<div class="older">Older Posts</div>');
      endif;
    ?>
      </div><!--.time-nav-->

    <?php else : ?>
      <!-- have_posts() Failed. :( -->
      <div id="post-0" class="post error404 not-found">
        <h1 class="entry-title"><?php _e( 'Not Found' ); ?></h1>
        <div class="entry-content">
          <p>Sorry, but that content couldn\'t be found. Try searching for it if you like.</p>
          <?php get_search_form(); ?>
        </div><!-- .entry-content -->
      </div><!-- #post-0 -->
    <?php endif; ?>

  </div></article>

<?php // endif; ?>

<?php get_footer(); ?>