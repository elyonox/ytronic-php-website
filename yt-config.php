<?php
/*-------------------------------------------------------+
| Ytronic PHP Website
| https://github.com/elyonox/ytronic-php-website
+--------------------------------------------------------+
| Author: Ionut Manole (Yonox)
| Email: yonutyonox@gmail.com
| Author URL: https://github.com/elyonox
+--------------------------------------------------------+*/

/**
 * Url Website.
 */
function site_url()
{
	$httpScheme = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
	$url_site = $httpScheme .'://'. $_SERVER['HTTP_HOST'] .'/';
	
	return $url_site;
}

/**
 * Base Path.
 */
define ('REQABSP', __DIR__ .'/');

/**
 * Dirs names.
 */ 
define ('TMPLDIRNAME', 'yt-template');
define ('CONTENTDIRNAME', 'yt-content');

/**
 * Template and Content dirs paths.
 */
define ('TMPLDIR', REQABSP . TMPLDIRNAME .'/');
define ('CONTENTDIR', REQABSP . CONTENTDIRNAME .'/');

/**
 * Allow search engines (on development = false).
 */
define ('ALLOWSEARCHENGINE', false);
