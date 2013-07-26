<?php get_header(); ?>

<main role="main" id="main" class="subpage">
  <div class="container">
    <div id="primary-content"> 
      <?php while (have_posts()) : the_post(); ?>

        <div class="post <?php echo get_cat_item_classes(); ?> <?php echo get_tag_item_classes(); ?>">
            <h2 class="post-title"><?php the_title(); ?></h2>

            <?php the_content(); ?>
        </div>

      <?php endwhile; ?>
    </div>

    <div id="blog-sidebar">
      <?php dynamic_sidebar( 'blog-sidebar' ); ?>
    </div>

  </div><!-- /.container -->
</main><!-- /main -->

<?php get_footer(); ?>