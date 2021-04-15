@extends('layouts.app')

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <a href="/lelang" class="btn btn-info btn-sm"><i class="now-ui-icons arrows-1_minimal-left"></i></a>
                <div class="card-header">{{ __('Detail Lelang Barang') }}</div>
                <div class="body">
                <div class="table table-responsive">
                    <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                    <th>Nama Masyarakat</th>
                    <th>Harga yang di Lelang</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lelang->bid as $bd)
                    <tr>
                    <td>{{ $bd->masyarakat($bd->masyarakat_id) }}</td>
                    <td>{{ $bd->penawaran_harga }}</td>
                    </tr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
