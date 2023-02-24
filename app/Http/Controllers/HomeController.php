<?php

namespace App\Http\Controllers;
use App\Models\HomeModel;

use Illuminate\Http\Request;
class HomeController extends Controller
{
   public function index(){
      $HomeModel = new HomeModel();
        return view('index')-> with('content', $HomeModel-> content1());
   }
   public function about(){
      $HomeModel = new HomeModel();
         return view('about')->with('About', $HomeModel-> about());
   }
   public function contact(){
      $HomeModel = new HomeModel();
      return view('contact')->with('Contact', $HomeModel-> contacts());
   }
   public function menu(){
      $HomeModel = new HomeModel();
      return view('menu')-> with('Menu', $HomeModel-> menu());
}

}