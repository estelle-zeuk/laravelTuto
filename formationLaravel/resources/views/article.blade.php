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

    <hr>
    @if ($post->imageArtist)
        <span>Nom de l'article de l'image: {{ $post->imageArtist->name }}</span>
        @else
        <h5>Pas d'artiste lié à cette image de post</h5>
    @endif
    
    
@endsection