<?php /* Template Name: Page Contact Template */ ?>
<!DOCTYPE html>
<html lang="en" class="overflow-y-hidden">

<head>
	<?php include __DIR__ . ('/../_meta.php'); ?>
</head>

<body class="page-contact-body">

	<?php get_header();?>

	<main class="page-contact">
		<?php get_template_part('templates-parts/page-contact/contact-content');?>
	</main>

	<?php get_footer(); ?>

</body>

</html>
