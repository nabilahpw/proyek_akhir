@extends('layouts.app')
  
@section('title', 'Edit Data Pembeli')
  
@section('contents')
    <h1 class="mb-0">Edit Pembeli</h1>
    <hr />
    <form action="{{ route('pembeli.update', $pembeli->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">ID PEMBELI</label>
                <input type="text" name="id_pembeli" class="form-control" placeholder="ID PEMBELI" value="{{ $pembeli->id_pembeli }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">NAMA</label>
                <input type="text" name="nama" class="form-control" placeholder="NAMA" value="{{ $pembeli->nama }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">NO HP</label>
                <input type="text" name="no_hp" class="form-control" placeholder="NO HP" value="{{ $pembeli->no_hp }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">ALAMAT</label>
                <textarea class="form-control" name="alamat" placeholder="ALAMAT">{{ $pembeli->alamat }}</textarea>
            </div>
            <div class="col mb-3">
                <label class="form-label">EMAIL</label>
                <input type="text" name="email" class="form-control" placeholder="EMAIL" value="{{ $pembeli->email }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection