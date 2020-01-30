<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
        ]);
        $email = new Email;
        $email->email = $request->email;
        $email->name = $request->name;
        $email->notes = $request->notes;

        $email->save();

        return redirect()->back() ->with('alert', $request->name.' je uspešno dodat.');

    }
    public function qstore(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
        ]);
        $email = new Email;
        $email->email = $request->email;
        $email->name = 'quick';
        $email->notes = 'quick';

        $email->save();

        return redirect()->back() ->with('alert', 'Email: '.$request->email.' uspešno dodat.');

    }


}
