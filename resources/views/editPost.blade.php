@extends('layouts.app')

@section('content')

<form action="/update" method="POST">
  @csrf
  <div class="container bg-white border rounded p-2">
    <label for="label" class="col-sm-2 col-form-label">Edit Post</label>
    <!-- <div class="col"> -->
      <div class="row mb-2">
        <input 
          class="form-control" 
          name="title"
          type="text" 
          placeholder="Title" 
          aria-label="default input example" 
          value="{{ $post->title }}"
        >
      </div>
      <div class="row mb-3">
        <textarea 
          class="form-control" 
          name="body" 
          id="form_bodyText" 
          placeholder="Body" 
          rows="3"
        >
          {{ $post->content }}
        </textarea>
      </div>
    <!-- </div> -->
    <input name="post_id" value="{{ $post->id }}" hidden>
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>

@endsection
