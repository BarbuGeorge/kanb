<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('_meta.php'); ?>
</head>

<body class="page-single-post">

	<?php get_header();?>

	<main class="single-post-page">

		<section class="fluid-container pt-12 page-wrapper">
			<div class="single-post-info">
				<p class="text-primary fw-bold  me-auto ">
					<?php $category = get_the_category();
					$firstCategory = $category[1]->cat_name; echo $firstCategory;?>
				</p>
				<h1><?php the_title();?></h1>
				<div class="d-flex text-secondary fw-bold justify-content-between">
					<div class="d-flex align-items-center">
						<i class="fa-regular fa-calendar me-2"></i>
						<?php echo get_the_date(''); ?>
					</div>
					<div class="d-flex align-items-center">
						<i class="fa-regular fa-clock me-2"></i>
						<?php echo get_post_meta( get_the_ID(), 'reading', true ); ?>
					</div>
				</div>
			</div>
			<div class="single-post-thumbnail" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);"></div>
			<div class="container">
				<div class="row">
					<div class="single-post-content">
						<?php echo the_content();?>
					</div>
					<div class="single-post-share">
						<div class="text-center text-uppercase fw-bold text-secondary">Share with your friends</div>
						<div class="share-post-icons">
						<a  href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">
							<i class="fa-brands fa-2xl fa-twitter"></i>
						</a>
						<a class="mx-4" href="http://facebook.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">
							<i class="fa-brands fa-2xl fa-facebook-f"></i>
						</a>
						<a href="http://linkedin.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">
							<i class="fa-brands fa-2xl fa-linkedin"></i>
						</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php get_template_part('templates-parts/page-blog/related-cards');?>
	</main>

	<?php get_footer();?>

</body>

</html>
