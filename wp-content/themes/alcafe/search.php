<?php
/*
Template Name: Default Page
*/
?>
<?php get_header(); ?>
 <?php  get_search_form( ); ?>
<h2><?php printf( __( 'Výsledky hledání pro výraz: %s' ), '<span>' . get_search_query() . '</span>'); ?></h2>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="search">
    <div class="post_summary">   
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
    </div>
    </div><!--search-->

<?php endwhile; else: ?>



<?php _e('Omlouváme se, na vámi hledaný dotaz jsme nic nenašli.', 'alcafe'); ?><?php endif; ?>


<?php get_footer(); ?>