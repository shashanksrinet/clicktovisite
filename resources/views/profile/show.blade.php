@extends('admin.app')
@section('content')
<div class="container">
    <h1>Profile</h1>

    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif


    <!-- Form for Personal and Contact Information -->
    <form action="{{ route('profile.update') }}" method="POST">
        @csrf

        <div class="card">
            <div class="card-header">Personal Information</div>
            <div class="card-body">
                <div class="row">
                    <!-- First Name -->
                    <div class="col-md-6 form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name', $user->first_name) }}" required>
                        @error('first_name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Last Name -->
                    <div class="col-md-6 form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name', $user->last_name) }}" required>
                        @error('last_name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <!-- First Name -->
                    <div class="col-md-6 form-group">
                        <label for="country">Country of Residence</label>
                        <input type="text" name="country" class="form-control" value="{{ old('country', $user->country) }}" required>
                        @error('country')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Last Name -->
                    <div class="col-md-6 form-group">
                        <label for="city">City</label>
                        <input type="text" name="city" class="form-control" value="{{ old('city', $user->city) }}" required>
                        @error('city')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <!-- First Name -->
                    <div class="col-md-12 form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" value="{{ old('address', $user->address) }}">
                        @error('address')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Contact Information</div>
            <div class="card-body">
                <div class="row">
                    <!-- First Name -->
                    <div class="col-md-6 form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{ old('phone', $user->phone) }}" required>
                        @error('first_name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Last Name -->
                    <div class="col-md-6 form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" readonly>
                        @error('last_name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <!-- First Name -->
                    <div class="col-md-12 form-group">
                        <label for="whatsapp">WhatsApp</label>
                        <input type="text" name="whatsapp" class="form-control" value="{{ old('whatsapp', $user->whatsapp) }}">
                        @error('address')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save Profile Information</button>
    </form>

    <hr>

    <!-- Form for Changing Password -->
    <form action="{{ route('profile.updatePassword') }}" method="POST">
        @csrf

        <div class="card">
            <div class="card-header">Change Password</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="old_password">Old Password</label>
                        <input type="password" name="old_password" class="form-control">
                        @error('old_password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                    <label for="password">New Password</label>
                    <input type="password" name="password" class="form-control">
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                        @error('password_confirmation')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Change Password</button>
    </form>
</div>
@endsection