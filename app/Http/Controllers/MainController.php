<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class MainController extends Controller
{
    function show()
    {
        $posts = Post::orderBy('id', 'desc')->get();

        return view('main', ['posts' => $posts]);
    }

    function newPostView()
    {
        return view('newPost');
    }

    function editPostView($id)
    {
        $post = Post::find($id);

        return view('editPost', ['post' => $post]);
    }
}
