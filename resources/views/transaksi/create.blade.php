@extends('layouts.app')
  
@section('title', 'Create Transaksi')
  
@section('contents')
    <h1 class="mb-0">Tambah Data Pembelian</h1>
    <hr />
    <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kodetransaksi" class="form-control" placeholder="KODE TRANSAKSI">
            </div>
            <div class="col">
                <input type="text" name="nama_produk" class="form-control" placeholder="NAMA PRODUK">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="jumlah" class="form-control" placeholder="JUMLAH BARANG">
            </div>
            <div class="col">
                <input type="text" name="totalharga" class="form-control" placeholder="TOTAL HARGA">
            </div>
            <div class="col">
                <input type="text" name="id_pembeli" class="form-control" placeholder="ID PEMBELI">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
@endsection