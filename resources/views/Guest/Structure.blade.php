@extends('Guest.Layouts.Index')
@section('Pages')
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn"
        style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/img/dhuha.jpg') }}) center center no-repeat; background-size: cover;"
        data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">{{ $title }}</h1>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <img src="{{ asset('assets/img/struktur.jpeg') }}" alt="">
        {{-- <p class="text-muted text-sm">Struktur Organisasi MI-MH Gogourung</p> --}}
    </div>
@endsection
