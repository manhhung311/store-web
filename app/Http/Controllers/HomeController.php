<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login;
use ProductService;
use App\Models\Product;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Sentinel;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use ExportBill;

class HomeController extends Controller
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
        $product = Product::all();
        return view('home', ['products' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return dd(Product::all());
        //dd($this->productService->getAll());
        return view("UI.signin");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Login $request)
    {
        //
        try {
            $remember = (bool) $request->get('remember', false);
            if (Sentinel::authenticate($request->all(), $remember)) {
                return redirect()->intended("admin/home");
            } else {
                $err = "Tên đăng nhập hoặc mật khẩu không đúng!";
            }
        } catch (NotActivatedException $e) {
            $err = "Tài khoản của bạn chưa được kích hoạt";
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            $err = "Tài khoản của bạn bị block trong vòng {$delay} sec";
        }
        return redirect()->back()
            ->withInput()
            ->with('err', $err);
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
