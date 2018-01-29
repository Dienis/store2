<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Mail\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSetting extends Controller
{
    public function contactform(MailRequest $request)
    {
        $name = $request->name;
        $email = $request->email;
        $msg = $request->msg;

        Mail::to('antialkogol333@gmail.com')->send(new MailClass($name, $email, $msg));
        return response()->json(['responseText' => 'Success!'], 200);
    }
}
