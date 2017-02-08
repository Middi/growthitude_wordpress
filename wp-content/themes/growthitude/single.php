<?php get_header(); ?>

<div class="container blog-main">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php endwhile; ?>
  <?php endif; ?>

    <h3 class="lead blog-title"><?php the_title(); ?></h3>
    <small><?php echo get_the_date(); ?></small><p></p>

    <img class="img img-responsive center-block" src="<?php
if ( has_post_thumbnail() ) { the_post_thumbnail_url();
}
?>" alt="...">

    <p class="black"><?php the_content(); ?></p>

    <center>
        <a href="http://alpha.growthitude.com/blog/" type="button" role="button" class="btn btn-primary">More Blogs</a>
    </center>
</div>


<?php get_footer(); ?>
