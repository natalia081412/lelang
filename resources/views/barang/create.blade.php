@extends('layouts.app')

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <a href="/barang" class="btn btn-info btn-sm"><i class="now-ui-icons arrows-1_minimal-left"></i></a>
                <div class="card-header">{{ __('Tambah Barang') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('barang.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nama_barang" class="col-md-4 col-form-label text-md-right">{{ __('Nama Barang') }}</label>

                            <div class="col-md-6">
                                <input id="nama_barang" type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{ old('nama_barang') }}" required autocomplete="nama_barang" autofocus> 

                                @error('nama_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<br>
                        <div class="form-group row">
                            <label for="tgl_input" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Input') }}</label>

                            <div class="col-md-6">
                                <input id="tgl_input" type="date" class="form-control @error('tgl_input') is-invalid @enderror" name="tgl_input" value="{{ old('tgl_input') }}" required autocomplete="tgl_input">

                                @error('tgl_input')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<br>
                        <div class="form-group row">
                            <label for="stok_barang" class="col-md-4 col-form-label text-md-right">{{ __('stok_barang') }}</label>

                            <div class="col-md-6">
                                <input id="stok_barang" type="number" class="form-control @error('stok_barang') is-invalid @enderror" name="stok_barang" value="{{ old('stok_barang') }}" required autocomplete="stok_barang">

                                @error('stok_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">{{ __('Harga') }}</label>

                            <div class="col-md-6">
                                <input id="harga" type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" required autocomplete="harga">

                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>

                            <div class="col-md-6">
                                <input id="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" required autocomplete="deskripsi">

                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
