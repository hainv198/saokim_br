<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Orchid_Store
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php 
	if( function_exists( 'wp_body_open' ) ) { 
		wp_body_open(); 
	} 
	?>
	<div id="page" class="site __os-page-wrap__">

		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'orchid-store' ); ?></a>

		<?php
		/**
        * Hook - orchid_store_header.
        *
        * @hooked orchid_store_header_action - 10
        */
        do_action( 'orchid_store_header' );
		
        ?>
		<p>Orchid Store Giao diện tạo bởi</p>
		<?php 
			// do_action( $hook_name:string, $arg:mixed )
			do_action( 'demo_action' );
		?>

		<?php 
		
			// echo apply_filters( $hook_name:string, $value:mixed, $args:mixed )
			echo apply_filters( 'demo_filter', '<h1>Demo filter</h1>' )
		?>
        
        <div id="content" class="site-content">