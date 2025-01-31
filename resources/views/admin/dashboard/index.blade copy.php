
@extends('admin.app')
@section('content')
    <!-- Bootstrap CSS (Optional if you already have it included) -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<!-- jQuery (Required for Datepicker) -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

<!-- Bootstrap Datepicker CSS -->
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet"> -->

<!-- Bootstrap Datepicker JS -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script> -->


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-start mb-3">
                <a href="#" class="btn btn-link" id="today">Today</a>
                <a href="#" class="btn btn-link" id="yesterday">Yesterday</a>
                <a href="#" class="btn btn-link" id="sevenDays">7 Days</a>
                <a href="#" class="btn btn-link" id="thirtyDays">30 Days</a>
                <a href="#" class="btn btn-link" id="thisMonth">This Month</a>
                <a href="#" class="btn btn-link" id="lastMonth">Last Month</a>
            </div>

            <form id="filterForm" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="start_date" name="start_date" placeholder="Start Date">
                    <span class="input-group-text">-</span>
                    <input type="text" class="form-control" id="end_date" name="end_date" placeholder="End Date">
                    <button class="btn btn-primary" type="button">Set</button>
                </div>
            </form>

            <table id="reportsTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Campaign Name</th>
                        <th>Impression</th>
                        <th>Date</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var table = $('#reportsTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('fetchreports') }}",
                type: 'POST',
                data: function (d) {
                    d._token = $('input[name="_token"]').val(); // CSRF Token
                    d.start_date = $('#start_date').val();
                    d.end_date = $('#end_date').val();
                }
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'campaign_name', name: 'campaign_name' },
                { data: 'campaign_type', name: 'campaign_type' },
                { data: 'daily_limit', name: 'daily_limit' },
                { data: 'end_date', name: 'end_date' },
                { data: 'api_status', name: 'api_status' }
            ]
        });

        // Trigger AJAX call on form submission
        $('#filterForm').on('submit', function(e) {
            e.preventDefault();
            table.ajax.reload();
        });

        // Helper function to set date range for buttons
        function setDateRange(startDate, endDate) {
            $('#start_date').val(startDate);
            $('#end_date').val(endDate);
            $('#filterForm').submit(); // Auto-submit form on date change
        }

        // Date Range Buttons Click Events
        $('#today').click(function(e) {
            e.preventDefault();
            var today = new Date().toLocaleDateString('en-GB');
            setDateRange(today, today);
        });

        $('#yesterday').click(function(e) {
            e.preventDefault();
            var yesterday = new Date();
            yesterday.setDate(yesterday.getDate() - 1);
            var formattedYesterday = yesterday.toLocaleDateString('en-GB');
            setDateRange(formattedYesterday, formattedYesterday);
        });

        $('#sevenDays').click(function(e) {
            e.preventDefault();
            var today = new Date();
            var lastWeek = new Date();
            lastWeek.setDate(today.getDate() - 7);
            setDateRange(lastWeek.toLocaleDateString('en-GB'), today.toLocaleDateString('en-GB'));
        });

        $('#thirtyDays').click(function(e) {
            e.preventDefault();
            var today = new Date();
            var lastMonth = new Date();
            lastMonth.setDate(today.getDate() - 30);
            setDateRange(lastMonth.toLocaleDateString('en-GB'), today.toLocaleDateString('en-GB'));
        });

        $('#thisMonth').click(function(e) {
            e.preventDefault();
            var date = new Date(), y = date.getFullYear(), m = date.getMonth();
            var firstDay = new Date(y, m, 1).toLocaleDateString('en-GB');
            var lastDay = new Date(y, m + 1, 0).toLocaleDateString('en-GB');
            setDateRange(firstDay, lastDay);
        });

        $('#lastMonth').click(function(e) {
            e.preventDefault();
            var date = new Date(), y = date.getFullYear(), m = date.getMonth();
            var firstDayLastMonth = new Date(y, m - 1, 1).toLocaleDateString('en-GB');
            var lastDayLastMonth = new Date(y, m, 0).toLocaleDateString('en-GB');
            setDateRange(firstDayLastMonth, lastDayLastMonth);
        });
    });
</script>
@endsection