<?php /* Template Name: products */ ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php endwhile; ?>
<?php endif; ?>

<div id="shrink">

    <div class="hero-pages">
        <h1 class="master-title"><?php the_title(); ?></h1>
      <br>
        <br>

    </div>
</div>

<div class="container blog-main">

    <img class="img img-responsive center-block" src="<?php
if ( has_post_thumbnail() ) { the_post_thumbnail_url();
}
?>" alt="...">

    <br><br><br>



        <?php the_content(); ?>

</div>

<?php get_footer(); ?>
