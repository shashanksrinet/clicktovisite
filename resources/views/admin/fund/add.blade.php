@extends('admin.app')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Add Funds</h5>
                </div>
                <div class="card-body">
                    <form id="fundForm" method="POST" action="{{ route('fund.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="amount">Amount (INR)</label>
                            <input type="number" class="form-control" id="amount" name="amount" min="100" max="200000" autocomplete="off" pattern="^[0-9]+" title="Only numbers">
                            @error('amount')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="currency">Currency</label>
                            <input type="text" class="form-control" id="currency" name="currency" value="INR" readonly>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" id="payButton" class="btn btn-primary btn-block">Proceed to Pay</button>
                        </div>

                        <div class="form-group text-center">
                            <small class="text-muted">You will be redirected to Payment Gateway for payment processing.</small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection