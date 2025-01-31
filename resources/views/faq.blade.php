@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<style>
    /* Basic reset */
    /*  */

    /* Header styling */
    .faq-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .faq-header h2 {
        color: #624bff;
        font-size: 2.5rem;
        font-weight: bold;
    }

    .faq-header p {
        color: #555;
    }

    /* FAQ item styling */
    .faq-item {
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-bottom: 15px;
        overflow: hidden;
    }

    .faq-item-header {
        background-color: #624bff;
        color: #fff;
        padding: 15px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .faq-item-header h5 {
        margin: 0;
        font-size: 1rem;
    }

    .faq-item-body {
        padding: 15px;
        display: none;
        background-color: #f9f9f9;
    }

    /* Icon for expand/collapse */
    .faq-item-header::after {
        content: "+";
        font-size: 1.2rem;
        transition: transform 0.2s ease;
    }

    .faq-item.active .faq-item-header::after {
        content: "-";
    }
</style>
<main>
    <section class="pt-10 pb-5">
        <div class="container">
            <div class="faq-header">
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about our services and platform.</p>
            </div>

            <div id="faqAccordion">
                <!-- FAQ Item 1 -->
                <div class="faq-item">
                    <div class="faq-item-header">
                        <h5>What types of ad formats do you offer?</h5>
                    </div>
                    <div class="faq-item-body">
                        <p>We offer a range of ad formats tailored to your marketing goals, including Clicks, Website Visits, Video Views, and Display Ads. Each format is designed to maximize engagement and reach your target audience effectively.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item">
                    <div class="faq-item-header">
                        <h5>How do I get started with setting up my campaign?</h5>
                    </div>
                    <div class="faq-item-body">
                        <p>It’s easy! Simply create an account, select your preferred ad format, and follow the steps to create and launch your campaign. Our intuitive interface makes the setup process smooth and hassle-free.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item">
                    <div class="faq-item-header">
                        <h5>How are clicks and views tracked?</h5>
                    </div>
                    <div class="faq-item-body">
                        <p>We use advanced tracking technologies to accurately count clicks, views, and impressions on your ads. This ensures that your results are reliable and measurable.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item">
                    <div class="faq-item-header">
                        <h5>What is the pricing model for your ad services?</h5>
                    </div>
                    <div class="faq-item-body">
                        <p>We offer a flexible pricing model that aligns with your budget. You can choose from pay-per-click (PPC), cost-per-impression (CPM), or custom rates based on campaign objectives.</p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="faq-item">
                    <div class="faq-item-header">
                        <h5>Do you provide real-time analytics?</h5>
                    </div>
                    <div class="faq-item-body">
                        <p>Yes, our platform provides real-time analytics so you can monitor the performance of your campaigns as they run, allowing for data-driven optimizations.</p>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="faq-item">
                    <div class="faq-item-header">
                        <h5>How can I contact customer support?</h5>
                    </div>
                    <div class="faq-item-body">
                        <p>Our support team is available 24/7 to assist you. You can reach us via chat, email, or phone for any questions or technical support.</p>
                    </div>
                </div>

                <!-- FAQ Item 7 -->
                <div class="faq-item">
                    <div class="faq-item-header">
                        <h5>Is there a minimum budget required for campaigns?</h5>
                    </div>
                    <div class="faq-item-body">
                        <p>We cater to businesses of all sizes, and there is no strict minimum budget. You can start with an amount that suits your goals and adjust as needed.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content end -->
    <script>
        // JavaScript to toggle FAQ items
        document.querySelectorAll('.faq-item-header').forEach(header => {
            header.addEventListener('click', function() {
                const faqItem = this.parentElement;
                faqItem.classList.toggle('active');
                const body = faqItem.querySelector('.faq-item-body');
                body.style.display = body.style.display === 'block' ? 'none' : 'block';
            });
        });
    </script>
</main>
@endsection