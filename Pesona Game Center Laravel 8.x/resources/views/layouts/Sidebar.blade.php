<aside class="main-sidebar control-sidebar-dark-primary elevation-4" >
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('assets/img/favicon.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" >Pesona Game Center</span>
    </a>
<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('dist/img/avatar2.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a class="d-block"> {{ Auth::user()->name }}</a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

       <li class="nav-header">Navigasi</li>
       @guest
       @if (Route::has('login'))
           <li class="nav-item">
               <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
           </li>
       @endif

       @if (Route::has('register'))
           <li class="nav-item">
               <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
           </li>
       @endif
   @else
       <li class="nav-item">
        <a href="{{ route('home') }}" class="nav-link">
          <i class="nav-icon fas fa-house-user"></i>
          <p>
            Menu Utama
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('Order') }}" class="nav-link ">
          <i class="nav-icon fas fa-calendar-check"></i>
          <p>
            Jadwal Pesanan
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('OrderInfo') }}" class="nav-link">
          <i class="nav-icon far fa-envelope"></i>
          <p>
            Informasi Pesanan
            <span class="badge badge-info right">2</span>
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('Promo') }}" class="nav-link">
          <i class="nav-icon fas fa-coins"></i>
          <p>
           Kode Promo
           <span class="badge badge-info right">6</span>
         </p>
       </a>
     </li>


     <li class="nav-item">
      <a href="{{ route('History') }}" class="nav-link">
        <i class="nav-icon fas fa-history"></i>
        <p>
          Riwayat
          <span class="badge badge-info right">6</span>
        </p>
      </a>
    </li>
    <li class="nav-header">Konfigurasi</li>
    <li class="nav-item">
      <a href="{{ route('Profile') }}" class="nav-link ">
        <i class="nav-icon far fa-id-card"></i>
        <p>
          Profil Saya
        </p>
      </a>

    </li>
    <li class="nav-header">Informasi Login</li>
    <li class="nav-item">
      <a href=" {{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="nav-link">
        <i class="nav-icon far fa-file-archive  "></i>
        <p>
          Keluar App
        </p>
      </a>
      <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    </li>
  </ul>
  @endguest
</nav>
</div>
</aside>
