<?php
define('LOG4PHP_DIR', dirname(__FILE__).'/../log4php');
define('LOG4PHP_CONFIGURATOR_CLASS', LOG4PHP_DIR.'/xml/LoggerDOMConfigurator');
define('LOG4PHP_CONFIGURATION', 'stringmatchfilter.xml');

require_once LOG4PHP_DIR.'/LoggerManager.php';
$logger = LoggerManager::getRootLogger();
$logger->debug("Some text to match that will be rejected");
$logger->info("Some other text that will be accepted");
?>