<?php
add_action( 'after_setup_theme', 'catholicsingles_setup' );
function catholicsingles_setup()
{
  load_theme_textdomain( 'catholicsingles', get_template_directory() . '/languages' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
  global $content_width;
  if ( ! isset( $content_width ) ) $content_width = 640;
  register_nav_menus(
    array( 'main-menu' => __( 'Main Menu', 'catholicsingles' ) )
  );
  register_nav_menus(
    array( 'footer-menu-1' => __( 'Footer Menu Line 1', 'catholicsingles' ) )
  );
  register_nav_menus(
    array( 'footer-menu-2' => __( 'Footer Menu Line 2', 'catholicsingles' ) )
  );
}
add_action( 'wp_enqueue_scripts', 'catholicsingles_load_scripts' );
function catholicsingles_load_scripts()
{
  wp_enqueue_style ('mystyle', get_template_directory_uri().'/css/public.css', array());
  wp_enqueue_style('newstyle', get_template_directory_uri() . '/css/newstyle.css', false, filemtime(get_stylesheet_directory() . '/css/newstyle.css'));
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'cookie', get_template_directory_uri().'/js/js.cookie.js', array());
  wp_enqueue_script( 'utm_cookies', get_template_directory_uri().'/js/utm_cookies.js', array());
}
add_action( 'comment_form_before', 'catholicsingles_enqueue_comment_reply_script' );
function catholicsingles_enqueue_comment_reply_script()
{
  if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'catholicsingles_title' );
function catholicsingles_title( $title ) {
  if ( $title == '' ) {
    return '&rarr;';
  } else {
    return $title;
  }
}
add_filter( 'wp_title', 'catholicsingles_filter_wp_title' );
function catholicsingles_filter_wp_title( $title )
{
  return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'catholicsingles_widgets_init' );
function catholicsingles_widgets_init()
{
  register_sidebar( array (
    'name' => __( 'Footer Widget Area', 'catholicsingles' ),
    'id' => 'footer-widget-area',
    'before_widget' => '<div>',
    'after_widget' => "</div>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );

  register_sidebar( array (
    'name' => __( 'Blog Index Sidebar', 'catholicsingles' ),
    'id' => 'blog-index-widget-area',
    'before_widget' => '<div>',
    'after_widget' => "</div>",
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
  ) );
}
function catholicsingles_custom_pings( $comment )
{
  $GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'catholicsingles_comments_number' );
function catholicsingles_comments_number( $count )
{
  if ( !is_admin() ) {
    global $id;
    $comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
    return count( $comments_by_type['comment'] );
  } else {
    return $count;
  }
}

function wpb_endorsements() {
  return render_template("includes/endorsements.php");
}

function render_template($filename) {
  ob_start();
  include($filename);
  $output = ob_get_contents();
  ob_end_clean();
  return $output;
}

// Add a shortcode
add_shortcode('endorsements', 'wpb_endorsements');
// Enable shortcodes in text widgets
add_filter('widget_text', 'do_shortcode');

function get_custom_cat_template($single_template) {
     global $post;
 
       if ( in_category( 'blog' )) {
          $single_template = dirname( __FILE__ ) . '/single-blog.php';
     }
     return $single_template;
}
 
add_filter( "single_template", "get_custom_cat_template" ) ;

function recent_success_stories_func() {
  return render_template("includes/recent_success_story.php");
}

add_shortcode('recent_success_stories', 'recent_success_stories_func');

function all_success_stories_func() {
  return render_template("includes/all_success_stories.php");
}

add_shortcode('all_success_stories', 'all_success_stories_func');


function recent_blog_posts_func() {
  return render_template("includes/recent_blog_posts.php");
}

add_shortcode('recent_blog_posts', 'recent_blog_posts_func');

function guest_search_func() {
  return render_template("includes/guest_search.php");
}

add_shortcode('guest_search', guest_search_func);

function recent_blog_post_list_func() {
  return render_template("includes/recent_blog_post_list.php");
}

add_shortcode('recent_blog_post_list', 'recent_blog_post_list_func');

function recent_press_releases_func() {
  return render_template("includes/recent_press_release.php");
}

add_shortcode('recent_press_releases', 'recent_press_releases_func');

function author_excerpt (){                      
  $word_limit = 50; // Limit the number of words
  // $more_txt = 'read more about:'; // The read more text
  $txt_end = '...'; // Display text end 
  $authorName = get_the_author();
  $authorUrl = get_author_posts_url( get_the_author_meta('ID'));
  $authorDescriptionShort = wp_trim_words(strip_tags(get_the_author_meta('description')), $word_limit, $txt_end);
  return $authorDescriptionShort; 
}

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="btn btn-filled"';
}

function home_recent_success_stories_func() {
  return render_template("includes/home_recent_success_story.php");
}

add_shortcode('home_recent_success_stories', 'home_recent_success_stories_func');