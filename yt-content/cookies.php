<?php
if ( ! defined( 'YTABPATH' ) ) {
	exit; // Exit if accessed directly.
}

function yt_page_content()
{
	ob_start(); // Page content to buffer
?>
<div class="container py-6 mt-lg-5 text-center">
	<div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Cookies Page</div>
	<h1 class="text-center">Ytronic Cookies Page Example</h1>
	<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae eleifend neque. Vestibulum ligula enim, dignissim eu facilisis fermentum, volutpat sit amet eros. Nam sed tristique odio. Duis fermentum ligula mattis facilisis volutpat. Phasellus eleifend convallis gravida. Duis non mauris vehicula erat congue consequat. Aenean at ornare ligula.</p>
</div>
<?php // End page content buffer
	$pageContent = ob_get_contents();
	ob_end_clean();
	
	echo $pageContent;
}
?>