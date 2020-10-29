<?php

namespace Victorycto\Sandboxjwc\Storage\StorageInterface;

use Victorycto\Sandboxjwc\ImageSaver;

interface iStorage {
    public static function store(ImageSaver $image);
}
