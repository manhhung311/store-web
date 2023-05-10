<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Product;
use App\Models\ImportBill;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyReq;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $companys = Company::get()->toArray();
        return view("UI.companys", ['companys' => $companys]);
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
    public function store(CompanyReq $request)
    {
        //
        $category = new Company();
        $category->name = $request->name;
        $category->address = $request->address;
        $category->save();
        return redirect()->route("companys");
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
        $company = Company::where('id', '=', $id)->get()[0];
        return view("UI.company", ["company"=>$company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyReq $request, $id)
    {
        //
        $Update  = Company::find($id);
        $name = $request->name;
        $Update->name = $name;
        $Update->address = $request->address;
        $Update->update();
        return redirect()->route("companys");
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
        $company = Company::findOrFail($id);
        $product = Product::where('idCompany', $company->id)->get();
        if($product == null|| $product->toArray() == []) {
            $company->delete();
        }
        return redirect()->route("companys");
    }
}
