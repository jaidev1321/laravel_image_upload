<?php

namespace App\Http\Controllers;

use App\FileModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;



class FileUpload extends Controller
{
    //

	function exec(Request $req){
		echo "hello";
		if($req->hasFile('image')){
			echo  "file ";
			if($req->file('image')->isValid()){
				$validated = $req->validate([
					'image' => 'mimes:jpeg,png|max:1014',
				]);
				$extension = $req->image->extension();
				$filename = uniqid().".".$extension;
				$req->image->storeAs('/public', $filename);
				$url = Storage::url($filename);
				$file = FileModel::create([
                    'file' => $url,
                ]);
                Session::flash('success', "Success!");
                return \Redirect::back();
			}
		}
	}

	 public function view () {
        $images = FileModel::all();
        return view('view_uploads')->with('images', $images);
    }
}
