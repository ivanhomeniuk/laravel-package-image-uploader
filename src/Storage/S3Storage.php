<?php

namespace Victorycto\Sandboxjwc\Storage;

use Victorycto\Sandboxjwc\Storage\StorageInterface\iStorage;
use Illuminate\Support\Facades\Storage;
use Victorycto\Sandboxjwc\ImageSaver;

abstract class S3Storage implements iStorage {
    public static function store(ImageSaver $image) {
        return Storage::disk('s3')->putFile('/', $image);
    }
}
