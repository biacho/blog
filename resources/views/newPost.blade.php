@extends('layouts.app')

@section('content')

<form action="/create" method="POST">
  @csrf
  <div class="container bg-white border rounded p-2">
    <label for="label" class="col-sm-2 col-form-label">New Post</label>
    <!-- <div class="col"> -->
      <div class="row mb-2">
        <input class="form-control" name="title" type="text" placeholder="Title" aria-label="default input example">
      </div>
      <div class="row mb-3">
        <textarea class="form-control" name="body" id="form_bodyText" placeholder="Body" rows="3"></textarea>
      </div>
    <!-- </div> -->
    <button type="submit" class="btn btn-primary">Create</button>
  </div>
</form>

@endsection
