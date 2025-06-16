@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

<section class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0 h-lg-100 py-8">
        <div class="col-lg-5 col-md-8 py-8 py-xl-0">
            <div class="card shadow">
                <!-- Card body -->
                <div class="card-body p-6">
                    <div class="mb-4">
                        <h1 class="mb-1 fw-bold h2">Sign up</h1>
                        <span>
                            Already have an account?
                            <a href="{{ route('login') }}" class="ms-1">Sign in</a>
                            @if ($errors->any())
                            <div>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li style="color: #c33;background: #fdecec;">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </span>
                    </div>
                    <!-- Form -->
                    <form class="needs-validation" method="POST" action="{{ route('register') }}">
                    @csrf
                        <!-- Username -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required class="form-control" placeholder="Your Name" />
                            <div class="invalid-feedback">Please enter valid name.</div>
                        </div>
                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email address here" required="" />
                            <div class="invalid-feedback">Please enter valid Email.</div>
                        </div>
                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="**************" required="" />
                            <div class="invalid-feedback">Please enter valid password.</div>
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="**************" required="" />
                            <div class="invalid-feedback">Please enter valid password.</div>
                        </div>
                        <!-- Phone -->
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" id="phone" pattern="^\+?[1-9]\d{1,14}$" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="Phone number here" required="" />
                            <div class="invalid-feedback">Please enter valid Phone Number.</div>
                        </div>
                        <!-- Checkbox -->
                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="agreeCheck" required />
                                <label class="form-check-label" for="agreeCheck">
                                    <span>
                                        I agree to the
                                        <a href="#">Terms of Service</a>
                                        and
                                        <a href="#">Privacy Policy.</a>
                                    </span>
                                </label>
                                <div class="invalid-feedback">You must agree before submitting.</div>
                            </div>
                        </div>
                        <div>
                            <!-- Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Create Account</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection