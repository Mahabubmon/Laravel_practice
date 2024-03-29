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
        return redirect()->route('showproduct');
    }

    public function show()
    {
        $products = ModelProduct::all();
        return view('backend.pages.product.manage', compact('products'));

    }
    public function delete($id)
    {
        $product = ModelProduct::find($id);
        $product->delete();
        return back();
    }
    public function active($id)
    {
        $product = ModelProduct::find($id);
        $product->status = '2';
        $product->update();
        return back();
    }
    public function inactive($id)
    {
        $product = ModelProduct::find($id);
        $product->status = '1';
        $product->update();
        return back();
    }
    public function edit($id)
    {
        $product = ModelProduct::find($id);
        return view('backend.pages.product.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = ModelProduct::find($id);
        $product->name = $request->name;
        $product->des = $request->des;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->status = $request->status;
        $product->update();
        return redirect()->route('showproduct');
    }




}
