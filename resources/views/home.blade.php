<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<main>
    <!--get your personal loan-->
    <section class="py-lg-16 py-10 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-5 col-12">
                    <div class="mb-8 mb-lg-0">
                        <!-- <div class="text-primary mb-4  fw-semibold fs-6 text-uppercase ls-md">Modern Layout
                                Design</div> -->
                        <div class="mb-5">
                            <h1 class="mb-4 display-3 fw-bold">Your Ultimate Solution for Ad Success</h1>
                            <p class="mb-0">Discover everything you need to effectively promote any product and successfully monetize your efforts, allowing you to turn your passion into profit!</p>
                        </div>
                        <div class="mb-4">
                            <a href="/register" class="btn btn-primary rounded-3 me-2">Advertise Now</a>
                            <!-- <a href="#" class="btn btn-outline-primary rounded-3">Check Your Eligibility</a> -->
                        </div>
                        <div>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="var(--bs-success)" class="bi bi-shield-check" viewBox="0 0 16 16">
                                    <path
                                        d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                                    <path
                                        d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                </svg>
                            </span>
                            <small class="fs-6 ms-1">
                                TRUSTED AD NETWORK PARTNER FOR MILLIONS
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-12 col-12 d-flex justify-content-center">
                    <div class="position-relative">
                        <img src="../images/background/dots-2.png" alt="" class=" position-absolute top-0 start-0 m-n6">

                        <img src="../images/background/hero-modern-img.jpg" alt="" class="rounded-4 position-relative z-1 img-fluid">

                        <img src="../images/background/dots.png" alt="" class="  position-absolute bottom-0 end-0 me-8 mb-n6 ">
                        <!-- <img src="../images/background/hero-graphic-2.png" alt=""
                            class=" position-absolute start-0 top-100 translate-middle ms-7 mt-n4 z-2 img-fluid d-none d-md-block">
                        <img src="../images/background/hero-graphic-1.png" alt=""
                            class=" position-absolute top-50 start-100 translate-middle me-n12 z-1 d-none d-md-block"> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--get your personal loan-->
    <!--reasons for choose-->
    <section class="py-lg-16 py-10">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 col-12">
                    <div>
                        <!-- <div class="text-primary mb-4 fw-semibold  fs-6 text-uppercase ls-md">Why chooses us design</div> -->
                        <h2 class="mb-8 h1">Top Reasons why you should choose us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-12">
                    <div class="mb-7">
                        <div class="text-icon-color bg-primary bg-opacity-10 icon-shape  icon-lg rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-credit-card-2-front" viewBox="0 0 16 16">
                                <path
                                    d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
                                <path
                                    d="M2 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </div>
                        <h3 class="mt-5 mt-lg-4">Fast campaign moderation</h3>
                        <p class="pe-lg-12">You’re a coffee break away from launching a campaign to getting traffic
                            sit.</p>
                    </div>

                </div>
                <div class="col-md-6 col-lg-6 col-12">
                    <div class="mb-7">
                        <div class="text-icon-color bg-primary bg-opacity-10 icon-shape  icon-lg rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-headset" viewBox="0 0 16 16">
                                <path
                                    d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z" />
                            </svg>
                        </div>
                        <h3 class="mt-5 mt-lg-4">Fraud and bot filters</h3>
                        <p class="pe-lg-12">Machine Learning-based algorithm to filter poor quality</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12">
                    <div class="mb-7 mb-lg-0">
                        <div class="text-icon-color bg-primary bg-opacity-10 icon-shape  icon-lg rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                <path
                                    d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                            </svg>
                        </div>
                        <h3 class="mt-5 mt-lg-4 mt-md-4">Multiple payment methods</h3>
                        <p class="pe-lg-12">More than five solutions to cash out or top up your balance</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12">
                    <div class="mb-7 mb-lg-0">
                        <div class="text-icon-color bg-primary bg-opacity-10 icon-shape  icon-lg rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-bullseye" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
                                <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
                                <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                            </svg>
                        </div>
                        <h3 class="mt-5 mt-lg-4">User-friendly self‑serve platform</h3>
                        <p class="pe-lg-12">A toolkit to ensure statistics transparency and campaign automation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--reasons for choose-->
    <!--best product for you-->
    <section class="py-lg-16 py-10 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <div class="text-center mb-9">
                        <!-- <div class="text-primary mb-4  fw-semibold fs-6 text-uppercase ls-md">Tab Section Design</div> -->
                        <h2 class=" h1">Advertising formats</h2>
                        <!-- <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit dui urna
                                sed
                                tortor volutpat
                                imperdiet.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <div class="">
                    <ul class="nav nav-pills justify-content-md-center nav-pills-gray-rounded mb-8" id="pills-tab"
                        role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-PersonalLoans-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-PersonalLoans" type="button" role="tab"
                                aria-controls="pills-PersonalLoans" aria-selected="true">Clicks</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-CreditCards-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-CreditCards" type="button" role="tab"
                                aria-controls="pills-CreditCards" aria-selected="false">Website Visite</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Mortgages-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Mortgages" type="button" role="tab"
                                aria-controls="pills-Mortgages" aria-selected="false">Video Views</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-PersonalLoans" role="tabpanel"
                            aria-labelledby="pills-Personal Loans" tabindex="0">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-12 mb-5 mb-md-0">
                                    <div class="mb-4">
                                        <h3 class="h1">Clicks</h3>
                                        <p class="lead">Tracking clicks is essential for measuring the effectiveness of your advertising campaigns</p>
                                    </div>
                                    <div>
                                        <ul class="list-unstyled">
                                            <li class="mb-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="var(--bs-success)" class="bi bi-check-circle-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                    </svg>
                                                </span>
                                                <span class="ms-2">Low Cost Per Click</span>
                                            </li>
                                            <li class="mb-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="var(--bs-success)" class="bi bi-check-circle-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                    </svg>
                                                </span>
                                                <span class="ms-2">Targeted Strategies</span>
                                            </li>
                                            <li class="mb-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="var(--bs-success)" class="bi bi-check-circle-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                    </svg>
                                                </span>
                                                <span class="ms-2">Scalability</span>
                                            </li>
                                            <li class="mb-2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="var(--bs-success)" class="bi bi-check-circle-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                    </svg>
                                                </span>
                                                <span class="ms-2">Proven Track Record</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-5">
                                        <a href="/register" class="btn btn-primary mb-4  rounded-3">TRY IT NOW</a>
                                    </div>

                                    


                                </div>
                                <div class="col-lg-5 offset-lg-1 col-md-6 col-12">
                                    <div class=" position-relative">
                                        <img src="../images/background/dots-2.png" alt=""
                                            class="position-absolute top-0 start-0 me-7 translate-middle mt-5 z-1 ms-4 d-none d-md-block">
                                        <img src="../images/background/personal-loan-img.jpg" alt=""
                                            class="img-fluid rounded-4 z-2 position-relative">
                                        <img src="../images/background/dots.png" alt=""
                                            class="position-absolute end-0 bottom-0 z-1  mb-n8 me-4 d-none d-md-block">

                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-CreditCards" role="tabpanel"
                            aria-labelledby="pills-Credit Cards-tab" tabindex="0">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-lg-6 col-12">
                                    <div class="mb-4">
                                        <h3 class="h1">Website Visite</h3>
                                        <p class="lead">We help boost your online visibility, enhance brand awareness, and create opportunities for conversions.</p>
                                    </div>


                                    <div class="row mb-3 align-items-center">
                                        <div class="col-lg-1 col-2 col-md-2">
                                            <div
                                                class=" text-icon-color bg-primary bg-opacity-10 icon-shape  icon-md rounded-2">
                                                1
                                            </div>
                                        </div>
                                        <div class="col-lg-11 ps-lg-4 col-10 col-md-9"><span class="text-dark me-1">Enhanced Visibility</span>
                                            significantly increase your online presence.
                                        </div>
                                    </div>
                                    <div class="row  mb-3">
                                        <div class="col-lg-1 col-2 col-md-2 ">
                                            <div
                                                class="text-icon-color bg-primary bg-opacity-10 icon-shape  icon-md rounded-2">
                                                2
                                            </div>
                                        </div>

                                        <div class="col-lg-11 ps-lg-4 col-10 col-md-9"><span class="text-dark me-1">Improved Engagement</span>Higher website traffic often leads to increased user interaction</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-1 col-2 col-md-2">
                                            <div
                                                class="text-icon-color bg-primary bg-opacity-10 icon-shape  icon-md rounded-2">
                                                3
                                            </div>
                                        </div>
                                        <div class="col-lg-11 ps-lg-4 col-10 col-md-9"><span class="text-dark me-1">Conversion Opportunities</span>More visits create additional opportunities for conversions</div>
                                    </div>


                                    <div class="mt-5">
                                        <a href="/register" class="btn btn-primary mb-4  rounded-3">Get started</a>
                                    </div>

                                </div>
                                <div class="col-lg-5 offset-lg-1 col-md-6 col-12">
                                    <div class="position-relative">

                                        <img src="../images/background/dots-2.png" alt=""
                                            class="position-absolute top-0 end-0 translate-middle z-1 mt-3">
                                        <img src="../images/background/cc-girl.jpg" alt="" class="img-fluid rounded-4 position-relative z-2">
                                        <img src="../images/background/dots.png" alt=""
                                            class="position-absolute top-100 start-0 translate-middle z-1 ms-14 mt-0">
                                        <div class="position-absolute bottom-0 start-0 translate-middle ms-3 z-3  d-none d-md-block">
                                            <div class="badge rounded-pill text-bg-primary p-3 fs-4">Maximum Reach</div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-Mortgages" role="tabpanel"
                            aria-labelledby="pills-Mortgages-tab" tabindex="0">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-12">
                                    <div class="mb-5">
                                        <h3 class="h1">Video Views</h3>
                                        <p class="lead">Providing any video views can enhance your video's visibility, improve its ranking in search results, and increase overall engagement. </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-6">
                                            <div class="mb-5">
                                                <div
                                                    class="mb-3 text-icon-color bg-primary bg-opacity-10 icon-shape  icon-md rounded-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="currentColor" class="bi bi-piggy-bank"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm1.138-1.496A6.613 6.613 0 0 1 7.964 4.5c.666 0 1.303.097 1.893.273a.5.5 0 0 0 .286-.958A7.602 7.602 0 0 0 7.964 3.5c-.734 0-1.441.103-2.102.292a.5.5 0 1 0 .276.962z" />
                                                        <path fill-rule="evenodd"
                                                            d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069c0-.145-.007-.29-.02-.431.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a.95.95 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.735.735 0 0 0-.375.562c-.024.243.082.48.32.654a2.112 2.112 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595zM2.516 6.26c.455-2.066 2.667-3.733 5.448-3.733 3.146 0 5.536 2.114 5.536 4.542 0 1.254-.624 2.41-1.67 3.248a.5.5 0 0 0-.165.535l.66 2.175h-.985l-.59-1.487a.5.5 0 0 0-.629-.288c-.661.23-1.39.359-2.157.359a6.558 6.558 0 0 1-2.157-.359.5.5 0 0 0-.635.304l-.525 1.471h-.979l.633-2.15a.5.5 0 0 0-.17-.534 4.649 4.649 0 0 1-1.284-1.541.5.5 0 0 0-.446-.275h-.56a.5.5 0 0 1-.492-.414l-.254-1.46h.933a.5.5 0 0 0 .488-.393zm12.621-.857a.565.565 0 0 1-.098.21.704.704 0 0 1-.044-.025c-.146-.09-.157-.175-.152-.223a.236.236 0 0 1 .117-.173c.049-.027.08-.021.113.012a.202.202 0 0 1 .064.199z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <span>By boosting your video views, you enhance its visibility on the platform</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <div class="mb-5">
                                                <div
                                                    class="mb-3 text-icon-color bg-primary bg-opacity-10 icon-shape  icon-md rounded-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="currentColor" class="bi bi-people"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <span>Higher view counts often lead to increased engagement</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <div>
                                                <div
                                                    class="mb-3 text-icon-color bg-primary bg-opacity-10 icon-shape  icon-md rounded-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="currentColor" class="bi bi-percent"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <span>More views can contribute to better search engine optimization</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <div>
                                                <div
                                                    class="mb-3 text-icon-color bg-primary bg-opacity-10 icon-shape  icon-md rounded-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="currentColor" class="bi bi-currency-dollar"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <span>Increasing your video views can unlock monetization options, allowing you to earn revenue through ads</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <a href="/register" class="btn btn-primary mb-4  rounded-3">TRY IT NOW</a>
                                    </div>

                                </div>
                                <div class="col-lg-5 offset-lg-1 col-md-6 mt-8 mt-md-0">

                                    <div class="position-relative">
                                        <img src="../images/background/dots-2.png" alt=""
                                            class="position-absolute top-0 end-0 translate-middle ms-7 z-1 ">
                                        <img src="../images/background/mortgage.jpg" alt=""
                                            class="img-fluid rounded-4 position-relative z-2">

                                        <img src="../images/background/dots.png" alt=""
                                            class="position-absolute top-100 start-0 ms-14 translate-middle">
                                        <div class="position-absolute top-100 start-0 translate-middle ms-3 mt-n8 z-3  d-none d-md-block">
                                            <div class="badge rounded-pill bg-light-success text-success p-3 fs-4">Best Ad Network
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--best product for you-->
    <!-- getting started-->
    <section class="py-lg-16 py-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="text-center mb-9">
                        <!-- <div class="text-primary mb-4 text-uppercase fw-semibold fs-6 ls-md">How it work design</div> -->
                        <h2 class=" h1">Getting started is easy</h2>
                        <p class="lead mb-0">Starting with our services is a breeze! Simply follow a few straightforward steps to set up your account and begin your journey.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="var(--bs-primary)"
                                class="bi bi-1-circle" viewBox="0 0 16 16">
                                <path
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z" />
                            </svg>
                        </div>
                        <div class="ms-5">
                            <h3>Sign up for an account</h3>
                            <p class="mb-0">Creating an account is the first step towards unlocking the full potential of our services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="var(--bs-primary)"
                                class="bi bi-2-circle" viewBox="0 0 16 16">
                                <path
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24v.07H5.375v-.064c0-1.213.879-2.402 2.637-2.402 1.582 0 2.613.949 2.613 2.215 0 1.002-.6 1.667-1.287 2.43l-.096.107-1.974 2.22v.077h3.498V12H5.422v-.832l2.97-3.293c.434-.475.903-1.008.903-1.705 0-.744-.557-1.236-1.313-1.236-.843 0-1.336.615-1.336 1.306Z" />
                            </svg>
                        </div>
                        <div class="ms-5">
                            <h3>Create Campaign</h3>
                            <p class="mb-0">Launching a campaign is simple and intuitive! Begin by selecting your campaign type, whether it's focused on clicks, video views, or brand awareness.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="d-flex">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="var(--bs-primary)"
                                class="bi bi-3-circle" viewBox="0 0 16 16">
                                <path
                                    d="M7.918 8.414h-.879V7.342h.838c.78 0 1.348-.522 1.342-1.237 0-.709-.563-1.195-1.348-1.195-.79 0-1.312.498-1.348 1.055H5.275c.036-1.137.95-2.115 2.625-2.121 1.594-.012 2.608.885 2.637 2.062.023 1.137-.885 1.776-1.482 1.875v.07c.703.07 1.71.64 1.734 1.917.024 1.459-1.277 2.396-2.93 2.396-1.705 0-2.707-.967-2.754-2.144H6.33c.059.597.68 1.06 1.541 1.066.973.006 1.6-.563 1.588-1.354-.006-.779-.621-1.318-1.541-1.318Z" />
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Z" />
                            </svg>
                        </div>
                        <div class="ms-5">
                            <h3>Launch Your Campaign</h3>
                            <p class="mb-0">You're just one step away from going live! By clicking 'Launch Your Campaign,' you activate your ads and start reaching your target audience.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-9 mb-2">
                    <a href="/register" class="btn btn-primary rounded-3">Experience It for Yourself!</a>

                </div>
                <!-- <div class="text-center fs-5">(without impacting your credit score)*</div> -->
            </div>
        </div>
    </section>
    <!-- getting started-->
    <!--section design-->
    <section class="py-lg-16 py-10 bg-white">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 col-lg-5 col-12">
                    <div>
                        <!-- <div class="text-primary mb-3  fw-semibold  fs-6 text-uppercase ls-md">About us section design</div> -->
                        <div class="mb-5">
                            <h2 class="mb-4 h1">Whatever your goals are, we can help you.</h2>
                            <p class="mb-0">Whatever your goals may be—be it increasing brand awareness, driving traffic, or boosting sales—we're here to support you. Our team offers tailored solutions and expert guidance to help you achieve real results!</p>
                        </div>
                        <div class="mb-6 mb-lg-0">
                            <a href="/contact-us" class="btn btn-primary rounded-3 me-2">Meet the Team</a>
                            <!-- <a href="#" class="btn btn-outline-primary rounded-3">Meet the Team</a> -->
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6 col-12">
                    <img src="../images/background/goal.jpg" alt="" class="img-fluid rounded-4 w-100">
                </div>
            </div>
        </div>
    </section>
    <!--section design-->
    <!--helped our member-->
    <Section class="py-lg-16 py-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-12">
                    <div>
                        <h2 class="mb-8 h1">Our strong numbers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="mb-4 mb-lg-0">
                        <h3 class="mb-0 fw-bold h1">300M</h3>
                        <div>Unique audience</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="mb-4 mb-lg-0">
                        <h3 class="mb-0 fw-bold h1">2B</h3>
                        <div>Daily impressions</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div>
                        <h3 class="mb-0 fw-bold h1">100k</h3>
                        <div>Verified sites and apps</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div>
                        <h3 class="mb-0 fw-bold h1">50k</h3>
                        <div>Trusted advertisers</div>
                    </div>
                </div>
            </div>
        </div>
    </Section>
    <!--helped our member-->
    <!--our customer love-->
    
    <!--our customer love-->
    <!--get startrd-->
    <section class="bg-primary py-10 py-lg-12">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="text-center">
                        <!-- section title start-->
                        <h1 class="text-white">Get started - it's FREE!</h1>
                        <p class="text-white lead mb-5">Take the first step towards achieving your goals by signing up and exploring our easy-to-use platform!
                        </p>
                        <a href="/register" class="btn btn-white">Let’s Get Going!</a>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
        </div>
    </section>
    <!--get started-->
</main>
@endsection