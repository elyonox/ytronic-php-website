<?php
if ( ! defined( 'REQABSP' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5">
	<div class="container">
		<div class="row gx-5">
			<div class="col-lg-4 col-md-6 footer-about">
				<div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
					<a href="index.html" class="navbar-brand">
						<h1 class="m-0 text-white">Ytronic</h1>
					</a>
					<p class="mt-3 mb-4">Lorem diam sit erat dolor elitr et, diam lorem justo amet clita stet eos sit. Elitr dolor duo lorem, elitr clita ipsum sea. Diam amet erat lorem stet eos. Diam amet et kasd eos duo.</p>
				</div>
			</div>
			<div class="col-lg-8 col-md-6">
				<div class="row gx-5">
					<div class="col-lg-4 col-md-12 pt-5 mb-5">
						<div class="section-title section-title-sm position-relative pb-3 mb-4">
							<h3 class="text-light mb-0">Get In Touch</h3>
						</div>
						<div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">C/ Gran Via, Madrid, Spain</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">info@example.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+34 600 000 000</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="<?php echo site_url(); ?>"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="<?php echo site_url(); ?>"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="<?php echo site_url(); ?>"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="<?php echo site_url(); ?>"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
					</div>
					<div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
						<div class="section-title section-title-sm position-relative pb-3 mb-4">
							<h3 class="text-light mb-0">Quick Links</h3>
						</div>
						<div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="<?php echo site_url(); ?>"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="<?php echo site_url(); ?>"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="<?php echo site_url(); ?>"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="<?php echo site_url(); ?>"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="<?php echo site_url(); ?>"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-light" href="<?php echo site_url(); ?>"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
					</div>
					<div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
						<div class="section-title section-title-sm position-relative pb-3 mb-4">
							<h3 class="text-light mb-0">Popular Links</h3>
						</div>
						<div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="<?php echo site_url(); ?>"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="<?php echo site_url(); ?>"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="<?php echo site_url(); ?>"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="<?php echo site_url(); ?>"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="<?php echo site_url(); ?>"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-light" href="<?php echo site_url(); ?>"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid text-white" style="background: #061429;">
	<div class="container text-center">
		<div class="row justify-content-end">
			<div class="col-lg-8 col-md-6">
				<div class="d-flex align-items-center justify-content-center" style="height: 75px;">
					<p class="mb-0">&copy; <a class="text-white border-bottom" href="<?php echo site_url(); ?>">Ytronic PHP Website.</a> 
					Designed by <a class="text-white border-bottom" href="https://github.com/elyonox" target="_blank">Yonox</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

<?php load_scripts(); ?>
</body>
</html>