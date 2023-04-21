<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class PostController extends Controller
{
    function create(Request $request)
    {
        $newPost = new Post;
        $newPost->author_id = Auth::id();
        $newPost->title = $request->title;
        $newPost->content = $request->body;
        $newPost->save();

        return redirect('/');
    }

    function update(Request $request)
    {
        $post = Post::find($request->post_id);
        // dd($post);

        $post->update([
            'title' => $request->title,
            'content' => $request->body
        ]);

        return redirect('/');
    }

    function delete(Request $request)
    {   
        $post = Post::find($request->post_id);
        $post->delete();

        return redirect('/');
    }
}
