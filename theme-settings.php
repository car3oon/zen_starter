<?php
/**
 * Implements hook_form_system_theme_settings_alter().
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function zen_starter_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL)  {
  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }

  $form['add_js'] = array(
    '#type'          => 'fieldset',
    '#title'         => t('Add third-party libraries'),
  );

  $form['add_js']['zen_add_css_font_awesome'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Font Awesome'),
    '#default_value' => theme_get_setting('zen_add_css_font_awesome'),
    '#description'   => t('The iconic font and CSS toolkit'),
  );

  $form['add_js']['zen_add_js_velocity'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Velocity.js'),
    '#default_value' => theme_get_setting('zen_add_js_velocity'),
    '#description'   => t('Accelerated JavaScript animation.'),
  );

  // Create the form using Forms API: http://api.drupal.org/api/7

  /* -- Delete this line if you want to use this setting
  $form['lukasz_wegiel_example'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('lukasz_wegiel sample setting'),
    '#default_value' => theme_get_setting('lukasz_wegiel_example'),
    '#description'   => t("This option doesn't do anything; it's just an example."),
  );
  // */

  // Remove some of the base theme's settings.
  /* -- Delete this line if you want to turn off this setting.
  unset($form['themedev']['zen_wireframes']); // We don't need to toggle wireframes on this site.
  // */

  // We are editing the $form in place, so we don't need to return anything.
}
