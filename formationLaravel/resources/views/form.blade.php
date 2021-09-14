@extends('layout.app')
@section('content')
    <h1>Créer un nouveau post</h1>
    <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title">
        <textarea name="content" cols="30" rows="10"></textarea>
        <p>Choose your monster's features:</p>
<!-- <div>
  <input type="checkbox" id="scales" name="scales"
         checked>
  <label for="scales">Scales</label>
</div>

<div>
  <input type="checkbox" id="horns" name="horns">
  <label for="horns">Horns</label>
</div>

<label for="avatar">Choose a profile picture:</label>

<input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg"> -->
        <button type="submit">Créer</button>
    </form>
@endsection