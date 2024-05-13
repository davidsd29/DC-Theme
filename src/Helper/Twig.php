<?php

declare(strict_types=1);

namespace DCustoms\Theme\Helper;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

final class Twig
{
    private static $twig;

    private static function getTwig(): Environment
    {
        if (!isset(self::$twig)) {
            define('TWIG_TEMPLATES_PATH', __DIR__ . '/../../wp-content/themes/DCustoms/templates/twig');

            // Set up Twig loader to load templates from the defined path
            $loader = new FilesystemLoader(TWIG_TEMPLATES_PATH);

            // Instantiate Twig environment
            self::$twig = new Environment($loader);
        }

        return self::$twig;
    }

    public static function render(string $template, array $context = []): void
    {
        // Get Twig environment
        $twig = self::getTwig();

        // Render and output the template
        echo $twig->render($template, $context);
    }

    public static function renderString(string $template, array $context = []): string
    {
        // Get Twig environment
        $twig = self::getTwig();

        // Render the template and return as a string
        return $twig->render($template, $context);
    }
}
