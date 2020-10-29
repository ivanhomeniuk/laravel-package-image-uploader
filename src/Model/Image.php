<?php

namespace Victorycto\Sandboxjwc\Model;

use Illuminate\Database\Eloquent\Model;

class Image  extends Model
{
    protected $table = 'images';
    protected $fillable = ['url'];
}