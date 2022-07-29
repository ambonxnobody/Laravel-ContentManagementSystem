@extends('Dashboard.Layouts.Index')
@section('Pages')
    <div class="container">
        <div class="row my-3">
            <div class="col-12">
                <h1 class="mb-3">{{ $title }} "{{ $post->title }}"</h1>
                <div class="mb-5">
                    <a href="/dashboard/informasi" class="btn btn-success"><span data-feather="arrow-left"></span>
                        Kembali</a>
                    <a href="/dashboard/informasi/{{ $post->slug }}/edit" class="btn btn-warning"><span
                            data-feather="edit"></span>
                        Ubah</a>
                    <form action="/dashboard/informasi/{{ $post->slug }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger"
                            onclick="return confirm('Apakah Anda yakin menghapus informasi dari {{ $post->title }}?')"><span
                                data-feather="trash"></span> Hapus</button>
                    </form>
                </div>
                @if ($post->image)
                    <div style="max-height: 350px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid">
                    </div>
                @else
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="350"
                        xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: {{ $post->category->name }}" preserveAspectRatio="xMidYMid slice"
                        focusable="false">
                        <title>{{ $post->category->name }}</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="48%" y="50%" fill="#dee2e6"
                            dy=".3em">{{ $post->category->name }}</text>
                    </svg>
                @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
