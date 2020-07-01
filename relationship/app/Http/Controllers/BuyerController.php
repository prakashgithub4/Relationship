<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use Auth;

class BuyerController extends Controller
{
    //
    public function index(){


    	return view('buyer');
    }
    public function createAdddress(Request $request){
           $data = $request->all();
           $addressinfo =  array(
           	'pincode'=>$data['pin'],
           	'area'=>$data['area'],
           	'city'=>$data['city'],
           	'country'=>$data['country'],
           	'description'=>$data['address'],
           	'user_id'=>Auth::id()
           	);
          $address = Address::create($addressinfo);
          

           
    }
}
