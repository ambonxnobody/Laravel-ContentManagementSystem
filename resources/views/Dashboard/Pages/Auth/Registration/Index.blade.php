<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran - Admin MI-MH Gogourung</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
</head>

<body class="text-center">
    @include('sweetalert::alert')
    <main class="form-signin w-100 m-auto">
        <form action="/daftar" method="POST">
            @csrf
            <img class="mb-4" src="{{ asset('favicon.png') }}" alt="" width="150" height="150">
            <h1 class="h3 mb-3 fw-normal">Pendaftaran</h1>

            <div class="form-floating">
                <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"
                    id="name" name="name" placeholder="Nama Pengguna Baru" required>
                <label for="name">Nama Pengguna Baru</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating relative">
                <input type="text" value="{{ old('username') }}"
                    class="form-control @error('username') is-invalid @enderror" id="username" name="username"
                    placeholder="Username" required>
                <label for="username">Username</label>
                @error('username')
                    <div class="invalid-tooltip">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating relative">
                <input type="email" value="{{ old('email') }}"
                    class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                    placeholder="E-Mail" required>
                <label for="email">E-Mail</label>
                @error('email')
                    <div class="invalid-tooltip">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating relative">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-tooltip">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating relative mb-5">
                <input type="password" class="form-control" id="Konfirmasi_Password" name="Konfirmasi_Password"
                    placeholder="Konfimasi Password" required>
                <label for="Konfirmasi_Password">Konfimasi Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-success mb-3" type="submit">Daftar</button>

            <a href="/" class="w-100 btn btn-lg btn-info">Home</a>
            <p class="mt-5 mb-3 text-muted">&copy; 2022 | MI-MH Gogourung. All rights
                reserved.</p>
        </form>
    </main>
</body>

</html>
