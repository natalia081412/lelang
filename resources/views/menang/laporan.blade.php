@extends('layouts.app')

@section('content')
<script type="text/javascript">
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('List Lelang Barang') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div id="printable">
                    <div class="table table-responsive">
                    <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                    <th>Nama Barang</th>
                    <th>Tanggal Lelang</th>
                    <th>Petugas</th>
                    <th>Harga Tertinggi</th>
                    <th>Nama Pelelang</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                    @foreach($lemen as $l)
                    <tr>
                    <td>{{ $l->barang->nama_barang }}</td>
                    <td>{{ $l->tgl_lelang }}</td>
                    <td>{{ $l->petugas($l->petugas_id) }}</td>
                    <td>Rp. {{ $l->penawaran_tertinggi($l->id) }}</td>
                    <td>{{ $l->pemenang($l->masyarakat_id) }}</td>
                    </tr>
                    @endforeach
                    <tbody>
                    </table><center><td><a href onclick="printDiv('printable')" class="btn btn-danger">Print</a></td></center>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
