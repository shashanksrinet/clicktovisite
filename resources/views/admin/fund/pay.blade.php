@extends('admin.app')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h5 class="card-title mb-0">Complete Your Payment</h5>
                </div>
                <div class="card-body">
                    <h6 class="text-center mb-4">You are just one step away from adding funds to your account!</h6>
                    <p class="text-muted text-center">
                        Please click the button below to securely proceed for the payment.
                    </p>
                    
                    <form id="payment-form" method="POST" action="{{ route('fund.payment.callback') }}">
                        @csrf
                        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
                        <input type="hidden" name="razorpay_order_id" id="razorpay_order_id" value="{{ $order->id }}">
                        <input type="hidden" name="razorpay_signature" id="razorpay_signature">

                        <div class="text-center">
                            <button id="rzp-button" class="btn btn-primary btn-block mt-3">Pay Now</button>
                        </div>
                    </form>

                    <div class="text-center mt-4">
                        <small class="text-muted">
                            Your payment is 100% secure, and no sensitive information is stored on our servers. 
                            Click "Pay Now" to proceed.
                        </small>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <p class="text-muted">If you face any issues, feel free to <a href="mailto:connect.clicktovisite@gmail.com" class="text-primary">contact support</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container">
    <h2>Complete Payment</h2>

    <form id="payment-form" method="POST" action="{{ route('fund.payment.callback') }}">
        @csrf
        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
        <input type="hidden" name="razorpay_order_id" id="razorpay_order_id" value="{{ $order->id }}">
        <input type="hidden" name="razorpay_signature" id="razorpay_signature">

        <button id="rzp-button" class="btn btn-primary">Pay Now</button>
    </form>
</div> -->

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
    var options = {
        "key": "{{ env('RAZORPAY_KEY') }}", // Your Razorpay Key
        "amount": "{{ $order->amount }}", // Amount in paise
        "currency": "INR",
        "name": "Add Funds",
        "description": "Add funds to your account",
        "order_id": "{{ $order->id }}", // Razorpay Order ID
        "handler": function (response){
            // Pass the payment details to the form
            document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
            document.getElementById('razorpay_signature').value = response.razorpay_signature;
            document.getElementById('payment-form').submit();
        },
        "prefill": {
            "name": "{{ Auth::user()->name }}",
            "email": "{{ Auth::user()->email }}"
        },
        "theme": {
            "color": "#528FF0"
        }
    };

    var rzp1 = new Razorpay(options);

    document.getElementById('rzp-button').onclick = function(e){
        rzp1.open();
        e.preventDefault();
    }
</script>
@endsection
