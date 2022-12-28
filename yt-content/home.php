<?php
if ( ! defined( 'YTABPATH' ) ) {
	exit; // Exit if accessed directly.
}

function YTMetaRobots()
{
	echo YTIndexingSearchEngines('index','follow');
}

function YTPageTitle()
{
	echo 'Ytronic - Advanced and Faster PHP Website';
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
<!-- Features Start -->
<div class="container mt-lg-5 py-6 pb-4">
	<div class="mx-auto text-center">
		<div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Ytronic HomePage</div>
		<h1 class="mb-3">Ytronic Home Page Example</h1>
		<p class="text-center mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae eleifend neque. Vestibulum ligula enim, dignissim eu facilisis fermentum, volutpat sit amet eros. Nam sed tristique odio. Duis fermentum ligula mattis facilisis volutpat. Phasellus eleifend convallis gravida. Duis non mauris vehicula erat congue consequat. Aenean at ornare ligula.</p>
	</div>
	<div class="container pt-5">
		<div class="row g-5">
			<div class="col-lg-5">
				<div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Features</div>
				<h2 class="mb-4">Why People Choose Us? We Are Trusted & Award Wining Agency</h2>
				<p>Clita nonumy sanctus nonumy et clita tempor, et sea amet ut et sadipscing rebum amet takimata amet, sed accusam eos eos dolores dolore et. Et ea ea dolor rebum invidunt clita eos. Sea accusam stet stet ipsum, sit ipsum et ipsum kasd</p>
				<p>Et ea ea dolor rebum invidunt clita eos. Sea accusam stet stet ipsum, sit ipsum et ipsum kasd</p>
				<a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="<?php echo make_link('/'); ?>" aria-label="More info">Read More</a>
			</div>
			<div class="col-lg-7">
				<div class="row g-5">
					<div class="col-sm-6">
						<div class="d-flex align-items-center mb-3">
							<div class="flex-shrink-0 btn-square rounded-circle me-3" style="background-color:var(--primary)">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-boxes" viewBox="0 0 16 16">
								  <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z"/>
								</svg>
							</div>
							<h3 class="mb-0 fs-5">Best In Industry</h3>
						</div>
						<span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
					</div>
					<div class="col-sm-6">
						<div class="d-flex align-items-center mb-3">
							<div class="flex-shrink-0 btn-square rounded-circle me-3" style="background-color:var(--primary)">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-percent" viewBox="0 0 16 16">
								  <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
								</svg>
							</div>
							<h3 class="mb-0 fs-5">99% Success Rate</h3>
						</div>
						<span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
					</div>
					<div class="col-sm-6">
						<div class="d-flex align-items-center mb-3">
							<div class="flex-shrink-0 btn-square rounded-circle me-3" style="background-color:var(--primary)">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-award-fill" viewBox="0 0 16 16">
								  <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
								  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
								</svg>
							</div>
							<h3 class="mb-0 fs-5">Award Winning</h3>
						</div>
						<span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
					</div>
					<div class="col-sm-6">
						<div class="d-flex align-items-center mb-3">
							<div class="flex-shrink-0 btn-square rounded-circle me-3" style="background-color:var(--primary)">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
								  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
								</svg>
							</div>
							<h3 class="mb-0 fs-5">100% Happy Client</h3>
						</div>
						<span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
					</div>
					<div class="col-sm-6">
						<div class="d-flex align-items-center mb-3">
							<div class="flex-shrink-0 btn-square rounded-circle me-3" style="background-color:var(--primary)">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
								  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
								</svg>
							</div>
							<h3 class="mb-0 fs-5">Professional Advisors</h3>
						</div>
						<span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
					</div>
					<div class="col-sm-6">
						<div class="d-flex align-items-center mb-3">
							<div class="flex-shrink-0 btn-square rounded-circle me-3" style="background-color:var(--primary)">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-life-preserver" viewBox="0 0 16 16">
								  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm6.43-5.228a7.025 7.025 0 0 1-3.658 3.658l-1.115-2.788a4.015 4.015 0 0 0 1.985-1.985l2.788 1.115zM5.228 14.43a7.025 7.025 0 0 1-3.658-3.658l2.788-1.115a4.015 4.015 0 0 0 1.985 1.985L5.228 14.43zm9.202-9.202-2.788 1.115a4.015 4.015 0 0 0-1.985-1.985l1.115-2.788a7.025 7.025 0 0 1 3.658 3.658zm-8.087-.87a4.015 4.015 0 0 0-1.985 1.985L1.57 5.228A7.025 7.025 0 0 1 5.228 1.57l1.115 2.788zM8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
								</svg>
							</div>
							<h3 class="mb-0 fs-5">24/7 Customer Support</h3>
						</div>
						<span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Features End -->
<?php // End page content buffer
	$pageContent = ob_get_contents();
	ob_end_clean();
	
	echo $pageContent;
}
?>