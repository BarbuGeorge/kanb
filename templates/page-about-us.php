<?php /* Template Name: Page About Template */ ?>
<!DOCTYPE html>
<html lang="en" class="page-about-us">

<head>
	<?php include __DIR__ . ('/../_meta.php'); ?>
</head>

<body>

	<?php get_header();?>

	<main class="page-about">

		<?php get_template_part('templates-parts/page-about/hero');?>
		<?php get_template_part('templates-parts/page-about/what-we-do');?>
		<?php get_template_part('templates-parts/page-about/capabilities');?>
		<?php get_template_part('templates-parts/page-about/process');?>

	</main>

	<?php get_footer(null,['hide'=>true]); ?>

</body>

</html>
