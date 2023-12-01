<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class('landing-page'); ?>>

    <!-- Header -->
    <?php get_header(); ?>

    <!-- Main Content -->
    <div id="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <?php the_content(); ?>
            </article>
        <?php endwhile; endif; ?>
    </div>

    <!-- Footer -->
    <?php get_footer(); ?>

    <?php wp_footer(); ?>
</body>
</html>
