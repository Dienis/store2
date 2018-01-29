<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Page;

use Illuminate\Http\Request;

class PageController extends Controller
{

  public function index()
  {
      $pages = Page::all()->where('slug', 'about-us');
      return view('pages.about_us', compact('pages'));
  }

}
