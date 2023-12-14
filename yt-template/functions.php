<?php
if ( ! defined( 'REQABSP' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Meta "robots" function.
 */
function indexing_to_search_engines( $index = 'index', $follow = 'follow')
{
	$meta_robots = $index.', '.$follow;
	$block_robots = 'noindex, nofollow';
	
	$allow_sengine = ALLOWSEARCHENGINE ? $meta_robots : $block_robots;
	
	return $allow_sengine;
}

/**
 * Define ASSETS URL.
 */
if ( ! defined( 'ASSETSURI' ) ) {
	define ('ASSETSURI', site_url(). TMPLDIRNAME .'/assets/');
}

/**
 * Load styles.
 */
function load_styles()
{
	$hscripts = array(
		'<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap">',
		'<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">',
		'<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">',
		'<link rel="stylesheet" href="'. ASSETSURI .'css/bootstrap.min.css">',
		'<link rel="stylesheet" href="'. ASSETSURI .'css/style.css">',
	);
	
	foreach ( $hscripts as $hscript )
	{
		echo "\t".$hscript.PHP_EOL;
	}
}

/**
 * Load scripts.
 */
function load_scripts()
{
	$fscripts = array(
		'<script type="text/javascript" src="'. ASSETSURI .'js/jquery-3.6.3.min.js"></script>',
		'<script type="text/javascript" src="'. ASSETSURI .'js/bootstrap.bundle.min.js"></script>',
		'<script type="text/javascript" src="'. ASSETSURI .'js/main.js"></script>',
	);
	
	foreach ( $fscripts as $fscript )
	{
		echo $fscript.PHP_EOL;
	}
}

/**
 * Website pages router.
 */
function load_pages()
{
	$query_page = str_starts_with($_SERVER['QUERY_STRING'],'page=') ? str_replace("page=", '', $_SERVER['QUERY_STRING']) : 'home';
	
    $page_path = CONTENTDIR . rtrim($query_page,"/") . '.php';
	
	$page404 = CONTENTDIR . '404.php';

    if ( file_exists( $page_path ) && ( strpos( $query_page, "index" ) === false ) )
	{
		if( strpos( file_get_contents( $page_path ), "page_content()" ) )
		{
			include_once $page_path;
		} else {
			return false;
		}
    } else {
		include_once $page404;
	}
}
