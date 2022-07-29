<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $profil)
    {
        if (auth()->user()->id !== $profil->id) {
            abort(403);
        }
        return view('Dashboard.Pages.Auth.Profile.Index', [
            'title' => 'Profil',
            'user' => $profil,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $profil)
    {
        if (auth()->user()->id !== $profil->id) {
            abort(403);
        }
        $validatedData = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'username' => [
                'required',
                'max:255',
                Rule::unique('users')->ignore($profil->id),
            ],
            'email' => [
                'email',
                'max:255',
                Rule::unique('users')->ignore($profil->id),
            ],
            'password' => 'nullable|same:konfirmasi_password',
        ])->validate();

        $validatedData['password'] = Hash::make($request->password);

        User::where('id', $profil->id)->update($validatedData);

        Alert::toast('Identitasmu Berhasil Diubah!', 'success');

        return redirect('/dashboard');
    }
}
