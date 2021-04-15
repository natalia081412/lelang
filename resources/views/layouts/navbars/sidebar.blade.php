<div class="sidebar" data-color="orange">

  <div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-mini">
      <i class="fab fa-laravel"></i>
    </a>
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
      {{ __('Menu') }}
    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
    @auth
      <li>
        <a href="{{ route('home') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      @if (auth()->user()->role == 'admin' || auth()->user()->role == 'petugas')
        <div class="collapse show" id="laravelExamples">
          <ul class="nav">
          @if (auth()->user()->role == 'admin')
            <li>
              <a href="{{url('/user')}}">
                <i class="now-ui-icons users_single-02"></i>
                    <p>Data User</p>
              </a>
            </li>
            @endif
            <li>
              <a href="{{url('/barang')}}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p> {{ __("Data Barang") }} </p>
              </a>
            </li>
          </ul>
        </div>
        @if (auth()->user()->role == 'petugas')
      <li>
      <a href="{{url('/lelang')}}">
          <i class="now-ui-icons shopping_tag-content"></i>
          <p>{{ __('Lelang Barang') }}</p>
        </a>
      </li>
      @endif
      <li>
        <a href="{{ url('/laporan') }}">
          <i class="now-ui-icons files_single-copy-04"></i>
          <p>{{ __('Laporan') }}</p>
        </a>
      </li>
      @endif
      @if (auth()->user()->role == 'masyarakat')
      <li>
        <a href="{{ url('/tawar') }}">
          <i class="now-ui-icons shopping_tag-content"></i>
          <p>{{ __('Barang Lelang') }}</p>
        </a>
      </li>
      <li>
        <a href="{{ url('/menang') }}">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>{{ __('Data Lelang yang didapat') }}</p>
        </a>
      </li>
      @endif
      @endauth
    </ul>
  </div>
</div>
