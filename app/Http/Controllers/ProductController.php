<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductReq;
use App\Models\Category;
use App\Models\Product;
use App\Models\Company;
use App\Models\ExportBill;
use App\Models\ImportBill;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = [];
        $findProduct = Product::get();
        $i = 0;
        foreach ($findProduct as $product) {

            $products[$i++] = [
                $product->toArray(),
                Category::where("id", "=", $product->idCategory)->get()[0]->toArray(),
                Company::where("id", "=", $product->idCompany)->get()[0]->toArray()
            ];
        }
        // dd($products);
        $companys = Company::get();
        $categorys = Category::get();
        return view("UI.products", ["products" => $products, "companys" => $companys, "categorys" => $categorys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $companys = Company::get();
        $categorys = Category::get();

        return view('UI.product', ["companys" => $companys, "categorys" => $categorys]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductReq $request)
    {
        //
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->idCompany = $request->idCompany;
        $product->idCategory = $request->idCategory;
        $product->save();
        return redirect()->route("products");
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
        $product = [];
        $product = Product::where('id', '=', $id)->get();
        $companys = Company::get();
        $categorys = Category::get();
        return view("UI.productShow", ["companys" => $companys, "categorys" => $categorys]);
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
        $product = Product::find($id);
        $companys = Company::get();
        $categorys = Category::get();
        return view("UI.product", ["categorys"=>$categorys, "companys"=> $companys, "product"=> $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductReq $request, $id)
    {
        //
        $product  = Product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->idCompany = $request->idCompany;
        $product->idCategory = $request->idCategory;
        $product->save();
        return redirect()->route("products");
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
        $product = Product::findOrFail($id);
        $eBill = ExportBill::where('idProduct', $product->id)->get();
        $iBill = ImportBill::where('idProduct', $product->id)->get();
        if(($eBill->toArray() == [] ) && ($iBill->toArray() == [])) {
            $product->delete();
        }
        return redirect()->route("products");
    }
}
