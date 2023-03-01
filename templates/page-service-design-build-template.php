<?php /* Template Name:	Page Service design and build Template */ ?>
<!DOCTYPE html>
<html lang="en" class="overflow-y-hidden">

<head>
	<?php include __DIR__ . ('/../_meta.php'); ?>
</head>

<body class="page-service">

	<?php get_header();?>

	<main class="page-service">
		<?php get_template_part('templates-parts/page-service-design-build/hero');?>
		<?php get_template_part('templates-parts/page-service-design-build/service-qualities');?>
		<?php get_template_part('templates-parts/page-service-design-build/service-scrollspy');?>
	</main>

	<?php
		get_footer();
	?>

</body>

</html>
