<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;
use App\Admin;
use Session;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.admin_dashboard');
    }

    public function settings(){
        $adminDetails = Admin::where('email',Auth::guard('admin')->user()->email)->first();
        return view('admin.admin_settings')->with(compact('adminDetails'));
    }

    public function login(Request $request){
        if ($request->isMethod('post')) {
           $data = $request->all();
        //    $validateData = $request->validate([
        //        'email'      =>  'required|email|max:255',
        //        'password'   =>  'required'

        //    ]);
        $rules = [
            'email'  => 'required|email|max:255',
            'password'=> 'required',
        ];
        $customMessages = [
            'email.required' => 'Email is required',
            'email.email'     =>'Valid Email is required',
            'password.required' =>'Password is required',
        ];
        $this->validate($request, $rules, $customMessages);
        //    echo '<pre>'; print_r( $data);die; 
            if (Auth::guard('admin')->attempt(['email'=> $data['email'],'password'=> $data['password']])) {
                return redirect('admin/dashboard');
            }else{
                $request->session()->flash('error_message', 'Invalid Email or Password');
                return redirect()->back();
            }
        }
        return view('admin.admin_login');
    }

    public function logout(){
        Auth::guard('admin')->logout();
       return redirect('admin/');
    }

}
