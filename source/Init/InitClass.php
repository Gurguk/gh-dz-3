<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 30.10.16
 * Time: 23:19
 */

namespace Roman\Parser\Init;


class InitClass implements InitInterface
{
    /*
    * @var path to folder
    * */
    private $folderpath;

    public function __construct($folderpath)
    {
        $this->folderpath = $folderpath;
    }
    /*
     * @notice create folder for xml file
     * @param string $folderpath
     * */
    public function makeUploadFolder()
    {
        $result = FALSE;
        if(!is_dir($this->folderpath)){
            $result = mkdir($this->folderpath);
        }
        return $result;
    }
}