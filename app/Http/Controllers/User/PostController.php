<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Model\User\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   	public function post(post $post)
    {
    	
    	return view('blog.show',compact('post'));
    }

    public function getAllPosts()
    {
    	
    	return $posts = post::with('posts')->where('status',1)->orderBy('created_at','DESC')->Paginate(8);
    }
}
