<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::latest()->with(['category','tags','image'])->get();
        // $posts = Post::latest()->with(['category','tags','image'])->paginate(5);
        $categories=Category::all();
        $tags=Tag::all();
        return view('frontend.home.index',compact('posts','categories','tags'));
    }
}