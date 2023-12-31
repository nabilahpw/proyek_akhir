@extends('layouts.app')
  
@section('title', 'Create Produk')
  
@section('contents')
    <h1 class="mb-0">Tambah Data Produk</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="file" name="gambar_produk" class="form-control" placeholder="FOTO PRODUK">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama_produk" class="form-control" placeholder="NAMA PRODUK">
            </div>
            <div class="col">
                <input type="text" name="harga" class="form-control" placeholder="HARGA">
            </div>
            <div class="col">
                <input type="text" name="jenis" class="form-control" placeholder="JENIS (PO / NON PO)">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
@endsection