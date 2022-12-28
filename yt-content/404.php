<?php
if ( ! defined( 'YTABPATH' ) ) {
	exit; // Exit if accessed directly.
}

function YTMetaRobots()
{
	echo YTIndexingSearchEngines('noindex','nofollow');
}

function YTPageTitle()
{
	echo '404 Page not found - Ytronic - Advanced and Faster PHP Website';
}

function YTLoadPageContent()
{
	ob_start(); // Page content to buffer
?>
<div class="container-fluid py-5 my-5">
	<h1 class="text-danger text-center pt-lg-5 mt-lg-5">404 Error</h1>
	<h1 class="text-secondary text-center">Page not found</h1>
</div>
<?php // End page content buffer
	$pageContent = ob_get_contents();
	ob_end_clean();
	
	echo $pageContent;
}
?>