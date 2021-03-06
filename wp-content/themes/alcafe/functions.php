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


add_action( 'init', 'people_post_type' );
function people_post_type() {
  register_post_type( 'alcafe_people',
    array(
      'labels' => array(
        'name' => __( 'Kontakty - lidé' ),
        'singular_name' => __( 'kontakt' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

add_action( 'init', 'sponsor_post_type' );
function sponsor_post_type() {
  register_post_type( 'alcafe_sponsor',
    array(
      'labels' => array(
        'name' => __( 'Sponzoři' ),
        'singular_name' => __( 'kontakt' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}



add_filter( 'rwmb_meta_boxes', 'alcafe_meta_boxes' );
function alcafe_meta_boxes( $meta_boxes ) {
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
    $meta_boxes[] = array(
        'title'      => esc_html__( 'Kontakty - lidé', 'alcafe' ),
        'post_types' => 'alcafe_people',
        'fields'     => array(
           // IMAGE UPLOAD
            array(
                'name' => esc_html__( 'obrazek', 'alcafe' ),
                'id'   => "people_image",
                'type' => 'image',
            ),
            // TEXTAREA
            // array(
            //     'name' => esc_html__( 'Text', 'alcafe' ),
            //     'desc' => esc_html__( 'Text popis', 'alcafe' ),
            //     'id'   => "people_text",
            //     'type' => 'textarea',
            //     'cols' => 20,
            //     'rows' => 3,
            // ),
        ),

    );
    $meta_boxes[] = array(
        'title'      => esc_html__( 'Sponzoři', 'alcafe' ),
        'post_types' => 'alcafe_sponsor',
        'fields'     => array(
           // IMAGE UPLOAD
            array(
                'name' => esc_html__( 'obrazek', 'alcafe' ),
                'id'   => "sponsor_image",
                'type' => 'image',
            ),
        ),


    );
    return $meta_boxes;
}

function alcafe_scripts() {

//hamburger menu
wp_enqueue_script( 'wpb_slidepanel', get_template_directory_uri() . '/js/slidepanel.js', array('jquery'), false, true ); 
}
add_action( 'wp_enqueue_scripts', 'alcafe_scripts' );