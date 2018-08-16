<?php

define('DRUPAL_ROOT', getcwd());
require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
$_SERVER['REMOTE_ADDR'] = 'localhost';
$_SERVER['SCRIPT_NAME'] = '/TddTests.php';
// Should be your host from sites.php.
$_SERVER['HTTP_HOST'] = 'localhost';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

/**
 * Class TddTests.
 */
class TddTests extends PHPUnit_Framework_TestCase {

  public function testCheckPlain() {
    $this->assertEquals(check_plain("test"), "test");
  }

}
