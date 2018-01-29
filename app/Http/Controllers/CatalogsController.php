<?php

namespace App\Http\Controllers;

use App\Catalog;

use Illuminate\Http\Request;

class CatalogsController extends Controller
{

    public function index()
    {
        $catalogs = Catalog::all();

        return view('catalogs.index', compact('catalogs'));
    }

    public function show($id)
    {
        $catalog = Catalog::find($id);
        return view('catalogs.show', compact('catalog'));
    }

}
