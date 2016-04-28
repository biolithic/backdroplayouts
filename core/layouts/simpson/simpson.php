<?php
/**
 * @file
 * PHP functions for the simpson layout.
 */

/**
 * Process variables for the simpson layout.
 */
function template_preprocess_layout__simpson(&$variables) {
  if ($variables['content']['sidebar1'] && $variables['content']['sidebar2']) {
    $variables['classes'][] = 'layout-two-sidebars';
  }
  elseif ($variables['content']['sidebar1'] || $variables['content']['sidebar2']) {
    $variables['classes'][] = 'layout-one-sidebar';
    if ($variables['content']['sidebar1']) {
      $variables['classes'][] = 'layout-sidebar-first';
    }
    else {
      $variables['classes'][] = 'layout-sidebar-second';
    }
  }
  else {
    $variables['classes'][] = 'layout-no-sidebars';
  }
}
