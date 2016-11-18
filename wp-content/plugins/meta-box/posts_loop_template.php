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
        <p><?php the_content(__('(more...)')); ?></p>
</div>

	<!-- This is the output of the META information -->
	
</div>
<!-- // End of Post Wrap -->
