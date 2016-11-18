<?php
function SearchFilter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}
 
if ( ! isset( $content_width ) ) {
    $content_width = 660;
}


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Home widget bar',
        'id'            => 'home_widget_1',
        'before_widget' => '<div class="home_widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


add_filter('pre_get_posts','SearchFilter');

add_theme_support( 'title-tag' );

add_filter( 'rwmb_meta_boxes', 'your_prefix_meta_boxes' );
function your_prefix_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Host, datum a čas', 'alcafe' ),
        'post_types' => 'post',
        'fields'     => array(
            // TEXT
            array(
                // Field name - Will be used as label
                'name'  => esc_html__( 'Host', 'alcafe' ),
                // Field ID, i.e. the meta key
                'id'    => "guest_text",
                // Field description (optional)
                'desc'  => esc_html__( 'Text description', 'alcafe' ),
                'type'  => 'text',
                // Default value (optional)
                'std'   => esc_html__( 'Default text value', 'alcafe' ),
                // CLONES: Add to make the field cloneable (i.e. have multiple value)
                'clone' => false,
            ),
            // DATE
            array(
                'name'       => esc_html__( 'Datum', 'alcafe' ),
                'id'         => "date",
                'type'       => 'date',

                // jQuery date picker options. See here http://api.jqueryui.com/datepicker
                'js_options' => array(
                    'appendText'      => esc_html__( '(dd.mm.)', 'alcafe' ),
                    'dateFormat'      => esc_html__( 'dd.mm.', 'alcafe' ),
                    'changeMonth'     => true,
                    'changeYear'      => true,
                    'showButtonPanel' => true,
                ),
            ),
            
            // TIME
            array(
                'name'       => esc_html__( 'Čas', 'alcafe' ),
                'id'         => 'time',
                'type'       => 'time',

                // jQuery datetime picker options.
                // For date options, see here http://api.jqueryui.com/datepicker
                // For time options, see here http://trentrichardson.com/examples/timepicker/
                'js_options' => array(
                    'stepMinute' => 5,
                    'showSecond' => true,
                    'stepSecond' => 10,
                ),
            ),
         ),
    );
    return $meta_boxes;
}

