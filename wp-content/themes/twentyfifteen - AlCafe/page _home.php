<?php
/*
Template Name: Domu Template
*/
?>
<?php get_header() ?>
<div id="center"> 
	<div id="content">
	 
	<?php the_post() ?>
			<div id="post-<?php the_ID(); ?>" class="post" >
			<h1 class="post-title">Příští Alzheimer Café</h1>
				<div class="post-content" >
				<?php the_content() ?>
				</div>

			</div><!-- .post -->
			<div id="about_cafe">
				<h1>Co je Alzheimer café</h1>
				this is text about alzheimer cafe and how does it work. Climate change and ocean acidification have killed off one of the most spectacular features on the planet. Discover how millions of book lovers have uncovered a new way to download free and bargain ebooks every day. <div id="more"><br><a href="http://localhost/AlCafe/index.php/o-projektu/">více o Alzheimer Café</a></div>
				
				
			</div>
	 
	</div><!-- #content -->
</div>
 
<?php get_footer() ?>
