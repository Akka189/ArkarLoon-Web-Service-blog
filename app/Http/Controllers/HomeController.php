<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::approved()->published()->latest()->take(3)->get();
        $users = User::all();
        return view('index',compact('posts','users'));
    }

    public function blog($slug)
    {
        $categories = Category::all();
        $posts = Post::all();
        $tags = Tag::all();
        $post = Post::where('slug',$slug)->first();
        $blogKey = 'blog_' . $post->id;

        if (!Session::has($blogKey)) {
            $post->increment('view_count');
            Session::put($blogKey,1);
        }
        $popularposts = Post::approved()->published()->orderBy('view_count','desc')->take(3)->get();
        return view('single-post',compact('categories','posts','tags','post','popularposts'));
    }

    public function allpost()
    {
        $categories = Category::all();
        $posts = Post::approved()->published()->latest()->paginate(3);
        $tags = Tag::all();
        return view('all-post',compact('posts','categories','tags'));
    }
}
