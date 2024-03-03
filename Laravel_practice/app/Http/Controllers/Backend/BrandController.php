<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Image;

class BrandController extends Controller
{
    //
    public function index()
    {
        $cats = Category::all();
        return view('backend.pages.brand.add', compact("cats"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand_name' => 'required',
            'cat_id' => 'required',
        ]);

        if ($request->image) {
            $image = $request->file('brand_image');
            $customName = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/brand/' . $customName);
            Image::make($image)->resize(300, 200)->save($location);
        } else {

        }
    }
}
