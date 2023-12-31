@extends('layouts.app')
  
@section('title', 'Home Pembeli')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data Pembeli</h1>
        <a href="{{ route('pembeli.create') }}" class="btn btn-primary">Tambah Data</a>
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
                <th>#</th>
                <th>ID PEMBELI</th>
                <th>NAMA</th>
                <th>NO HP</th>
                <th>ALAMAT</th>
                <th>EMAIL</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>+
            @if($pembeli->count() > 0)
                @foreach($pembeli as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->id_pembeli }}</td>
                        <td class="align-middle">{{ $rs->nama }}</td>
                        <td class="align-middle">{{ $rs->no_hp }}</td>
                        <td class="align-middle">{{ $rs->alamat }}</td>  
                        <td class="align-middle">{{ $rs->email }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('pembeli.show', $rs->id) }}" type="button" class="btn btn-secondary">Tampilkan</a>
                                <a href="{{ route('pembeli.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('pembeli.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Hapus Data?')">
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
                    <td class="text-center" colspan="5">Data Pembeli Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection