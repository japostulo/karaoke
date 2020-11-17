<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function show($type, $id)
    {   
        if(Storage::exists("videos/$type/$id.mp4")){
            $url = Storage::path("videos/$type/$id.mp4");
            return response()->file($url);
        }
        return response()->json(['err' => true]);
        
    }
}
