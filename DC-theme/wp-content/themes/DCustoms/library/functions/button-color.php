<?php

if (! defined('ABSPATH')) {
    exit('Forbidden');
}

/**
 * This function adds the options for a ACF field to pick a color style for the buttons.
 *
 *
 * @return array;
 */

function button_style()
{
  $colors = [
    'primary' => [
      'label' => __('Primary (#ffffff)', '_SBB'),
      'color' => '#ffffff',
    ],
    'secondary' => [
      'label' => __('Secondary (#000000)', '_SBB'),
      'color' => '#000000'
    ],
    'tertiary ' => [
      'label' => __('Tertiary (#1d1d1b)', '_SBB'),
      'color' => '#1d1d1b'
    ],
    'quaternary' => [
      'label' => __('Quaternary (#004c90)', '_SBB'),
      'color' => '#004c90',
    ],
    'cta' => [
      'label' => __('BahamaBlue (#005f97)', '_SBB'),
      'color' => '#005f97',
    ],
    'submit' => [
      'label' => __('Submit (#4678ac)', '_SBB'),
      'color' => '#4678ac'
    ],
    'cancel' => [
      'label' => __('Cancel (#5f98c3)', '_SBB'),
      'color' => '#5f98c3'
    ],
  ];

  $choices = [];

  foreach ($colors as $key => $values) {
    // $choices[$key] = '<span style="padding: 8px 12px; border-radius: 8px; background-color:' . $values['color'] . '">' . $values['label'] . '</span>';
    $choices[$key] = '<span style="padding: 8px 12px; border-radius: 8px;">' . $values['label'] . '</span>';
  }

  return $choices;
}

