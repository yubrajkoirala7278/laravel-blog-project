<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'comment'=>'required',
        ]);
        try{
            if(!Auth::user()){
                return redirect()->back()->with('error','Please login to comment!!');
            }
            Comment::create([
                'comment'=>$request->comment,
                'post_id'=>$request->post_id,
                'user_id'=>Auth::user()->id
            ]);
            return redirect()->back()->with('success','Comment has been done!!');
        }catch(\Throwable $th){
            return back()->with('error',$th->getMessage());
        }
        
    }
}
