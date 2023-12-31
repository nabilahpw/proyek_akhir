<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();
  
        return view('products.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'nama_produk' => 'required|string|max:200|min:3',
                'harga' => 'required|string|min:3',
                'jenis' => 'required|string|max:7',
                'gambar_produk' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1024'
            ]);
            $nama_gambar = time() . '_' . $request->file('gambar_produk')->getClientOriginalName();
            $upload = $request->gambar_produk->storeAs('public/fotoproduk', $nama_gambar);
            $path = Storage::url($upload);
        Product::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'jenis' => $request->jenis,
            'gambar_produk' => $path
        ]);
        
        return redirect()->route('products')->with('success', 'Produk Berhasil Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->update($request->all());
  
        return redirect()->route('products')->with('success', 'Produk Telah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->delete();
  
        return redirect()->route('products')->with('success', 'Produk Berhasil Dihapus');
    }
}
