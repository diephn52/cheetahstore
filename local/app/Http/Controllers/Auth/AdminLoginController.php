<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
	public function __construct() //Them vao this function
	{
		$this->middleware('guest:admin', ['except' => ['logout']]); //Thêm except, second parameter
	}

    public function showLoginForm()
    {
    	return view('auth.admin-login');
    }

    public function login(Request $request) //Thay doi content function
    {
    	//Validate the form data
   		$this->validate($request, [
   			'email'    => 'required|email',
   			'password' => 'required|min:6'
   		]);

    	//Attempt to log the user in
    	if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    		//If successful, the redirect to their intended location
    		return redirect()->intended(route('admin.dashboard'));
    	}
    	
    	//If unsucessful, then redirect back to the login with form data
    	return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    
    //Copy từ file AutheticatesUsers qua, không cần sử dụng variable (Request $request)
    public function logout()
    {
        Auth::guard('admin')->logout();//Đổi $this thành Auth::guard('admin')
        return redirect('/');
    }
    
}
