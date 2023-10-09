<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gpus_gallery;
use App\Models\gpus_video;
use App\Models\gpus_gallery_image;
use App\Models\gpus_flash_news;

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
        $galleries = gpus_gallery::where('is_deleted','N')->orderBy('id', 'desc')->get();
        return view('auth.photo_gallery',['galleries'=>$galleries]);
    }

    public function gallery_images(Request $id)
    {
        $gallery_id = $id->id;
        $gallery = gpus_gallery::select('gallery_name')->find($gallery_id);
        $gallery_name = $gallery->gallery_name;
        $images = gpus_gallery_image::where('gallery_id',$gallery_id)->where('is_deleted','N')->get();

        return view('auth.gallery_images',['images'=>$images,'gallery_name'=>$gallery_name]);
    }

    public function video_gallery()
    {
        $videos = gpus_video::where('is_deleted','N')->orderBy('id', 'desc')->get();
        return view('auth.video_gallery',['videos'=>$videos]);
    }

    public function flash_news()
    {
        $news = gpus_flash_news::where('is_deleted','N')->orderBy('id', 'desc')->get();
        return view('auth.flash_news',['news'=>$news]);
    }

    public function events()
    {
        return view('auth.events');
    }
}
