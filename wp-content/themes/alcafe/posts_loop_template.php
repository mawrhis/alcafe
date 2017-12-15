<!-- NOTE: If you need to make changes to this file, copy it to your current theme's main
	directory so your changes won't be overwritten when the plugin is upgraded. -->

<!-- Start of Post Wrap -->
<div class="post hentry ivycat-post">
	<!-- This is the output of the post TITLE -->
	<div id="post_summary">   

    <div class="datetime">
        <div id="date"><?php echo rwmb_meta( 'date' ); ?></div>
        <div id="time"><?php echo rwmb_meta( 'time' ); ?></div>
    </div>
    <div id="paragraph">
        <h1><?php the_title(); ?></h1>
        <div id="guest_text"><?php echo rwmb_meta( 'guest_text' ); ?></div>
    </div>
    
    <div id="delimiter"></div>
        <div class="post_paragraph"><p><?php echo wp_trim_words(  get_the_content() , 20 ); ?></p></div>
        <div class="alignright"><a href="?page_id=5">číst více...</a></div>
</div>

	<!-- This is the output of the META information -->
	
</div>
<!-- // End of Post Wrap -->
