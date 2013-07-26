<?php get_header(); ?>
    
<main role="main" id="main" class="subpage">
  <div class="container">
    <div id="primary-content"> 
      <?php while (have_posts()) : the_post(); ?>

        <div class="post">
          <p class="back-blog"><a href="/blog">Back to the blog</a></p>
          <h2 class="post-title"><?php the_title(); ?></h2>
          <div class="post-date"><?php the_time('F j, Y'); ?></div>
          <div class="post-body"><?php the_content(); ?></div>
        </div>

      <?php endwhile; ?>
    </div>

    <div id="blog-sidebar">
      <?php dynamic_sidebar( 'blog-sidebar' ); ?>
    </div>

  </div><!-- /.container -->
</main><!-- /main -->

<?php get_footer(); ?>