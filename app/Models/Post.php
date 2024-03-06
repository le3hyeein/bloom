<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function index()
    {
        $posts = Post::all();

        return view('home', compact('posts'));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
