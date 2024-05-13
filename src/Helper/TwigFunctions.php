<?php

declare(strict_types=1);

namespace DCustoms\Theme\Helper;


use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

final class TwigFunctions extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('have_posts', [self::class, 'havePosts']),
        ];
    }

    public static function havePosts(): bool
    {
        return have_posts();
    }
}

// $twig->addExtension(new TwigFucntions());
?>