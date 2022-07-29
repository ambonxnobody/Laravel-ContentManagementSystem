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
                    <th scope="col" class="text-center">Nama Pengguna</th>
                    <th scope="col" class="text-center">Username</th>
                    <th scope="col" class="text-center">E-Mail</th>
                    <th scope="col" class="text-center">Role</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->name }}</td>
                        <td>{{ $post->username }}</td>
                        <td>{{ $post->email }}</td>
                        <td>{{ $post->is_admin ? 'Admin' : 'User' }}</td>
                        <td class="text-end">
                            <a href="/dashboard/pengguna/{{ $post->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
