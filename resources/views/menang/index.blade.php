@extends('layouts.app')

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            @auth
            @if(Auth::user()->role == 'masyarakat')
                <div class="card-header">{{ __('List Lelang Barang') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table table-responsive">
                    <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                    <th>Nama Barang</th>
                    <th>Tanggal Lelang</th>
                    <th>Harga Tertinggi</th>
                    <th>Petugas</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                    @foreach($lemen as $l)
                    <tr>
                    <td>{{ $l->barang->nama_barang }}</td>
                    <td>{{ $l->tgl_lelang }}</td>
                    <td>Rp. {{ $l->penawaran_tertinggi($l->id) }}</td>
                    <td>{{ $l->petugas($l->petugas_id) }}</td>
                    </tr>
                    @endforeach
                    <tbody>
                    </table>
                    </div>
                </div>
                @else
                <div class="card-body"><div class="alert alert-danger text-center" role="alert">
                            {{ 'Maaf Anda Bukan Masyarakat !' }}
                        </div></div>
                        @endif @endauth
            </div>
        </div>
    </div>
</div>
@endsection
