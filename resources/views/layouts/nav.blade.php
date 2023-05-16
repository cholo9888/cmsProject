 <!-- Left navbar links -->
 <ul class="navbar-nav">
     <li class="nav-item">
         <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
     </li>
     @if (Auth::user()->is_admin)
         <li class="nav-item d-none d-sm-inline-block">
             <a href="{{ url('admin') }}" class="nav-link">Dashboard</a>
         </li>
         <li class="nav-item d-none d-sm-inline-block">
             <a href="{{ url('user') }}" class="nav-link">User</a>
         </li>
     @endif
 </ul>


 <!-- Right navbar links -->
 <ul class="navbar-nav ml-auto">
     <!-- Notifications Dropdown Menu -->
     <li class="nav-item dropdown user-menu">
         <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
             <img src="../../dist/img/avatar.png" class="user-image img-circle elevation-2" alt="User Image">
             <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
         </a>
         <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
             <!-- User image -->
             <li class="user-header bg-primary">
                 <img src="../../dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">

                 <p>
                     {{ Auth::user()->name }}
                     <small>Member since {{ Auth::user()->created_at }}</small>
                 </p>
             </li>
             <!-- Menu Footer-->
             <li class="user-footer">
                 <form method="POST" action="{{ route('logout') }}">
                     <a href="{{ route('profile.edit') }}" class="btn btn-default btn-flat">Profile</a>
                     @csrf
                     <a class="btn btn-default btn-flat float-right" href="route('logout')"
                         onclick="event.preventDefault();
                                this.closest('form').submit();">
                         {{ __('Log Out') }}
                     </a>
                 </form>
             </li>
         </ul>
     </li>
 </ul>
