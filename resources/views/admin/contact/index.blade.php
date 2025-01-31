@extends('admin.app')
@section('content')
<style>
    body {
        background-color: #f8f9fa;
    }

    .contact-container {
        max-width: 800px;
        margin: 50px auto;
        padding: 40px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    }

    .contact-header {
        font-size: 36px;
        font-weight: bold;
        color: #343a40;
        text-align: center;
        margin-bottom: 30px;
    }

    .form-control {
        border-radius: 8px;
    }

    .form-group label {
        font-weight: bold;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 8px;
        font-size: 18px;
        padding: 10px 20px;
    }

    .branch-office-box {
        margin-top: 50px;
        padding: 30px;
        background-color: #f1f3f5;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.05);
    }

    .branch-office-box h4 {
        font-size: 22px;
        color: #343a40;
    }

    .branch-office-box p {
        font-size: 16px;
        color: #6c757d;
    }

    .branch-office-box p span {
        font-weight: bold;
        color: #343a40;
    }
</style>
<div class="contact-container">
    <h2 class="contact-header">Contact Us</h2>

    @if(session('success'))
    <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" required>
            @error('subject')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            @error('message')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Send Message</button>
        </div>
    </form>

    <!-- Branch Office Section -->
    <div class="branch-office-box mt-5">
        <!-- <h4>Branch Office</h4>
        <p><span>123 Main Street,</span><br> City, State, ZIP<br> <span>Phone:</span> (123) 456-7890</p> -->
        <h5 class="mt-4">Email</h5>
        <p><span><a href="mailto:support.clicktovisite@gmail.com"> support.clicktovisite@gmail.com </a></span></p>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script> -->
@endsection