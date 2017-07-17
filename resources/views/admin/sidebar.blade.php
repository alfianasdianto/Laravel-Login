<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- /.search form -->
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
    @if (Auth::user()->id == 1)
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-user"></i> <span>Users</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i> List Users</a></li>
          <li><a href="{{ route('users.create') }}"><i class="fa fa-circle-o"></i> Create Users</a></li>
        </ul>
      </li>
    @endif
      <li><a href="{{ route('logout') }}"><span>Logout</span></a></li>
      </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>