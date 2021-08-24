<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            'Mon super titre',
            'Mon super second titre'
        ];
        return view('articles', compact('posts'));
    }
}
