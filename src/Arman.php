<?php

namespace Asrafulhaq\Arman;


/**
 * THis is a test class for package Development 
 */
class Arman
{
    /**
     * Unoque name generator 
     */
    public static function randname($ext = '')
    {
        return md5(time() . rand()) . '.' . $ext;
    }

    /**
     * Make Slug 
     */
    public static function slug($title)
    {
        return str_replace(' ', '-', $title);
    }


    /**
     * Remember Token
     */
    public static function token()
    {
        return time() . rand();
    }


    /**
     * file Uplaod 
     */
    public static function file($file, $path = '/')
    {
        // File info
        $tmp_name = $file['tmp_name'];
        $file_name = self::randname('jpg');
        move_uploaded_file($tmp_name, $path . $file_name);
    }

    /**
     * Get Object Data 
     */
    public function getData(array $data)
    {
        $json_data = json_encode($data);
        return json_decode($json_data);
    }
}
