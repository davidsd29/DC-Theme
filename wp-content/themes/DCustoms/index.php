<?php
declare(strict_types=1);

use DCustoms\Theme\Helper\Twig;
use DCustoms\Theme\Helper\TwigFunctions;
global $wp_query, $post;

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '\templates\twig');
$twig = new \Twig\Environment($loader);

// Register your custom Twig extension
$twig->addExtension(new TwigFunctions());

Twig::render(
    'index.twig',
    [
	'post'		=> $post,
	'header' 	=> get_header(),
	'footer' 	=> get_footer(),
	'wp_query' 	=> $wp_query,

	]
);

?>

<!-- get_header(); -->
<!-- 
if (have_posts()) {
    while (have_posts()) {
        the_post();
        get_template_part('templates/content/content', 'frontpage');
    }
} else {
    get_template_part('templates/content/content', 'none');
}

get_footer();

?> -->
