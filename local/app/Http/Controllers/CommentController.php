<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;
use App\SubCategory;
use App\Slide;
use App\Product;
use App\User;
use App\Comment;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }    

    public function postComment(Request $request, $id)
    {
    	$comment = new Comment;
    	$comment->name = $request->name;
    	$comment->email = $request->email;
    	$comment->content = $request->content;
    	$comment->id_product = $id;

    	$comment->save();
    	return back();
    }
}
