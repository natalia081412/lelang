@extends('layouts.app', [
    'namePage' => 'Dashboard',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'home',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
  <div class="panel-header panel-header-lg">
  <div class="row">
      <div class="col-md-12">
        <div class="card-tasks">
          <div class="card-header ">
            <h5 class="card-category">Dashboard</h5>
            <h5 class="card-title text-white">Anda adalah {{ Auth::user()->role }}</h5>
          <div class="card-body">
            <div class="table-full-width table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td class="text-center"><h4 class="text-white">Selamat Datang di Aplikasi Website Lelang, {{ Auth::user()->name }}</h4></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          </div>
          <div class="card-footer ">
            <hr>
          </div>
        </div>
      </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
@endpush