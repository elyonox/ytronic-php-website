<?php
/**
 * Ytronic header template part.
 */
if ( ! defined( 'YTABPATH' ) ) {
	exit; // Exit if accessed directly.
} ?>
<!DOCTYPE html>
<html lang="<?php echo yt_config('site_lang'); ?>">
<head>
	<meta charset="utf-8"><?php if (function_exists('YTMetaRobots')){YTMetaRobots();} ?>
	<title><?php if(function_exists('YTPageTitle')){YTPageTitle();}else{site_name();echo " - ";YTSiteDescript();} ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" href="<?php echo IMGURI .'/favicon.png'; ?>">
	<link rel="apple-touch-icon" href="<?php echo IMGURI .'/apple-touch-icon.png'; ?>">
	
	<link rel="canonical" href="<?php echo make_link(query_str() !== '/' ? rtrim(query_str(),"/") : query_str()); ?>">
	<?php
	// Load meta Description if function exists on the page
	if (function_exists('YTPageDescription')){echo "\n\t";YTPageDescription();}
	
	// Load meta Keywords if function exists on the page
	if (function_exists('YTPageKeywords')){echo "\n\t";YTPageKeywords();echo "\n";}
	
	// Load CSS Styles
	echo "\n"; YTLoadStyles();
	
	// Load meta OpenGraph if function exists on the page
	if (function_exists('YTOpenGraph')){YTOpenGraph();}
	
	// Load meta SchemaOrg if function exists on the page
	if (function_exists('YTSchemaOrg')){YTSchemaOrg();} ?>
</head>
<body>
<div class="container-fluid position-relative p-0">
	<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0 sticky-top shadow-sm">
		<a href="<?php echo site_url(); ?>" class="navbar-brand p-0">
			<div class="m-0 fs-2 fw-bold">Ytronic</div>
			<!-- <img src="img/logo.png" alt="Logo"> -->
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-label="Menu">
			<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 16 16">
				<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
			</svg>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav ms-auto py-0">
				<?php nav_menu(); ?>
			</div>
		</div>
	</nav>
</div>