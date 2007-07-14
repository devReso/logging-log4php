<?php
define('LOG4PHP_DIR', dirname(__FILE__).'/../log4php');
define('LOG4PHP_CONFIGURATION', 'cache.properties');

require_once LOG4PHP_DIR.'/LoggerManager.php';

$cache = dirname(__FILE__).'/tmp/hierarchy.cache';

if(!file_exists($cache)) {
  $hierarchy = LoggerManager::getLoggerRepository();
  file_put_contents($cache, serialize($hierarchy));
}
$hierarchy = unserialize(file_get_contents($cache));

$logger = $hierarchy->getRootLogger();

$logger->debug('Debug message from cached logger');
?>