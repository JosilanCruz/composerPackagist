<?php
    namespace CruzCode\Example;

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    class Package
    {
        public function __construct(Logger $log, StreamHandler $streamHandler)
        {
            $log->pushHandler($streamHandler);
            $log->warning("Package");
            $log->error("Composer");
        }
    }