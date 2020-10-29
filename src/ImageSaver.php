<?php

namespace Victorycto\Sandboxjwc;

use Victorycto\Sandboxjwc\Model\Image;
use Victorycto\Sandboxjwc\Storage\DBStorage;
use Victorycto\Sandboxjwc\Storage\S3Storage;

class ImageSaver {

    public static function get()
    {
        return Image::all();
    }

    public static function saveAllSizes($sizes, $image) {

        foreach ($sizes as $size) {
            self::save($size, $image);
        }
    }

    protected static function save($sizeArray, $image) {

        if (!empty($sizeArray)) {
            $image = $image->resize($sizeArray[0], $sizeArray[1]);
        }

        $url = S3Storage::store($image);
        DBStorage::store($url);
    }

}
