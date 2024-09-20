<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index', [
            'pengguna' => User::all()
        ]);
    }
    public function create()
    {
        return view('user.create', [
            'users' => User::all()
        ]);
    }
    
    public function insertdata(Request $request)
    {
        
        User::create($request->all());
        // return $request->input();
        return redirect('/user')->with('success', 'New user data with the name "' .$request -> name. '"    has been successfully saved!');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //Menampilkan Form Edit
        $user = User::find($id);
        if (!$user) return redirect()->route('user.edit');
        return view('user.edit', [
            'user' => $user
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    //Mengedit Data User
    $users = User::find($id);
    $users->name = $request->name;
    $users->email = $request->email;
    if ($request->password) $users->password = bcrypt($request->password);
    $users->roles = $request->roles;
    $users->aktif = $request->aktif;
    $users->save();
    return redirect('/user')->with('success', 'User Data Update Successfully');

    }
    /**
     * Remove the specified resource from storage.
     */
    public function hapususer($id) 
    { 
        $users = User::find($id);
        $users->delete();
        return redirect('/user')->with('success', 'The User Data Successfully Delete!');
    }

}
