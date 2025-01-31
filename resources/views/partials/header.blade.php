		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg py-3 navbar-default">
			<div class="container px-0">
				<a class="navbar-brand" href="{{ route('home') }}"><img width="150px" height="40px" src="{{ asset('storage/' . $headerlogo->img_path) }}" alt="" /></a>
				<!-- Button -->
				<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar top-bar mt-0"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
				</button>
				<!-- Collapse -->
				<div class="collapse navbar-collapse" id="navbar-default">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a class="nav-link" href="{{ route('home') }}">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('pricingPlan') }}">Pricing</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('adformat') }}">Ad formats</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('contact.form.user') }}">Contact Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('faq') }}">FAQ</a>
						</li>
					</ul>
					@auth
					<div class="ms-lg-3 mt-3 d-grid mt-lg-0">
						<a href="#" class="btn btn-primary btn-sm">Welcome, {{ Auth::user()->name }}!</a>
					</div>
					<form method="POST" action="{{ route('logout') }}">
						@csrf
						<div class="ms-lg-3 mt-3 d-grid mt-lg-0">
						<button type="submit" class="btn btn-primary btn-sm">Logout</button>
						</div>
					</form>
					@else
					<div class="ms-lg-3 mt-3 d-grid mt-lg-0">
						<a href="{{ route('login') }}" class="btn btn-primary btn-sm">Login</a>
					</div>
					<div class="ms-lg-3 mt-3 d-grid mt-lg-0">
						<a href="{{ route('register') }}" class="btn btn-primary btn-sm">Sign Up</a>
					</div>
					@endauth



				</div>
			</div>
		</nav>