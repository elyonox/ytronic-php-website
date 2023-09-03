<?php
if ( ! defined( 'YTABPATH' ) ) {
	exit; // Exit if accessed directly.
}

function YTMetaRobots()
{
	echo YTIndexingSearchEngines('index','nofollow');
}

function YTPageTitle()
{
	echo 'FAQs - Ytronic - Advanced and Faster PHP Website';
}

function YTPageDescription()
{
	echo '<meta name="description" content="Ytronic - The most Advanced and Faster PHP Website. NO mysql needed. Strongly SEO optimized.">';
}

function YTPageKeywords()
{
	echo '<meta name="keywords" content="ytronic, php website, seo, php bootstrap theme, php bootstrap template, bootstrap, bootstrap 5, faster php website, website themes, web design, php web development, free php website, php7, php8">';
}

function YTLoadPageContent()
{
	ob_start(); // Page content to buffer
?>
<div class="container py-6 mt-lg-5 text-center">
	<div class="d-inline-block border rounded-pill text-primary px-4 mb-3">FAQs Page</div>
	<h1 class="text-center">Ytronic FAQs Page Example</h1>
	<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae eleifend neque. Vestibulum ligula enim, dignissim eu facilisis fermentum, volutpat sit amet eros. Nam sed tristique odio. Duis fermentum ligula mattis facilisis volutpat. Phasellus eleifend convallis gravida. Duis non mauris vehicula erat congue consequat. Aenean at ornare ligula.</p>
</div>
<?php // End page content buffer
	$pageContent = ob_get_contents();
	ob_end_clean();
	
	echo $pageContent;
}
?>