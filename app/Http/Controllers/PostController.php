<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function page(Request $request)
    {
        //return Post::with('tags')->get();
        //return Comment::with('user', 'post')->get();
        //return User::with('post')->get();
        return view('post');
    }



    function index(Request $request)
    {
        return Post::with('user')->get();

        //return DB::table('users')->get();
        //return $post;
        //return view('post', ['post' => $post]);
    }

    function show($id)
    {

        $singlePost = Post::with('user', 'comment')->find($id);
        return view('single-post', ['post' => $singlePost]);

        //return DB::table('users')->get();
        //return $post;

    }
}
