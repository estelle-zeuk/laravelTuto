<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::find(1);
        //dd($post);
        /* $post->update([
            'title'=>'Mon titre',
            'content'=>'Mon contenu'
        ]);
        dd('édité!'); */
        $posts = Post::all();
        return view('articles', compact('posts'));
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        //dd($request->avatar->store('avatars'));
       /*  $post = new Post();
        $post->title = $request->title;
        $post->content=$request->content;
        $post->save();
        dd('Post créé!'); */

        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
    }

    public function show($id)
    {
        $post = Post::findorFail($id);
        /* $posts = [
            1=>"Mon article 1",
            2=>"Mon article 2"
        ];

        $post = $posts[$id] ?? 'Pas d\'articles disponible à cet index'; */
        //dd($post);
        return view('article', compact('post'));
    }

    public function contact()
    {
        return view ('contact');
    }

    public function register()
    {
        $post = Post::find(11);
        $video = Video::find(1);

        $comment1 = new Comment(['content'=>'mon premier commentaire']);
        $comment2 = new Comment(['content'=>'mon secondcommentaire']);
        $comment3 = new Comment(['content'=>'mon dernier commentaire']);

        $post->comments()->saveMany([
            $comment1,
            $comment2
        ]);

        $video->comments()->save($comment3);
    }
}
