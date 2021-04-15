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
                        <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
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
                    <th>Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                    @foreach($letw as $l)
                    <tr>@if($l->status == 'dibuka')
                    <td>{{ $l->barang->nama_barang }}</td>
                    <td>{{ $l->tgl_lelang }}</td>
                    <td>Rp. {{ $l->penawaran_tertinggi($l->id) }}</td>
                    <td>{{ $l->petugas($l->petugas_id) }}</td>
                    <td>
                    <a href="{{ route('tawar.tw', $l->id) }}" class="btn btn-warning btn-sm">Tawar</a></td>
                    </tr> @endif
                    @endforeach
                    <tbody>
                    </table>
                    </div>
                </div>
                @else
                <div class="card-body"><div class="alert alert-danger text-center" role="alert">
                            {{ 'Maaf, Hanya Masyarakat yang dapat Melelang Barang !' }}
                        </div></div>
                        @endif @endauth
            </div>
        </div>
    </div>
</div>
@endsection
