<?php get_header(); ?>

<article class="container<?php if ( !is_single() ) { echo " listing"; } ?>">

  <?php if ( have_posts() ) : ?>

    <div class="time-nav">
      <?php posts_nav_link('<div class=\"clear\"></div>','<div class="newer"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 60" enable-background="new 0 0 120 60" xml:space="preserve"><ellipse cx="-72.8" cy="-44.5" rx="0.2" ry="0"/><path d="M120,60c0-33.1-26.9-60-60-60S0,26.9,0,60 M10,60c0-27.6,22.4-50,50-50s50,22.4,50,50"/></svg><span>Newer Posts</span></div>','<div class="older"><span>Older Posts</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 60" enable-background="new 0 0 120 60" xml:space="preserve"><ellipse cx="-72.8" cy="-44.5" rx="0.2" ry="0"/><path d="M120,60c0-33.1-26.9-60-60-60S0,26.9,0,60 M10,60c0-27.6,22.4-50,50-50s50,22.4,50,50"/></svg></div>'); ?>
    </div><!--.time-nav-->

    <?php while ( have_posts() ) :
      the_post();
      get_template_part( 'content', get_post_format() );
    endwhile; ?>

    <div class="time-nav">
      <?php posts_nav_link('<div class=\"clear\"></div>','<div class="newer"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 60" enable-background="new 0 0 120 60" xml:space="preserve"><ellipse cx="-72.8" cy="-44.5" rx="0.2" ry="0"/><path d="M120,60c0-33.1-26.9-60-60-60S0,26.9,0,60 M10,60c0-27.6,22.4-50,50-50s50,22.4,50,50"/></svg><span>Newer Posts</span></div>','<div class="older"><span>Older Posts</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 60" enable-background="new 0 0 120 60" xml:space="preserve"><ellipse cx="-72.8" cy="-44.5" rx="0.2" ry="0"/><path d="M120,60c0-33.1-26.9-60-60-60S0,26.9,0,60 M10,60c0-27.6,22.4-50,50-50s50,22.4,50,50"/></svg></div>'); ?>
    </div><!--.time-nav-->

  <?php else : ?>
    <!-- have_posts() Failed. :( -->
    <section class="post error404">
      <div class="thumbnail-container" style="background-image: url('<?php bloginfo('template_url');?>/images/404.jpg');"></div>
      <div class="text-container">
        <h2 class="entry-title">No Results Found</h2>
        <div class="entry-summary">
          <p>I'm sorry, but no results were found. Please try using another search or return to the <a href="/">home page</a>.</p>
        </div><!-- .entry-summary -->
      </div><!--.text-container-->
    </section>    
  <?php endif; ?>

</article>

<?php get_sidebar(); ?>
<?php get_footer();