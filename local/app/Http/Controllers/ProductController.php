<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Http\UploadedFile;
use Illuminate\Http\File;


use App\SubCategory;
use App\Product;


use Session;
use Auth;
use Image;
use Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Display a view of all of our sub-category. It will also have a form to create a new sub-category
        
        $products = Product::paginate(3);
        $subcategories = SubCategory::all();
    
        return view('products.index')->withSubcategories($subcategories)->withProducts($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$subcategories = SubCategory::all();
        $products = Product::all();

        return view('products.create')->withSubcategories($subcategories)->withProducts($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the data
        $this->validate($request, array(
            'name'        		=> 'required|max:100',
            'id_sub_category' 	=> 'required|integer',
            'unit_price'		=> 'required',
            'promotion_price'	=> 'required',
            'featured_image' 	=> 'sometimes|image',
            'color' 			=> 'required',
            'size' 				=> 'required',
            'SKU' 				=> 'required|max:100',
            'material' 			=> 'required|max:100',
            'gender'			=> 'required|max:10',
            'isNew' 			=> 'required',
            'isSale' 			=> 'required'

        ));
        // Store in the database
        $product = new Product;

        $product->name = $request->name;
        $product->id_sub_category = $request->id_sub_category;
        $product->unit_price = $request->unit_price;
        $product->promotion_price = $request->promotion_price;

        // save our image
        if($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = storage_path('images/' . $filename);

            Image::make($image)->resize(1500, 960)->save($location); //Phải thêm getRealPath() để đổi đường dẫn đến file cần lưu.
        
            $product->image = $filename; //De su dung lai sau nay, sau khi save vao database
        }

        $product->color = $request->color;
        $product->size = $request->size;
        $product->SKU = $request->SKU;
        $product->material = $request->material;
        $product->gender = $request->gender;
        $product->isNew = $request->isNew;
       	$product->isSale = $request->isSale;   

        $product->save();

        Session::flash('success', 'New Product has been created');

        return redirect()->route('products.index', $product->id); //products.index
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show')->withProduct($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // // Find the product in the database adn save as a var
        $product = Product::find($id);
        $subcategories = SubCategory::all();
        $cats = array();
        foreach ($subcategories as $subcategory) {
            $cats[$subcategory->id] = $subcategory->name;
        }

        // Return the view and pass in the var we previously created
        return view('products.edit')->withProduct($product)->withSubcategories($cats);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the data
        $product = Product::find($id);
        
        $this->validate($request, array(
            'name'        => 'required|max:100',
            'id_sub_category' => 'required|integer',
            'unit_price' => 'required',
            'promotion_price' => 'required',
            'featured_image' => 'image',
            'color' => 'required',
            'size' => 'required',
            'SKU' => 'required|max:100',
            'material' => 'required|max:100',
            'gender' => 'required|max:10',
            'isNew' => 'required',
            'isSale' => 'required'
            
        ));

        // Save the data to the database
        $product = Product::find($id);
        
        $product->name = $request->input('name');
        $product->id_sub_category = $request->input('id_sub_category');
        $product->unit_price = $request->input('unit_price');
        $product->promotion_price = $request->input('promotion_price');

        if($request->hasFile('featured_image')) { 
            // Add the new photo          
            $image = $request->file('featured_image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = storage_path('images/' . $filename);

            Image::make($image->getRealPath())->resize(1500, 960)->save($location); //Phải thêm getRealPath() để đổi đường dẫn đến file cần lưu.

            $oldFilename = $product->image;
            // Update the database
            $product->image = $filename; 
            // Delete the old photo
            Storage::delete($oldFilename);
        }

        $product->color = $request->input('color');
        $product->size = $request->input('size');
        $product->SKU = $request->input('SKU');
        $product->material = $request->input('material');
        $product->gender = $request->input('gender');
        $product->isNew = $request->input('isNew');
        $product->isSale = $request->input('isSale');

        $product->save();

        // Set flash data with success mesage
        Session::flash('success', 'This content was successfully saved'); 
        // Redirect with flash data to products.show
        return redirect()->route('products.index', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();
        Storage::delete($product->image);

        Session::flash('success', 'The content was successfully deleted.');
        return redirect()->route('products.index', $product->id);
    }
}
