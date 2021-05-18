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

       <li class="nav-header">Navigation</li>
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
        <a href="{{ route('AdminHome') }}" class="nav-link">
          <i class="nav-icon fas fa-house-user"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('ListClient') }}" class="nav-link">
          <i class="nav-icon far fa-envelope"></i>
          <p>
            List Client
            <span class="badge badge-info right">2</span>
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-coins"></i>
          <p>
            List Member
           <span class="badge badge-info right">6</span>
         </p>
       </a>
     </li>
     <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-coins"></i>
          <p>
           Promo Management
           <span class="badge badge-info right">6</span>
         </p>
       </a>
     </li>

     <li class="nav-header">Login Information</li>
    <li class="nav-item">
      <a href=" {{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="nav-link">
        <i class="nav-icon far fa-file-archive  "></i>
        <p>
          LogOut
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
