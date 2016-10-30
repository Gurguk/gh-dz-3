<?php

namespace Roman\Parser;

use Roman\Parser\Init\InitClass as Init;
use Roman\Parser\Log\Log as Log;
class Parser extends Log
{
    public function __construct($folderpath)
    {
        $init = new Init($folderpath);
        $mkd = $init->makeUploadFolder();
        if (!$mkd) {
            echo 'Error!!!';
        }
    }

}