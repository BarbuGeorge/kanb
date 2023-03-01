<?php /* Template Name: Front Page Template */ ?>
<!DOCTYPE html>
<html lang="en" class="page-home">

<head>
	<?php include __DIR__ . ('/../_meta.php'); ?>
</head>

<body class="page-home-body">

	<?php get_header();?>

	<main class="page-home" id="scroll-container">

		<?php get_template_part('templates-parts/page-home/hero');?>
		<?php get_template_part('templates-parts/page-home/how-we-can-help-you');?>
		<?php get_template_part('templates-parts/page-home/services-cards');?>
		<?php get_template_part('templates-parts/page-home/info-a');?>
		<?php get_template_part('templates-parts/page-home/info-b');?>
		<?php get_template_part('templates-parts/page-home/about-us');?>
		<?php get_template_part('templates-parts/page-home/news-carousel');?>
		<?php get_template_part('templates-parts/page-home/cta-section-footer');?>



	</main>

	<?php
		get_footer();
	?>

</body>

</html>
