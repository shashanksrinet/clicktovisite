@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<main>
    <section class="pt-10 pb-5">
        <div class="container">
            <h1 class="section-title">Ad Formats that Drive Engagement and Results</h1>
            <p class="text-center mb-5">Our diverse ad formats are crafted to meet your specific goals, whether you're aiming to increase traffic, captivate audiences, or boost visibility. Discover how each format can propel your brand forward!</p>

            <div class="row">
                <!-- Clicks Ad Format -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('storage/clicks_400x200.jpg') }}" class="card-img-top" alt="Clicks Ad">
                        <div class="card-body">
                            <h5 class="card-title text-center">Clicks: Drive Targeted Traffic to Your Website</h5>
                            <p>Boost website visits and generate leads with click-based ads, perfect for attracting high-intent users. Achieve your marketing goals with quality traffic and optimized placements.</p>
                            <ul>
                                <li><strong>Best For:</strong> Brands looking to increase website traffic and generate leads.</li>
                                <li><strong>How It Works:</strong> Only pay for actual clicks, ensuring cost-effective, performance-driven results.</li>
                                <li><strong>Key Benefit:</strong> Directly reaches users ready to engage with your content.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Website Visits Ad Format -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('storage/WebsiteVisite.jpg') }}" class="card-img-top" alt="Website Visits Ad">
                        <div class="card-body">
                            <h5 class="card-title text-center">Website Visits: Turn Browsers into Buyers</h5>
                            <p>Perfect for maximizing reach and attracting engaged users, our Website Visits format connects you with potential customers actively browsing relevant interests.</p>
                            <ul>
                                <li><strong>Best For:</strong> Businesses aiming to attract potential customers actively browsing related interests.</li>
                                <li><strong>How It Works:</strong> Uses audience targeting to place your ad on websites your audience visits.</li>
                                <li><strong>Key Benefit:</strong> Maximizes online presence and builds brand credibility.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Video Views Ad Format -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('storage/youtubeViews_400x200.jpg') }}" class="card-img-top" alt="Video Views Ad">
                        <div class="card-body">
                            <h5 class="card-title text-center">Video Views: Maximize Reach with Engaging Content</h5>
                            <p>Our video view ads are tailored to capture attention and make a lasting impression. Perfect for sharing tutorials, product showcases, and storytelling.</p>
                            <ul>
                                <li><strong>Best For:</strong> Brands looking to make a memorable impact through storytelling and visuals.</li>
                                <li><strong>How It Works:</strong> Targets viewers likely to engage, ensuring your video gets the attention it deserves.</li>
                                <li><strong>Key Benefit:</strong> Boosts engagement and leaves a lasting impression.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Display Ads Format -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('storage/displayAds_400x200.jpg') }}" class="card-img-top" alt="Display Ad">
                        <div class="card-body">
                            <h5 class="card-title text-center">Display Ads: Make Your Brand Visible Across the Web</h5>
                            <p>With visually stunning displays, this format is ideal for broad reach. Capture attention with bold imagery and concise messaging to build brand recognition.</p>
                            <ul>
                                <li><strong>Best For:</strong> Increasing brand visibility and reinforcing brand recall.</li>
                                <li><strong>How It Works:</strong> Places your ad on a network of relevant websites to ensure broad visibility.</li>
                                <li><strong>Key Benefit:</strong> Ensures your brand is seen by the right people at the right time.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <h2 class="section-title">Why Choose Our Ad Formats?</h2>
                <p>With options to suit any goal, our ad formats provide flexibility, targeted reach, and real-time insights. Achieve the results you need with a partner who cares about your success!</p>
                <a href="/register" class="btn btn-primary btn-lg mt-3">Learn More</a>
            </div>
        </div>
    </section>
    <!-- /.content end -->
</main>
@endsection