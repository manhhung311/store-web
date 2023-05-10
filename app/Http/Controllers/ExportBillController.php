<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\ExportBill;
use Illuminate\Http\Request;
use App\Http\Requests\BillReq;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class ExportBillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bills = [];
        $findBills = ExportBill::get();
        $i = 0;
        foreach ($findBills as $bill) {

            $bills[$i++] = [
                $bill->toArray(),
                User::find($bill->idUser)->toArray(),
                Product::find($bill->idProduct)->toArray()
            ];
        }
        $product = Product::get();
        $user = Sentinel::getUser();
        // dd($bills);
        return view("UI.exportBills", ['bills'=> $bills, "products"=> $product, "user"=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BillReq $request)
    {
        $product = Product::find($request->idProduct);
        $bill = new ExportBill();
        $bill->idUser = Sentinel::getUser()->id;
        $bill->idProduct = $product->id;
        $bill->quantity = $request->quantity;
        $bill->price = ((int)$product->price) * (int)$request->quantity;
        $bill->date = date("Y-m-d h:m:s");
        $bill->save();
        return redirect()->route("exportBills");

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
        $product = Product::get();
        $user = Sentinel::getUser();
        $bill = ExportBill::find($id);
        return view("UI.exportBill", ["bill" => $bill , "products"=> $product, "user"=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BillReq $request, $id)
    {
        //
        $product = Product::find($request->idProduct);
        $bill  = ExportBill::findOrFail($id);
        $bill->idProduct = $product->id;
        $bill->quantity = $request->quantity;
        $bill->price = ((int)$product->price) * (int)$request->quantity;
        $bill->date = date("Y-m-d h:m:s");
        $bill->save();
        return redirect()->route("exportBills");
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
        $bill = ExportBill::findOrFail($id);
        $bill->delete();
        redirect()->route("exportBills");
    }
}
