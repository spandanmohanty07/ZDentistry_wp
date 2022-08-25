<?php 

	$dental_insight_sticky_header = get_theme_mod('dental_insight_sticky_header');

	$dental_insight_custom_style= "";

	if($dental_insight_sticky_header != true){

		$dental_insight_custom_style .='.menu_header.fixed{';

			$dental_insight_custom_style .='position: static;';
			
		$dental_insight_custom_style .='}';
	}

	$dental_insight_logo_max_height = get_theme_mod('dental_insight_logo_max_height');

	if($dental_insight_logo_max_height != false){

		$dental_insight_custom_style .='.custom-logo-link img{';

			$dental_insight_custom_style .='max-height: '.esc_html($dental_insight_logo_max_height).'px;';
			
		$dental_insight_custom_style .='}';
	}

	/*---------------------------Width -------------------*/
	
	$dental_insight_theme_width = get_theme_mod( 'dental_insight_width_options','full_width');

    if($dental_insight_theme_width == 'full_width'){

		$dental_insight_custom_style .='body{';

			$dental_insight_custom_style .='max-width: 100%;';

		$dental_insight_custom_style .='}';

	}else if($dental_insight_theme_width == 'container'){

		$dental_insight_custom_style .='body{';

			$dental_insight_custom_style .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';

		$dental_insight_custom_style .='}';

	}else if($dental_insight_theme_width == 'container_fluid'){

		$dental_insight_custom_style .='body{';

			$dental_insight_custom_style .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';

		$dental_insight_custom_style .='}';
	}


/*---------------------------Scroll-top-position -------------------*/
	
	$dental_insight_scroll_options = get_theme_mod( 'dental_insight_scroll_options','right_align');

    if($dental_insight_scroll_options == 'right_align'){

		$dental_insight_custom_style .='.scroll-top button{';

			$dental_insight_custom_style .='';

		$dental_insight_custom_style .='}';

	}else if($dental_insight_scroll_options == 'center_align'){

		$dental_insight_custom_style .='.scroll-top button{';

			$dental_insight_custom_style .='right: 0; left:0; margin: 0 auto; top:85% !important';

		$dental_insight_custom_style .='}';

	}else if($dental_insight_scroll_options == 'left_align'){

		$dental_insight_custom_style .='.scroll-top button{';

			$dental_insight_custom_style .='right: auto; left:5%; margin: 0 auto';

		$dental_insight_custom_style .='}';
	}

	//-------------------------------------------------------------------------------

	$dental_insight_logo_max_height = get_theme_mod('dental_insight_logo_max_height');

	if($dental_insight_logo_max_height != false){

		$dental_insight_custom_style .='.custom-logo-link img{';

			$dental_insight_custom_style .='max-height: '.esc_html($dental_insight_logo_max_height).'px;';
			
		$dental_insight_custom_style .='}';
	}