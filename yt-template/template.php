<?php
if ( ! defined( 'REQABSP' ) ) {
	exit; // Exit if accessed directly.
}

load_pages();

include_once TMPLDIR .'header.php';

if ( load_pages() === false )
{
	echo '<h1 class="h2 my-5 text-center text-secondary">Invalid page type!</h1>';
} else {
	page_content();
}

include_once TMPLDIR .'footer.php';
