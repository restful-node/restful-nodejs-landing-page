<?php

/* Template name: Page Full Width Template */
get_header();

?>

<h1><?php echo get_the_title(); ?></h1>

<div class="app-container" style="width: 80%;margin: 0 auto;">
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			the_content();
		}
	}
	?>
</div>

<div>
	<?php get_sidebar('main-sidebar'); ?>
</div>

<?php get_footer(); ?>


