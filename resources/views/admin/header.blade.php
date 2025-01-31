  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('campaign.create') }}"><button type="button" class="btn btn-block btn-primary">Create Campaign</button></a>
        <!-- <a href="#" class="nav-link"></a> -->
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Advertiser Balance: ₹<span style="color: green;font-weight: bold;">{{ Auth::user()->balance }}</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user"></i> <!-- User icon -->
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <span class="dropdown-item">{{ Auth::user()->email }}</span> <!-- Display logged-in user's email -->
          <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}" class="dropdown-item"
             onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->