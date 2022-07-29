<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PublishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.Pages.Publish.Index', [
            'title' => 'Informasi yang Belum Dipublikasi',
            'posts' => Post::query()->where('is_published', 0)->latest()->paginate(10)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $publikasi)
    {
        return view('Dashboard.Pages.Publish.Show', [
            'title' => 'Detail Informasi' . $publikasi->title,
            'post' => $publikasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Post $publikasi)
    {
        $validatedData['is_published'] = 1;
        $validatedData['published_at'] = Carbon::now();

        Post::where('id', $publikasi->id)->update($validatedData);

        Alert::toast('Informasi Berhasil di Publikasi!', 'success');

        return redirect('/dashboard/publikasi');
    }
}
