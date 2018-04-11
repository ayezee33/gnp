<div class="container">
  <h1><?php echo single_term_title(); ?> Blog Posts</h1>
  <hr />
  <div class="row">
    <?php while (have_posts()) : the_post(); ?>
    <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card">
          <div class="card-img">
            <a href="<?php the_permalink(); ?>"><?php
              if ( has_post_thumbnail() ) {
                 the_post_thumbnail();
               }?></a>
          </div>
          <div class="card-content">
            <header>
              <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </header>
            <div class="entry-summary">
              <?php the_excerpt(); ?>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
