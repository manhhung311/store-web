<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryReq;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorys = Category::get()->toArray();
        return view("UI.categorys", ['categorys' => $categorys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryReq $request)
    {
        //
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->route("categorys");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = Category::where('id', '=', $id)->get()[0];
        return view("UI.category", ["user"=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryReq $request, $id)
    {
        //
        $Update  = Category::find($id);
        $name = $request->name;
        $Update->name = $name;
        $Update->update();
        return redirect()->route("categorys");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = Category::findOrFail($id);
        $product = Product::where('idCategory', $category->id)->get();
        if($product == null || $product->toArray() == []) {
            $category->delete();
        }
        return redirect()->route("categorys");
    }
}
