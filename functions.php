<?php 

    if ( ! function_exists( 'myfirsttheme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function myfirsttheme_setup() {
     
        /**
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         */
        load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );
     
        /**
         * Add default posts and comments RSS feed links to &lt;head>.
         */
        add_theme_support( 'automatic-feed-links' );
     
        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support( 'post-thumbnails' );
     
        /**
         * Add support for two custom navigation menus.
         */
        register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
            'secondary' => __('Secondary Menu', 'myfirsttheme' )
        ) );
     
        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    }
    endif; // myfirsttheme_setup
    add_action( 'after_setup_theme', 'myfirsttheme_setup' );


    // adding scripts and stylesheets
    function add_theme_scripts() {
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/app.css' );
        
        // wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all');
        
        // wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
        
        //   if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        //     wp_enqueue_script( 'comment-reply' );
        //   }
      }
      add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );










?>