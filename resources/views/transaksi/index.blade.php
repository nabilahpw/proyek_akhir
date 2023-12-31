@extends('layouts.app')
  
@section('title', 'Home Transaksi')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data Pembelian</h1>
        <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>KODE TRANSAKSI</th>
                <th>NAMA PRODUK</th>
                <th>JUMLAH BARANG</th>
                <th>TOTAL HARGA</th>
                <th>ID PEMBELI</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>+
            @if($transaksi->count() > 0)
                @foreach($transaksi as $rs)
                    <tr>
                        <td class="align-middle">{{ $rs->kodetransaksi }}</td>
                        <td class="align-middle">{{ $rs->nama_produk }}</td>
                        <td class="align-middle">{{ $rs->jumlah }}</td>
                        <td class="align-middle">{{ $rs->totalharga }}</td>
                        <td class="align-middle">{{ $rs->id_pembeli }}</td>   
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('transaksi.show', $rs->id) }}" type="button" class="btn btn-secondary">Tampilkan</a>
                                <a href="{{ route('transaksi.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('transaksi.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Hapus Data?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Data Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection