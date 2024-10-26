<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DetailsController extends Controller
{
   public function index(){ 
        $details = DB::table('resume')->where('id',1)->first();
        // DD($details->phone);
        return view('welcome',['details'=> $details]);
  
}
}