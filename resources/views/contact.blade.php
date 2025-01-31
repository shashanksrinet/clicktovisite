@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<main>
    <section class="pt-10 pb-5">
        <div class="container">
            <h2 class="contact-header">Contact Us</h2>

            @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
            @endif

            <form action="{{ route('contact.submit.user') }}" method="POST">
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
                <h4>Branch Office</h4>
                <p><span>95A BA Block</span><br> Janakpuri, New Delhi, 110058<br> <span>Phone:</span> +91-9650631676</p>
                <h5 class="mt-4">Email</h5>
                <p><span>connect.clicktovisite@gmail.com</span></p>
            </div>
        </div>
    </section>
    <!-- /.content end -->
</main>
@endsection