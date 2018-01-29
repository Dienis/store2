<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $news = Post::all();

        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $news = Post::find($id);
        return view('news.show', compact('news'));
    }

}
