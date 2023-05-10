<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Register;
use App\Models\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view("UI.users", ['users'=> $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("UI.signup");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Register $request)
    {
        //
        $credentials = array(
            'email'    => $request->email,
            'password' => $request->password,
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
        );
        $user = Sentinel::registerAndActivate( $credentials );
        $role = Sentinel::findRoleByName('admin');
        $role->users()->attach($user);
        return redirect()->route('users');
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
        $user = User::where('id', '=', $id)->get()[0];
        return view("UI.user", ["user"=>$user]);
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
        $user = User::where('id', '=', $id)->get()[0];
        return view("UI.user", ["user"=>$user]);
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
        $user = User::where('id', '=', $id)->get()[0];
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        if($request->password != null || $request->password != "") {
            $user->password = $request->password;
        }
        $user->save();
        return redirect()->route("users");
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
        $user = User::find($id);
        $user->delete();
        return redirect()->route("users");
    }
}
