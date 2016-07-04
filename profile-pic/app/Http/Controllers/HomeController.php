<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Image;


class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function image(Request $request)
    {
            $this->validate($request, ['image' => 'required']);
            $file = $request->file('image');
            $file_id = uniqid('', true).'.'.'jpeg';
            $path = public_path('uploads/images/'.$file_id);
            $water = public_path('images/water.png');
            $img = Image::make($file)->resize(700,500)->insert($water, 'bottom-right');
            $img->save($path);


        return view('download_image')->withFile_id($file_id);
    }

}
