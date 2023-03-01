<?php /* Template Name:	Page Service Creative Template */ ?>
<!DOCTYPE html>
<html lang="en" class="overflow-y-hidden">

<head>
	<?php include __DIR__ . ('/../_meta.php'); ?>
</head>

<body class="page-service">
	<?php get_header();?>

	<main class="page-service">
		<?php get_template_part('templates-parts/page-service-creative/hero');?>
		<?php get_template_part('templates-parts/page-service-creative/service-qualities');?>
		<?php get_template_part('templates-parts/page-service-creative/service-scrollspy');?>
	</main>

	<?php
		get_footer();
	?>

</body>

</html>
