<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.Pages.Users.Index', [
            'title' => 'Data Pengguna',
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $pengguna)
    {
        return view('Dashboard.Pages.Users.Edit', [
            'title' => 'Ubah Data Pengguna',
            'user' => $pengguna,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $pengguna)
    {
        $validatedData = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'username' => [
                'required',
                'max:255',
                Rule::unique('users')->ignore($pengguna->id),
            ],
            'email' => [
                'email',
                'max:255',
                Rule::unique('users')->ignore($pengguna->id),
            ],
            'is_admin' => 'boolean',
        ])->validate();

        $validatedData['password'] = Hash::make($request['password']);

        User::where('id', $pengguna->id)->update($validatedData);

        Alert::toast('Data Pengguna Berhasil Diubah!', 'success');

        return redirect('/dashboard/pengguna');
    }
}
