<?php get_header(); ?>

<article class="container single">

  <?php the_post(); ?>

		<?php get_template_part( 'content', get_post_format() ); ?>

    <div class="time-nav">
      <?php previous_post(); ?>
      <?php next_post(); ?>
    </div><!--.time-nav-->

    <?php // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) {
        comments_template();
      }
    ?>

</article>

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
?>