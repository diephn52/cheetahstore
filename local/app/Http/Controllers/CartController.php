<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Session;
use Auth;
use Image;
use Storage;

use Cart;
use Mail;

use App\Category;
use App\SubCategory;
use App\Slide;
use App\Product;
use PDF;




class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function getAddCart($id)
    {
    	
        $products = Product::find($id);
        Cart::add(['id' => $id, 'name' => $products->name, 'qty' => 1, 'price' => $products->unit_price, 'weight' => 1, 'options' => ['img' => $products->image ]]);
        return redirect('cart/show');
    }
    public function getShowCart() {
    
    	$data['items'] = Cart::content();
    	$data['total'] = Cart::total();
        return view('cart.index',$data);
    }
    public function getDeleteCart($id){
    	if($id=='all'){
    		Cart::destroy();
    	} else{
    		Cart::remove($id);
    	}

    	return back();
    }
    public function getUpdateCart(Request $request){
    	Cart::update($request->rowId, $request->qty);
    }
    public function postComplete(Request $request){
    	
      	$data['info'] = $request->all();
    	$email = $request->email;
    	$data['total'] = Cart::total();
    	$data['cart'] = Cart::content();
    	Mail::send('cart.email', $data, function($message) use ($email){
    		$message->from('cheetahstore2019@gmail.com', 'CheetahStore');
    		$message->to($email, $email);
            $message->cc('diephn52@gmail.com', 'Diep Huynh');
    		$message->subject('Confirm the CheetahStore purchase invoice');
    	});
    	Cart::destroy();
    	return redirect('cart/complete');
    }
    public function getComplete(){

    	return view('cart.complete');
    }


       public function getInvoice(){
        
        $data['total'] = Cart::total();
        $data['cart'] = Cart::content();

        $pdf = PDF::loadView('cart.invoice',$data);
        return $pdf->download('invoice.pdf');
    }


}
