<?php

namespace App\Http\Controllers;

use App\Http\requests\StoreKategoriRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryControllery extends Controller
{
    //
    public function index()
    {
        $kategori = Category::all();

        return view('admin.kategoribuku', ['kat' => $kategori]);
    }

    public function store(StoreKategoriRequest $request)
    {
        $param = $request->validated();

        Category::create($param);

        return redirect()
        ->route('admin.inkategori')
        ->with('succes', 'Data Berhasil di Inputkan');
}
}
