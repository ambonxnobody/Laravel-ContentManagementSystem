@extends('Guest.Layouts.Index')
@section('Pages')
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn"
        style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/img/dhuha.jpg') }}) center center no-repeat; background-size: cover;"
        data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">{{ $title }}</h1>
        </div>
    </div>
    <div class="container wow fadeIn" data-wow-delay="0.1s">
        @if ($posts->count())
            <div class="card mb-3">
                @if ($posts[0]->image)
                    <div style="max-height: 400px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                            class="img-fluid">
                    </div>
                @else
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="400" xmlns="http://www.w3.org/2000/svg"
                        role="img" aria-label="Placeholder: {{ $posts[0]->category->name }}"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>{{ $posts[0]->category->name }}</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="48%" y="50%" fill="#dee2e6"
                            dy=".3em">{{ $posts[0]->category->name }}</text>
                    </svg>
                @endif
                <div class="card-body text-center">
                    <h3 class="card-title"><a href="/informasi/{{ $posts[0]->slug }}"
                            class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                    <p>
                        <small class="text-muted">
                            Oleh: {{ $posts[0]->author->name }}
                            {{ $posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    <a href="/informasi/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-success">Baca
                        selengkapnya...</a>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    @foreach ($posts->skip(1) as $post)
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a
                                        href="/informasi/{{ $post->slug }}"
                                        class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}"
                                        alt="{{ $post->category->name }}" class="img-fluid">
                                @else
                                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                        class="card-img-top" alt="{{ $post->category->name }}">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p>
                                        <small class="text-muted">
                                            Oleh: {{ $post->author->name }}
                                            {{ $post->created_at->diffForHumans() }}
                                        </small>
                                    </p>
                                    <p class="card-text">{{ $post->excerpt }}</p>
                                    <a href="/informasi/{{ $post->slug }}" class="btn btn-success">Baca
                                        selengkapnya...</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <p class="text-center fs-4">Tidak ada {{ $title }} yang ditemukan.</p>
        @endif

        <div class="d-flex justify-content-center mt-5">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
