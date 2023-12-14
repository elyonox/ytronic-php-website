<?php
if ( ! defined( 'REQABSP' ) ) {
	exit; // Exit if accessed directly.
} ?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
	<meta name="robots" content="<?php if (function_exists('meta_robots')){meta_robots();}else{echo 'noindex,nofollow';} ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1f418f" />
	
	<link href="<?php echo ASSETSURI .'img/favicon.png'; ?>" rel="icon" />
	<link href="<?php echo ASSETSURI .'img/apple-touch-icon.png'; ?>" rel="apple-touch-icon" />

	<title><?php if (function_exists('page_title')){echo page_title();}else{echo 'Ytronic';} ?></title>

<?php load_styles(); ?>
</head>

<body>
	<?php include_once TMPLDIR .'menu-nav.php'; ?>
	<?php navMenu(); ?>
