<?php
/**
 * Ytronic template loader.
 */
if ( ! defined( 'YTABPATH' ) ) {
	exit; // Exit if accessed directly.
}

yt_load_pages();

yt_header();

if ( function_exists( 'yt_page_content' ) )
{
	yt_page_content();
} else {
	$noContent = '<div class="container-fluid py-5 my-5">';
	$noContent .= '<h1 class="h2 text-danger text-center pt-lg-5 mt-lg-5">NO Content...</h1>';
	$noContent .= '<div class="text-secondary text-center">Add a function with some content into this file.</div>';
	$noContent .= '</div>';
	
	echo $noContent;
}
	
yt_footer();
