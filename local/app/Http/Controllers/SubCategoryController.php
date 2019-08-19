<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Http\UploadedFile;
use Illuminate\Http\File;


use App\SubCategory;
use App\Category;

use Session;
use Auth;
use Image;
use Storage;

class SubCategoryController extends Controller
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
        
        $subcategories = SubCategory::paginate(5);
        $categories = Category::all();

    
        return view('sub-categories.index')->withCategories($categories)->withSubcategories($subcategories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $categories = Category::all();
    //     return view('sub-categories.create')->withCategories($categories);
    // }

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
            'name'        => 'required',
            'id_category' => 'required|integer',
            'featured_image' => 'sometimes|image'
        ));
        // Store in the database
        $subcategory = new SubCategory;

        $subcategory->name = $request->name;
        $subcategory->id_category = $request->id_category;

        // save our image
        if($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = storage_path('images/' . $filename);

            Image::make($image)->resize(400, 400)->save($location); //Phải thêm getRealPath() để đổi đường dẫn đến file cần lưu.
        
            $subcategory->image = $filename; //De su dung lai sau nay, sau khi save vao database
        }

        $subcategory->save();

        Session::flash('success', 'New Sub-Category has been created');

        return redirect()->route('sub-categories.index', $subcategory->id); //sub-categories.index
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategory = SubCategory::find($id);
        return view('sub-categories.show')->withSubcategory($subcategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // // Find the sub-category in the database adn save as a var
        $subcategory = SubCategory::find($id);
        $categories = Category::all();
        $cats = array();
        foreach ($categories as $category) {
            $cats[$category->id] = $category->name;
        }

        // Return the view and pass in the var we previously created
        return view('sub-categories.edit')->withSubcategory($subcategory)->withCategories($cats);
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
        $subcategory = SubCategory::find($id);
        
        $this->validate($request, array(
            'name' => 'required',
            'id_category' => 'required|integer',
            'featured_image' => 'image'
        ));

        // Save the data to the database
        $subcategory = SubCategory::find($id);
        
        $subcategory->name = $request->input('name');
        $subcategory->id_category = $request->input('id_category');

        if($request->hasFile('featured_image')) { 
            // Add the new photo          
            $image = $request->file('featured_image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = storage_path('images/' . $filename);

            Image::make($image->getRealPath())->resize(400, 400)->save($location); //Phải thêm getRealPath() để đổi đường dẫn đến file cần lưu.

            $oldFilename = $subcategory->image;
            // Update the database
            $subcategory->image = $filename; 
            // Delete the old photo
            Storage::delete($oldFilename);
        }

        $subcategory->save();

        // Set flash data with success mesage
        Session::flash('success', 'This content was successfully saved'); 
        // Redirect with flash data to categories.show
        return redirect()->route('sub-categories.index', $subcategory->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = SubCategory::find($id);

        $subcategory->delete();
        Storage::delete($subcategory->image);

        Session::flash('success', 'The content was successfully deleted.');
        return redirect()->route('sub-categories.index', $subcategory->id);
    }
}
