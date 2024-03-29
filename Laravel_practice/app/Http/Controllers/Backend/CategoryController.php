<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.category.add');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cat = new Category;
        $cat->name = $request->name;
        $cat->des = $request->des;
        $cat->status = $request->status;

        $cat->save();
        return response()->json([
            'msg' => 'Data Submitted Successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $cats = Category::all();
        return response()->json([
            'status' => '200',
            'allData' => $cats
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $cat = Category::find($id);
        return response()->json([
            "allData" => $cat
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $cat = Category::find($id);
        $cat->name = $request->name;
        $cat->des = $request->des;
        $cat->status = $request->status;

        $cat->update();
        return response()->json([
            'msg' => 'Data Updated Successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = Category::find($id);
        $product->delete();

        return response()->json([
            "msg" => "Data successfully Deleted"
        ]);
    }

    public function active($id)
    {
        $product = Category::find($id);
        $product->status = '2';
        $product->update();
        return response()->json([
            "msg" => "Status successfully Changed "
        ]);

    }
    public function inactive($id)
    {
        $product = Category::find($id);
        $product->status = '1';
        $product->update();
        return response()->json([
            "msg" => "Status successfully Changed "
        ]);

    }
}
