<?php

require_once('vendor/autoload.php');

use Monolog\Formatter\LineFormatter;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
$output = "%datetime% > %channel% > %level_name% > %message% %context% %extra%\n";

$formatter = new LineFormatter($output, null, false, true);

$logger = new Logger('ColppyLOG');
$streamHandler = new StreamHandler('app.log', Logger::DEBUG);
$streamHandler->setFormatter($formatter);
$logger->pushHandler($streamHandler);
$logger->info('This is a log! ^_^ ');
$logger->warning('This is a log warning! ^_^ ');
$logger->error('This is a log error! ^_^ ');

$logger->info("Line: ".__LINE__." - Function: ".__FUNCTION__." - File: ".__FILE__." - Mensaje INFO ",array('key'=>'value'), null);
$logger->crit("Line: ".__LINE__." - Function: ".__FUNCTION__." - File: ".__FILE__." - Mensaje INFO ",array('key'=>'value'), null);
