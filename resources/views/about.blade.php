@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
@php
    $aboutUs = App\Models\AboutUs::first();
@endphp
<main>
    <section class="pt-10 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <img height="400px" src="{{ asset('storage/about-us.png') }}" class="card-img-top">
                    <div class="card-body p-5">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="fw-bold mb-0">About Us</h2>
                        </div>
                        <p class="mt-3">{!! $aboutUs->description !!}</p>
                       
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /.content end -->
</main>
@endsection