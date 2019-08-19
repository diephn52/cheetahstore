<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Product;
use App\Comment;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin'); //Them sau auth:admin de rang buot login khi login vao admin page
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin');
    }

    // Search
    public function getSearch(Request $request) {
        $result = $request->result;
        $data['keyword'] = $result;
        $result = str_replace(' ', '%', $result);
        $data['items'] = Product::where('name','like','%'.$result.'%')->get();
        
       
        return view('adminSearch', $data);
    }

    public function getComment()
    {
       
        $comments = Comment::all();

        return view('comment')->withComments($comments);
    }
    public function getUsers()
    {

        return view('admin');
    }
}
