<?php
/**
 * Ytronic header template part.
 */
if ( ! defined( 'YTABPATH' ) ) {
	exit; // Exit if accessed directly.
} ?>
<head>
	<title><?php echo page_metas( query_str(), 'page_title' ); ?> | <?php site_name(); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo page_metas( query_str(), 'page_description' ); ?>">
	
	<!-- Favicon -->
    <link href="<?php echo IMGURI; ?>/favicon.ico" rel="icon">
	
	<!-- Page CSS -->
<?php load_styles(); ?>
</head>
<body>
<!-- Logo & Navbar Start-->
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
<!-- Logo & Navbar End -->