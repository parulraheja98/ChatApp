<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(Request $request){
    return redirect('/Login');
    }

  public function getAbout(){
    return view('about');
  }

  public function getContact(){
    return view('contact');
  }

}
