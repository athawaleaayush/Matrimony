<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }  
      

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }



    public function registration()
    {
        return view('auth.registration');
    }
      

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
      //to insert data in users table 
      return User::create([
      	'username' => $data['first_name'],
        'first_name' => $data['first_name'],
        'middle_name' => $data['middle_name'],
        'last_name' => $data['last_name'],
        'gender' => $data['gender'],
        'dateofbirth' => $data['dateofbirth'],
        'contact_number' => $data['contact_number'],
        'email' => $data['email'],
        'hobby' => $data['hobby'],
        'education' => $data['education'],
        'occupation' => $data['occupation'],
        'annual_income' => $data['annual_income'],
        'password' => Hash::make($data['password']),
        'token' => Str::random(60)
      ]);
    }    
    

    public function dashboard()
    {
    	$find_gender = 0;
    	if(isset(Auth::user()->gender) && Auth::user()->gender == 1){
    		$find_gender = 2;
    	}else{
    		$find_gender = 1;
    	}
    	$list = User::where('gender','=',$find_gender)->get();
   
        if(Auth::check()){
            return view('dashboard',compact('list'));
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
} 