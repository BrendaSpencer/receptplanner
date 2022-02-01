<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class inlogController extends Controller
{
    public function __construct(){
        $this->middleware(['guest']);
    }

   public function index(){
    return view('auth.login');
   }

   public function store(Request $request){
      
    $this->validate($request,[
        'email' =>'required|email',
        'password' =>'required',
    ]);
    if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
        return back()->with('status','Invalid login details');
    }
    return redirect()->route("home");
}
}
