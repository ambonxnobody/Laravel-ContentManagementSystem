@extends('Dashboard.Layouts.Index')
@section('Pages')
    <div class="container">
        <div class="row my-3">
            <div class="col-12">
                <h1 class="mb-3">{{ $title }} "{{ $post->title }}"</h1>
                <div class="mb-5">
                    <a href="/dashboard/publikasi" class="btn btn-success"><span data-feather="arrow-left"></span>
                        Kembali</a>
                    <form action="/dashboard/publikasi/{{ $post->slug }}" method="POST" class="d-inline">
                        @method('put')
                        @csrf
                        <button class="btn btn-success"
                            onclick="return confirm('Apakah Anda yakin mempublikasi informasi dari {{ $post->title }}?')"><span
                                data-feather="external-link"></span> Publikasi</button>
                    </form>
                </div>
                @if ($post->image)
                    <div style="max-height: 350px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid">
                @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
