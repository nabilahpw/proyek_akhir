<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembeli = Pembeli::orderBy('created_at', 'DESC')->get();
  
        return view('pembeli.index', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pembeli::create($request->all());
 
        return redirect()->route('pembeli')->with('success', 'Data Pembeli Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pembeli = Pembeli::findOrFail($id);
  
        return view('pembeli.show', compact('pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pembeli = Pembeli::findOrFail($id);
  
        return view('pembeli.edit', compact('pembeli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pembeli = Pembeli::findOrFail($id);
  
        $pembeli->update($request->all());
  
        return redirect()->route('pembeli')->with('success', 'Data Pembeli Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembeli = Pembeli::findOrFail($id);
  
        $pembeli->delete();
  
        return redirect()->route('pembeli')->with('success', 'Data Pembeli Berhasil Dihapus');
    }
}
