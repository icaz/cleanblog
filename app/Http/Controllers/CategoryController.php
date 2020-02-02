<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('guest.category',compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:32',
        ]);
        $category = new Category;
        $category->name = $request->name;

        $category->save();

        return redirect()->back() ->with('alert', 'Kategorija '.$category->name.' uspešno dodata...');

    }
}