<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Http\Request; 

class PostsController extends Controller
{
    use HasFactory;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post = Post::factory()->count(4)->create();
            
        if($post) {
            return redirect('/dashboard');
        }
    }

    
 
}
