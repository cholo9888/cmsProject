 <!-- Brand Logo -->
 <a href="index3.html" class="brand-link">
    <img src="../../dist/img/willylogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Dashboard</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <nav class="mt-3">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="{{route('dashboard')}}" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Home
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
        <li class="nav-item">
            <a href="{{url('view')}}" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
              <p>
                Finalize
              </p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="../calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Emergency
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="{{url('dailyReport')}}" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
              <p>
                Report
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('profile.edit')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
