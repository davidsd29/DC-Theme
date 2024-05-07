<?php

if (! defined('ABSPATH')) {
    exit('Forbidden');
}

/**
 * This function adds the options for a ACF field to pick a theme background color for elements.
 *
 *
 * @return array;
 */

function theme_colors()
{
  $colors = [
    'white' => [
      'label' => __('Wit (#ffffff)', '_SBB'),
      'color' => '#ffffff',
    ],
    'black' => [
      'label' => __('Zwart (#000000)', '_SBB'),
      'color' => '#000000'
    ],
    'heavyMetal' => [
      'label' => __('HeavyMetal (#1d1d1b)', '_SBB'),
      'color' => '#1d1d1b'
    ],
    'congressBlue' => [
      'label' => __('CongressBlue (#004c90)', '_SBB'),
      'color' => '#004c90',
    ],
    'bahamaBlue' => [
      'label' => __('BahamaBlue (#005f97)', '_SBB'),
      'color' => '#005f97',
    ],
    'sanMarino' => [
      'label' => __('SanMarino (#4678ac)', '_SBB'),
      'color' => '#4678ac'
    ],
    'fountainBlue' => [
      'label' => __('FountainBlue (#5f98c3)', '_SBB'),
      'color' => '#5f98c3'
    ],
    'ming' => [
      'label' => __('Ming (#3c808f)', '_SBB'),
      'color'    => '#3c808f'
    ],
    'asparagus' => [
      'label' => __('Asparagus (#7fa566)', '_SBB'),
      'color'    => '#7fa566'
    ],
    'tradewind' => [
      'label' =>  __('Tradewind (#62b09e)', '_SBB'),
      'color' => '#62b09e',
    ],
    'halfbaked' => [
      'label' =>  __('Halfbaked (#73bfc5)', '_SBB'),
      'color' => '#73bfc5',
    ],
    'shakespeare' => [
      'label' =>  __('Shakespeare (#51bfca)', '_SBB'),
      'color' => '#51bfca',
    ],
    'laRioja' => [
      'label' =>  __('laRioja (#bccd14)', '_SBB'),
      'color' => '#bccd14',
    ],
    'corn' => [
      'label' =>  __('Corn (#d6d600)', '_SBB'),
      'color' => '#d6d600',
    ],
    'wattle' => [
      'label' =>  __('Wattle (#dcdc59)', '_SBB'),
      'color' => '#dcdc59',
    ],
    'primrose' => [
      'label' =>  __('Primrose (#e9e898)', '_SBB'),
      'color' => '#e9e898',
    ],
    'trinidad' => [
      'label' =>  __('Trinidad (#e93600)', '_SBB'),
      'color' => '#e93600',
    ],
    'clementine' => [
      'label' =>  __('Clementine (#ef5f00)', '_SBB'),
      'color' => '#ef5f00',
    ],
    'crusta' => [
      'label' =>  __('Crusta (#ff832e)', '_SBB'),
      'color' => '#ff832e',
    ],
    'orangePeel' => [
      'label' =>  __('OrangePeel (#faa000)', '_SBB'),
      'color' => '#faa000',
    ],
    'sunglow' => [
      'label' =>  __('Sunglow (#ffc334)', '_SBB'),
      'color' => '#ffc334',
    ],
    'affair' => [
      'label' =>  __('Affair (#844799)', '_SBB'),
      'color' => '#844799',
    ],
    'wisteria' => [
      'label' =>  __('Wisteria (#9d6bae)', '_SBB'),
      'color' => '#9d6bae',
    ],
    'mediumRedViolet' => [
      'label' =>  __('MediumRedViolet (#b93280)', '_SBB'),
      'color' => '#b93280',
    ],
    'charm' => [
      'label' =>  __('Charm (#d87a9c)', '_SBB'),
      'color' => '#d87a9c',
    ],
    'shocking' => [
      'label' =>  __('Shocking (#de95ba)', '_SBB'),
      'color' => '#de95ba',
    ],
    'gallery' => [
      'label' =>  __('Gallery (#ececec)', '_SBB'),
      'color' => '#ececec',
    ],
  ];

  $choices = [];

  foreach ($colors as $key => $values) {
    $choices[$key] = '<span style="padding: 8px 12px; border-radius: 8px; background-color:' . $values['color'] . '">' . $values['label'] . '</span>';
  }

  return $choices;
}

