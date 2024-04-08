<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category){
        $posts = Post::with('category')->where('category_id', $category->id)->latest()->paginate(2);
         //    fetch all tags
         $tags = Tag::latest()->with('posts')->get();
        return view('frontend.category.index',compact('posts','category','tag'));
    }
}
