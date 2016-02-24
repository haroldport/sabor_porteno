<?php
/**
 * Created by PhpStorm.
 * User: harold
 * Date: 23/02/16
 * Time: 22:21
 */

namespace Atomcorp\Util;

class ImageHelper
{

    const DELIMITER = ';';

    public static function getImageArray($images){
        return explode(self::DELIMITER, $images);
    }

}