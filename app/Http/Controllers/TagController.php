<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:32',
        ]);
        $tag = new Tag;
        $tag->name = $request->name;

        $tag->save();

        return redirect()->back() ->with('alert', 'Tag '.$tag->name.' uspešno dodat...');

    }
}
