<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage alcafe
 * @since alcafe 1.0
 */
?>

<article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="entry-header">

        <div class="datetime">
            <div id="date"><?php echo rwmb_meta( 'date' ); ?></div>
            <div id="time"><?php echo rwmb_meta( 'time' ); ?></div>
        </div>
        <div id="paragraph">
			<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
				endif;
			?>
            <div id="guest_text"><?php echo rwmb_meta( 'guest_text' ); ?></div>
        </div>
        <div id="delimiter"></div>
	</header> <!-- .entry-header -->

	<div class="entry-content"> 
		<div class="post_paragraph"><p><?php the_content(); ?></p></div>
	</div><!-- .entry-content -->

	<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>

	<footer class="entry-footer">
<!-- 		<?php alcafe_entry_meta(); ?> -->
		<?php edit_post_link( __( 'Edit', 'alcafe' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
