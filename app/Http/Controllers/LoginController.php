<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Sentinel::guest() == false){
            return redirect()->route('admin');
        }
        return view("UI.signin");
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
    public function store(Login $request)
    {
        //
        $credentials = array(
            'email'    => $request->email,
            'password' => $request->password,
        );

        $remember = $request->remember == 'On' ? true : false;

        try {
            if ($user = Sentinel::authenticate($credentials, $remember)) {

                Session::flash('success', __('auth.login_successful'));
                return redirect()->route('admin');
            } else {
                Session::flash('failed', __('auth.login_unsuccessful'));

                return redirect()->route('login');
            }
        } catch (ThrottlingException $ex) {
            Session::flash('failed', __('auth.login_timeout'));
            return redirect()->route('login');

        } catch (NotActivatedException $ex) {
            Session::flash('failed', __('auth.login_unsuccessful_not_active'));
            return redirect()->route('login');
        }
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
    public function destroy()
    {
        if(Sentinel::guest() == true)
            Sentinel::logout();
        return redirect()->route("home");
    }
}
