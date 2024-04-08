<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // fetch post with category,tags and image relation
        $posts = Post::latest()->with(['category', 'tags', 'image'])->paginate(10);

        // fetch categories with counts
        $categories = Category::latest()->withCount('posts')->get();

        //    fetch all tags with counts
        $tags = Tag::latest()->withCount('posts')->get();

        return view('frontend.home.index', compact('posts', 'tags', 'categories'));
    }
}
