<?php
/*
Template Name: alcafe
*/
?>
<?php get_header(); ?>
<div class="post_summary">
<?php if ( is_home() ) : get_search_form( ); ?>
<?php endif; ?>

<div id="upcoming"><h3>—————————————————   Příští Alzheimer Café   ————————————————</h3></div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



<div class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>   

    <div class="datetime">
        <div id="date"><?php echo rwmb_meta( 'date' ); ?></div>
        <div id="time"><?php echo rwmb_meta( 'time' ); ?></div>
    </div>
    <div id="paragraph">
        <h1><!-- <a href="<?php the_permalink(); ?>"> --><?php the_title(); ?></h1>
        <div id="guest_text"><?php echo rwmb_meta( 'guest_text' ); ?></div>
    </div>

    <div id="delimiter"></div>
        <div class="post_paragraph"><p><?php the_content(); ?></p></div>
        <?php the_tags(); ?>

</div>
<?php endwhile; 

 the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'alcafe' ),
                'next_text'          => __( 'Next page', 'alcafe' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'alcafe' ) . ' </span>',
            ) ); 

else: ?>
</div>





<?php _e('Omlouváme se, na vámi hledaný dotaz jsme nic nenašli.', 'alcafe'); ?><?php endif; ?>


<?php get_footer(); ?>