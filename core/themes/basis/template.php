<?php

/**
 * Implements template_preprocess_page().
 */
function basis_preprocess_layout(&$variables) {
  if ($variables['is_front']) {
    $variables['classes'][] = 'layout-front';
  }
}

/**
 * Implements hook_preprocess_menu_local_tasks().
 */
function basis_preprocess_menu_local_tasks(&$variables) {
  $theme_path = backdrop_get_path('theme', 'basis');
  $seven_theme_path = backdrop_get_path('theme', 'seven');

  // @todo put responsive tabs in a more central place
  backdrop_add_js($seven_theme_path . '/js/script.js');
  backdrop_add_css($theme_path . '/css/component/admin-tabs.css');
}

/**
 * Implements hook_preprocess_fieldset().
 */
function basis_preprocess_fieldset(&$variables) {
  if (isset($variables['element']['#collapsible']) && $variables['element']['#collapsible'] == true) {
    $seven_theme_path = backdrop_get_path('theme', 'seven');
    backdrop_add_js('core/misc/collapse.js');
  }
}

/**
 * Implements hook_preprocess_vertical_tabs().
 */
function basis_preprocess_vertical_tabs(&$variables) {
  $theme_path = backdrop_get_path('theme', 'basis');
  backdrop_add_css($theme_path . '/css/component/vertical-tabs.css');
}

/**
 * Overrides theme_breadcrumb().
 * Removing raquo from markup
 */
function basis_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  $output = '';
  if (!empty($breadcrumb)) {
    $output .= '<nav role="navigation" class="breadcrumb">';
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output .= '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    $output .= '<ol><li>' . implode('</li><li>', $breadcrumb) . '</li></ol>';
    $output .= '</nav>';
  }
  return $output;
}

/**
 * Overrides theme_tablesort_indicator().
 */
function basis_tablesort_indicator($variables) {
  if ($variables['style'] == "asc") {
    return '<span class="table-sort table-sort-ascending"><span class="element-invisible">' . t('sorted ascending') . '</span></span>';
  }
  else {
    return '<span class="table-sort table-sort-descending"><span class="element-invisible">' . t('sorted descending') . '</span></span>';
  }
}
