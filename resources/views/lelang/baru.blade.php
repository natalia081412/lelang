@extends('layouts.app')

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <a href="/lelang" class="btn btn-info btn-sm"><i class="now-ui-icons arrows-1_minimal-left"></i></a>
                <div class="card-header">{{ __('Tambah Barang Lelang') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('lelang.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="barang_id" class="col-md-4 col-form-label text-md-right">{{ __('ID Barang') }}</label>

                            <div class="col-md-6">
                               <select name="barang_id" id="barang_id" class="form-control">
                                @foreach ($barang as $b)
                                <option value="{{ $b->id }}">{{ $b->nama_barang }}</option>
                               @endforeach
                               </select>

                                @error('barang_id')
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
