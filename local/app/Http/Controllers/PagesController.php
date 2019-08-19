<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Category;
use App\SubCategory;
use App\Slide;
use App\Product;
use App\User;
use App\Comment;
use DB;


class PagesController extends Controller
{
    // Nav-bar
    public function getHome() {
        $data['products'] = Product::where('isNew',1)->get();
       	return view('home', $data);   	    	
    }

    // women, men, kids pages.
    public function getPages($id) {
        $data['cate'] = Category::find($id);
    
        $data['items'] = DB::table('category')
                        ->join('sub_category', 'category.id', '=', 'sub_category.id_category')
                        ->join('products', 'sub_category.id', '=', 'products.id_sub_category')
                        ->where('sub_category.id_category', $id)->orderBy('products.id','desc')->get();

        return view('pages', $data);
    }

    // About page
    public function getAbout() {

        return view('about');
    }


    // Search
    public function getSearch(Request $request) {
        $result = $request->result;
        $data['keyword'] = $result;
        $result = str_replace(' ', '%', $result);
        $data['items'] = Product::where('name','like','%'.$result.'%')->get();
        
       
        return view('search', $data);
    }

    // Show many Products
    public function getProducts($id)
    {   
        $data['category'] = Category::all();
        $data['subCategory'] = SubCategory::find($id);
        $data['products'] = DB::table('category')
                            ->join('sub_category', 'category.id', '=', 'sub_category.id_category')
                            ->join('products', 'sub_category.id', '=', 'products.id_sub_category')
                            ->where('products.id_sub_category', $id)->orderBy('products.id','desc')->get();

        return view('showProducts', $data);
    }

    
    // Show 1 detail Product
    public function getProduct($id) {
        $data['product'] = Product::find($id);
        $data['comments'] = Comment::where('id_product', $id)->get();    
        return view('showProductDetail', $data);
    }
}

 