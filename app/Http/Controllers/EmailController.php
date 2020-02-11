<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Email;
use App\Mail\WelcomeMail;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|max:255|unique:emails,email',
        ]);
        $email = new Email;
        $email->email = $request->email;
        $email->name = $request->name;
        $email->notes = $request->notes;

        $email->save();

        Mail::to($request->email)
                 ->send(new WelcomeMail());



        return redirect()->back() ->with('alert', $request->name.' je uspešno dodat.');

    }
    public function qstore(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|max:255|unique:emails,email',
        ]);
        $email = new Email;
        $email->email = $request->email;
        $email->name = 'quick';
        $email->notes = 'quick';

        $email->save();
        Mail::to($request->email)
                 ->send(new WelcomeMail());
        return redirect()->back() ->with('alert', 'Email: '.$request->email.' uspešno dodat.');

    }


}
