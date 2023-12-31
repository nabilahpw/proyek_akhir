@extends('layouts.app')
  
@section('title', 'Edit Data Produk')
  
@section('contents')
    <h1 class="mb-0">Edit Produk</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="row mb-3">
                <div class="col">
                    <input type="file" name="gambar_produk" class="form-control" placeholder="FOTO PRODUK" value="{{ $product->gambar_produk }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="nama_produk" class="form-control" placeholder="NAMA PRODUK" value="{{ $product->nama_produk }}">
                </div>
                <div class="col">
                    <input type="text" name="harga" class="form-control" placeholder="HARGA" value="{{ $product->harga }}">
                </div>
                <div class="col">
                    <input type="text" name="jenis" class="form-control" placeholder="JENIS (PO / NON PO)" value="{{ $product->jenis }}">
                </div>
            </div>
        </div>
            <div class="row">
                <div class="d-grid">
                    <button class="btn btn-warning">Update</button>
                </div>
            </div>
    </form>
@endsection