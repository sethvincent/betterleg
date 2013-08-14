<?php get_header(); ?>
    
<main role="main" id="main" class="subpage">
  <div class="container">
    <div id="primary-content">
      <h2 class="recent">Recent posts:</h2>

      <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged=' . get_query_var('paged')); ?>
        
      <?php if ( have_posts() ) : ?>

        <!-- Add the pagination functions here. -->

        <!-- Start of the main loop. -->
        <?php while ( have_posts() ) : the_post();  ?>

        <!-- the rest of your theme's main loop -->
        <div class="post">
          <div class="post-date"><?php the_time('F j, Y'); ?></div>

          <h2 class="post-title">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>

          <div class="post-excerpt"><?php the_excerpt(); ?></div>
        </div>

        <?php endwhile; ?>
        <!-- End of the main loop -->

        <!-- Add the pagination functions here. -->

        <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
        <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

      <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
    </div>

    <div id="blog-sidebar">
      <?php dynamic_sidebar( 'blog-sidebar' ); ?>
    </div>

  </div><!-- /.container -->
</main><!-- /#main -->

<?php get_footer(); ?>