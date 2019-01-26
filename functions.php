<?php 

    function school_files() {
        //loads js script file
        wp_enqueue_script('main-university-js', get_theme_file_uri('js/scripts-bundled.js'), NULL, '2.0', microtime(), true);
        //loads fonts
        wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        //loads css
        wp_enqueue_style('shool_main_styles', get_stylesheet_uri(), NULL, microtime());
    }

    add_action('wp_enqueue_scripts','school_files' );


    function university_features() {
        //creates access to wordpress menu features
        // register_nav_menu('headerMenuLocation', 'Header Menu Location');
        // register_nav_menu('footerLocationOne', 'Footer Location One');
        // register_nav_menu('footerLocationTwo', 'Footer Location Two');

        add_theme_support('title-tag');
    }

    add_action('after_setup_theme','university_features' );
?>