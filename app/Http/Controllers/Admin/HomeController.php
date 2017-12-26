<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\User\post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
    	return view('admin/home');
    }
}
