<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gpus_gallery;
use App\Models\gpus_gallery_image;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('auth.dashboard');
    }

    public function photo_gallery()
    {
        $galleries = gpus_gallery::where('is_deleted','N')->orderBy('created', 'desc')->get();
        return view('auth.photo_gallery',['galleries'=>$galleries]);
    }

    public function gallery_images(Request $id)
    {
        $gallery_id = $id->id;
        $images = gpus_gallery_image::where('gallery_id',$gallery_id)->where('is_deleted','N')->get();

        return view('auth.gallery_images',['images'=>$images]);
    }

    public function video_gallery()
    {
        return view('auth.video_gallery');
    }

    public function flash_news()
    {
        return view('auth.flash_news');
    }

    public function events()
    {
        return view('auth.events');
    }
}
