<?php /* Template Name:	Page Service marketing strategies Template */ ?>
<!DOCTYPE html>
<html lang="en" class="overflow-y-hidden">

<head>
	<?php include __DIR__ . ('/../_meta.php'); ?>
</head>

<body class="page-service">

	<?php get_header();?>

	<main class="page-service">
		<?php get_template_part('templates-parts/page-service-marketing-strategies/hero');?>
		<?php get_template_part('templates-parts/page-service-marketing-strategies/service-qualities');?>
		<?php get_template_part('templates-parts/page-service-marketing-strategies/service-scrollspy');?>
	</main>

	<?php
		get_footer();
	?>

</body>

</html>
