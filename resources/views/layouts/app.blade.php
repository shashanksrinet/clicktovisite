<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CFFY8KELSP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-CFFY8KELSP');
    </script>

    <link rel="icon" href="{{ asset('storage/logos/favicon.png') }}">
    <title>clicktovisite.com - Your One step ad solution</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Boost your online presence with ClickToVisit.com – the ultimate platform for affordable website clicks, targeted ad campaigns, and measurable results. Drive traffic, grow your business, and achieve your marketing goals effortlessly. Start your journey to success today!" />

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('libs/tiny-slider/dist/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('libs/nouislider/dist/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/flat-font-icons/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/fontello-icons/fontello.css') }}" />
    <link rel="stylesheet" href="{{ asset('libs/magnific-popup/dist/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('libs/jquery-ui/dist/themes/base/jquery-ui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('libs/magnific-popup/dist/magnific-popup.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.min.css') }}">
    <!-- Custom CSS -->
     <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

</head>
<style>
    #sliderFirstControls {
        display: none;
    }
</style>

<body>
    <!-- Include your header here -->
    @include('partials.header')

    <div class="">
        @yield('content')
    </div>

    <!-- Include your footer here -->
    @include('partials.footer')

    <!-- Include your JavaScript files here -->
    <!--==================================================================-->
    <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('libs/nouislider/dist/nouislider.min.js') }}"></script>
    <script src="{{ asset('libs/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('libs/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('libs/isotope-layout/dist/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('libs/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('libs/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('libs/prismjs/prism.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>

    <!-- Theme JS -->
    <script src="{{ asset('js/theme.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#newsletter-form').on('submit', function(event) {
                event.preventDefault();

                let email = $('#newsletter-email').val();
                let messageDiv = $('#newsletter-message');

                $.ajax({
                    url: "{{ route('newsletter.signup') }}",
                    method: 'POST',
                    data: {
                        email: email,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.errors) {
                            messageDiv.html('<p style="color: red;">' + response.errors.email[0] + '</p>');
                        } else {
                            messageDiv.html('<p style="color: green;">' + response.success + '</p>');
                            $('#newsletter-form')[0].reset();
                        }
                    },
                    error: function() {
                        messageDiv.html('<p style="color: red;">The email has already been taken.</p>');
                    }
                });
            });
        });
    </script>

</body>

</html>