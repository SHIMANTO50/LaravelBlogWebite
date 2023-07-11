<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    function page(Request $request)
    {
        //return User::with('post')->get();
        return view('comment');
    }

    function commentRequest(Request $request)
    {

        //return Comment::create($request->input());
        return DB::table('comments')->insert($request->input());
    }
}
