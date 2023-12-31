@extends('layouts.app')
  
@section('title', 'Tampilkan Data PembeliAN')
  
@section('contents')
    <h1 class="mb-0">Detail Transaksi</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">KODE TRANSAKSI</label>
            <input type="text" name="kodetransaksi" class="form-control" placeholder="KODE TRANSAKSI" value="{{ $transaksi->kodetransaksi }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">NAMA PRODUK</label>
            <input type="text" name="nama_produk" class="form-control" placeholder="NAMA PRODUK" value="{{ $transaksi->nama_produk }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">JUMLAH BARANG</label>
            <input type="text" name="jumlah" class="form-control" placeholder="JUMLAH BARANG" value="{{ $transaksi->jumlah }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">TOTAL HARGA</label>
            <input type="text" name="totalharga" class="form-control" placeholder="TOTAL HARGA" value="{{ $transaksi->totalharga }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">ID PEMBELI</label>
            <input type="text" name="id_pembeli" class="form-control" placeholder="ID PEMBELI" value="{{ $transaksi->id_pembeli }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $transaksi->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $transaksi->updated_at }}" readonly>
        </div>
    </div>
@endsection