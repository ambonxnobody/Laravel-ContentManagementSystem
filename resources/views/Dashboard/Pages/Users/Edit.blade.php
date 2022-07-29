@extends('Dashboard.Layouts.Index')
@section('Pages')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $title }}</h1>
    </div>
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/pengguna/{{ $user->id }}" class="mb-5"
            enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Pengguna</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required
                    autofocus value="{{ old('name', $user->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                    name="username" required value="{{ old('username', $user->username) }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-Mail Pengguna</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                    value="{{ old('email', $user->email) }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            @can('admin')
                <div class="mb-3">
                    <label class="form-label me-3">Peran</label>

                    <input type="radio" class="btn-check" name="is_admin" id="admin" autocomplete="off" value="1"
                        @if ($user->is_admin === 1) checked @endif>
                    <label class="btn btn-outline-dark" for="admin">Admin</label>

                    <input type="radio" class="btn-check" name="is_admin" id="user" autocomplete="off" value="0"
                        @if ($user->is_admin === 0) checked @endif>
                    <label class="btn btn-outline-secondary" for="user">User</label>
                </div>
            @endcan

            <div class="mb-3">
                <label for="password" class="form-label">Password Pengguna</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password">
                <div class="form-text">Jika tidak ingin mengganti password, kolom tidak perlu diisi!</div>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <a href="/dashboard/pengguna" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
