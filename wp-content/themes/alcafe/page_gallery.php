<?php
/*
Template Name: Galerie
*/
?>
<?php get_header(); ?>
<?php if ( is_home() ) : get_search_form( ); ?>
<?php endif; ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div >   

    <div class="datetime">
        <div id="time"><?php echo rwmb_meta( 'time' ); ?></div>
        <div id="date"><?php echo rwmb_meta( 'date' ); ?></div>
    </div>
    <div id="paragraph">
        
    </div>

    <div id="delimiter"></div>
        <p><?php the_content(); ?></p>
</div>
<?php endwhile; else: ?>

<?php _e('Sorry, no posts matched your criteria.', 'alcafe'); ?><?php endif; ?>



<?php get_footer(); ?>