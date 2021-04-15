@extends('layouts.app')

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <a href="/barang" class="btn btn-info btn-sm " style="border-radius:10px;"><i class="now-ui-icons arrows-1_minimal-left"></i></a>
                <div class="card-header">{{ __('Edit Barang') }}</div>

                <div class="card-body">
                    <form action="{{ route('barang.change') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $barang->id }}"> <br/>
                        <div class="form-group row">
                            <label for="nama_barang" class="col-md-4 col-form-label text-md-right">{{ __('Nama Barang') }}</label>

                            <div class="col-md-6">
                                <input id="nama_barang" type="text" class="form-control @error('nama_barang') is-invalid @enderror" value="{{ $barang->nama_barang }}" name="nama_barang" required autocomplete="nama_barang" autofocus> 

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
                                <input id="tgl_input" type="date" class="form-control @error('tgl_input') is-invalid @enderror" name="tgl_input" value="{{ $barang->tgl_input }}" required autocomplete="tgl_input">

                                @error('tgl_input')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="stok_barang" class="col-md-4 col-form-label text-md-right">{{ __('Stok Barang') }}</label>

                            <div class="col-md-6">
                                <input id="stok_barang" type="number" class="form-control @error('stok_barang') is-invalid @enderror" value="{{ $barang->stok_barang }}" name="stok_barang" required autocomplete="stok_barang" autofocus> 

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
                                <input id="harga" type="number" class="form-control @error('harga') is-invalid @enderror" value="{{ $barang->harga }}" name="harga" required autocomplete="harga" autofocus> 

                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi Barang') }}</label>

                            <div class="col-md-6">
                                <input id="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" value="{{ $barang->deskripsi }}" name="deskripsi" required autocomplete="deskripsi" autofocus> 

                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
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
