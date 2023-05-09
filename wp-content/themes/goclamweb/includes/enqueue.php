<?php
    if(!function_exists('glw_enqueue')) {
        function glw_enqueue() {
            $ver = time();
            // font
            wp_register_style( 'glw_google_font_montserrat','https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800');
            wp_register_style( 'glw_google_font_poppins','https://fonts.googleapis.com/css?family=Poppins:300,400');

            //css
            wp_register_style('glw_bootstrap', THEME_URI.'/assets/css/bootstrap.min.css');
            wp_register_style('glw_material-design-iconic-font', THEME_URI.'/assets/css/material-design-iconic-font.min.css');
            wp_register_style('glw_custom-animate', THEME_URI.'/assets/css/custom-animate.css');
            wp_register_style('glw_slick', THEME_URI.'/assets/css/slick.min.css');
            wp_register_style('glw_swiper', THEME_URI.'/assets/css/swiper.min.css');
            wp_register_style('glw_venobox', THEME_URI.'/assets/css/venobox.css');
            wp_register_style('glw_progressbar', THEME_URI.'/assets/css/progressbar.css');
            wp_register_style('glw_style', THEME_URI.'/assets/css/style.css');
            wp_register_style('glw_responsive', THEME_URI.'/assets/css/responsive.css');

            //enqueue
            wp_enqueue_style( 'glw_google_font_montserrat');
            wp_enqueue_style( 'glw_google_font_poppins');
            wp_enqueue_style( 'glw_bootstrap');
            wp_enqueue_style( 'glw_material-design-iconic-font');
            wp_enqueue_style( 'glw_custom-animate');
            wp_enqueue_style( 'glw_slick');
            wp_enqueue_style( 'glw_swiper');
            wp_enqueue_style( 'glw_venobox');
            wp_enqueue_style( 'glw_progressbar');
            wp_enqueue_style( 'glw_style');
            wp_enqueue_style( 'glw_responsive');


            // JS

            wp_register_script( 'glw_modernizr',THEME_URI.'/assets/js/vendor/modernizr-2.8.3.min.js',array(), $ver);
            wp_deregister_script( 'glw_jquery_core' );
            wp_register_script( 'glw_jquery_core',THEME_URI.'/assets/js/vendor/jquery-1.12.4.min.js',array(), $ver,'in_footer');
            wp_register_script( 'glw_bootstrap',THEME_URI.'/assets/js/bootstrap.min.js',array(), $ver,'in_footer');
            wp_register_script( 'glw_validate',THEME_URI.'/assets/js/jquery.validate.min.js',array(), $ver,'in_footer');
            wp_register_script( 'glw_slick',THEME_URI.'/assets/js/slick.min.js',array(), $ver,'in_footer');
            wp_register_script( 'glw_swiper',THEME_URI.'/assets/js/swiper.min.js',array(), $ver,'in_footer');
            wp_register_script( 'glw_isotope',THEME_URI.'"/assets/js/isotope.pkgd.min.js',array(), $ver,'in_footer');
            wp_register_script( 'glw_plugins',THEME_URI.'/assets/js/plugins.js',array(), $ver,'in_footer');
            wp_register_script( 'glw_main',THEME_URI.'/assets/js/main.js',array(), $ver,'in_footer');

            wp_enqueue_script('glw_modernizr');
            wp_enqueue_script('glw_jquery_core');
            wp_enqueue_script('glw_bootstrap');
            wp_enqueue_script('glw_validate');
            wp_enqueue_script('glw_slick');
            wp_enqueue_script('glw_swiper');
            wp_enqueue_script('glw_isotope');
            wp_enqueue_script('glw_plugins');
            wp_enqueue_script('glw_main');
        }
    }
?>


