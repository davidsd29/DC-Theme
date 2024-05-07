<?php

if (! defined('ABSPATH')) {
    exit('Forbidden');
}

require_once ABSPATH . 'vendor/autoload.php';

use Symfony\Component\Finder\Finder;

$finder = new Finder();
$finder->files()->in(__DIR__);
$finder->files()->notName('auto-finder.php');

if ($finder->hasResults()) {
    foreach ($finder as $file) {
        require $file->getRealPath();
    }
}
