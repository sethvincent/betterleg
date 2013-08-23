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

      <div id="front-column-right">
        <div id="recent-posts">
          <h3 id="recent">Recent Posts</h3>
          <?php
           $postslist = get_posts('numberposts=3&order=DESC&orderby=date');
           foreach ($postslist as $post) : setup_postdata($post); ?>
             <div class="entry">
               <div class="post-date"><?php the_time('F j, Y'); ?></div>
               <h3 class="post-title">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
              <?php the_title(); ?>
            </a>
          </h3>
               <div class="post-excerpt"><?php the_excerpt(); ?></div>
             </div>
           <?php endforeach; ?>
          <p id="blog-link"><b><a href="/blog">Visit our blog for more.</a></b></p>
        </div>
      </div>
      <div id="who-we-are">
        <h3 id="who">Who we are</h3>
          <p>IBL is being developed by two people who are intensely interested in politics and who bring a diverse background that supports the intellectual framework being developed:</p>
          <div class="team-member">
            <img alt="Ken S" src="http://betterlegislating.com/wp-content/uploads/2013/07/ken.png" width="248" height="248" />
            <b>Ken Smith PhD, MBA</b> – Senior lecturer at the University of Washington Evans School of Public Administration with business experience and a CPA.
          </div>
          <div class="team-member">
            <img class="alignnone size-full wp-image-28" alt="Jim C" src="http://betterlegislating.com/wp-content/uploads/2013/07/jim.png" width="199" height="221" />
            <b>Jim Carroll</b> – Former competitive intelligence professional in the pharmaceutical industry with a PhD in chemistry and a recent MPA.
          </div>
       </div>
    </div>
  </div><!-- /.container -->
</main><!-- /#main -->

<?php get_footer(); ?>