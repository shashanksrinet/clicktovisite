<div class="footer bg-dark pt-8">
	<!-- footer -->
	<div class="container">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-sm-12 col-12">
				<div class="mb-4 mb-lg-0">
					<!-- Footer Logo -->
					<img 
						width="200px"
						src="{{ asset('images/brand/company-logo/ft-logo.png') }}"
						alt="Borrow
            - Loan Company Website Templates"
					/>
				</div>
				<!-- /.Footer Logo -->
			</div>
			<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
				<form class="row g-0 align-items-center" id="newsletter-form">
					<div class="col-md-4 col-12 mb-3 mb-md-0">
						<h3 class="text-white mb-0">Signup Our Newsletter</h3>
					</div>
					<div class="col-md-8 col-12">
						<div class="input-group">
							<input type="email" class="form-control border-0 shadow-none" id="newsletter-email" name="email" placeholder="yourmail@gmail.com" required aria-describedby="basic-addon2" />
							<button class="btn btn-primary" type="submit" id="basic-addon2">Go!</button>
							<!-- <a href="#" class="btn btn-primary" id="basic-addon2">Go!</a> -->
						</div>
					</div>
				</form>
				<div id="newsletter-message"></div>
				<!-- /.col-lg-6 -->
			</div>
		</div>
		<hr class="my-6 opacity-25" />
		<div class="row mb-8">
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
				<div class="text-white-50 mb-3">
					<!-- widget text -->
					<p>
						{{-- $footer->description --}}
					</p>
					<div class="row mt-6">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="d-flex">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt text-white mt-1" viewBox="0 0 16 16">
									<path
										d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"
									/>
									<path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
								</svg>

								<div class="ms-3">We specialize in helping you grow your audience, drive traffic, and increase engagement. Whether it’s through clicks, video views, or custom campaigns</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-3 mt-md-0">
							<div class="d-flex">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone text-white mt-1" viewBox="0 0 16 16">
									<path
										d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"
									/>
								</svg>

								<!-- <div class="ms-3 fs-3"><a href="https://t.me/clicktovisite" target="_blank">Telegram</a></div> -->
								<div class="ms-3 fs-3"><a href="mailto:connect.clicktovisite@gmail.com" target="_blank">Connect Us</a></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.widget text -->
			</div>
			<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
				<div class="mb-3">
					<!-- widget footer -->
					<ul class="list-unstyled text-muted">
						<li class="d-flex">
							<a href="{{ route('home') }}" class="text-inherit fs-5">
								<i class="bi bi-chevron-right fs-6 me-2"></i>
								Home
							</a>
						</li>
						<li class="d-flex">
							<a href="{{ route('aboutus') }}" class="text-inherit fs-5">
								<i class="bi bi-chevron-right fs-6 me-2"></i>
								About Us
							</a>
						</li>
						<li class="d-flex">
							<a href="{{ route('adformat') }}" class="text-inherit fs-5">
								<i class="bi bi-chevron-right fs-6 me-2"></i>
								Ad formats
							</a>
						</li>
						<li class="d-flex">
							<a href="{{ route('contact.form.user') }}" class="text-inherit fs-5">
								<i class="bi bi-chevron-right fs-6 me-2"></i>
								Contact Us
							</a>
						</li>
					</ul>
				</div>
				<!-- /.widget footer -->
			</div>
			<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
				<div class="mb-3">
					<!-- widget footer -->
					<ul class="list-unstyled text-muted">
						<li class="d-flex">
							<a href="{{ route('faq') }}" class="text-inherit fs-5">
								<i class="bi bi-chevron-right fs-6 me-2"></i>
								FAQ
							</a>
						</li>
						<li class="d-flex">
							<a href="{{ route('register') }}" class="text-inherit fs-5">
								<i class="bi bi-chevron-right fs-6 me-2"></i>
								Sign Up
							</a>
						</li>
						<li class="d-flex">
							<a href="{{ route('cookiesPolicy')}}" class="text-inherit fs-5">
								<i class="bi bi-chevron-right fs-6 me-2"></i>
								Cookies Policy
							</a>
						</li>
						<li class="d-flex">
							<a href="{{ route('refundPolicy') }}" class="text-inherit fs-5">
								<i class="bi bi-chevron-right fs-6 me-2"></i>
								Cancelation Policy
							</a>
						</li>
					</ul>
				</div>
				<!-- /.widget footer -->
			</div>
			<!-- <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
				<div class="mb-3">
					<ul class="list-unstyled text-muted">
						<li class="d-flex">
							<a href="{{-- $footer->facebook --}}" target="_blank" class="text-inherit">
								<i class="fab fa-facebook-f me-2 fs-5"></i>
								Facebook
							</a>
						</li>
						<li class="d-flex">
							<a href="{{-- $footer->google --}}" target="_blank" class="text-inherit">
								<i class="fab fa-google me-2 fs-5"></i>
								Google
							</a>
						</li>
						<li class="d-flex">
							<a href="{{-- $footer->twitter --}}" target="_blank" class="text-inherit">
								<i class="fab fa-twitter me-2 fs-5"></i>
								Twitter
							</a>
						</li>
						<li class="d-flex">
							<a href="{{-- $footer->linkedin --}}" target="_blank" class="text-inherit">
								<i class="fab fa-linkedin me-2 fs-5"></i>
								Linked In
							</a>
						</li>
					</ul>
				</div>
			</div> -->
		</div>
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<p class="fs-6 text-muted">© Copyright {{ date('Y') }} </p>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-md-end">
				<p class="fs-6 text-muted">
					<a href="{{ route('terms') }}" class="text-inherit">Terms of use</a>
					|
					<a href="{{ route('privacyPolicy') }}" class="text-inherit">Privacy Policy</a>
				</p>
			</div>
		</div>
	</div>
</div>