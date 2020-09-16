<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    { 
        $userPosts = Post::where('user_id', $request->user()->id)->get();
        
        return view('dashboard', [
            'userType' => $request->user()->user_type,
            'userPosts' => $userPosts
        ]);
    }
}
