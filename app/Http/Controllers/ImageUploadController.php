<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class ImageUploadController extends Controller
{
    public function index() {
        return view("index");
    }

    public function imageUpload(Request $request) {

        print_r($request->file('images'));
        // file validation
        $this->validate($request, [
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // if validation success
        // $images       =       array();
        // if($files     =       $request->file('images')) {
        //     foreach($files as $file) {
        //         $name     =    time().'.'.$file->getClientOriginalExtension();
        //         $destinationPath = public_path('/uploads');
        //         if($file->move($destinationPath, $name)) {
        //             $images[]   =   $name;
        //             $saveResult   =   File::create(['image_name' => $name]);
        //         }
        //     }
        //     return back()->with("success", "File uploaded successfully");
        // }
    }
}
