<?php
if ( ! defined( 'REQABSP' ) ) {
	exit; // Exit if accessed directly.
}

function page_title(){ return 'Error 404 - Page not found'; }

function page_content()
{
	ob_start(); // Start content buffer.
?>

<div class="container py-5 my-5 bg-light">
	<h1 class="text-center text-danger">404 ERROR. Page not found</h1>
</div>

<?php

	$pageContent = ob_get_contents();
	ob_end_clean(); // End content buffer.
	
	echo $pageContent;
}
