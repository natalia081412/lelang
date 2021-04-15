@extends('layouts.app')

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-responsive">
            <a href="/home" class="btn btn-info btn-sm"><i class="now-ui-icons shopping_shop"></i></a>
            <center>
                <div class="card-header"><h6>{{ __('Profile Anda') }}</h6></div>

                <div class="card-body">
                <h1 class="fas fa-user-circle"></h1></center>
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('Nama : ') }}</label>
                            <div class="col-md-6">
                                {{ $user->name }}
                            </div>
                        </div>
<br>                    
                        <div class="form-group row">
                            <label for="username" class="col-md-6 col-form-label text-md-right">{{ __('Username : ') }}</label>
                            <div class="col-md-6">
                                {{ $user->username }}
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="telp" class="col-md-6 col-form-label text-md-right">{{ __('Telepon : ') }}</label>
                            <div class="col-md-6">
                                {{ $user->telp }}
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="role" class="col-md-6 col-form-label text-md-right">{{ __('Role : ') }}</label>
                            <div class="col-md-6">
                            {{ $user->role }}
                            </div>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
