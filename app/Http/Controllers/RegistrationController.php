<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('Dashboard.Pages.Auth.Registration.Index', [
            'title' => 'Daftar Pengguna',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'email|unique:users',
            'password' => 'required|min:6|max:255|same:Konfirmasi_Password',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        Alert::toast('Pendaftaran Berhasil! Silahkan Login.', 'success');

        return redirect('/login');
    }
}
