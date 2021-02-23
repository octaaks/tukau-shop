<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        return view('manageUser', ['users'=> $users]);
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
        $user = User::find($id);
        if (!$user) {
            return redirect('/tukau/administrator/user')->with('error', 'User tidak ada!');
        }
        return view('editUser', ['user'=> $user]);
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
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'address' => 'required'
        ]);

        $user = User::find($id);
        // dd($user);
        if (!$user) {
            return redirect('/tukau/administrator/user')->with('error', 'User tidak ada!');
        }
        $user -> name           = $request-> name;
        $user -> email          = $request-> email;
        $user -> no_hp          = $request-> no_hp;
        $user -> address        = $request-> address;
        $user->save();

        
        return redirect('/tukau/administrator/user')->with('success', 'Data saved succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $user = User::find($id);
        
        if (!$user) {
            return redirect('/tukau/administrator/user/')->with('error', 'User tidak ada!!');
        }
        $user->delete($request);
        return redirect('/tukau/administrator/user/')->with('success', 'User telah dihapus!');
    }
}
