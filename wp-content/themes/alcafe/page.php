<?php
/*
Template Name: Default Page
*/
?>
<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="post_summary">   
       <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        </div>

<?php endwhile; else: ?>



<?php _e('Sorry, no posts matched your criteria.', 'alcafe'); ?><?php endif; ?>

<?php get_footer(); ?>