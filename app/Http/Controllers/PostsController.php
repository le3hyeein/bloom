<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2000',
        ]);

        $post = New Post;
        $post->deskripsi= $request->deskripsi;
        $post->user_id = auth()->user()->id;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $destinationaPath = public_path('/image');
            $file->move($destinationaPath, $fileName);
            $post->image = $fileName;
        }

        $post->save();
        return back()->withNotif('Berhasil menambahkan foto');
    }
}
