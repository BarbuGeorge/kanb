<footer class="footer">

	<div class="container">
		<div class="row justify-content-xl-start justify-content-center">
			<div class="col-xl-2 col-md-4 col-12 text-xl-start text-center mb-lg-4 mb-8">
				<div class="d-block">
					<h5 class="mb-2">KanB</h5>
					<p class="mb-0">Your future partner<br class="d-lg-block d-none"> let`s glow together!</p>
					<div class="d-flex justify-content-xl-start justify-content-center mt-4">
						<a href="https://www.facebook.com/people/KanBMedia/100087525831777/"><i class="fa-brands fa-facebook-f me-3 text-light"></i></a>
						<a href="https://www.instagram.com/kanb.media/"><i class="fa-brands fa-instagram me-3 text-light"></i></a>
						<i class="fa-brands fa-linkedin-in me-3 text-light"></i>
					</div>
				</div>
			</div>
			<div class="col-lg-10 col-12 d-flex flex-wrap justify-content-between">

				<div class="footer-col">
					<ul>
						<li>
							<h5 class="footer-title-list">SERVICES</h5>
						</li>
						<li><a href="<?php echo get_page_link( get_page_by_path( 'service-design-build' ) ); ?>"><span class="text-muted">Web Design</span></a></li>
						<li><a href="<?php echo get_page_link( get_page_by_path( 'service-creative' ) ); ?>"><span class="text-muted">Creative</span></a></li>
						<li><a href="<?php echo get_page_link( get_page_by_path( 'service-marketing-sales' ) ); ?>"><span class="text-muted">Marketing&Sales</span></a></li>
						<li><a href="<?php echo get_page_link( get_page_by_path( 'service-marketing-strategies' ) ); ?>"><span class="text-muted">Marketing Strategy</span></a></li>
						<li><a href="<?php echo get_page_link( get_page_by_path( 'service-copywriting' ) ); ?>"><span class="text-muted">Copywriting</span></a></li>
					</ul>
				</div>

				<div class="footer-col">
					<ul>
						<li>
							<h5 class="footer-title-list">COMPANY INFO</h5>
						</li>
						<li><a href="<?php echo get_page_link( get_page_by_path( 'about' ) ); ?>"><span class="text-muted">About KanB</span></a></li>
						<li><a href="<?php echo get_page_link( get_page_by_path( 'blog' ) ); ?>"><span class="text-muted">Blog</span></a></li>
						<li><a href="<?php echo get_page_link( get_page_by_path( 'contact' ) ); ?>"><span class="text-muted">Contact</span></a></li>
					</ul>
				</div>

				<div class="footer-col">
					<ul>
						<li>
							<h5 class="footer-title-list">LEGAL</h5>
						</li>
						<li><a href="<?php echo get_page_link( get_page_by_path( 'privacy-policy' ) ); ?>"><span class="text-muted">Privacy&Policy</span></a></li>
						<li><a href="<?php echo get_page_link( get_page_by_path( 'cookies-policy' ) ); ?>"><span class="text-muted">Cookies</span></a></li>
					</ul>
				</div>

				<div class="footer-col">
					<h5 class="footer-title-list">WHATSAPP CONTACT</h5>
					<a href="https://wa.me/400772151257?text=">
						<img class="qr-code" src="<?php echo get_template_directory_uri() . '/_assets/Images/footer-contact.png'; ?>" />
					</a>
				</div>

			</div>
		</div>
	</div>

</footer>
<script src="<?php echo get_template_directory_uri() . '/_assets/js/scroll-trigger-animation.js'; ?>"></script>

<script>
	AOS.init();

	// You can also pass an optional settings object
	// below listed default settings
	AOS.init({
		// Global settings:
		disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
		startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
		initClassName: 'aos-init', // class applied after initialization
		animatedClassName: 'aos-animate', // class applied on animation
		useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
		disableMutationObserver: false, // disables automatic mutations' detections (advanced)
		debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
		throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


		// Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
		offset: 120, // offset (in px) from the original trigger point
		delay: 0, // values from 0 to 3000, with step 50ms
		duration: 400, // values from 0 to 3000, with step 50ms
		easing: 'ease', // default easing for AOS animations
		once: false, // whether animation should happen only once - while scrolling down
		mirror: false, // whether elements should animate out while scrolling past them
		//   anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

	});
</script>
