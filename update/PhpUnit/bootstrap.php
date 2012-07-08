<?php
/**
 * @package	ImpressPages
 * @copyright	Copyright (C) 2011 ImpressPages LTD.
 * @license see ip_license.html
 */

define ('BASE_DIR', __DIR__.'/');
define ('UPDATE_DIR', __DIR__.'/../');
define ('INSTALLATION_DIR', __DIR__.'/../../');

define ('FIXTURE_DIR', BASE_DIR.'Fixture/');

session_start('ipUpdateuTest');

require_once(UPDATE_DIR.'Library/Autoloader.php');
$autoloader = new IpUpdate\Library\Autoloader();
$autoloader->register(UPDATE_DIR);
