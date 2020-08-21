<?php

namespace App\Http\Controllers;

use App\Posts;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $users = auth()->user()->following()->pluck('profiles.user_id');
        $posts = Posts::whereIn('user_id', $users)->latest()->paginate(3);
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function show(\App\Posts $post){
        //One way of doing this
        // return view('posts.show', [
        //     'post'=>$post,
        // ]);
        
        // Another way of doing this
        return view('posts.show', compact('post'));
        
    }

    public function store(){
        
        $data = request()->validate([
            'caption'   =>'required',
            'image'     =>['required', 'image'],
        ]);

        //Saving image in storage or on s3 server
        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        // \App\Post::create([
        //     'caption'=>$data['caption'],
        //     'image'=>$data['image'],
        // ]);

        // \App\Post::create($data);

        //To get user id from authenticate user then we have to use relationship method
        auth()->user()->posts()->create([
            'caption'=>$data['caption'],
            'image'=>$imagePath,
        ]);

        return redirect('/profile/' . auth()->user()->id);

    }
}