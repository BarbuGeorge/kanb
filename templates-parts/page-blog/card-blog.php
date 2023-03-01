<div class="col-lg-6 col-12 mb-10">
	<div class="card blog-card h-100 d-flex flex-column jutify-content-between">
		<div class="card-header ">
			<div class="d-flex">

				<p class="text-primary fw-bold  me-auto "><?php foreach ((get_the_category()) as $category) {
																echo $category->name . "<br>";
																echo category_description($category);
															} ?>
				</p>
			</div>

			<h4><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			<div class="d-flex">
				<p class="date"><?php echo get_the_date(''); ?></p>
			</div>
		</div>
		<div class="thumbnail">
			<?php if (has_post_thumbnail()) : ?>
				<img src="<?php the_post_thumbnail_url(''); ?>" class="card-img-top blog-img img-fluid mb-3" />
			<?php endif; ?>
		</div>
		<div class="card-body d-flex flex-column justify-content-between">
			<span class="blog-description"> <?php echo wp_trim_words(get_the_excerpt(), 30); ?></span>

			<a class="readmore text-decoration-none" href="<?php the_permalink() ?>" rel="bookmark" title="Read more on <?php the_title_attribute(); ?>">Read More</a>
		</div>
	</div>
</div>