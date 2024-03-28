<?php

namespace App\Service;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostService
{
    private $imageService;
    public function __construct() {
        $this->imageService = new ImageService();
    }

    // ===========POST(Add)=================
    public function addService($request)
    {
        DB::transaction(function () use ($request) {   //->roll back if not inserted in relationship table
            // adding data in parent table
            $post = Post::create([
                'user_id' => auth()->id(),
                'caregory_id' => $request['category'],
                'title' => $request['title'],
                'description' => $request['description'],
                'status' => $request['status'],
            ]);
            // if image exist
            if (isset($request['filename'])) {
                $this->imageService->saveImage($post, $request['filename'], 'post');
            }
            // add data with many to many relation
            $post->tags()->attach($request['tags']);
        });
    }
    // =====================================

    // ==============GET All==================
    public function fetchPost($with = [])
    {
        $posts = Post::latest()->with($with)->get();
        return $posts;
    }
    // =======================================

    // =========fetch single post===========
    public function view($post)
    {
        $singlePost = Post::find($post->id);
        return $singlePost;
    }
    // =====================================

    // ===========UPDATE POST==============
    public function updateService($request, $post)
    {
        // updating data in parent table
        $post->update([
            'user_id' => auth()->id(),
            'caregory_id' => $request['category'],
            'title' => $request['title'],
            'description' => $request['description'],
            'status' => $request['status'],
        ]);
        // updating data with many to many relation
        $post->tags()->sync($request['tags']);
    }
    // ====================================

    // =============DELETE=================
    public function deletePost($post)
    {
        if (!empty($post['filename'])) {
            $this->imageService->deleteImage($post['filename']);
        }
        //if not used cascadeOnDelete() then you should detach from many to many relation else you can directly use delete only
        $post->tags()->detach();
        $post->delete();
    }
    // ====================================
}
