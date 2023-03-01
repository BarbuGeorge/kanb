<nav class="navbar fixed-top bg-transparent">
	<div class="container position-relative">
		<a class="navbar-brand" data-aos="fade-down" data-aos-delay="150" data-aos-duration="1000" href="<?php echo home_url(); ?>">
			<img class="logo" src="<?php echo get_template_directory_uri() . '/_assets/Images/Logo.png'; ?>" />
		</a>

		<button class="navbar-toggler border-0 shadow-none pb-0 ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" data-aos="fade-down" data-aos-duration="1000"  data-aos-delay="150">
			<svg class=" ham hamRotate ham1" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
				<path class="line top" d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
				<path class="line middle" d="m 30,50 h 40" />
				<path class="line bottom" d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
			</svg>
		</button>


		<div class="offcanvas offcanvas-top bg-primary h-100" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

			<div class="offcanvas-body">
				<div class="offcanvas-menu px-1">

					<div class="container mt-lg-10 mt-12">
						<div class="col-lg-6 mx-auto">
							<?php wp_nav_menu(array(
								'menu'           => 'top-menu-desktop',
								'theme_location' => '__no_such_location',
								'fallback_cb'    => false,
								'class' => 'top-menu'
							)); ?>
						</div>
					</div>

					<div class="container mt-lg-5 mt-3">
						<div class="col-lg-6 col-12 d-flex mx-auto">
						<a class="text-dark" href="https://www.facebook.com/people/KanBMedia/100087525831777/">
							<div class="social-icon">
								<i class="fa-brands fa-lg fa-facebook-f"></i>
							</div>
						</a>
						<a class="text-dark" href="https://www.instagram.com/kanb.media/">
							<div class="social-icon">
								<i class="fa-brands fa-lg fa-instagram"></i>
							</div>
						</a>
							<div class="social-icon">
								<i class="fa-brands fa-lg fa-linkedin"></i>
							</div>
						</div>
					</div>

					<div class="container call-to-action-header">
						<a class="" href="">
							<p class="fw-bold text-light">Let`s start something together<i class="fa-solid fa-arrow-right ms-2"></i></p>
						</a>
					</div>
				</div>


			</div>

		</div>
	</div>
</nav>