<?php

namespace Roman\Parser;

use Roman\Parser\Init\InitClass as Init;

class Parser
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