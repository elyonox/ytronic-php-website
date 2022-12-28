<?php
/**
 * Ytronic template loader.
 */
if ( ! defined( 'YTABPATH' ) ) {
	exit; // Exit if accessed directly.
}

YTLoadPages();

YTLoadHeader();

if ( function_exists( 'YTLoadPageContent' ) )
{
	YTLoadPageContent();
} else {
	$noContent = '<div class="container-fluid py-5 my-5">';
	$noContent .= '<h1 class="h2 text-danger text-center pt-lg-5 mt-lg-5">NO Content...</h1>';
	$noContent .= '<div class="text-secondary text-center">Add a function with some content into this file.</div>';
	$noContent .= '</div>';
	
	echo $noContent;
}
	
YTLoadFooter();
