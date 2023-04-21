@extends('layouts.app')


@section('content')
<div class="container">
    @foreach($posts as $post)
        <x-post :post="$post" />
    @endforeach
</div>
@endsection
