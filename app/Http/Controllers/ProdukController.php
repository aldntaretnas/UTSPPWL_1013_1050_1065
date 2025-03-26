<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateProdukRequest;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        return response(view('index', ['produk' => $produk]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response(view('produk.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $this->validate($request, [
            'kode' => 'required|string|max:255|unique:produk',
            'nama' => 'required|string|max:255',
            'harga' => ['nullable', 'numeric', 'regex:/^[+-]?(\d+\.\d+|\d+)$/'],
            'stock' => 'integer|min:0',
        ]);


        if (Produk::create($validatedData)) {
            return redirect(route('index'))->with('sukses', 'Ditambahkan!');
        }

        return redirect(route('kosong'));
    }
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return response(view('produk.edit', ['produk' => $produk]));
    }
    public function update(UpdateProdukRequest $request, $id)
    {
        $validatedData = $this->validate($request, [
            'kode' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'harga' => ['nullable', 'numeric', 'regex:/^[+-]?(\d+\.\d+|\d+)$/'],
            'stock' => 'integer|min:0',
        ]);

        $produk = Produk::findOrFail($id);
        if ($produk->update($validatedData)) {
            return redirect(route('index'))->with('sukses', 'Di-update!');
        }
    }
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);

        if ($produk->delete()) {
            return redirect(route('index'))->with('sukses', 'Terhapus!');
        }
        return redirect(route('index'))->with('error', 'Maaf, tidak dapat menghapus data!');
    }
}