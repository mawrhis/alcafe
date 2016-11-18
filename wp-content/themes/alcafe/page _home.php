<?php
/*
Template Name: Domu Template
*/
?>
<?php get_header() ?>


	<?php the_post() ?>
			<div id="post-<?php the_ID(); ?>" class="posts_home" >
				<div class="post-content" >
        		<div id="post-content-text"><?php the_content(); ?></div>
				<?php echo do_shortcode ("[ic_add_posts showposts='1']") ?>
				</div><!-- .post-content -->

			</div><!-- .post -->
			<div id="slideshow_cafe">
			<?php echo photo_gallery(5); ?>

				
				
			</div><!-- #slideshow_cafe -->

			<?php get_sidebar() ?>

		<?php get_footer() ?> 
	</div><!-- #main -->



 

