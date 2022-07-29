@extends('Dashboard.Layouts.Index')
@section('Pages')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $title }}</h1>
    </div>
    <div class="table-responsive col-12">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col" class="text-center">No.</th>
                    <th scope="col" class="text-center">Judul Informasi</th>
                    <th scope="col" class="text-center">Kategori</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td class="text-center">
                            <a href="/dashboard/publikasi/{{ $post->slug }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <form action="/dashboard/publikasi/{{ $post->slug }}" method="POST" class="d-inline">
                                @method('put')
                                @csrf
                                <button class="badge bg-success border-0"
                                    onclick="return confirm('Apakah Anda yakin akan mempublikasi informasi dari {{ $post->title }}?')"><span
                                        data-feather="external-link"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
