<?php get_header(); ?>
<div id="shrink">

    <div class="hero-pages">
        <h1 class="master-title">Blog Posts</h1>
      <br>
        <br>

    </div>
</div>

  <div class="container-fluid dark">
      <div id="blogs" class="container">
          <div class="row">
<br><br><br>
<?php global $query_string;
        query_posts ('posts_per_page=30');

        while(have_posts()) : the_post(); ?>

              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="blognail1" <?php

if ( $id = get_post_thumbnail_id() ) {
    if ( $src = wp_get_attachment_url( $id ) )
        printf( ' style="background:   -webkit-linear-gradient(rgba(33, 33, 33, 0.5), rgba(33, 33, 33, 0.5)), url(%s) center top no-repeat;
        background-size: cover;"', $src );
}

?>>
<div class="title" id="target">
                      <a href="<?php the_permalink(); ?>"><span class="highlight"><?php the_title(); ?></span></a>
                        <?php the_excerpt('Read More'); ?>


                    </div>
                </div>
              </div>

              <?php endwhile; ?>

          </div>




      </div>
  </div>


<?php get_footer(); ?>
