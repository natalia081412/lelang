@extends('layouts.app')

@section('content')
@auth
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
    	        @if(Auth::user()->role == 'admin' || Auth::user()->role == 'petugas')
                <div class="card-header">{{ __('Barang') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('barang.tambah') }}" class="btn btn-primary btn-sm">Tambah Barang</a>
                    <div class="table table-responsive">
                    <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                    <th>Nama Barang</th>
                    <th>Tanggal Input</th>
                    <th>Stok Barang</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                    @foreach($barang as $b)
                    <tr>
                    <td>{{ $b->nama_barang }}</td>
                    <td>{{ $b->tgl_input }}</td>
                    <td>{{ $b->stok_barang }}</td>
                    <td>Rp. {{ $b->harga }}</td>
                    <td>{{ $b->deskripsi }}</td>
                    <td>
                    <a href="/barang/edit/{{ $b->id }}" type="button" class="btn btn-info btn-sm">Edit</a> 
                    <br>
                    <a href="/barang/hapus/{{ $b->id }}" type="button" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                    </tr>
                    @endforeach
                    <tbody>
                    </table>
                    </div>
                </div>
                @else
                <div class="card-body"><div class="alert alert-danger text-center" role="alert">
                            {{ 'Maaf Anda Bukan Admin atau Petugas !' }}
                        </div></div>
                        @endif @endauth
            </div>
        </div>
    </div>
</div>
@endsection
