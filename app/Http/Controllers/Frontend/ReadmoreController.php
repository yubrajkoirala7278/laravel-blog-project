<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ReadmoreController extends Controller
{
    public function index(Post $post){
        // dd($post);
        return view('frontend.readmore.index',compact('post'));
    }
}
