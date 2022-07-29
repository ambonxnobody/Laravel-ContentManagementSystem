<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublishController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegistrationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Guest.Index', [
        'title' => 'Beranda',
        'posts' => Post::query()->where('is_published', true)->latest()->limit(10)->get(),
    ]);
});
Route::get('/about', function () {
    return view('Guest.About', [
        'title' => 'Tentang Kita'
    ]);
});
Route::get('/structure', function () {
    return view('Guest.Structure', [
        'title' => 'Struktur Organisasi'
    ]);
});

Route::get('/prestasi-sekolah', [GuestController::class, 'index']);
Route::get('/kegiatan', [GuestController::class, 'index1']);
Route::get('/pengumuman', [GuestController::class, 'index2']);
Route::get('/berita', [GuestController::class, 'index3']);

Route::get('/informasi/{post:slug}', [GuestController::class, 'show']);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);

    Route::get('/daftar', [RegistrationController::class, 'index']);
    Route::post('/daftar', [RegistrationController::class, 'store']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('Dashboard.Pages.Index', [
            'title' => 'Dashboard',
        ]);
    });

    Route::get('/dashboard/informasi/checkSlug', [PostController::class, 'checkSlug']);
    Route::resource('/dashboard/informasi', PostController::class);

    Route::resource('/dashboard/profil', ProfileController::class)->only(['edit', 'update']);

    Route::post('/dashboard/logout', [LoginController::class, 'logout']);
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard/kategori/checkSlug', [CategoryController::class, 'checkSlug']);
    Route::resource('/dashboard/kategori', CategoryController::class)->except('show');

    Route::resource('/dashboard/pengguna', UserController::class)->only(['index', 'edit', 'update']);

    Route::resource('/dashboard/publikasi', PublishController::class)->only(['index', 'show', 'update']);
});
