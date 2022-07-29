<?php

namespace App\Http\Controllers;

use App\Models\Post;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Guest.Posts', [
            'title' => 'Semua Prestasi Sekolah',
            "posts" => Post::query()->where('category_id', '=', 1)->where('is_published', true)->latest()->paginate(7)
        ]);
    }
    public function index1()
    {
        return view('Guest.Posts', [
            'title' => 'Semua Kegiatan',
            "posts" => Post::query()->where('category_id', '=', 3)->where('is_published', true)->latest()->paginate(7)
        ]);
    }
    public function index2()
    {
        return view('Guest.Posts', [
            'title' => 'Semua Pengumuman',
            "posts" => Post::query()->where('category_id', '=', 4)->where('is_published', true)->latest()->paginate(7)
        ]);
    }
    public function index3()
    {
        return view('Guest.Posts', [
            'title' => 'Semua Berita',
            "posts" => Post::query()->where('category_id', '=', 2)->where('is_published', true)->latest()->paginate(7)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('Guest.Post', [
            "title" => $post->title,
            "post" => $post
        ]);
    }
}
