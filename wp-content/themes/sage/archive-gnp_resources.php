<?php
/*
Template Name: Resources Archive
*/
?>
<h1 class="text-center mb2">Get Unstuck With These Helpful Resources</h1>
<?php
  $args = array( 'post_type' => 'gnp_resources', 'posts_per_page' => 12 );
  $loop = new WP_Query( $args );
  ?>

  <?php
    while ( $loop->have_posts() ) : $loop->the_post();
  ?>
  <div class="col-sm-12 col-md-12 col-lg-4">
    <div class="card">
      <div class="section-light">
        <div class="card-img resource-img">
          <a href="<?php the_permalink(); ?>"><?php
            if ( has_post_thumbnail() ) {
               the_post_thumbnail();
             }?></a>
        </div>
      </div>
      <div class="card-content">
        <h2 style="text-align: center;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
