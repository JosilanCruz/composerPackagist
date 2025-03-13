<?php
    require 'vendor/autoload.php';

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;
    use CruzCode\Example\Package;

    $streamH = new StreamHandler('logs/app.log', Logger::WARNING);
    $logger = new Logger('app');

    new Package($logger, $streamH);