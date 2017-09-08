<?php

/**
 * Implementation of preprocess_page().
 */
function thomson_theme_preprocess_page(&$vars, $hook) {

  if (!module_exists('conditional_styles')) {
    $vars['styles'] .= $vars['conditional_styles'] = variable_get('conditional_styles_' . $GLOBALS['theme'], '');
  }

  // Update jQuery
  if (arg(0) != 'admin') {
    $scripts = drupal_add_js();

    // Use Google for jQuery
    $vars['head'] .= '<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>';

    unset($scripts['core']['misc/jquery.js']);
    $vars['scripts'] = drupal_get_js('header', $scripts);
  }

  /**
   * Site information variables from /admin/settings/site-information
   */

  // Website info
  $vars['site_name'] = variable_get('site_name', '');
  $vars['site_mail'] = variable_get('site_mail', '');
  $vars['site_slogan'] = variable_get('site_slogan', '');
  $vars['site_mission'] = variable_get('site_mission', '');
  $vars['site_footer'] = variable_get('site_footer', '');

  // Company VAT and Registration Information
  $vars['company_vatno'] = variable_get('company_vatno', '');
  $vars['company_regno'] = variable_get('company_regno', '');
  $vars['company_regloc'] = variable_get('company_regloc', '');

  // Primary Company Location
  $vars['company_address1'] = variable_get('company_address1', '');
  $vars['company_address2'] = variable_get('company_address2', '');
  $vars['company_address3'] = variable_get('company_address3', '');
  $vars['company_city'] = variable_get('company_city', '');
  $vars['company_county'] = variable_get('company_county', '');
  $vars['company_postcode'] = variable_get('company_postcode', '');
  $vars['company_country'] = variable_get('company_country', '');
  $vars['company_phone'] = variable_get('company_phone', '');
  $vars['company_phone_sanitised'] =  str_replace(' ', '', variable_get('company_phone', '')); // Use in 'tel' attribute for displaying number on mobile screens
  $vars['company_alt_number'] = variable_get('company_phone2', '');
  $vars['company_fax'] = variable_get('company_fax', '');
  $vars['company_mobile'] = variable_get('company_mobile', '');
  $vars['company_pager'] = variable_get('company_pager', '');
  
}

/**
 * Returns a form in a grid layout 
 *
 * @param array $element
 * Contains the grid options
 *
 * @ingroup themeable
 */

function thomson_theme_webform_grid($element) {
  $rows = array();
  $header = array(array('data' => '', 'class' => 'webform-grid-question'));
  // Set the header for the table.
  foreach ($element['#grid_options'] as $option) {
    $header[] = array('data' => _webform_filter_xss($option), 'class' => 'webform-grid-option');
  }

  foreach (element_children($element) as $key) {
    $question_element = $element[$key];

    // Create a row with the question title.
    $row = array(array('data' => _webform_filter_xss($question_element['#title']), 'class' => 'webform-grid-question'));

    // Render each radio button in the row.
    $radios = expand_radios($question_element);
    foreach (element_children($radios) as $key) {
      unset($radios[$key]['#title']);
      $row[] = array('data' => drupal_render($radios[$key]), 'class' => 'webform-grid-option');
    }
    $rows[] = $row;
  }

  $option_count = count($header) - 1;
  return theme('form_element', $element, theme('table', $header, $rows, array('class' => 'webform-grid webform-grid-' . $option_count)));
}
