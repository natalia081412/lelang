@extends('layouts.app')

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <a href="/home" class="btn btn-info btn-sm"><i class="now-ui-icons arrows-1_minimal-left"></i></a>
                <div class="card-header">{{ __('Beri Tawaran') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tawar.store') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $letw->id }}">

<div class="form-group row">
                            <label for="penawaran_harga" class="col-md-4 col-form-label text-md-right">{{ __('Harga Penawaran') }}</label>

                            <div class="col-md-6">
                                <input id="penawaran_harga" type="text" class="form-control @error('penawaran_harga') is-invalid @enderror" placeholder="Beri Harga Tawaran disini" name="penawaran_harga" required autocomplete="penawaran_harga">

                                @error('penawaran_harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> <br>
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
