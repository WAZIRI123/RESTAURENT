<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;

class PostController extends Controller
{
    //
    public function addPost(){
        return view('add-post');
    }
    public function createPost(Request $request){
        $post=new Post();
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save();
        return back()->with('Post_created','Post has been created successfuly!');

    }
    public function getPost(){
        $posts=Post::orderBy('id','Desc')->get();
        return view('posts', compact('posts'));
    }
}
