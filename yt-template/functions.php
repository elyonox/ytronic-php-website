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
 * Stores the uri of the Ytronic assets.
 */
if ( ! defined( 'TMPLURI' ) ) {
	define ( 'TMPLURI', site_url() . yt_config( 'template_dir' ) );
}
if ( ! defined( 'CSSURI' ) ) {
	define ( 'CSSURI', TMPLURI .'/assets/css' );
}
if ( ! defined( 'JSURI' ) ) {
	define ( 'JSURI', TMPLURI .'/assets/js' );
}
if ( ! defined( 'IMGURI' ) ) {
	define ( 'IMGURI', TMPLURI .'/assets/images' );
}

/**
 * Site name.
 */
function site_name()
{
	echo yt_config( 'site_name' );
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
function load_styles()
{
	$hscripts = array(
		'<link rel="stylesheet" href="'. CSSURI .'/google-fonts.css">',
		'<link rel="stylesheet" href="'. CSSURI .'/bootstrap.min.css">',
		'<link rel="stylesheet" href="'. TMPLURI .'/style.css">',
		'<link rel="stylesheet" href="'. CSSURI .'/custom.css">',
	);
	
	foreach ( $hscripts as $hscript )
	{
		echo "\t".$hscript.PHP_EOL;
	}
}

/**
 * Load footer scripts.
 */
function load_scripts()
{
	$fscripts = array(
		'<!-- Bootstrap JS -->',
		'<script src="'.JSURI.'/bootstrap.bundle.min.js"></script>'."\n",
		'<!-- Main JS -->',
		'<script src="'.JSURI.'/main.js"></script>',
	);
	
	foreach ( $fscripts as $fscript )
	{
		echo $fscript.PHP_EOL;
	}
}

/**
 * Retrieve pages meta data and nav_menu items.
 */
function page_metas( $page_uri = null, $meta_type )
{
	$site_pages = array(
		// home menu item with page title and meta description
		'/' => array(
			'menu_name'			=> 'Home',
			'page_title'		=> 'Home page title',
			'page_description'	=> 'Home page description',
		),
		// service menu item with page title and meta description
		'services' => array(
			'menu_name'			=> 'Services',
			'page_title'		=> 'Services page title',
			'page_description'	=> 'Services page description',
		),
		// contact menu item with page title and meta description
		'contact' => array(
			'menu_name'			=> 'Contact',
			'page_title'		=> 'Contact page title',
			'page_description'	=> 'Contact page description',
		),
		
	);
	
	$items_nav_menu = [];
	
	foreach ( $site_pages as $pguri => $menu_names )
	{
		$items_nav_menu[$pguri] = $menu_names['menu_name'];
	}
	
	if ( $meta_type == 'nav_menu' )
	{
		// return nav_menu array
		return $items_nav_menu;
	}
	
	if ( $page_uri )
	{
		// query_str() without trailing end slash
		$qstring = query_str() !== '/' ? rtrim(query_str(),"/") : query_str();
		
		if ( array_key_exists($qstring, $site_pages) ) {
			$return_metas = $site_pages[$qstring][$meta_type];
		} else {
			$page_path = getcwd() . '/' . yt_config('content_dir') . '/' . $qstring .'.php';
			if ( file_exists( $page_path ) ) {
				$return_metas = ucfirst(str_replace('-', ' ', $qstring));
			} else {
				$return_metas = '404 Error - Page not found';
			}
		}
		// return page title tag and description
		return $return_metas;
	}
}

/**
 * Website navigation.
 */
function nav_menu()
{
    $nav_menu = '';
    $nav_items = page_metas(false,'nav_menu');
    
    foreach ( $nav_items as $uri => $name )
	{
        $class = query_str() == $uri ? ' active' : '';
        
        $nav_menu .= "\t\t\t\t".'<a href="'. make_link($uri) .'" aria-label="'. $name .'" class="nav-item nav-link'. $class .'">'. $name .'</a>'."\n";
    }

    echo ltrim($nav_menu);
}

/**
 * Load page content.
 */
function page_content()
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
function yt_header()
{
	include_once YTTMPL .'/header.php';
}

/**
 * Load page footer.
 */
function yt_footer()
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
