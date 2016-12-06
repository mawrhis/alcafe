<?php
/*
Template Name: Contact Template
*/
?>
<?php get_header() ?>


	<?php the_post() ?>
	<div id="contact_summary">

			        <p><?php the_content(); ?></p>

	</div><!-- #contact_summary -->
	<div class="contact">

	
	<?php 
	$args = array( 'post_type' => 'alcafe_people', 'posts_per_page' => 3 );
	$the_query = new WP_Query( $args ); 
	?>
	<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<div class="people_content">
		<div class="people_image"><?php $images = rwmb_meta( 'people_image', 'size=YOURSIZE' );            // Since 4.8.0
				if ( !empty( $images ) ) {
			    foreach ( $images as $image ) {
		        echo "<img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' />";
				    }
				} ?>
				</div>
		<div class="people_text"><?php the_content(); ?></div>
	</div>
	<?php wp_reset_postdata(); ?>
	<?php endwhile; ?>
	<?php else:  ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

	</div>
			

<?php get_footer() ?> 