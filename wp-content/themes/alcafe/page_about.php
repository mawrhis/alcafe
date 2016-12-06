<?php
/*
Template Name: About us Template
*/
?>
<?php get_header() ?>


    <?php the_post() ?>
    <div id="about_summary">

                    <p><?php the_content(); ?></p>

    </div><!-- #about_summary -->
    <div class="sponsors">

    
    <?php 
    $args = array( 'post_type' => 'alcafe_sponsor', 'posts_per_page' => 25, 'order'   => 'ASC', );
    $the_query = new WP_Query( $args ); 
    ?>
    <?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="sponsor_content">
        <div class="sponsors_image"><?php $images = rwmb_meta( 'sponsor_image', 'size=YOURSIZE' );            // Since 4.8.0
                if ( !empty( $images ) ) {
                foreach ( $images as $image ) {
                echo "<img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' />";
                    }
                } ?>
                </div>
        <div class="sponsor_text"><?php the_content(); ?></div>
    </div>
    <?php wp_reset_postdata(); ?>
    <?php endwhile; ?>
    <?php else:  ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

    </div>
            

<?php get_footer() ?> 