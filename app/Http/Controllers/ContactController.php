<?php

namespace App\Http\Controllers;

use App\Mail\SendClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $product_id = $request->product_id;
        $product_name = $request->product_name;
        $product_prise = $request->product_prise;
        $phone = $request->phone;

        Mail::to('antialkogol333@gmail.com')->send(new SendClass($product_id, $product_name, $product_prise, $phone));
        flash()->success('Order successfully sent!')->important();
        return redirect()->action('ProductController@show', $product_id);
    }
}
