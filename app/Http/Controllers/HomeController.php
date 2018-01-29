<?php

namespace App\Http\Controllers;

use App\Product;
use App\Slide;

use Illuminate\Http\Request;

class HomeController extends Controller
{

  public function home()
  {
      $products = Product::orderBy('created_at', 'desc')->limit(3)->get();
      $featured = Product::all()->where('featured', 1);
      $sliders = Slide::all();

      return view('home', compact('featured', 'sliders', 'products'));
  }

}
