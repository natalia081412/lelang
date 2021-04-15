@extends('layouts.app')

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <a href="/user" class="btn btn-info btn-sm"><i class="now-ui-icons arrows-1_minimal-left"></i></a>
                <div class="card-header">{{ __('Edit User') }}</div>

                <div class="card-body">
                    <form action="{{ route('user.change') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $user->id }}"> <br/>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}" name="name" required autocomplete="name" autofocus> 

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<br>
                        <div class="form-group row">
                            <label for="telp" class="col-md-4 col-form-label text-md-right">{{ __('Telepon') }}</label>

                            <div class="col-md-6">
                                <input id="telp" type="text" class="form-control @error('telp') is-invalid @enderror" name="telp" value="{{ $user->telp }}" required autocomplete="telp">

                                @error('telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>

                        <div class="form-group row">
                        
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                            <div class="col-md-6">
                                <select name="role" id="role" class="form-control">
                                <option value="masyarakat" @if($user->role=='masyarakat')selected @endif>masyarakat</option>
                                <option value="admin" @if($user->role=='admin')selected @endif>admin</option>
                                <option value="petugas" @if($user->role=='petugas')selected @endif>petugas</option>
                                </select>
                            </div>
                            </div>
                        </div>
                            
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
