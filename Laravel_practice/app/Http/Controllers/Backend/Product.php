<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelProduct;

class Product extends Controller
{
    //
    public function index()
    {
        return view('backend.pages.product.add');
    }
    public function insert(Request $request)
    {
        $product = new ModelProduct;

        $product->name = $request->name;
        $product->des = $request->des;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->status = $request->status;
        $product->save();
        return back();
    }

    public function show()
    {
        $products = ModelProduct::all();
        return view('backend.pages.product.manage', compact('products'));

    }
    public function delete($id)
    {
        $product = ModelProduct::finde($id);
        $product->delete();
        return back();
    }




}
