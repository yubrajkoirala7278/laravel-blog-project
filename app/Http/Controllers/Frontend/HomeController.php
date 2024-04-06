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

        // fetch categories with counts
        $categories = Category::withCount('posts')->get();
        // $categories=Category::all(); 
        // $categories=Category::with('posts')->get();

        $tags=Tag::withCount('posts')->get();
        // $tags=Tag::all();
        // $tags=Tag::with('posts')->get();

        return view('frontend.home.index',compact('posts','tags','categories'));
    }
}