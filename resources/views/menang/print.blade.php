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