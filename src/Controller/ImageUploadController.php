<?php

namespace Victorycto\Sandboxjwc\Controller;
//namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Victorycto\Sandboxjwc\Request\ImageUploadRequest;
use Victorycto\Sandboxjwc\ImageSaver;
use Intervention\Image\Facades\Image;

class ImageUploadController extends Controller {
//    private $singleton;

//    function __construct(ImageSaver $singleton) {
//        $this->singleton = $singleton;
//    }

    public function store(ImageUploadRequest $request) {
        $image = Image::make($request->image->getRealPath());
        $sizes = [
            [300,300],
            [100,100],
            []
        ];
        $imageSaver = new ImageSaver();
        $imageSaver->saveAllSizes($sizes, $image);
        return view('victorycto.imageLoader');
    }

    public function index(){
        $view = [];
        $view['images'] = ImageSaver::get();
        return view('victorycto.imageLoader', $view);
    }
}