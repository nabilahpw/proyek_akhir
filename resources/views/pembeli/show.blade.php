@extends('layouts.app')
  
@section('title', 'Tampilkan Data Pembeli')
  
@section('contents')
    <h1 class="mb-0">Detail Pembeli</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">ID PEMBELI</label>
            <input type="text" name="id_pembeli" class="form-control" placeholder="ID PEMBELI" value="{{ $pembeli->id_pembeli }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">NAMA</label>
            <input type="text" name="nama" class="form-control" placeholder="NAMA" value="{{ $pembeli->nama }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">NO HP</label>
            <input type="text" name="no_hp" class="form-control" placeholder="NO HP" value="{{ $pembeli->no_hp }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">ALAMAT</label>
            <textarea class="form-control" name="alamat" placeholder="ALAMAT" readonly>{{ $pembeli->alamat }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">EMAIL</label>
            <input type="text" name="email" class="form-control" placeholder="EMAIL" value="{{ $pembeli->email }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $pembeli->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $pembeli->updated_at }}" readonly>
        </div>
    </div>
@endsection