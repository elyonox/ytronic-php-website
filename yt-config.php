<?php
/**
 * Ytronic configuration.
 *
 * @var string or null
 */
function yt_config( $opt = '' )
{
	$settings = array(
		
		'site_lang'		=> 'en',							/** Website language **/
		
		'site_name'		=> 'Ytronic',						/** Website name **/
		
		'site_descript'	=> 'Ytronic description',			/** Website description **/
		
		'site_url'		=> 'http://localhost/ytronic/',		/** Website url **/
		
		'pretty_url'	=> false,							/** Convert url "/?page=contact" to "/contact" **/
		
		'template_dir'	=> 'yt-template',					/** Template directory name **/
		
		'content_dir'	=> 'yt-content',					/** Pages directory name **/
		
		'version'		=> 'v1.0.1',						/** Ytronic app version **/
    );

    return isset($settings[$opt]) ? $settings[$opt] : null;
}

/** Absolute path to the Ytronic directory. */
if ( ! defined( 'YTABPATH' ) ) {
	define( 'YTABPATH', __DIR__ . '/' );
}

/** Set the location of the Ytronic template directory. */
if ( ! defined( 'YTTMPL' ) ) {
	define ( 'YTTMPL', __DIR__ .'/'. yt_config('template_dir') );
}
