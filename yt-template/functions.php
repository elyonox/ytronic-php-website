<?php
/**
 * Ytronic functions.
 */
if ( ! defined( 'YTABPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Server query string.
 */
function query_str()
{
	if ( $_SERVER['QUERY_STRING'] == '' )
	{
		$srv_query_str = '/';
	} else {
		$srv_query_str = str_replace("page=", '', $_SERVER['QUERY_STRING']);
	}
	return $srv_query_str;
}

/**
 * Site name.
 */
function site_name()
{
	echo yt_config( 'site_name' );
}

/**
 * Site description.
 */
function YTSiteDescript()
{
	echo yt_config( 'site_descript' );
}

/**
 * Indexing pages to search engines or not.
 */
function YTIndexingSearchEngines( $index = 'index', $follow = 'follow')
{
	$meta_robots = "\n\t".'<meta name="robots" content="'.$index.', '.$follow.'">'."\n";
	$block_robots = "\n\t".'<meta name="robots" content="noindex, nofollow">'."\n";
	$allow_sengine = yt_config('allow_search_engine' ) ? $meta_robots : $block_robots;
	
	return $allow_sengine;
}

/**
 * Create link when pretty_url is active.
 */
function make_link( $link )
{
	$requestLink = yt_config('pretty_url') || $link == '/' ? $link : '?page=' . $link;
	$realLink = $requestLink == '/' ? site_url() : site_url() . $requestLink;
	
	return yt_config('pretty_url') && $link !== '/' ? $realLink .'/' : $realLink;
}

/**
 * Load header styles.
 */
function YTLoadStyles()
{
	$hscripts = array(
		'<link rel="stylesheet" href="'. CSSURI .'/google-fonts.css">',
		'<link rel="stylesheet" href="'. CSSURI .'/bootstrap.min.css">',
		'<link rel="stylesheet" href="'. CSSURI .'/style.css">',
	);
	
	foreach ( $hscripts as $hscript )
	{
		echo "\t".$hscript.PHP_EOL;
	}
}

/**
 * Load footer scripts.
 */
function YTLoadScripts()
{
	$fscripts = array(
		'<!-- Bootstrap JS -->',
		'<script src="'.JSURI.'/bootstrap.bundle.min.js"></script>',
		'<!-- Main JS -->',
		'<script src="'.JSURI.'/main.js"></script>',
	);
	
	foreach ( $fscripts as $fscript )
	{
		echo $fscript.PHP_EOL;
	}
}

/**
 * Website navigation.
 */
function nav_menu()
{
    $nav_menu = '';
	
    include yt_config('template_dir') .'/nav-menu.php';
    
    foreach ( $nav_items as $uri => $name )
	{
        $class = query_str() == $uri .'/' || query_str() == $uri ? ' active' : '';
		
        $nav_menu .= "\t\t\t\t".'<a href="'. make_link($uri) .'" aria-label="'. $name .'" class="nav-item nav-link'. $class .'">'. $name .'</a>'."\n";
    }

    echo ltrim($nav_menu);
}

/**
 * Load page content.
 */
function YTLoadPages()
{
	$req_page = isset($_GET['page']) ? $_GET['page'] : 'home';
	
    $page_path = getcwd() . '/' . yt_config('content_dir') . '/' . rtrim($req_page,"/") . '.php';

    if ( ! file_exists( $page_path ) )
	{
        $page_path = getcwd() . '/' . yt_config('content_dir') . '/404.php';
    }

    include_once $page_path;
}

/**
 * Ytronic app footer info.
 */
function footer_info()
{
	$link1 = 'https://github.com/elyonox/ytronic-php-website';
	$link2 = 'https://github.com/elyonox';
	$info1 = '<a href="'.$link1.'" target="_blank">Ytronic '. yt_config('version') .'</a>';
	$info2 = 'Designed by <a href="'.$link2.'" target="_blank">YONOX</a>';
	
	echo $info1.' - '.$info2;
}

/**
 * Load page header.
 */
function YTLoadHeader()
{
	include_once YTTMPL .'/header.php';
}

/**
 * Load page footer.
 */
function YTLoadFooter()
{
	include_once YTTMPL .'/footer.php';
}

/**
 * Load Ytronic template.
 */
function load_template()
{
	require_once yt_config('template_dir') .'/template.php';
}
