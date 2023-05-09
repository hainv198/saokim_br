<?php 

	$supermart_ecommerce_custom_style = '';
	
	// Logo Size
	$supermart_ecommerce_logo_top_margin = get_theme_mod('supermart_ecommerce_logo_top_margin');
	$supermart_ecommerce_logo_bottom_margin = get_theme_mod('supermart_ecommerce_logo_bottom_margin');
	$supermart_ecommerce_logo_left_margin = get_theme_mod('supermart_ecommerce_logo_left_margin');
	$supermart_ecommerce_logo_right_margin = get_theme_mod('supermart_ecommerce_logo_right_margin');

	if( $supermart_ecommerce_logo_top_margin != '' || $supermart_ecommerce_logo_bottom_margin != '' || $supermart_ecommerce_logo_left_margin != '' || $supermart_ecommerce_logo_right_margin != ''){
		$supermart_ecommerce_custom_style .=' .logo {';
			$supermart_ecommerce_custom_style .=' margin-top: '.esc_attr($supermart_ecommerce_logo_top_margin).'px;
			margin-bottom: '.esc_attr($supermart_ecommerce_logo_bottom_margin).'px;
			margin-left: '.esc_attr($supermart_ecommerce_logo_left_margin).'px;
			margin-right: '.esc_attr($supermart_ecommerce_logo_right_margin).'px;';
		$supermart_ecommerce_custom_style .=' }';
	}

	// Site Title Font Size
	$supermart_ecommerce_site_title_fontsize = get_theme_mod('supermart_ecommerce_site_title_fontsize');
	if( $supermart_ecommerce_site_title_fontsize != ''){
		$supermart_ecommerce_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$supermart_ecommerce_custom_style .=' font-size: '.esc_attr($supermart_ecommerce_site_title_fontsize).'px;';
		$supermart_ecommerce_custom_style .=' }';
	}

	// Site Tagline Font Size
	$supermart_ecommerce_site_tagline_font_size = get_theme_mod('supermart_ecommerce_site_tagline_font_size');
	if( $supermart_ecommerce_site_tagline_font_size != ''){
		$supermart_ecommerce_custom_style .=' p.site-description {';
			$supermart_ecommerce_custom_style .=' font-size: '.esc_attr($supermart_ecommerce_site_tagline_font_size).'px;';
		$supermart_ecommerce_custom_style .=' }';
	}

	// Copyright padding
	$supermart_ecommerce_copyright_padding = get_theme_mod('supermart_ecommerce_copyright_padding');
	if( $supermart_ecommerce_copyright_padding != ''){
		$supermart_ecommerce_custom_style .=' .site-info {';
			$supermart_ecommerce_custom_style .=' padding-top: '.esc_attr($supermart_ecommerce_copyright_padding).'px; padding-bottom: '.esc_attr($supermart_ecommerce_copyright_padding).'px;';
		$supermart_ecommerce_custom_style .=' }';
	}

	$supermart_ecommerce_slider_color = get_theme_mod('supermart_ecommerce_slider_color');
	if( $supermart_ecommerce_slider_color != ''){
		$supermart_ecommerce_custom_style .=' #slider h2 a, #slider p,#slider a.read-btn,.collection .outer-box h3 a {';
			$supermart_ecommerce_custom_style .=' color: '.esc_attr($supermart_ecommerce_slider_color).';';
		$supermart_ecommerce_custom_style .=' }';
	}