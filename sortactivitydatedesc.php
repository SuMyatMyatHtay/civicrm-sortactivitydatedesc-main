<?php

require_once 'sortactivitydatedesc.civix.php';

use CRM_Sortactivitydatedesc_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function sortactivitydatedesc_civicrm_config(&$config): void {
  _sortactivitydatedesc_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function sortactivitydatedesc_civicrm_install(): void {
  _sortactivitydatedesc_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function sortactivitydatedesc_civicrm_enable(): void {
  _sortactivitydatedesc_civix_civicrm_enable();
}
