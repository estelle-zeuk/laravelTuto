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

    public function show($id)
    {
        $posts = [
            1=>"Mon article 1",
            2=>"Mon article 2"
        ];

        $post = $posts[$id] ?? 'Pas d\'articles disponible à cet index';
        //dd($post);
        return view('article', compact('post'));
    }

    public function contact()
    {
        return view ('contact');
    }
}
