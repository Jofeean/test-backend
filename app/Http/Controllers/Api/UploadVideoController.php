<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UploadService;

class UploadVideoController extends Controller
{
    public function upload_video(Request $request){
        $request->validate([
            'file' => 'required|mimetypes:video/avi,video/mp4,video/mpeg,video/quicktime'
        ]);
        return (new UploadService())->upload($request);
    }
}
