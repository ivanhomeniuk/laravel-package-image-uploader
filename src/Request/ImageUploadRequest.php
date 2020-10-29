<?php

namespace Victorycto\Sandboxjwc\Request;

use Illuminate\Foundation\Http\FormRequest;

class ImageUploadRequest extends FormRequest {

    public function rules()
    {
        return [
            'image' => 'required|image'
        ];
    }
}