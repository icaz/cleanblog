<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique|max:255',
        ]);



        return redirect()->back() ->with('alert', $request->email);
                // The blog post is valid...
    }


}
