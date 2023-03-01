<?php /* Template Name: Page Blog Template */ ?>
<!DOCTYPE html>
<html lang="en" class="page-blog">

<head>
	<?php include __DIR__ . ('/../_meta.php'); ?>
</head>

<body>

	<?php get_header();?>

	<main class="page-blog">
		<?php get_template_part('templates-parts/page-blog/blog-cards-list');?>
	</main>

	<?php
		get_footer();
	?>

</body>

</html>
