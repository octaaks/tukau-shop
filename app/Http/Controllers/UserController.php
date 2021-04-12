<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        //
        $users = User::all();
        return view('manageUser', ['users'=> $users]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $user = User::find($id);
        if (!$user) {
            return redirect('/tukau/administrator/user')->with('error', 'User tidak ada!');
        }
        return view('editUser', ['user'=> $user]);
    }
    
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