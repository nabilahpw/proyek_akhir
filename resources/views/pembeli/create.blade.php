@extends('layouts.app')
  
@section('title', 'Create Pembeli')
  
@section('contents')
    <h1 class="mb-0">Tambah Data Pembeli</h1>
    <hr />
    <form action="{{ route('pembeli.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="id_pembeli" class="form-control" placeholder="ID PEMBELI">
            </div>
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="NAMA">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="no_hp" class="form-control" placeholder="NO HP">
            </div>
            <div class="col">
                <textarea class="form-control" name="alamat" placeholder="ALAMAT"></textarea>
            </div>
            <div class="col">
                <input type="text" name="email" class="form-control" placeholder="EMAIL">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
@endsection