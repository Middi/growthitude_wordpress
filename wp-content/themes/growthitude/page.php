<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php endwhile; ?>
<?php endif; ?>

<?php the_content(); ?>

<?php get_footer(); ?>
