<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryController extends Controller
{
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.Pages.Categories.Index', [
            'title' => 'Data Kategori',
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.Pages.Categories.Create', [
            'title' => 'Tambah Data Kategori',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories',
            'slug' => 'required|unique:categories',
        ]);

        Category::create($validatedData);

        Alert::toast('Kategori Baru Telah Ditambahkan!', 'success');

        return redirect('/dashboard/kategori');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $kategori)
    {
        return view('Dashboard.Pages.Categories.Edit', [
            'title' => 'Ubah Kategori',
            'kategori' => $kategori,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $kategori)
    {
        $validatedData = Validator::make($request->all(), [
            'name' => [
                'required',
                'max:255',
                Rule::unique('categories')->ignore($kategori->id),
            ],
            'slug' => [
                'required',
                'max:255',
                Rule::unique('categories')->ignore($kategori->id),
            ],
        ])->validate();

        Category::where('id', $kategori->id)->update($validatedData);

        Alert::toast('Kategori Berhasil Diubah!', 'success');

        return redirect('/dashboard/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $kategori)
    {
        Category::destroy($kategori->id);

        Alert::toast('Kategori Berhasil Dihapus!', 'success');

        return redirect('/dashboard/kategori');
    }
}
