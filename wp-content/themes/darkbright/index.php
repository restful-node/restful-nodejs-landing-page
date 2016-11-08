<!DOCTYPE html>
<html lang="en">
    <head>
        <?php get_header(); ?>
    </head>
    <body>
        <h1><?php echo get_the_title(); ?></h1>
        <main class="app-container">
            <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                            the_content();
                    }
                }
            ?>
        </main>
        <?php get_footer(); ?>
    </body>
</html>

