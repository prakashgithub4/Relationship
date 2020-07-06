<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Phone;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home2');
    }
    public function seller(){
          return view('home');
    }
    public function posts(){
      
        $user = Phone::find(1)->user;
        $users = User::all();
        $user_post=User::find(11)->posts;

     
        return view('post',compact('user','user_post'));
    }
}
