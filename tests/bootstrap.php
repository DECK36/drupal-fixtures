<?php
/**
 * bootstrap file for phpunit
 */
define('DRUPAL_ROOT', __DIR__ . '/../../../../../..');
if (is_file(DRUPAL_ROOT . '/includes/bootstrap.inc')) {
    require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
    drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
}

$loader = require __DIR__ . '/../vendor/autoload.php';
$loader->register();
