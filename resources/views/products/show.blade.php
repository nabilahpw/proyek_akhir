@extends('layouts.app')
  
@section('title', 'Tampilkan Data Produk')
  
@section('contents')
    <h1 class="mb-0">Detail Produk</h1>
    <hr />
    <div class="row">
        <div class="row mb-3">
            <div class="col">
            <img src="public/storage/fotoproduk/{{ $product->gambar_produk }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="loading" srcset="">            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama_produk" class="form-control" placeholder="NAMA PRODUK" value="{{ $product->nama_produk }}"readonly>
            </div>
            <div class="col">
                <input type="text" name="harga" class="form-control" placeholder="HARGA" value="{{ $product->harga }}"readonly>
            </div>
            <div class="col">
                <input type="text" name="jenis" class="form-control" placeholder="JENIS (PO / NON PO)" value="{{ $product->jenis }}"readonly>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection