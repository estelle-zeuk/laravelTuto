@extends('layout.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <span>{{$post->image ? $post->image->path : 'Pas d\'image pour ce post' }}</span>
<hr>
    <!-- @foreach ($post->comments as $comment)
        <div>{{ $comment->content }}</div>
    @endforeach -->

    @forelse ($post->comments as $comment )
        <div>{{ $comment->content }} | créé le {{ $comment->created_at->format('d/m/y')}}</div>
    @empty
        <div>Aucun commentaire!</div>
    @endforelse
    <hr>
    @forelse ($post->tags as $tag)
        <span>Tag: {{$tag->name}}</span>
    @empty
        <span>Aucun tag associé à ce post</span>
    @endforelse

@endsection