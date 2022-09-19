<?php
/**
 * Ytronic template.
 */
if ( ! defined( 'YTABPATH' ) ) {
	exit; // Exit if accessed directly.
} ?>
<!DOCTYPE html>
<html lang="<?php echo yt_config('site_lang'); ?>">
<?php yt_header(); ?>

<?php page_content(); ?>
	
<?php yt_footer(); ?>