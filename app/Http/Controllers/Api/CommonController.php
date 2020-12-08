<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Image;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function index() {

        $images = Image::all();

        return $images;

    }
}
