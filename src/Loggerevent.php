<?php
namespace Arash\Logevent;
/**
 * Created by PhpStorm.
 * User: hoseinabadi
 * Date: 12/20/16
 * Time: 2:17 PM
 */

use Monolog\Logger as Monolog;
use Monolog\Formatter\LineFormatter;
use Monolog\Logger;
use Monolog\Processor\WebProcessor;
use Monolog\Handler\StreamHandler;

class Loggerevent
{
    public function __construct($logText = '')
    {
        $logPath = config('logevent.addressLogFile');
        $logLevel = Monolog::DEBUG;
        $logStreamHandler = new StreamHandler($logPath, $logLevel);
        $logFormat = "%datetime% [%level_name%] (%channel%): %message% %context% %extra%\n";
        $formatter = new LineFormatter($logFormat);
        $logStreamHandler->setFormatter($formatter);
        $log = new Logger('logevent');
        if (empty($logText)) {
            $log->pushProcessor(new WebProcessor);
        }
        $log->pushHandler($logStreamHandler);
        $log->addInfo($logText);
    }
}