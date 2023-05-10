<?php

namespace App\Http\Controllers;

use App\Models\ExportBill;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return dd(ExportBill::get());
        $donBan = ExportBill::where('date', '>', date('Y-m-d')." 00:00:00.0")->get();
        $donBanAll = ExportBill::get();
        $TodayRevenue = 0;
        foreach ($donBan as $don) {
            # code...
            $TodayRevenue += (int)($don->price);
        }
        $tongDoanhThu = 0;
        foreach ($donBanAll as $don) {
            # code...
            $tongDoanhThu += (int)($don->price);
        }
        $chart = [];
        $year = date('Y');


        for($i = 0; $i < 5; $i++) {
            $money = 0;
            $data = ExportBill::where('date', '>',($year)."-01-01"." 00:00:00.0")->where('date', '<', ($year)."-12-31"." 00:00:00.0")->get();
            foreach($data as $bill) {
                $money += (int) $bill->price;
            }
            $chart[$i] = ["năm ".$year, $money];
            $year = $year -1;
        }

        return view("UI.index", ["TodayRevenue"=> $TodayRevenue, "tongDoanhThu"=> $tongDoanhThu, "DoanhThuCacNam"=> $chart]);
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
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}
