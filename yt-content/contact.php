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
	echo 'Contact - Ytronic - Advanced and Faster PHP Website';
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
<!-- Contact Start -->
<div class="container py-6 pb-4 mt-lg-5 text-center">
	<div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Contact Us</div>
	<h1 class="text-center">Ytronic Contact Page Example</h1>
	<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae eleifend neque. Vestibulum ligula enim, dignissim eu facilisis fermentum, volutpat sit amet eros. Nam sed tristique odio. Duis fermentum ligula mattis facilisis volutpat. Phasellus eleifend convallis gravida. Duis non mauris vehicula erat congue consequat. Aenean at ornare ligula.</p>

	<div class="row justify-content-center mt-5">
		<div class="col-lg-7">
			<form onsubmit="submitForm(event)">
				<div class="row g-3">
					<div class="col-md-6">
						<div class="form-floating">
							<input type="text" class="form-control" id="name" placeholder="Your Name">
							<label for="name">Your Name</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-floating">
							<input type="email" class="form-control" id="email" placeholder="Your Email">
							<label for="email">Your Email</label>
						</div>
					</div>
					<div class="col-12">
						<div class="form-floating">
							<input type="text" class="form-control" id="subject" placeholder="Subject">
							<label for="subject">Subject</label>
						</div>
					</div>
					<div class="col-12">
						<div class="form-floating">
							<textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
							<label for="message">Message</label>
						</div>
					</div>
					<div class="col-12">
						<button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Contact End -->
<?php // End page content buffer
	$pageContent = ob_get_contents();
	ob_end_clean();
	
	echo $pageContent;
}
?>