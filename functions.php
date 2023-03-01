<?php
// Load Css
function kanb_enque_styles()
{
	wp_enqueue_style('font-awesome-style', get_template_directory_uri() . '/_assets/fontawesome-free-6.1.1-web/css/all.css');
	wp_enqueue_style('aos', get_template_directory_uri() . '/_assets/css/aos.css');
	wp_enqueue_style('owl-min', get_template_directory_uri() . '/_assets/css/owl.carousel.min.css');
	wp_enqueue_style('otwl-theme-default', get_template_directory_uri() . '/_assets/css/owl.theme.default.min.css');
}

add_action('wp_enqueue_scripts', 'kanb_enque_styles');

function kanb_enqueue_scripts()
{
	// Jquery Script
	wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js');

	// Bootstrap script
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/_assets/bootstrap-5.1.3/dist/js/bootstrap.min.js', array());

	// Aos
	wp_enqueue_script('aos', get_template_directory_uri() . '/_assets/js/aos.js', array());

	wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js');
	wp_enqueue_script('scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/ScrollTrigger.min.js');
	wp_enqueue_script('lottie', 'https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.1/lottie.min.js');
	wp_enqueue_script('scrollootie', get_template_directory_uri() . '/_assets/js/ScrolLottie.js');
	wp_enqueue_script('loottiebody', 'https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.6/lottie.min.js');

	// Overflow-hidden script
	wp_enqueue_script('overflow-hidden', get_template_directory_uri() . '/_assets/js/overflow-hidden.js', array('jquery'));

	// OwlCarousel
	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/_assets/js/owl.carousel.min.js', array('jquery'));
	wp_enqueue_script('owl-carousel-init', get_template_directory_uri() . '/_assets/js/owl-carousel-init.js', array('jquery'));

	// parallax-scroll script
	wp_enqueue_script('parallax-scroll', get_template_directory_uri() . '/_assets/js/parallax-scroll.js', array('jquery'));

	// navbar-scroll script
	wp_enqueue_script('navbar-scroll-change', get_template_directory_uri() . '/_assets/js/navbar-scroll-change.js', array('jquery'));

	// smooth scroll
	wp_enqueue_script('smooth-scroll', get_template_directory_uri() . '/_assets/js/smooth-scroll.js', array());

	// Change word
	wp_enqueue_script('change-word', get_template_directory_uri() . '/_assets/js/change-word.js', array());

}
add_action('wp_enqueue_scripts', 'kanb_enqueue_scripts');


// Menus
function wpb_custom_new_menu()
{
	register_nav_menu('my-custom-menu', __('My Custom Menu'));
}
add_action('init', 'wpb_custom_new_menu');

register_nav_menus(
	array(
		'top-menu' => 'Top Menu Location',
		'top-menu-mobile' => 'Top Menu Mobile',
		'footer-menu' => 'Footer Menu Location',
	)
);


add_theme_support('menus');
add_theme_support(
	'custom-logo',
	array(
		'flex-height'          => true,
		'flex-width'           => true,
		'unlink-homepage-logo' => true,
	)
);



// Add Thumbnails
add_theme_support('post-thumbnails');



// CPT Textnode
function custom_post_type()
{

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x('Text Nodes', 'Post Type General Name', 'KanBTheme'),
		'singular_name'       => _x('Text Node', 'Post Type Singular Name', 'KanBTheme'),
		'menu_name'           => __('Text Nodes', 'KanBTheme'),
		'parent_item_colon'   => __('Parent TextNode', 'KanBTheme'),
		'all_items'           => __('All Text Nodes', 'KanBTheme'),
		'view_item'           => __('View Text Node', 'KanBTheme'),
		'add_new_item'        => __('Add New Text Node', 'KanBTheme'),
		'add_new'             => __('Add New', 'KanBTheme'),
		'edit_item'           => __('Edit Text Node', 'KanBTheme'),
		'update_item'         => __('Update Text Node', 'KanBTheme'),
		'search_items'        => __('Search Text Node', 'KanBTheme'),
		'not_found'           => __('Not Found', 'KanBTheme'),
		'not_found_in_trash'  => __('Not found in Trash', 'KanBTheme'),
	);

	// Set other options for Custom Post Type

	$args = array(
		'label'               => __('TextNodes', 'KanBTheme'),
		'description'         => __('TextNode', 'KanBTheme'),
		'labels'              => $labels,

		'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),

		'taxonomies'          => array('textnode-category'),

		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,

	);

	// Registering your Custom Post Type
	register_post_type('textnode', $args);
}

