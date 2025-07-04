@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<style>
    .pricing-card {
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .pricing-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .pricing-header {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .pricing-price {
        font-size: 2rem;
        color: #007bff;
        margin-bottom: 20px;
    }

    .pricing-features {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .pricing-features li {
        margin-bottom: 10px;
    }

    .pricing-button {
        margin-top: 20px;
    }
</style>
<main>
    <section class="pt-10 pb-5">
        <div class="container py-5">
            <h1 class="text-center mb-5">Our Pricing Plans</h1>
            <div class="row">
                <!-- Basic Plan -->
                <div class="col-md-4">
                    <div class="pricing-card">
                        <div class="pricing-header">Click Campaign</div>
                        <div class="pricing-price">₹0.10/Click</div>
                        <ul class="pricing-features">
                            <li>City-Wise Targeting Across India</li>
                            <li>6B+ Impressions Daily</li>
                            <li>Email Support</li>
                        </ul>
                        <div class="pricing-button">
                            <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                </div>

                <!-- Standard Plan -->
                <div class="col-md-4">
                    <div class="pricing-card">
                        <div class="pricing-header">Website Traffic</div>
                        <div class="pricing-price">₹0.20/Visite</div>
                        <ul class="pricing-features">
                            <li>60-80% bounce rate</li>
                            <li>2-5 minute avg session</li>
                            <li>Priority Email Support</li>
                        </ul>
                        <div class="pricing-button">
                            <a href="{{ route('register') }}" class="btn btn-success">Get Started</a>
                        </div>
                    </div>
                </div>

                <!-- Premium Plan -->
                <div class="col-md-4">
                    <div class="pricing-card">
                        <div class="pricing-header">Video Promotion</div>
                        <div class="pricing-price">₹0.25/Views</div>
                        <ul class="pricing-features">
                            <li>60-70% video completions</li>
                            <li>Self Serve Plateform</li>
                            <li>24/7 Support</li>
                        </ul>
                        <div class="pricing-button">
                            <a href="{{ route('register') }}" class="btn btn-danger">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- /.content end -->
</main>
@endsection