<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'notes' => 'required|max:255',
        ]);
        $contact = new Contact;
        $contact->email = $request->email;
        $contact->name = $request->name;
        $contact->notes = $request->notes;

        $contact->save();

        return redirect()->back() ->with('alert', 'Hvala na interesovanju, javićemo vam se...');

    }
}
