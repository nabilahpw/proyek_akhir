@extends('layouts.app')
  
@section('title', 'Edit Data Pembelian')
  
@section('contents')
    <h1 class="mb-0">Edit Transaksi Pembelian</h1>
    <hr />
    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">KODE TRANSAKSI</label>
                <input type="text" name="kodetransaksi" class="form-control" placeholder="KODE TRANSAKSI" value="{{ $transaksi->kodetransaksi }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">NAMA PRODUK</label>
                <input type="text" name="nama_produk" class="form-control" placeholder="NAMA PRODUK" value="{{ $transaksi->nama_produk }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">JUMLAH BARANG</label>
                <input type="text" name="jumlah" class="form-control" placeholder="JUMLAH BARANG" value="{{ $transaksi->jumlah }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">TOTAL HARGA</label>
                <input type="text" name="totalharga" class="form-control" placeholder="TOTAL HARGA" value="{{ $transaksi->totalharga }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">ID PEMBELI</label>
                <input type="text" name="id_pembeli" class="form-control" placeholder="ID PEMBELI" value="{{ $transaksi->id_pembeli }}">
            </div>
        </div>
            <div class="row">
                <div class="d-grid">
                    <button class="btn btn-warning">Update</button>
                </div>
            </div>
    </form>
@endsection