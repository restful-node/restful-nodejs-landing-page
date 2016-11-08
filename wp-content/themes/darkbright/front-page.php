<!DOCTYPE html>
<html lang="en">
	<head>
		<?php get_header(); ?>
	</head>
	<body>
		<?php wp_nav_menu( [
			'menu_class'     => 'main-navigation',
			'theme_location' => 'primary'
		] ); ?>

		<main class="app-container">
			<div class="home">
				this is the home front page!
				<br>
				<?php echo bloginfo( 'template_url' ); ?>
			</div>
		</main>

		<?php get_footer(); ?>
	</body>
</html>

