@extends('layouts.app')

@section('content')
@auth
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            @if(Auth::user()->role == 'admin')
                <div class="card-header">{{ __('User') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('user.tambah') }}" class="btn btn-primary btn-sm">Tambah User</button></a>
                    <div class="table table-responsive">
                    <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Telepon</th>
                    <th>role</th>
                    <th>Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                    @foreach($user as $u)
                    <tr>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->username }}</td>
                    <td>{{ $u->telp }}</td>
                    <td>{{ $u->role }}</td>
                    <td>
                    <a href="/user/edit/{{ $u->id }}" type="button" class="btn btn-info btn-sm">Edit</a> 
                    
                    <a href="/user/hapus/{{ $u->id }}" type="button" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                    </tr>
                    @endforeach
                    <tbody>
                    </table>
                    </div>
                </div>
                @else
                <div class="card-body"><div class="alert alert-danger text-center" role="alert">
                            {{ 'Maaf Anda Bukan Admin !' }}
                        </div></div>
                        @endif @endauth
            </div>
        </div>
    </div>
</div>

@endsection
