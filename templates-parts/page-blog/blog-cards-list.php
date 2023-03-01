<section class="cards-list">
	<div class="text-center mb-18">
		<p>Welcome to</p>
		<h1>KanB Blog</h1>
	</div>
	<?php
	// the query
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$wpb_all_query = new WP_Query(array(
		'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1, 'paged' => 1,
	)); ?>

	<div class="row " id="infinite-scroll">
		<?php if ($wpb_all_query->have_posts()) : ?>
			<?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
				<div class="col-lg-6 col-12 mb-10" data-aos="fade-up" data-aos-duration="1000">
					<div class="card blog-card h-100 d-flex flex-column jutify-content-between">
						<div class="card-header ">
							<div class="d-flex">

								<p class="text-primary fw-bold  me-auto ">
									<?php $c = get_the_category();
									if (!empty($c[0])) {
										echo $c[1]->name;
									}; ?>
								</p>
							</div>

							<h4 class="mb-4"><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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
			<?php endwhile; ?>

	</div>
	<?php wp_reset_postdata(); ?>
<?php else : ?>
	<p><?php ('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
</section>