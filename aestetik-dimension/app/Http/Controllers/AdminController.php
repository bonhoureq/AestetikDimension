<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showa()
    {
        return view('admin');
    }

    public function add(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required|max:100',
            'name' => 'required|max:45',
            'image' => 'required',
            'description' => 'required|max:255',
            'price' => 'required',
            'quantity' => 'required'
        ]);

        $image_name = $request->file('image')->getClientOriginalName();
        $image = $request->file('image')->storeAs("img", $image_name, 'public');
        $image_path = "storage/img/$image_name";

        $validated['image'] = $image_path;

        $x = Product::create($validated);

        return redirect()->back();
    }
}
