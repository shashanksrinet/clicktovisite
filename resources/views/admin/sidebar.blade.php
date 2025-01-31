<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light"><img width="200px" src="{{ asset('storage/' . $headerlogo->img_path) }}"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">          
          <li class="nav-item">
            <a href="{{ route('dashboard.index') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">See</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('campaign.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Campaigns
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('fund.add') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Funds
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('fund.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Finance
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('profile.show') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('contact.form') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Support
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>