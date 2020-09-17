<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ApiPostsController extends Controller
{
    public function listResouceUserPosts(Request $request)
    { 
        return Post::where('user_id', $request->user()->id)->get();
    }
}