/* Hook into the 'init' action so that the function
    * Containing our post type registration is not
    * unnecessarily executed.
    */

add_action('init', 'custom_post_type', 0);



// Change "Posts" to "Articles"
function change_post_menu_label()
{
	global $menu;
	global $submenu;
	$menu[5][0] = 'Articles';
	$submenu['edit.php'][5][0] = 'All Articles';
	$submenu['edit.php'][10][0] = 'Add News Article';
	$submenu['edit.php'][16][0] = 'Tags';
	echo '';
}
add_action('admin_menu', 'change_post_menu_label');
function change_post_object_label()
{
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'Articles';
	$labels->singular_name = 'Article';
	$labels->add_new = 'Add New Article';
	$labels->add_new_item = 'Add New Article';
	$labels->edit_item = 'Edit Article';
	$labels->new_item = 'New Article';
	$labels->view_item = 'View Article';
	$labels->search_items = 'Search Articles';
	$labels->not_found = 'No Articles found';
	$labels->not_found_in_trash = 'No Articles found in Trash';
}
add_action('init', 'change_post_object_label');



// Back Button
add_action('back_button', 'wpse221640_back_button');
function wpse221640_back_button()
{
	if (wp_get_referer()) {
		$back_text = __('<i class="fa-solid fa-arrow-left pe-2"></i> Inapoi');
		$button    = "\n<button id='my-back-button' class='btn btn-back single-page-post-back-btn btn-md bg-transparent text-uppercase fw-bold mt-5 p-0 button my-back-button' onclick='javascript:history.back()'>$back_text</button>";
		echo ($button);
	}
}

// Shortcode textnodes
function textnode($post_name)
{
	$query = new WP_Query(array(
		'post_type' => 'textnode',
		'post_status' => 'publish',
		'name' => $post_name
	));

	if (!$query->have_posts()) {
		return null;
	}

	$query->the_post();

	$content = get_the_content();

	wp_reset_postdata();

	return $content;
}

// Related Posts

function example_cats_related_post()
{

	$post_id = get_the_ID();
	$cat_ids = array();
	$categories = get_the_category($post_id);

	if (!empty($categories) && !is_wp_error($categories)) :
		foreach ($categories as $category) :
			array_push($cat_ids, $category->term_id);
		endforeach;
	endif;

	$current_post_type = get_post_type($post_id);

	$query_args = array(
		'category__in'   => $cat_ids,
		'post_type'      => $current_post_type,
		'post__not_in'    => array($post_id),
		'posts_per_page'  => '3',
	);

	$related_cats_post = new WP_Query($query_args);

	if ($related_cats_post->have_posts()) :
		while ($related_cats_post->have_posts()) : $related_cats_post->the_post(); ?>
			<div class="col-lg-4 col-10 mb-10">
				<div class="card blog-card h-100 d-flex flex-column jutify-content-between">
					<div class="card-header ">
						<div class="d-flex">

							<p class="text-primary fw-bold  me-auto "><?php $category = get_the_category();
					$firstCategory = $category[1]->cat_name; echo $firstCategory;?>
							</p>
						</div>

						<h6 class="mb-4"><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
						<div class="d-flex">
							<p class="date"><?php echo get_the_date(''); ?></p>
						</div>
					</div>
					<div class="thumbnail">
						<?php if (has_post_thumbnail()) : ?>
							<a href="<?php the_permalink(); ?>">
								<img src="<?php the_post_thumbnail_url(''); ?>" class="card-img-top img-fluid" />
							</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
	<?php endwhile;

		// Restore original Post Data
		wp_reset_postdata();
	endif;
}

function myCustomScript()
{ ?>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('.slide-out-btn').on('click', function(e) {
				$('.contact-sidebar-mobile').toggleClass("active"); //you can list several class names
				e.preventDefault();
			});
			$('.slide-in-btn').on('click', function(e) {
				$('.contact-sidebar-mobile').removeClass("active"); //you can list several class names
				e.preventDefault();
			});
		});
	</script>
<?php
}
add_action('wp_head', 'myCustomScript');


function activeItem()
{ ?>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('.scrollspy-menu-item').on('click', function(e) {
				$(this).siblings('.scrollspy-menu-item').removeClass('active-item').end().addClass('active-item');
			});
		});
	</script>
<?php
}
add_action('wp_head', 'activeItem');



function scroll()
{ ?>
	<script type="text/javascript">

	</script>
<?php
}
add_action('wp_head', 'scroll');





