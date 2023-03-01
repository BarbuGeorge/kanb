<section class="container section-news-carousel ">
	<div class="owl-carousel">
		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$wpb_all_query = new WP_Query(array(
			'post_type' =>
			'post', 'category_name' => 'blog', 'post_status' => 'publish',
			'posts_per_page' => -1,
		)); ?>
		<?php if ($wpb_all_query->have_posts()) : ?>
			<?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
				<div class="card-wrapper">
					<div class="card h-100">
						<a href="<?php the_permalink() ?>">
							<div class="card-img">
								<img alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" src="<?php the_post_thumbnail_url(''); ?>" class="img-fluid">
							</div>
						</a>

						<div class="card-body text-start px-4 py-5">
							<h5 class=" card-title ">
								<a href="<?php the_permalink() ?>"><?php the_title(); ?>
								</a>
							</h5>
							<p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
						</div>
						<div class="card-footer border-0 text-start pt-2 pb-3 px-4 bg-white">
							<a class="link" href="<?php the_permalink() ?>">Read More</a>
						</div>
					</div>
				</div>
		<?php endwhile;
		endif; ?>
		<?php wp_reset_query(); ?>
	</div>
</section>