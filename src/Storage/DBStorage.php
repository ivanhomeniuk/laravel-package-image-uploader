<?php

namespace Victorycto\Sandboxjwc\Storage;

use Victorycto\Sandboxjwc\Model\Image;
use Victorycto\Sandboxjwc\Storage\StorageInterface\iStorage;
use Victorycto\Sandboxjwc\ImageSaver;


abstract class DBStorage implements iStorage {

    public static function store(ImageSaver $image) {
        $imageModel = new Image();
        $imageModel->url = $image;
        $imageModel->save();
        return $imageModel;
    }
}
