@extends('admin.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Fund History</h2>

    <!-- Search Filters -->
    <div class="card">
        <div class="card-body">
            <form id="filterForm" class="form-row">
                <!-- Start Date -->
                <div class="form-group col-md-4">
                    <label for="start_date">Start Date:</label>
                    <input type="date" id="start_date" name="start_date" class="form-control" 
                           value="{{ $startDate }}" placeholder="YYYY-MM-DD">
                </div>

                <!-- End Date -->
                <div class="form-group col-md-4">
                    <label for="end_date">End Date:</label>
                    <input type="date" id="end_date" name="end_date" class="form-control" 
                           value="{{ $endDate }}" placeholder="YYYY-MM-DD">
                </div>

                <!-- Status Filter -->
                <div class="form-group col-md-4">
                    <label for="status">Status:</label>
                    <select id="status" name="status" class="form-control">
                        <option value="">All</option>
                        <option value="pending">Pending</option>
                        <option value="completed">Completed</option>
                        <option value="failed">Failed</option>
                    </select>
                </div>
            </form>

            <!-- Search Button -->
            <div class="mt-3">
                <button type="button" id="filterBtn" class="btn btn-primary">Search</button>
                <!-- <button type="button" id="resetBtn" class="btn btn-secondary ml-2">Reset</button> -->
            </div>
        </div>
    </div>

    <!-- DataTables Table -->
    <div class="card mt-4">
        <div class="card-body">
            <table id="fundHistoryTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fundHistories as $fund)
                    <tr>
                        <td>{{ $fund->user->name ?? 'N/A' }}</td>
                        <td>{{ number_format($fund->amount, 2) }}</td>
                        <td>{{ ucfirst($fund->status) }}</td>
                        <td>{{ $fund->created_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination Links -->
            <!-- <div class="mt-3">
                {{ $fundHistories->appends(request()->input())->links() }}
            </div> -->
        </div>
    </div>
</div>

<!-- Include DataTables JS -->
<!-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script> -->

<!-- DataTables and Ajax Script -->
<script>
$(document).ready(function() {
    // Initialize DataTable
    var table = $('#fundHistoryTable').DataTable({
        paging: false,  // Disable paging because we are using Laravel's pagination
        info: false,    // Disable info text
        searching: false  // Disable default search as we are using custom filters
    });

    // Filter button click event
    $('#filterBtn').click(function() {
        $('#filterForm').submit();
    });

    // Reset button click event
    $('#resetBtn').click(function() {
        $('#start_date').val('{{ $startDate }}');
        $('#end_date').val('{{ $endDate }}');
        $('#status').val('');
        $('#filterForm').submit();
    });
});
</script>
@endsection
