<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Http\UploadedFile;
use Illuminate\Http\File;


use App\Slide;

use Session;
use Auth;
use Image;
use Storage;

class SliderController extends Controller
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
        // Display a view of all of our sliders. It will also have a form to create a new sliders
        
        $sliders = Slide::paginate(5);
            
        return view('sliders.index')->withSliders($sliders);
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
            'featured_image' => 'sometimes|image'
        ));
        //Store in the database
        $slider = new Slide;

        // save our image
        if($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = storage_path('images/' . $filename);

            Image::make($image)->resize(1920, 718)->save($location); //Phải thêm getRealPath() để đổi đường dẫn đến file cần lưu.
        
            $slider->image = $filename; //De su dung lai sau nay, sau khi save vao database
        }

        $slider->save();

        Session::flash('success', 'New Slider has been created');

        return redirect()->route('sliders.index', $slider->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider = Slide::find($id);
        return view('sliders.show')->withSlider($slider);
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
        $slider = Slide::find($id);
        // Return the view and pass in the var we previously created
        return view('sliders.edit')->withSlider($slider);
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
        $slider = Slide::find($id);
        
        $this->validate($request, array(
            'featured_image' => 'image'
        ));

        // Save the data to the database
        $slider = Slide::find($id);
        

        if($request->hasFile('featured_image')) { 
            // Add the new photo          
            $image = $request->file('featured_image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = storage_path('images/' . $filename);

            Image::make($image->getRealPath())->resize(1920, 718)->save($location); //Phải thêm getRealPath() để đổi đường dẫn đến file cần lưu.

            $oldFilename = $slider->image;
            // Update the database
            $slider->image = $filename; 
            // Delete the old photo
            Storage::delete($oldFilename);
        }

        $slider->save();

        // // Set flash data with success mesage
        Session::flash('success', 'This content was successfully saved'); 
        // Redirect with flash data to categories.show
        return redirect()->route('sliders.index', $slider->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slide::find($id);

        $slider->delete();
        Storage::delete($slider->image);

        Session::flash('success', 'The content was successfully deleted.');
        return redirect()->route('sliders.index', $slider->id);
    }
}
