<?php

if(!function_exists('glw_theme_setup')) {
    function glw_theme_setup() {

        $lang_footer = get_theme_file_path('/language');
        load_theme_textdomain( 'glw', $lang_footer);

        // add_theme_support('title-tag');
        add_theme_support(
             'html5',
              array('comment-list','comment-form','search-form','gallery','caption') 
        );
    }
}
?>