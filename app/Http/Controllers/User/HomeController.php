<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\User\post;
use App\Model\User\tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('blog/home');
    }
    public function show()
    {
       $tags = tag::all();
       $posts = post::where('status',1)->orderBy('created_at','DESC')->paginate(8);
       return view('blog/blog',compact('posts','tags'));
    }

    public function detail()
    {
        return view('blog/show');
    }
    
    public function tag(tag $tag)
    {
        $posts = $tag->posts();
        return view('blog.blog',compact('posts'));
    }
     public function about()
    {
        return view('blog/about');
    }
}
