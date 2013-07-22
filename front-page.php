<?php get_header(); ?>
    
<main role="main" id="main">
  <div class="container">

    <div id="page">
      <?php while (have_posts()) : the_post(); ?>
        <h2 id="consumer-reports">
          What if there was a <i>Consumer Reports</i> 
          <span class="legislators"> for legislators?</span>
        </h2>

        <h3 id="goal">THAT’S OUR GOAL.</h3>

        <div class="content-body"><?php the_content(); ?></div>
      <?php endwhile; ?>

      
      <ul id="recent-posts">
      <h2>Recent Posts</h2>
      <?php
        $args = array( 'numberposts' => '3' );
        $recent_posts = wp_get_recent_posts( $args );
        foreach( $recent_posts as $recent ){
          echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
        }
      ?>
      </ul>
    </div>
  </div><!-- /.container -->
</main><!-- /#main -->

<?php get_footer(); ?>