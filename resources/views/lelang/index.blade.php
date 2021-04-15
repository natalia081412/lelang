@extends('layouts.app')

@section('content')
@auth
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            @if(Auth::user()->role == 'petugas')
                <div class="card-header">{{ __('Lelang Barang') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('lelang.tambah') }}" class="btn btn-primary btn-sm">+ Tambah Barang Lelang</a>
                    <div class="table table-responsive">
                    <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                    <th>Nama Barang</th>
                    <th>Tanggal Lelang</th>
                    <th>Harga Tertinggi</th>
                    <th>Nama User</th>
                    <th>Nama Penanggung</th>
                    <th>Status</th>
                    <th>Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                    @foreach($lelang as $l)
                    <tr>
                    <td>{{ $l->barang->nama_barang }}</td>
                    <td>{{ $l->tgl_lelang }}</td>
                    <td>Rp. {{ $l->harga_pemenang }}</td>
                    <td>{{ $l->pemenang($l->masyarakat_id) }}</td>
                    <td>{{ $l->petugas($l->petugas_id) }}</td>
                    <td>{{ $l->status }}</td>
                    <td>
                    @if($l->status == 'dibuka')
                    <a href="{{ route('lelang.tutup', $l->id) }}" class="btn btn-info btn-sm">Tutup</a>
                    <a href="{{ route('lelang.cancel', $l->id) }}" class="btn btn-danger btn-sm">Cancel</a>
                    @endif 
                    <a href="{{ route('lelang.detail', $l->id) }}" class="btn btn-success btn-sm">Detail</a></td>
                    </tr>
                    @endforeach
                    <tbody>
                    </table>
                    </div>
                </div>
                @else
                <div class="card-body"><div class="alert alert-danger text-center" role="alert">
                            {{ 'Maaf Anda Bukan Petugas !' }}
                        </div></div>
                        @endif @endauth
            </div>
        </div>
    </div>
</div>
@endsection
