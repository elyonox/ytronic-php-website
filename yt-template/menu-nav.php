<?php
if ( ! defined( 'REQABSP' ) ) {
	exit; // Exit if accessed directly.
}

function navMenu($currentPage = '')
{
	$myMenus = array(
		'/'				=> 'Home',
		'about/'		=> 'About',
		'services/'		=> 'Services',
		'contact/'		=> 'Contact',
	);
?>
<div class="container-fluid position-relative py-lg-3 my-lg-5">
	<nav class="navbar navbar-expand-lg navbar-dark shadow sticky-top px-5 py-3 py-lg-0">
			
		<a href="<?php echo site_url(); ?>" class="navbar-brand p-0">
			<h1 class="m-0">Ytronic</h1>
		</a>
		
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
			<span class="fa fa-bars"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav ms-auto py-0">
				<?php
				foreach( $myMenus as $menuLink => $myMenu )
				{
					$menuLink = $menuLink === '/' ? 'home' : $menuLink;
				?>
				<a id="<?php echo str_replace("/","",$menuLink); ?>" class="nav-item nav-link" href="<?php echo site_url().$menuLink; ?>">
					<?php echo $myMenu; ?>
				</a>
				<?php } ?>
			</div>
		</div>
		
	</nav>
</div>
<?php }