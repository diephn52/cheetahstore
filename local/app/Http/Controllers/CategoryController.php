<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;

use Session;

class CategoryController extends Controller
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
        // Display a view of all of our categories. It will also have a form to create a new category
        $categories = Category::paginate(3);

        return view('categories.index')->withCategories($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     
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
            'name' => 'required|max:100'
        ));
        //Store in the database
        $category = new Category;

        $category->name = $request->name;

        $category->save();

        Session::flash('success', 'New Category has been created');

        return redirect()->route('categories.index', $category->id); //categories.index
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('categories.show')->withCategory($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Find the category in the database adn save as a var
        $category = Category::find($id);
        // Return the view and pass in the var we previously created
        return view('categories.edit')->withCategory($category);
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
        $this->validate($request, array(
            'name' => 'required|max:100'
        ));
        
        // Save the data to the database
        $category = Category::find($id);
        $category->name = $request->input('name');
        
        $category->save();

        // Set flash data with success mesage
        Session::flash('success', 'This name was successfully saved'); 
        // Redirect with flash data to categories.show
        return redirect()->route('categories.index', $category->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        $category->delete();

        Session::flash('success', 'The name was successfully deleted.');
        return redirect()->route('categories.index', $category->id);
    }
   
}
