<?php

namespace Roman\Parser\Log;


abstract class Log
{
    private $logfile;

    public function __construct($logfile)
    {
        $this->logfile = $logfile;
    }

    public function writeLog($text)
    {
        $fp = fopen($this->logfile,'rw');
        fwrite($fp,$text.PHP_EOL);
        fclose($fp);
    }
}
